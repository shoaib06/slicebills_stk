<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller
{
	private $controller_name;
	
	function __construct()
	{
		parent::__construct();
		$this->controller_name = $this->router->fetch_class();
		$this->method_name = $this->router->fetch_method();
		$this->_module = $this->router->fetch_module();
		$this->path =$this->_module.'/'.$this->controller_name;
		
		
	}
	
	public function index()
	{
		$admin_id = $this->session->userdata('admin_id');
		
		$result = $this->common_model->GetSingleRow(USERS_TABLE,array('id' => $admin_id)); // get profile detail
		
		$page_data['row'] = $result;
		$page_data['module_title'] = "Profile detail";
		$module = $this->_module;
		$page_data['module'] = $module;

		// echo "<pre>";
		// print_r($page_data);die;

		$this->load->view('common/header',$page_data);
		$this->load->view($module.'/admin',$page_data);
		$this->load->view('common/footer');
	}
	
	public function update_admin_profile()
	{
		$id = $this->session->userdata('admin_id');
		$name = strip_tags($this->input->post('name'));
		$email = strip_tags($this->input->post('email'));
		$password = strip_tags($this->input->post('password'));
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		if ($this->form_validation->run() == true)
		{
			$data = array
					(
						'name' => $name,
						'email' =>  $email
					);
			if($password)
			{
				$data['password'] = md5($password);
				$data['ip_address'] = $this->input->ip_address();
			}					
					
			$insert_id = $this->common_model->UpdateTableData(USERS_TABLE,$data,array('id' => $id));
			if($insert_id)
			{
				$this->session->set_flashdata('flash_message','Profile Successfully Updated.');
				$this->session->set_flashdata('class','success');
				redirect(base_url('profile/admin'));
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
		else
		{
			$this->form_validation->set_error_delimiters('', '');
			$this->session->set_flashdata('flash_message',validation_errors());
			$this->session->set_flashdata('class','danger');
			redirect(base_url($this->path));
			die();
		}
	}
}
?>
