<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
    }
    public function index()
    {
        if($this->session->userdata('user_id')){
            redirect('user/dashboard');
        }
        $page_data['title'] = "Use Login";
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        $this->load->view('user/login',$page_data);
        $this->load->view('front/common/footer', $page_data);
    }

    public function reset_password()
    {
        $page_data['home_data'] = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Home'));
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));

        $this->load->view('user/forgot_password', $page_data);
        $this->load->view('front/common/footer', $page_data);
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
            $result = $this->common_model->GetSingleRow($table,array('email' => $email, 'password' => md5($password ),'status' =>1) ) ;

           

            if(isset($result))
            {
                if($result->user_type == 1){
                    $sess_array = array( 'admin_id' => $result->id, 'admin_name' => $result->name,'admin_email' => $result->email, );
                    $this->session->set_userdata($sess_array);
                    redirect('dashboard/admin');
                }else{
                    $sess_array = array( 'user_id' => $result->id, 'user_name' => $result->name,'user_email' => $result->email,'user_type' => $result->user_type, );
                    $this->session->set_userdata($sess_array);
                    redirect('user/dashboard');
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

    public function forgotPassword(){
        $data = $this->input->post();
        $user = $this->common_model->GetSingleRow(USERS_TABLE, array('email' => $data['email']));
        if($user){
            $this->sendWelcomeEmail($user->id);
            $this->session->set_flashdata('flash_message','Check your email we password reset link');
            $this->session->set_flashdata('class','success');
        }else{
            $this->session->set_flashdata('flash_message','Invalid Email.');
            $this->session->set_flashdata('class','danger');
        }
        redirect('login/reset_password');
    }
    public function sendWelcomeEmail($email)
    {
        // echo "hi";die;
        $to_email = $email;
        $website = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        $from = 'support@itakeform.com';
        $subject = "Welcome";
        $message = 	"<html>
						<head>
							<title>Welcome</title>
						</head>
						<body>
							<p>Hi,</p>
							<p>Welcome to ".$website.".</p>
							<p>Email: ".$to_email."</p>
                            <p>Please click <a href=".base_url('login/verify/').md5($to_email).">here</a>  to verify your email address and create a password.</p>
                            <br /> 
                            <br />Thanks<br />$website
							
						</body>
						</html>
						";
        $email_sent= $this->common_model->SendEmail($to_email, $from, $subject, $message);

        if ($email_sent) {
            return true;
        } else {
            return false;
        }
    }

    public function verify($email="")
    {
        if($this->session->userdata('agent_id')){
            redirect(base_url().'user/dashboard');
        }
        $table = "tbl_users";
        $user = $this->common_model->GetSingleRow($table, array('md5(id)' => $email));

        $page_data['token']= $email;
        $page_data['user']= $user;
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        if($user){
            $this->load->view('user/verify', $page_data);
            $this->load->view('front/common/footer', $page_data);
        }else{
            $this->load->view('front/common/header', $page_data);
            $this->load->view('front/404', $page_data);
            $this->load->view('front/common/footer', $page_data);
        }
    }

    public function resetPassword()
    {
        $token = $this->input->post('token');
        $password = $this->input->post('password');
        $cpassword = $this->input->post('password_confirmation');
        $table = "tbl_users";
        if(($password==$cpassword) && !empty($password) )
        {

            $udata = array( 'password' => $password );
            $result = $this->common_model->UpdateTableData($table,$udata,array('md5(id)' => $token));

            if($result)
            {
                $this->session->set_flashdata('flash_message', 'Password successfully updated.');
                $this->session->set_flashdata('class', 'success');
                redirect(base_url('login'));
            }
            else
            {
                $this->session->set_flashdata('flash_message', 'Something is went wrong please try again.');
                $this->session->set_flashdata('class', 'danger');
                redirect(base_url('login/verify').$token);
            }
        }
        else
        {
            $this->session->set_flashdata('flash_message', 'Password and Confirm password not same.');
            $this->session->set_flashdata('class', 'danger');
            redirect(base_url('login/verify').$token);
        }
    }


}