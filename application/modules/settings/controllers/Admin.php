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
		$this->common_model->CheckAdminSession(); /// secure login 
	}
	
	public function index()
	{
		$page_data['website_title'] = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'website_title'));
		$page_data['result_per_page'] = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'result_per_page'));
		$page_data['website_logo'] = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'website_logo'));
		$page_data['phone'] = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'phone'));
		$page_data['footer_text'] = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'footer_text'));
		$page_data['support_email'] = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'support_email'));

		$page_data['address'] = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'address'));

		$page_data['number_of_question'] = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'number_of_question'));
		
		
		
		$module = $this->_module;
		$page_data['module'] = $module;
		$header_data['module'] = $module;
		$page_data['module_title'] = $module;
		$this->load->view('common/header',$header_data);
		$this->load->view($module.'/detail',$page_data);
		$this->load->view('common/footer');
	}
	
	public function edit()
	{
		$module = $this->_module;
		$page_data['module_title'] = $module;
		
		$result_per_page = strip_tags($this->input->post('result_per_page'));
		$result_per_page_data = array('value' => intval($result_per_page));
		$update = $this->common_model->updateTableData(SETTINGS_TABLE,$result_per_page_data,array("type" => 'result_per_page'));
		
		$website_title = strip_tags($this->input->post('website_title'));
		$website_title_data = array('value' => $website_title);
		$update = $this->common_model->updateTableData(SETTINGS_TABLE,$website_title_data,array("type" => 'website_title'));
		
		$phone = strip_tags($this->input->post('phone'));
		$phone_data = array('value' => $phone);
		$update = $this->common_model->updateTableData(SETTINGS_TABLE,$phone_data,array("type" => 'phone'));
		
		$footer_text = $this->input->post('footer_text');
		$footer_text_data = array('value' => $footer_text);
		$update = $this->common_model->updateTableData(SETTINGS_TABLE,$footer_text_data,array("type" => 'footer_text'));

		$support_email = $this->input->post('support_email');
		$support_email_data = array('value' => $support_email);
		$update = $this->common_model->updateTableData(SETTINGS_TABLE,$support_email_data,array("type" => 'support_email'));

		$address = $this->input->post('address');
		$address_data = array('value' => $address);
		$update = $this->common_model->updateTableData(SETTINGS_TABLE,$address_data,array("type" => 'address'));

		

		$number_of_question = $this->input->post('number_of_question');
		$number_of_question_data = array('value' => $number_of_question);
		$update = $this->common_model->updateTableData(SETTINGS_TABLE,$number_of_question_data,array("type" => 'number_of_question'));
		
		
		$website_logo = self::upload_website_logo();
		// print_r($website_logo);die;
		if(empty($website_logo))
		{
			$website_logo = $this->input->post('uploaded_logo');
		}
		
		$website_logo_data = array('value' => $website_logo);
		$update = $this->common_model->updateTableData(SETTINGS_TABLE,$website_logo_data,array("type" => 'website_logo'));
		
		if($update)
		{
			$this->session->set_flashdata('flash_message',' Successfully Updated.');
			$this->session->set_flashdata('class','success');
			redirect(base_url('settings/admin'));
			die();
		}
		else
		{
			$this->session->set_flashdata('flash_message','Something Went Wrong.');
			$this->session->set_flashdata('class','success');
			redirect(base_url('settings/admin'));
			die();
		}
	}
	
	function upload_website_logo()
	{
		$website_logo = "";
		if(isset($_FILES['website_logo']['name']) && !empty($_FILES['website_logo']['name']))
		{
			$name = $_FILES['website_logo']['name'];
			$upload_dir = dirname(APPPATH)."/uploads";
			$t = explode(".", $name);
			$ext = end($t);
			
			$file_info = pathinfo($name);
			$file_name = $file_info['filename'];
			$replaced_name = preg_replace("/[^a-zA-Z]+/", "", $file_name);
			$name = $replaced_name.'.'.$file_info['extension'];
			
			$config['upload_path'] = dirname(APPPATH)."/uploads";
			$config['allowed_types'] = 'jpg|jpeg|png|svg';
			$config['max_size'] = "20048";
			
			$config['file_name'] = 'img_'.time().'_'.$name;
			$this->load->library("upload", $config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('website_logo'))
			{
				$website_logo = $config['file_name'];
			}else{
				$error = array('error' => $this->upload->display_errors());
				// print_r($error);die;

			}
		}
		return $website_logo;
	}
}
?>
