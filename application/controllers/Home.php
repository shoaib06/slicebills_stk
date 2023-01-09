<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->common_model->CheckUserSession();
	}
	
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		redirect(base_url());
	}
	
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$active_permits = $this->common_model->GetTableRows(PERMITS_TABLE,array('user_id' => $user_id),array('id','desc'));
		$expired_permits = $this->common_model->GetTableResults(PERMITS_TABLE,array('user_id' => $user_id,'is_expired' => 1));
		
		$page_data['active_permits'] = $active_permits;
		$page_data['expired_permits'] = $expired_permits;
		
		$page_data['data'] = '';
		$header['active'] = "account";
		$this->load->view('front/common/header',$header);
		$this->load->view('front/users/home', $page_data);
		$this->load->view('front/common/footer');
    }
	
	
	public function account()
	{
		$id = $this->session->userdata('user_id');
		$page_data = (array)$this->common_model->GetSingleRow(USERS_TABLE,array('id' => $id)); // get data
		  
		if($this->input->post('s')) // if form submitted
		{
			
			$name = strip_tags($this->input->post('name'));
			$city = strip_tags($this->input->post('city'));
			$address = strip_tags($this->input->post('address'));

			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('city', 'City', 'trim|required|xss_clean');

			if ($this->form_validation->run() == true)
			{
				$data = array
					(
					
						'name' => $name,
						'city' =>  $city,
						'address' =>  $address,
					);
					
				$update_data = $this->common_model->UpdateTableData(USERS_TABLE,$data,array('id' => $id));
				if($update_data)
				{
					$this->session->set_flashdata('flash_message','Successfully updated.');
					$this->session->set_flashdata('class','success');
					redirect(base_url('home/account'));
					die();
				}
				else
				{
					$this->session->set_flashdata('flash_message','Something went wrong please try again.');
					$this->session->set_flashdata('class','danger');
					redirect(base_url('home/account'));
					die();
				}	
			}
		}

		$page_data['data'] = '';
		$header['active'] = "account";
		$this->load->view('front/common/header',$header);
		$this->load->view('front/users/account', $page_data);
		$this->load->view('front/common/footer');
	}
	public function update_password()
	{
		$id = $this->session->userdata('user_id');
		$password = $this->input->post('password');
		$cpassword = $this->input->post('cpassword');
		
		if(($password==$cpassword) && !empty($password) )
		{
			if($this->input->post('v')) // if form submitted
			{
				
				$udata = array( 'password' => $password );
				
				$result = $this->common_model->UpdateTableData(USERS_TABLE,$udata,array('id' => $id));
			}
			if($result)
			{
				$this->session->set_flashdata('flash_message', 'Password successfully updated.');
				$this->session->set_flashdata('class', 'success');
				redirect(base_url('home/account'));
			}
			else
			{
				$this->session->set_flashdata('flash_message', 'Something is went wrong please try again.');
				$this->session->set_flashdata('class', 'danger');
				redirect(base_url('home/account'));
			}
		}
		else
		{
			$this->session->set_flashdata('flash_message', 'Password and Confirm password not same.');
			$this->session->set_flashdata('class', 'danger');
			redirect(base_url('home/account'));
		}
	}
}