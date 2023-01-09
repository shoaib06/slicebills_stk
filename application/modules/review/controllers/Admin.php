<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	private $controller_name;
	
	function __construct()
	{
		parent::__construct();
		$this->common_model->CheckAdminSession(); /// secure login 
		$this->controller_name = $this->router->fetch_class();
		$this->method_name = $this->router->fetch_method();
		$this->_module = $this->router->fetch_module();
		$this->path =$this->_module.'/'.$this->controller_name;
		
	}
	
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$where = [];
		$where = self::filter_query($where);
		$where = implode(' AND ', $where);
		
		$config["base_url"] = base_url().$this->path."/".$this->method_name;
		$config["total_rows"] = $this->common_model->GetTotalCount(REVIEW_TABLE, $where);
		$result_per_page = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'result_per_page'));
		$config["per_page"] = $result_per_page;
		$config['uri_segment'] = 4;
		$config['reuse_query_string'] = true;
		$limit = $config['per_page'];
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$page_data["results"] = $this->common_model->GetTableRows(REVIEW_TABLE,$where,array('id','desc'),$limit,$page);
		$page_data["pagination"] = $this->pagination->create_links();
		
		$controllerName =  $this->_module.'/admin';
		$module = $this->_module;
		$page_data['module_title'] = ucfirst($module); 
		
		
		$page_data['module'] = $module;
		$this->load->view('common/header',$page_data);
		$this->load->view($module.'/detail',$page_data);
		$this->load->view('common/footer');
	}
	
	public function filter_query($where = [])
	{
		foreach($_GET as $key => $value)
		{
			$value = strip_tags($value);
			if($key <> "from" && $key <> "to")
			{
				if($key == "type")
				{
					if($value <> "")
					{
						$where[] = "  $key LIKE '%$value%'   ";
					}
				}
				else
				{
					if($value <> "")
					{
						$where[] = "  $key = '$value'   ";
					}
				}
			}
		}
		return $where; 
	}
	
	public function add()
	{
		if($this->input->post('s')) // if form submitted
		{
			$name = strip_tags($this->input->post('name'));
			$email = strip_tags($this->input->post('email'));
			$address = strip_tags($this->input->post('address'));
			$rating = strip_tags($this->input->post('rating'));
			$description = $this->input->post('description');
			$image = $this->input->post('image');
			
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('rating', 'Rating', 'trim|required|xss_clean');
			if ($this->form_validation->run() == true)
			{
				$image = self::upload_profile_image();
				$data = array
					(
						
						'name' => $name,
						'email' => $email,
						'address' => $address,
						'rating' => $rating,
						'description' => $description,
						'image' => $image,
						'timestamp' => time(),
					);
					
				$insert_id = $this->common_model->InsertTableData(REVIEW_TABLE,$data);
				if($insert_id)
				{
					$this->session->set_flashdata('flash_message','Review successfully added.');
					$this->session->set_flashdata('class','success');
					redirect(base_url($this->path));
					die();
				}
				else
				{
					$this->session->set_flashdata('flash_message','Something went wrong please try again.');
					$this->session->set_flashdata('class','danger');
					redirect(base_url($this->path));
					die();
				}	
			}
		}
		
		$page_data['module_path'] = $this->path;
		$module = $this->_module;
		$controllerName =  $this->_module.'/admin';
		$page_data['module_title'] = $module." : Add ";
		$page_data['module'] = $module;
		$this->load->view('common/header',$page_data);
		$this->load->view($module.'/forms/add',$page_data);
		$this->load->view('common/footer');
	}
	
	public function edit($id) // Update function
	{
		$page_data = (array)$this->common_model->GetSingleRow(REVIEW_TABLE,array('id' => $id)); // get data
		if(!count($page_data)) { redirect(base_url($this->_module.'/admin')); }
		
		if($this->input->post('s')) // if form submitted
		{
			$name = strip_tags($this->input->post('name'));
			$email = strip_tags($this->input->post('email'));
			$address = strip_tags($this->input->post('address'));
			$rating = strip_tags($this->input->post('rating'));
			$description = $this->input->post('description');
			$image = $this->input->post('image');
			
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('rating', 'Rating', 'trim|required|xss_clean');
			
			$password = $this->common_model->randomPassword(6);
			
			if ($this->form_validation->run() == true)
			{
				$image = self::upload_profile_image();
				if(empty($image))
				{
				    $image = $this->input->post('upload_image');
				}
				$data = array
					(
						
						'name' => $name,
						'email' => $email,
						'address' => $address,
						'rating' => $rating,
						'description' => $description,
						'image' => $image,
						'timestamp' => time(),
					);
					
					
				$update_data = $this->common_model->UpdateTableData(REVIEW_TABLE,$data,array('id' => $id));
				if($update_data)
				{
					$this->session->set_flashdata('flash_message','Review successfully updated.');
					$this->session->set_flashdata('class','success');
					redirect(base_url($this->path));
					die();
				}
				else
				{
					$this->session->set_flashdata('flash_message','Something went wrong please try again.');
					$this->session->set_flashdata('class','danger');
					redirect(base_url($this->path));
					die();
				}	
			}
		}
		
		$page_data['module_path'] = $this->path;
		$module = $this->_module;
		$controllerName =  $this->_module.'/admin';
		$page_data['module_title'] = $module." : Edit ";
		$page_data['module'] = $module;
		$this->load->view('common/header',$page_data);
		$this->load->view($module.'/forms/edit',$page_data);
		$this->load->view('common/footer');
		
	}
	
	
	/* Delete function */
	
	public function delete_review()
	{
		$id = $this->input->post('id');
		$update_data = $this->common_model->DeleteTableData(REVIEW_TABLE,array('id' => $id));
		if($update_data)
		{
			$result['status'] = "success";
			$result['html'] = "Review Successfully Deleted.";
			$result['type'] = "alert";
		}
		else
		{
			$result['status'] = "error";
			$result['html'] = "Something went wrong please try again.";
			$result['type'] = "alert";
		}
		echo json_encode($result);
	}
	
	
	function upload_profile_image()
	{
		$image = "";
		if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name']))
		{
			
			$name = $_FILES['image']['name'];
			$upload_dir = dirname(APPPATH)."/uploads";
			$t = explode(".", $name);
			$ext = end($t);

			$file_info = pathinfo($name);
			$file_name = $file_info['filename'];
			$replaced_name = preg_replace("/[^a-zA-Z]+/", "", $file_name);
			$name = $replaced_name.'.'.$file_info['extension'];
			
			$config['upload_path'] = dirname(APPPATH)."/uploads";
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = "20048";
			
			$config['file_name'] = 'img_'.time().'_'.$name;
			$this->load->library("upload", $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('image'))
			{
				$image = $config['file_name'];
			}
		}
		return $image;
	}
	
}
	
?>
