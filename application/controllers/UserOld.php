<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserOld extends CI_Controller
{
	function __construct()
	{
        parent::__construct();

        $this->load->library('user_agent');
	}

	public function index()
	{
        // echo $this->session->userdata('user_id');die;
        if($this->session->userdata('user_id')){
            redirect(base_url().'agent/dashboard');
        }
		// $page_data['home_data'] = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Home','website_id'=>WEBSITE_ID));
		// $page_data['phone'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'phone','website_id'=>WEBSITE_ID));

		$page_data['home_data'] = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Home'));
		$page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));

		$this->load->view('agent/common/header', $page_data);
		$this->load->view('agent/home', $page_data);
		$this->load->view('agent/common/auth_footer', $page_data);
	}

    public function createPassword(){
        $refer =  $this->agent->referrer();
        if($this->session->userdata('user_id')){
            redirect(base_url().'agent/dashboard');
        }
        $data = $this->input->post();
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|regex_match[/^(?=.*?[A-Z])(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{5,}$/]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]');
        $this->form_validation->set_message('regex_match', 'Password should be one capital letter, one number & one special character');
        if ($this->form_validation->run() == TRUE)
        {
            $table = 'tbl_users';
            $user = $this->common_model->GetSingleRow($table, array('email' => $data['email']));


            if($user){
                $this->common_model->UpdateTableData($table, array('password' => md5($data['confirm_password'])), array('email' => $data['email']));

                $this->common_model->UpdateTableData($table, array('status' => 1), array('email' => $data['email']));

                $message ="Password updated. Click <a href=" .base_url('/').">here </a> to login";
                $this->session->set_flashdata('flash_message',$message);
                $this->session->set_flashdata('class','success');
            }else{
                $this->session->set_flashdata('flash_message','Invalid Email.');
                $this->session->set_flashdata('class','danger');
            }
            redirect('agent/verify/'.md5($data['email']));
        }else{
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_flashdata('flash_message',validation_errors());
            $this->session->set_flashdata('class','danger');
            redirect($refer);
        }
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
            if(isset($result))
            {
                if($result->user_type == 1){
                    $sess_array = array( 'admin_id' => $result->id, 'admin_name' => $result->name,'admin_email' => $result->email, );
                    $this->session->set_userdata($sess_array);
                    redirect('dashboard/admin');
                }else{
                    $sess_array = array( 'user_id' => $result->id, 'agent_name' => $result->name,'agent_email' => $result->email,'user_type' => $result->user_type, );
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

        $this->load->view('agent/common/header', $page_data);
        $this->load->view('agent/dashboard', $page_data);
        $this->load->view('agent/common/footer', $page_data);
    }
    public function leads(){
        if(!$this->session->userdata('user_id')){
            redirect(base_url());
        }
        $page_data['page_name'] = "Leads";
        $page_data['active_menu_class'] = "leads";
        $this->load->view('agent/front_common/header', $page_data);
        $this->load->view('agent/leads_form', $page_data);
        $this->load->view('agent/front_common/footer', $page_data);
    }
    public function leadsSubmit() // admin login process;
    {
        $refer =  $this->agent->referrer();
        $data = $this->input->post();

        $this->form_validation->set_rules('debt_type[]',"Debt Type", "trim|xss_clean|required");
        $this->form_validation->set_rules('debt_amount',"Debt Amount", "trim|required");
        $this->form_validation->set_rules('first_name',"First Name", "trim|required");
        $this->form_validation->set_rules('last_name',"Last Name", "trim|required");
        $this->form_validation->set_rules('phone',"Phone No", "trim|required");
        $this->form_validation->set_rules('city',"City", "trim|required");
        $this->form_validation->set_rules('date_time',"Date", "trim|required");
        $this->form_validation->set_rules('message',"Message", "trim|required");
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $user_id=$this->session->userdata('user_id');
        $data['certUrl'] = strip_tags($this->input->post('xxTrustedFormCertUrl'));
        $data['pingUrl'] = strip_tags($this->input->post('xxTrustedFormPingUrl'));
        $data['user_id'] = $user_id;
        $data['timestamp'] =time();
        unset($data['xxTrustedFormCertUrl']);
        unset($data['xxTrustedFormPingUrl']);
        unset($data['xxTrustedFormToken']);
        // echo "<pre>";
        // print_r($this->input->post());die;

        if ($this->form_validation->run() == TRUE)
        {

            $day = date('N', strtotime($data['date_time']));
            $datestring = $data['date_time'];
            $input_format = "m-d-Y h:i A";
            $output_format = 'Y-m-d G:i';
            $date =  DateTime::createFromFormat($input_format, $datestring);
            $data['date_time'] = $date->format($output_format);

            // echo $data['date_time'];die;

            if ((($day >= 1 ) && ($day <= 5 ) )&& (date('H', strtotime($data['date_time'])) >= 8) && (date('H', strtotime($data['date_time'])) <= 16)){
                $debt_type = implode(', ', $data['debt_type']);
                unset($data['debt_type']);
                $data['debt_type'] = $debt_type;
                $data['date_time'] = date('Y-m-d H:i:s', strtotime($data['date_time']));

                $table = "tbl_leads";
                $result = $this->common_model->InsertTableData($table,$data) ;
                $this->session->set_flashdata('flash_message','Thanks! Leads generated successfully.');
                $this->session->set_flashdata('class','success');
                redirect('agent/dashboard');

            }else{
                $this->session->set_flashdata('flash_message','All appointments should be between 8am and 4pm, between Monday and Friday.');
                $this->session->set_flashdata('class','danger');
            }
            redirect('agent/leads');
        }
        else
        {
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_flashdata('flash_message',validation_errors());
            $this->session->set_flashdata('class','danger');
            redirect($refer);
        }
    }

    public function logout()
    {
        if(!$this->session->userdata('user_id')){
            redirect(base_url());
        }
        $this->session->set_userdata('user_id', '');
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function verify($email="")
    {
        if($this->session->userdata('user_id')){
            redirect(base_url().'agent/dashboard');
        }
        $user = $this->common_model->GetSingleRow(USERS_TABLE, array('md5(email)' => $email));

        $page_data['user']= $user;
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        if($user){
            $this->load->view('agent/common/auth_header', $page_data);
            $this->load->view('agent/Register.php', $page_data);
            $this->load->view('agent/common/footer', $page_data);
        }else{
            $this->load->view('agent/common/auth_header', $page_data);
            $this->load->view('agent/404', $page_data);
            $this->load->view('agent/common/footer', $page_data);
        }
    }

    public function privacy_policy()
	{
		$page_data = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Privacy-Policy','website_id'=>WEBSITE_ID));

		$this->load->view('front/common/header');
		$this->load->view('front/privacy_policy', $page_data);
		$this->load->view('front/common/footer');
	}
	public function terms_conditions()
	{
		$page_data = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Terms-Conditions','website_id'=>WEBSITE_ID));

		$this->load->view('front/common/header', $page_data);
		$this->load->view('front/terms_conditions', $page_data);
		$this->load->view('front/common/footer');
	}
}
