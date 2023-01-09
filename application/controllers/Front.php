<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->helper('text');
        $this->website_title =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        $this->support_email = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        $this->address = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));
	}

	public function index()
	{

		// $page_data['home_data'] = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Home'));
		// $page_data['phone'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'phone'));

		$page_data['home_data'] = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Home'));
		$page_data['phone'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'phone'));
        $page_data['website_title'] =  $this->website_title;
        $page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));

        


        // echo "<pre>";
        // print_r($page_data);die;

		$this->load->view('front/common/header', $page_data);
		$this->load->view('front/home', $page_data);
		$this->load->view('front/common/footer', $page_data);
	}

    public function subscribe()
    {
		$page_data['home_data'] = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Home'));

        // $this->load->view('front/common/header', $page_data);
        $page_data['website_title'] =  $this->website_title;


		$this->load->view('front/subscribe', $page_data);
		$this->load->view('front/common/footer', $page_data);
    }

	public function add_lead()
	{
		echo "<pre>";
		print_r($this->input->post());
		echo "Hii";die;
		$loan_type = strip_tags($this->input->post('student_loan_type'));
		$first_name = strip_tags($this->input->post('first_name'));
		$email = $this->input->post('email');
		$zip_code = strip_tags($this->input->post('zip_code'));
		$debt_amount = strip_tags($this->input->post('st_loan_amount'));
		$last_name = strip_tags($this->input->post('last_name'));
		$phone = strip_tags($this->input->post('phone'));
		$state = strip_tags($this->input->post('state'));

		$ip_address = $this->input->ip_address();

		$certUrl = strip_tags($this->input->post('xxTrustedFormCertUrl'));
		$pingUrl = strip_tags($this->input->post('xxTrustedFormPingUrl'));


		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		if ($this->form_validation->run() == true) {

			$data = array(
				'website_id' => WEBSITE_ID,
				'state' => $state,
				'loan_type' => $loan_type,
				'zip_code' => $zip_code,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'phone' => $phone,
				'debt_amount' => $debt_amount,
				'ip_address' => $ip_address,
				'certUrl' => $certUrl,
				'pingUrl' => $pingUrl,
				'timestamp' => time(),
			);


			$insert_data = $this->common_model->InsertTableData(LEADS_TABLE, $data);
			if ($insert_data) {
				$result['status'] = "success";
				$result['lead_id'] = $insert_data;
				$result['html'] = "Successfully Added.";
				$result['type'] = "alert";
				echo json_encode($result);
				die();
			} else {
				$result['status'] = "error";
				$result['html'] = "Something went wrong please try again.";
				$result['type'] = "alert";
				echo json_encode($result);
				die();
			}
		}
		$json_data['status'] = "error";
		$json_data['msg'] = validation_errors();
		echo json_encode($json_data);
		die();
	}

	public function service_providers()
	{
		$page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'service_providers'));

		$page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
		$page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
		$page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));

		$this->load->view('front/common/header-inner', $page_data);
		$this->load->view('front/service_providers', $page_data);
		$this->load->view('front/common/footer');
	}
	public function privacy()
	{

		$page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Privacy-Policy'));

		$page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
		$page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
		$page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));

		$this->load->view('front/common/header-inner', $page_data);
		$this->load->view('front/privacy_policy', $page_data);
		$this->load->view('front/common/footer');
	}
	public function terms()
	{
		$page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Terms-Conditions'));

		$page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
		$page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
		$page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));
		// echo "<pre>";
		// print_r($page_data);die;

		$this->load->view('front/common/header-inner', $page_data);
		$this->load->view('front/terms_conditions', $page_data);
		$this->load->view('front/common/footer');
	}
    public function faq()
    {
        $page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Terms-Conditions'));

        $page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        $page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));
        // echo "<pre>";
        // print_r($page_data);die;

        $this->load->view('front/common/header', $page_data);
        $this->load->view('front/faq', $page_data);
        $this->load->view('front/common/footer');
    }

    public function contact()
    {
        $page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Terms-Conditions'));

        $page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        $page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));
        $page_data['address_text'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address_text'));
        // echo "<pre>";
        // print_r($page_data);die;

        $this->load->view('front/common/header-contact', $page_data);
        $this->load->view('front/contact', $page_data);
        $this->load->view('front/common/footer-contact');
    }
    public function about()
    {
        $page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'about'));

        $page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        
        // echo "<pre>";
        // print_r($page_data);die;

        $this->load->view('front/common/header', $page_data);
        $this->load->view('front/about', $page_data);
        $this->load->view('front/common/footer');
    }

    public function blogs()
	{
       

        $page_data['blog'] = $this->common_model->GetSingleRow(CMS_TABLE,['is_featured'=>1],array('id','asc'));

        $next_id = $page_data['blog']->id+1;
        $prev_id = $page_data['blog']->id-1;

        $page_data['next_blog'] = $this->common_model->GetSingleRow(CMS_TABLE,['id'=>$next_id],array('id','asc'));
        $page_data['prev_blog'] = $this->common_model->GetSingleRow(CMS_TABLE,['id'=>$prev_id],array('id','asc'));
        
		// echo "<pre>";

        // print_r($page_data);die;

		$this->load->view('front/common/header-blog', $page_data);
		$this->load->view('front/blogs', $page_data);
		// $this->load->view('front/common/footer');
	}

    public function blogs_inner($url="")
	{
        if($url){

            $page_data['blog'] = $this->common_model->GetSingleRow(CMS_TABLE,['url'=>$url],array('id','asc'));
        }else{

            $page_data['blog'] = $this->common_model->GetSingleRow(CMS_TABLE,['is_featured'=>1],array('id','asc'));
        }

        $next_id = $page_data['blog']->id+1;
        $prev_id = $page_data['blog']->id-1;

        $page_data['next_blog'] = $this->common_model->GetSingleRow(CMS_TABLE,['id'=>$next_id],array('id','asc'));
        $page_data['prev_blog'] = $this->common_model->GetSingleRow(CMS_TABLE,['id'=>$prev_id],array('id','asc'));
        
		// echo "<pre>";

        // print_r($page_data);die;

		$this->load->view('front/common/header-blog', $page_data);
		$this->load->view('front/blogs', $page_data);
		// $this->load->view('front/common/footer');
	}

    public function winners()
    {
        $page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Terms-Conditions'));

        $page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        $page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));
        // echo "<pre>";
        // print_r($page_data);die;

        $this->load->view('front/common/header', $page_data);
        $this->load->view('front/winners', $page_data);
        $this->load->view('front/common/footer');
    }
    public function earnings_dis()
    {
        $page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Terms-Conditions'));

        $page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        $page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));
        // echo "<pre>";
        // print_r($page_data);die;

        $this->load->view('front/common/header', $page_data);
        $this->load->view('front/earnings_dis', $page_data);
        $this->load->view('front/common/footer');
    }

    public function submit(){

        $data = $this->input->post();
        $this->form_validation->set_rules('firstname',"First Name", "trim|xss_clean|required");
        $this->form_validation->set_rules('lastname',"Last Name", "trim|required");
        $this->form_validation->set_rules('email',"Email", "trim|required");
        $this->form_validation->set_rules('phone',"Phone", "trim|required");
        $this->form_validation->set_rules('address',"Address", "trim|required");
        $this->form_validation->set_rules('city',"City", "trim|required");
        $this->form_validation->set_rules('state',"State", "trim|required");
        $this->form_validation->set_rules('zip_code',"Zip Code", "trim|required");
        // $this->form_validation->set_rules('dob',"DOB", "trim|required");
        $this->form_validation->set_rules('gender',"Gender", "trim|required");


        if ($this->form_validation->run() == TRUE)
        {
            $table = "tbl_leads";
            $count = $this->common_model->GetTotalCount($table, array('email',$data['email'])) ;
            if ($count == 0){
                $DOBMonth = $data['DOBMonth'];
                $DOBDay = $data['DOBDay'];
                $DOBYear = $data['DOBYear'];

                $dob = $DOBYear.'-'.$DOBMonth.'-'.$DOBDay;


                $firstname = $data['firstname'];
                $lastname = $data['lastname'];
                $email = $data['email'];
                $phone = $data['phone'];
                $address = $data['address'];
                $city = $data['city'];
                $state = $data['state'];
                $zip_code = $data['zip_code'];
                $dob = $dob;
                $gender = $data['gender'];

                $ip_address = $this->input->ip_address();

                $certUrl = strip_tags($this->input->post('xxTrustedFormCertUrl'));
                $pingUrl = strip_tags($this->input->post('xxTrustedFormPingUrl'));
                $data = array(
                    "name" => $firstname." ".$lastname,
                    "email" => $email,
                    "phone" => $phone,
                    "gender" => $gender,
                    "first_name" => $firstname,
                    "last_name" => $lastname,
                    "address" => $address,
                    "city" => $city,
                    "state" => $state,
                    "zip_code" => $zip_code,
                    "dob" => date("Y-m-d",strtotime($dob)),
                    'ip_address' => $ip_address,
                    'certUrl' => $certUrl,
                    'pingUrl' => $pingUrl,
                    'timestamp' => time(),
                );

                $result = $this->common_model->InsertTableData($table,$data) ;
                $this->session->set_flashdata('flash_message','Thanks! For contact with us.');
                $this->session->set_flashdata('class','success');
                redirect($this->agent->referrer());
            }else{
                $this->form_validation->set_error_delimiters('', '');
                $this->session->set_flashdata('flash_message',"Email already exist");
                $this->session->set_flashdata('class','danger');
                redirect($this->agent->referrer());
            }
        }else
        {
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_flashdata('flash_message',validation_errors());
            $this->session->set_flashdata('class','danger');
            redirect($this->agent->referrer());
        }





    }

    public function contact_submit(){

        $data = $this->input->post();
        $this->form_validation->set_rules('email',"Email", "trim|xss_clean|required");
        $this->form_validation->set_rules('name',"Name", "trim|required");
        $this->form_validation->set_rules('comment',"Comment", "trim|required");
		// print_r($data);die;
        $from_home_page =$this->input->post('from_home_page')?$this->input->post('from_home_page'):0;
        if ($this->form_validation->run() == TRUE)
        {
            $table = "tbl_contact";
            $count = $this->common_model->GetTotalCount($table, array('email',$data['email'])) ;
            // if ($count == 0){
                $email = $data['email'];
                $name = $data['name'];
                $comment = $data['comment'];
                $question_type = isset($data['question_type'])?$data['question_type']:"";
                $data = array(
                    "email" => $email,
                    "name" => $name,
                    "question_type" => $question_type,
                    "massage" => $comment,
                    'timestamp' => time(),
                    // 'date_time' => date("Y-m-d H:i:s"),
                );

                $result = $this->common_model->InsertTableData($table,$data) ;
                $this->session->set_flashdata('flash_message','Thanks! For contact with us.');
                $this->session->set_flashdata('class','success');
                // print_r($from_home_page);die;
                if($from_home_page){
                    // echo "here";die;
                    redirect($this->agent->referrer());
    
                }
                redirect($this->agent->referrer());
            
        }else
        {
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_flashdata('flash_message',validation_errors());
            $this->session->set_flashdata('class','danger');

            if($from_home_page){
                redirect($this->agent->referrer());

            }

            redirect($this->agent->referrer());
        }





    }

    public function blog($url)
	{
		// echo $url;die;
		$page_data = (array)($this->common_model->GetSingleRow(CMS_TABLE, array('url' => $url)));
		// echo "<pre>";
		// print_r($page_data);die;
		$page_data['website_title'] = $this->website_title;

		
		$this->load->view('front/common/header', $page_data);
		$this->load->view('front/blog-inner', $page_data);
		$this->load->view('front/common/footer');
	}

    public function donotsell()
	{

		$page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
		$this->load->view('front/donot_sell', $page_data);
		// $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
		// $page_data['address'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address'));
		// echo "<pre>";
		// print_r($page_data);die;

		// $this->load->view('front/common/header-inner', $page_data);
		// $this->load->view('front/common/footer');
	}

	public function donotSellSubmit()
	{
		$to_email = $this->input->post('email');
		$data = $this->input->post();
		$userIp = $this->input->ip_address();

		// $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
		
		// $this->form_validation->set_rules('first_name', "First Name", "trim|required");
		// $this->form_validation->set_rules('last_name', "Last Name", "trim|required");
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		// $this->form_validation->set_rules('city', "City", "trim|required");
		// $this->form_validation->set_rules('state', "State", "trim|required");
		// $this->form_validation->set_rules('zip', "Zip", "trim|required");





		if ($this->form_validation->run() == TRUE) {
			$table = "tbl_donot_sell_requests";

			$type = $data['type'];
			$request = $data['request'];
			$email = $data['email'];
		
		
			$data = array(
				
				"email" => $email,
				"type_of_request" => $type,
				"request_on" => $request,
				'ip_address'=> $userIp,	
				'timestamp' => time()
			);

			$result = $this->common_model->InsertTableData($table, $data);	

			$this->session->set_flashdata('flash_message', "Request sent successfully.");
			$this->session->set_flashdata('class', 'success');

			redirect('front/donotsell');
		} else {
			$this->form_validation->set_error_delimiters('', '');
			$this->session->set_flashdata('flash_message', validation_errors());
			$this->session->set_flashdata('class', 'danger');
			redirect('front/donotsell');
		}
	}

    public function official_rules()
	{
		$page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Privacy-Policy'));

		$page_data['website_title'] = $this->website_title;
		$page_data['support_email'] = $this->support_email;
		$page_data['address'] = $this->address;
		$page_data['heading'] = 'Contact Us';

		$this->load->view('front/common/header', $page_data);
		$this->load->view('front/official_rules', $page_data);
		$this->load->view('front/common/footer');
	}

    public function unsub()
	{
		$page_data = (array)$this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Terms-Conditions'));

		$page_data['website_title'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
		$page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
		$page_data['address_text'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'address_text'));
		// echo "<pre>";
		// print_r($page_data);die;

		$this->load->view('front/common/header', $page_data);
		$this->load->view('front/unsub', $page_data);
		$this->load->view('front/common/footer');
	}

	public function unsubSubmit()
	{
		$to_email = $this->input->post('email');
		$data = array(
			'email' => $to_email,
			'timestamp' => time(),
		);
		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
		$secret = $this->config->item('google_secret');
		$userIp = $this->input->ip_address();

		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);

		$status = json_decode($output, true);


		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');

		// echo $this->form_validation->run();die;
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('flash_message', 'Please enter valid email.');
			$this->session->set_flashdata('class', 'danger');
			redirect('front/unsub');
		}

		// if (!$status['success']) {

		// 	$this->session->set_flashdata('flash_message', 'Sorry Google Recaptcha Unsuccessful!!');
		// 	$this->session->set_flashdata('class', 'danger');

		// 	return redirect('front/unsub');
		// }


		$count = $this->common_model->checkExists(LEADS_TABLE, ['email' => $to_email]);
        // echo $count;die;
		if ($count == 0) {

			$this->session->set_flashdata('flash_message', 'Sorry! We do not found your email.');
			$this->session->set_flashdata('class', 'danger');
			redirect('front/unsub');
		} else {

			$insert_data = $this->common_model->InsertTableData(UNSUB_TABLE, $data);

			if ($insert_data) {
				$this->session->set_flashdata('flash_message', 'Request sent successfully.');
				$this->session->set_flashdata('class', 'success');
				redirect('front/unsub');
			} else {
				$this->session->set_flashdata('flash_message', 'Something went wrong please try again.');
				$this->session->set_flashdata('class', 'danger');
				redirect('front/unsub');
			}
		}
	}

}
