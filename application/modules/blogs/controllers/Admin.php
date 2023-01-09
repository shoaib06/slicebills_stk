<?php
class Admin extends CI_Controller
{
	private $controller_name;

	function __construct()
	{
		parent::__construct();
		// print_r($this->session->userdata);die;

		$this->common_model->CheckAdminSession(); /// secure login
		$this->controller_name = $this->router->fetch_class();
		$this->method_name = $this->router->fetch_method();
		$this->_module = $this->router->fetch_module();
		$this->path = $this->_module . '/' . $this->controller_name;
		// redirect('dashboard/admin');
		// if (!$this->common_model->is_admin()) {
		// }
	}

	public function index()
	{
		$admin = $this->session->userdata('admin');


		$config["base_url"] = base_url() . $this->path . "/" . $this->method_name;

		$controllerName = $this->_module . '/admin';
		$page_data["results"] = $this->common_model->GetTableResults(CMS_TABLE);
		$module = $this->_module;
		$page_data['module_title'] = ucfirst($module);
		$page_data['is_parent'] = 1;


		$page_data['module'] = $module;
		// echo "<pre>";
		// print_r($page_data);die;
		$this->load->view('common/header', $page_data);
		$this->load->view($module . '/detail', $page_data);
		$this->load->view('common/footer');
	}

	public function filter_query($where = [])
	{
		foreach ($_GET as $key => $value) {
			$value = strip_tags($value);
			if ($key != "from" && $key != "to") {
				if ($key == "type") {
					if ($value != "") {
						$where[] = "  $key LIKE '%$value%'   ";
					}
				} else {
					if ($value != "") {
						$where[] = "  $key = '$value'   ";
					}
				}
			}
		}
		return $where;
	}

	public function add()
	{
		if ($this->input->post('s')) {
			// if form submitted
			$heading = strip_tags($this->input->post('title'));
			$description = $this->input->post('description');
			$blog_date = $this->input->post('blog_date');
			$category = 1;
			$url = $this->slug($heading);

			// echo $blog_date;die;


			$this->form_validation->set_rules('title', 'Name', 'trim|required|xss_clean');

			if ($this->form_validation->run() == true) {

				$website_logo = self::upload_website_logo();
				if (empty($website_logo)) {
					$website_logo = $this->input->post('uploaded_logo');
				}
				

				$data = [
					'heading' => $heading,
					'url' => $url,
					'category' => $category,
					'description' => $description,
					'blog_date' => ($blog_date),
					'timestamp' => time(),
				];
				// print_r($data);die;

				$settings_id = $this->common_model->InsertTableData(CMS_TABLE, $data);

				$this->session->set_flashdata('flash_message', 'Page added successfully.');
				$this->session->set_flashdata('class', 'success');
				redirect(base_url($this->path));
				die();
			} else {
				$this->session->set_flashdata('flash_message', 'Something went wrong please try again.');
				$this->session->set_flashdata('class', 'danger');
				redirect(base_url($this->path));
				die();
			}
		}


		$page_data['is_parent'] = 1;

		$page_data['module_path'] = $this->path;
		$module = ($this->_module);
		$controllerName = ($this->_module) . '/admin';
		$page_data['module_title'] = ucfirst($module) . " : Add ";
		$page_data['module'] = $module;
		$this->load->view('common/header', $page_data);
		$this->load->view($module . '/forms/add', $page_data);
		$this->load->view('common/footer');
	}

	public function edit($id)
	{
		// Update function
		$page_data = (array) $this->common_model->GetSingleRow(CMS_TABLE, ['id' => $id]); // get data
		if (!count($page_data)) {
			redirect(base_url($this->_module . '/admin'));
		}
		if ($this->input->post('s')) {
			// print_r($id);die;
			// if form submitted
			$heading = strip_tags($this->input->post('title'));
			$description = $this->input->post('description');
			$blog_date = $this->input->post('blog_date');
			// $category = $this->input->post('category');


			$website_logo = self::upload_website_logo();
			if (empty($website_logo)) {
				$website_logo = $this->input->post('uploaded_logo');
			}


			$data = [
				'heading' => $heading,
				'category' => 1,
				'description' => $description,
				'blog_date' => ($blog_date),
				'image' => $website_logo,
				'timestamp' => time(),
			];

			$update = $this->common_model->updateTableData(CMS_TABLE, $data, array("id" => $id));

			if ($update) {
				$this->session->set_flashdata('flash_message', ' Successfully Updated.');
				$this->session->set_flashdata('class', 'success');
				redirect(base_url($this->_module.'/admin/edit/' . $id));
				die();
			} else {
				$this->session->set_flashdata('flash_message', 'Something Went Wrong.');
				$this->session->set_flashdata('class', 'success');
				redirect(base_url($this->_module.'/admin/edit/' . $id));
				die();
			}
		}

		$page_data['is_parent'] = 1;


		$page_data['module_path'] = $this->path;
		$module = $this->_module;
		$controllerName = $this->_module . '/admin';
		$page_data['module_title'] = $module . " : Edit ";
		$page_data['module'] = $module;
		$page_data['id'] = $id;

		// echo "<pre>";
		// print_r($page_data);die;

		$this->load->view('common/header', $page_data);
		$this->load->view($module . '/forms/edit', $page_data);
		$this->load->view('common/footer');
	}

	function check_email()
	{
		$email = $this->input->post('email');
		$count = $this->common_model->checkExists(USERS_TABLE, ['email' => $email]);
		if ($count == 0) {
			return true;
		} else {
			$this->form_validation->set_message('check_email', $email . ' is already exists in our system.');
			return false;
		}
	}

	/* Delete function */

	public function delete()
	{
		$id = $this->input->post('id');
		$update_data = $this->common_model->DeleteTableData(USERS_TABLE, ['id' => $id]);
		if ($update_data) {
			$result['status'] = "success";
			$result['html'] = "User Successfully Deleted.";
			$result['type'] = "alert";
		} else {
			$result['status'] = "error";
			$result['html'] = "Something went wrong please try again.";
			$result['type'] = "alert";
		}
		echo json_encode($result);
	}

	public function change_status()
	{
		$type = $this->input->post('type');
		$value = $this->input->post('value');
		$pid = $this->input->post('pid');
		$this->db->set($type, $value, false);
		$this->db->where('id', $pid);
		$this->db->update(USERS_TABLE);
		if ($this->db->affected_rows()) {
			$result['status'] = "success";
			$result['html'] = "Data successfully updated";
			$result['type'] = "alert";
		} else {
			$result['status'] = "error";
			$result['html'] = "Something went wrong please try again.";
			$result['type'] = "alert";
		}
		echo json_encode($result);
	}

	function upload_website_logo()
	{
		$website_logo = "";
		$thumb_msg = $status = $status_msg = $thumbnail = $org_image_size = $thumb_image_size = '';
		if (isset($_FILES['website_logo']['name']) && !empty($_FILES['website_logo']['name'])) {


			$name = $_FILES['website_logo']['name'];
			$upload_dir = dirname(APPPATH) . "/uploads/";
			$t = explode(".", $name);
			$ext = end($t);

			$file_info = pathinfo($name);
			$file_name = $file_info['filename'];
			$replaced_name = preg_replace("/[^a-zA-Z]+/", "", $file_name);
			$name = $replaced_name . '.' . $file_info['extension'];

			$config['upload_path'] = dirname(APPPATH) . "/uploads";
			$config['allowed_types'] = '*';
			$config['max_size'] = "20048";

			$config['file_name'] = 'img_' . time() . '_' . $name;
			$this->load->library("upload", $config);
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('website_logo')) {
				$website_logo = $config['file_name'];

				/** Thumb */

				$uploadedImage = $file_name;

				$source_path = $upload_dir . $website_logo;
				// echo $source_path;die;
				$thumb_path = $upload_dir.'thumb/';
				$thumb_width = 280;
				$thumb_height = 175;

				// echo $source_path;die;

				// Image resize config 
				$config['image_library']    = 'gd2';
				$config['source_image']     = $source_path;
				$config['new_image']         = $thumb_path;
				$config['maintain_ratio']     = FALSE;
				$config['width']            = $thumb_width;
				$config['height']           = $thumb_height;

				// Load and initialize image_lib library 
				$this->load->library('image_lib', $config);

				// Resize image and create thumbnail 
				if ($this->image_lib->resize()) {
					$thumbnail = $thumb_path . $uploadedImage;
					$thumb_image_size = $thumb_width . 'x' . $thumb_height;
					
				} else {
					$thumb_msg = '<br/>' . $this->image_lib->display_errors();
					// print_r($thumb_msg);die;
				}
			}
		}
		return $website_logo;
	}

	function slug($string, $spaceRepl = "-")
	{
		$string = str_replace("&", "and", $string);

		$string = preg_replace("/[^a-zA-Z0-9 _-]/", "", $string);

		$string = strtolower($string);

		$string = preg_replace("/[ ]+/", " ", $string);

		$string = str_replace(" ", $spaceRepl, $string);

		return $string;
	}
}
