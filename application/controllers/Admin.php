<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		

        $this->load->library('user_agent');
    } 
	
	public function index()
	{
		if($this->session->userdata('admin_id')){
			redirect('dashboard/admin');
		}
		$page_data['title'] = "Admin Login";
		$this->load->view('login/login',$page_data);
	}

	public function doLogin() // admin login process;
	{
		$refer =  $this->agent->referrer();
		$email = $this->input->post('email',TRUE);
		$password = $this->input->post('password');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == TRUE)
        {
			$table = "tbl_users";
        	$result = $this->common_model->GetSingleRow($table,array('email' => $email, 'password' => md5($password )) ) ;
			// print_r($result);die;
			if(isset($result))
			{
				if($result->user_type == 1){
                    $sess_array = array( 'admin_id' => $result->id, 'admin_name' => $result->name,'admin_email' => $result->email, );
                    $this->session->set_userdata($sess_array);
                    redirect('dashboard/admin');
                }else{
                    $sess_array = array( 'agent_id' => $result->id, 'agent_name' => $result->name,'agent_email' => $result->email,'user_type' => $result->user_type, );
                    $this->session->set_userdata($sess_array);
                    redirect('agent/dashboard');
                }
			}
			else
			{
				$this->session->set_flashdata('flash_message','Invalid Username or Password.');
				$this->session->set_flashdata('class','danger');
				redirect($refer);
			}
		}
		else
		{
			$this->form_validation->set_error_delimiters('', '');
			$this->session->set_flashdata('flash_message',validation_errors());
			$this->session->set_flashdata('class','danger');
			redirect($refer);
		}
	}
}
