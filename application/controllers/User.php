<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
        parent::__construct();

        $this->load->library('user_agent');
	}

    public function dashboard(){
        if(!$this->session->userdata('user_id')){
            redirect(base_url());
        }
        $page_data['page_name'] = "Dashboard";
        $page_data['active_menu_class'] = "dashboard";
        $user_id=$this->session->userdata('user_id');
        $table = 'tbl_leads';
        $page_data['table_data'] = $this->common_model->GetTableRows($table,['user_id'=>$user_id], array('id','desc')) ;
        $page_data['user'] = $this->common_model->GetSingleRow(USERS_TABLE, array('id' => $user_id)) ;

        $this->load->view('user/common/header', $page_data);
        $this->load->view('user/dashboard', $page_data);
        $this->load->view('user/common/footer', $page_data);
    }
    public function change_password(){
        if(!$this->session->userdata('user_id')){
            redirect(base_url());
        }
        $page_data['page_name'] = "Change Password";
        $page_data['active_menu_class'] = "change_password";
        $user_id=$this->session->userdata('user_id');
        $table = 'tbl_leads';
        $page_data['table_data'] = $this->common_model->GetTableRows($table,['user_id'=>$user_id], array('id','desc')) ;
        $page_data['user'] = $this->common_model->GetSingleRow(USERS_TABLE, array('id' => $user_id)) ;

        $this->load->view('user/common/header', $page_data);
        $this->load->view('user/change_password', $page_data);
        $this->load->view('user/common/footer', $page_data);
    }

    public function update_profile(){
        if(!$this->session->userdata('user_id')){
            redirect(base_url());
        }
        $page_data['page_name'] = "Update Profile";
        $page_data['active_menu_class'] = "dashboard";
        $user_id=$this->session->userdata('user_id');
        $table = 'tbl_leads';
        $page_data['table_data'] = $this->common_model->GetTableRows($table,['user_id'=>$user_id], array('id','desc')) ;
        $page_data['user'] = $this->common_model->GetSingleRow(USERS_TABLE, array('id' => $user_id)) ;

        $this->load->view('user/common/header', $page_data);
        $this->load->view('user/update_profile', $page_data);
        $this->load->view('user/common/footer', $page_data);
    }

    public function update_profile_submit(){
        $user_id = $this->session->userdata('user_id');
        $data = $this->input->post();
        $data['dob'] = date("Y-m-d", strtotime($data['dob']));
        $table = "tbl_users";
        $result = $this->common_model->UpdateTableData($table,$data,array('id' => $user_id));
        $this->session->set_flashdata('flash_message', 'Profile successfully updated.');
        $this->session->set_flashdata('class', 'success');
        redirect(base_url('user/update_profile'));
    }

    public function update_password()
    {
        $user_id = $this->session->userdata('user_id');
        $password = $this->input->post('password');
        $new_password = $this->input->post('new_password');
        $password_confirmation = $this->input->post('password_confirmation');
        $user = $this->common_model->GetSingleRow(USERS_TABLE, array('id' => $user_id)) ;
        if(md5($password) == $user->password)
        {
            if(($new_password==$password_confirmation))
            {
                $udata = array( 'password' => md5($new_password) );
                $result = $this->common_model->UpdateTableData(USERS_TABLE,$udata,array('id' => $user_id));
                if($result)
                {
                    $this->session->set_flashdata('flash_message', 'Password successfully updated.');
                    $this->session->set_flashdata('class', 'success');
                    redirect(base_url('user/change_password'));
                }
                else
                {
                    $this->session->set_flashdata('flash_message', 'Something is went wrong please try again.');
                    $this->session->set_flashdata('class', 'danger');
                    redirect(base_url('user/change_password'));
                }
            }
            else
            {
                $this->session->set_flashdata('flash_message', 'Password and Confirm password not same.');
                $this->session->set_flashdata('class', 'danger');
                redirect(base_url('user/change_password'));
            }
        }
        else
        {
            $this->session->set_flashdata('flash_message', 'Current Password not matched.');
            $this->session->set_flashdata('class', 'danger');
            redirect(base_url('user/change_password'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect(base_url());
    }
}
