<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $page_data['home_data'] = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Home'));
        $page_data['phone'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'phone'));
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));

        //        $this->load->view('front/common/header', $page_data);
        $this->load->view('front/register', $page_data);
        //        $this->load->view('front/common/footer', $page_data);
    }

    public function submit()
    {

        $data = $this->input->post();
        $this->form_validation->set_rules('gender', "Gender", "trim|xss_clean|required");
        $this->form_validation->set_rules('first_name', "First Name", "trim|required");
        $this->form_validation->set_rules('last_name', "Last Name", "trim|required");
        $this->form_validation->set_rules('email', "Email", "trim|required");
        $this->form_validation->set_rules('address', "Address", "trim|required");
        $this->form_validation->set_rules('apt', "Apt", "trim|required");
        $this->form_validation->set_rules('city', "City", "trim|required");
        $this->form_validation->set_rules('state', "State", "trim|required");
        $this->form_validation->set_rules('zip', "Zip", "trim|required");
        $this->form_validation->set_rules('phone', "Phone", "trim|required");
        $this->form_validation->set_rules('dob', 'DOB', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $table = "tbl_users";
            $count = $this->common_model->GetTotalCount($table, array('email' => $data['email']));
            // print_r($count);die;
            if ($count == 0) {
                $gender = $data['gender'];
                $first_name = $data['first_name'];
                $last_name = $data['last_name'];
                $email = $data['email'];
                $address = $data['address'];
                $apt = $data['apt'];
                $city = $data['city'];
                $state = $data['state'];
                $zip = $data['zip'];
                $phone = $data['phone'];
                $dob = $data['dob'];
                $password = $data['password'];
                $data = array(
                    "name" => $first_name . " " . $last_name,
                    "email" => $email,
                    "phone" => $phone,
                    "gender" => $gender,
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "address" => $address,
                    "apt" => $apt,
                    "city" => $city,
                    "state" => $state,
                    "zip" => $zip,
                    "user_type" => 2,
                    "dob" => strtotime($dob),
                    "password" => md5($password),
                    'timestamp' => time()
                );

                $result = $this->common_model->InsertTableData($table, $data);

                /** send welcome mail  */
                $this->sendWelcomeEmail();

                //                $this->session->set_flashdata('flash_message','Thanks! Sign up generated successfully.');
                //                $this->session->set_flashdata('class','success');
                //                print_r($result);



                redirect('register/question/' . md5($result));
            } else {
                $this->form_validation->set_error_delimiters('', '');
                $this->session->set_flashdata('error', "Email already exist");
                $this->session->set_flashdata('class', 'danger');
                redirect('register');
            }
        } else {
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_flashdata('error', validation_errors());
            $this->session->set_flashdata('class', 'danger');
            redirect('register');
        }
    }

    public function question($id = "")
    {
        $user = $this->common_model->GetSingleRow('tbl_users', array('md5(id)' => $id));
        $page_data['token'] = $id;
        $page_data['support_email'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        $page_data['website_title'] = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        if ($user) {
            $number_of_question = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'number_of_question'));

            $this->db->where('status', 1);
            $this->db->order_by('rand()');
            $this->db->limit($number_of_question);
            $query = $this->db->get('tbl_question_master');
            $page_data['question'] = $query->result();
            $page_data['number_of_question'] = $number_of_question;
            $page_data['home_data'] = $this->common_model->GetSingleRow(PAGES_TABLE, array('slug' => 'Home'));
            $page_data['phone'] =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'phone'));
            $this->load->view('front/question_answer', $page_data);
        } else {
            $this->load->view('front/common/header-inner', $page_data);
            $this->load->view('front/404', $page_data);
            $this->load->view('front/common/footer', $page_data);
        }
    }

    public function question_submit()
    {
        $data = $this->input->post();
        $number_of_question = $data['number_of_question'];
        $correct_answer = 0;
        $insert = [];
        $user = $this->common_model->GetSingleRow('tbl_users', array('md5(id)' => $data['token']));

        for ($x = 1; $x <= $number_of_question; $x++) {
            $question_id = $data['question_id_' . $x];
            $answer_id = $data['answer_id_' . $x];
            $question_answer = $this->common_model->GetSingleRow('tbl_question_answer', array('question_id' => $question_id, 'answer' => $answer_id));

            if ($question_answer->is_correct == 1) {
                $correct_answer++;
                $insert[] = [
                    'user_id' => $user->id,
                    'question_id' => $question_id,
                    'answer_id' => $answer_id,
                    'timestamp' => time(),
                ];
            }
        }
        //        echo $correct_answer;
        if ($correct_answer == $number_of_question) {
            if ($this->db->insert_batch('tbl_user_question_answer', $insert)) {
                $this->session->set_flashdata('flash_message', 'Thanks! We will contact you soon..');
                $this->session->set_flashdata('class', 'success');
                redirect('login');
            } else {
                $this->form_validation->set_error_delimiters('', '');
                $this->session->set_flashdata('error', "Something is wrong");
                $this->session->set_flashdata('class', 'danger');
                redirect('register');
            }
        } else {
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_flashdata('error', "Try again all answer question not correct");
            $this->session->set_flashdata('class', 'danger');
            redirect('register/question/' . md5($data['token']));
        }
    }

    public function sendWelcomeEmail()
    {
        // echo "hi";die;
        $to_email = $this->input->post('email');
        $password = $this->input->post('password');
        $website = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title'));
        $from = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
        $subject = "Welcome";
        $message =     "<html>
						<head>
							<title>Welcome</title>
						</head>
						<body>
							<p>Hi,</p>
							<p>Congratulations! Welcome to  " . $website . ".</p>
							<p>You can use following credentials to login</p>
							<p>Email: " . $to_email . "<br>
							<p>Password: " . $password . "</p>
                            
                            <br /> 
                            <br />Thanks<br />$website
							
						</body>
						</html>
						";
        $email_sent = $this->common_model->SendEmail($to_email, $from, $subject, $message, $website);

        if ($email_sent) {
            return true;
        } else {
            return false;
        }
    }
}
