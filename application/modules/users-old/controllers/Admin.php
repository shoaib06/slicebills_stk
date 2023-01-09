<?php
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
        $this->path = $this->_module . '/' . $this->controller_name;
        // echo $this->common_model->is_admin();die;
        if (!$this->common_model->is_admin()) {
            redirect('dashboard/admin');
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('admin_id');
        // echo $user_id;die;
        $where = [];
        $where[] = "id <> '$user_id' and user_type=2 ";
        $where = self::filter_query($where);
        $where = implode(' AND ', $where);

        $config["base_url"] = base_url() . $this->path . "/" . $this->method_name;
        $config["total_rows"] = $this->common_model->GetTotalCount(USERS_TABLE, $where);
        $result_per_page = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', ['type' => 'result_per_page']);
        $config["per_page"] = $result_per_page;
        $config['uri_segment'] = 4;
        $config['reuse_query_string'] = true;
        $limit = $config['per_page'];
        $this->pagination->initialize($config);
        $page = $this->uri->segment(4) ? $this->uri->segment(4) : 0;
        $page_data["results"] = $this->common_model->GetTableRows(USERS_TABLE, $where, ['id', 'desc'], $limit, $page);
        $page_data["pagination"] = $this->pagination->create_links();
        $controllerName = $this->_module . '/admin';
        $module = $this->_module;
        $page_data['module_title'] = ucfirst($module);

        $page_data['module'] = $module;
        $this->load->view('common/header',$page_data);
        $this->load->view($module . '/detail', $page_data);
        $this->load->view('common/footer');
    }

    public function filter_query($where = [])
    {
        foreach ($_GET as $key => $value) {
            $value = strip_tags($value);
            if ($key != "from" && $key != "to") {
                if ($key == "type") {
                    if ($value != "") {
                        $where[] = "  $key LIKE '%$value%'   ";
                    }
                } else {
                    if ($value != "") {
                        $where[] = "  $key = '$value'   ";
                    }
                }
            }
        }
        return $where;
    }

    public function add()
    {
        $admin_id = $this->session->userdata('admin_id');

        if ($this->input->post('s')) {
            // if form submitted
            $name = strip_tags($this->input->post('name'));
            $email = strip_tags($this->input->post('email'));
            $phone = strip_tags($this->input->post('phone'));
            //$password = strip_tags($this->input->post('password'));

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|is_unique[tbl_users.email]');
            $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');

            $password = $this->common_model->randomPassword(6);

            if ($this->form_validation->run() == true) {
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'user_type'=>2,
                    'status' => 0,
                    'created_by' => $admin_id,
                    'timestamp' => time(),

                    // 'password' => md5($password),
                    // 'opw' => $password,
                ];

                $insert_id = $this->common_model->InsertTableData(USERS_TABLE, $data);
                if ($insert_id) {

                    /** send welcome mail  */
                    $this->sendWelcomeEmail();


                    $this->session->set_flashdata('flash_message', 'User successfully added and mail sent to '.$email);
                    $this->session->set_flashdata('class', 'success');
                    redirect(base_url($this->path));
                    die();
                } else {
                    $this->session->set_flashdata('flash_message', 'Something went wrong please try again.');
                    $this->session->set_flashdata('class', 'danger');
                    redirect(base_url($this->path));
                    die();
                }
            }
        }

        $page_data['module_path'] = $this->path;
        $module = $this->_module;
        $controllerName = $this->_module . '/admin';
        $page_data['module_title'] = $module . " : Add ";
        $page_data['module'] = $module;
        $this->load->view('common/header',$page_data);
        $this->load->view($module . '/forms/add', $page_data);
        $this->load->view('common/footer');
    }

    public function edit($id)
    {
        // Update function
        $page_data = (array) $this->common_model->GetSingleRow(USERS_TABLE, ['id' => $id]); // get data
        if (!count($page_data)) {
            redirect(base_url($this->_module . '/admin'));
        }

        if ($this->input->post('s')) {
            // if form submitted
            $name = strip_tags($this->input->post('name'));
            $email = strip_tags($this->input->post('email'));
            $phone = strip_tags($this->input->post('phone'));
            $status = strip_tags($this->input->post('status'));

            if ($email != $page_data['email']) {
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|callback_check_email');
            } else {
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
            }
            $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');

            $password = $this->common_model->randomPassword(6);

            if ($this->form_validation->run() == true) {
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'status' => $status,
                ];

                if ($this->input->post('change_password')) {
                    $this->reSendPasswordEmail();
                }
                $update_data = $this->common_model->UpdateTableData(USERS_TABLE, $data, ['id' => $id]);
                if ($update_data) {
                    $this->session->set_flashdata('flash_message', 'Users successfully updated.');
                    $this->session->set_flashdata('class', 'success');
                    redirect(base_url($this->path));
                    die();
                } else {
                    $this->session->set_flashdata('flash_message', 'Something went wrong please try again.');
                    $this->session->set_flashdata('class', 'danger');
                    redirect(base_url($this->path));
                    die();
                }
            }
        }
        $page_data['module_path'] = $this->path;
        $module = $this->_module;
        $controllerName = $this->_module . '/admin';
        $page_data['module_title'] = $module . " : Edit ";
        $page_data['module'] = $module;
        $page_data['id'] = $id;

        $this->load->view('common/header',$page_data);
        $this->load->view($module . '/forms/edit', $page_data);
        $this->load->view('common/footer');
    }

    function check_email()
    {
        $email = $this->input->post('email');
        $count = $this->common_model->checkExists(USERS_TABLE, ['email' => $email]);
        if ($count == 0) {
            return true;
        } else {
            $this->form_validation->set_message('check_email', $email . ' is already exists in our system.');
            return false;
        }
    }

    /* Delete function */

    public function delete($id)
    {
        // $id = $this->input->post('id');
        $update_data = $this->common_model->DeleteTableData(USERS_TABLE, ['id' => $id]);

        if($update_data)
        {
            $this->session->set_flashdata('flash_message','Agent deleted successfully.');
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

    public function change_status()
    {
        $type = $this->input->post('type');
        $value = $this->input->post('value');
        $pid = $this->input->post('pid');
        $this->db->set($type, $value, false);
        $this->db->where('id', $pid);
        $this->db->update(USERS_TABLE);
        if ($this->db->affected_rows()) {
            $result['status'] = "success";
            $result['html'] = "Data successfully updated";
            $result['type'] = "alert";
        } else {
            $result['status'] = "error";
            $result['html'] = "Something went wrong please try again.";
            $result['type'] = "alert";
        }
        echo json_encode($result);
    }

    public function sendWelcomeEmail()
	{
        // echo "hi";die;
		$to_email = $this->input->post('email');
        $website = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title')); 
		$from = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
		$subject = "Welcome";
		$message = 	"<html>
						<head>
							<title>Welcome</title>
						</head>
						<body>
							<p>Hi,</p>
							<p>Welcome to ".$website.".</p>
							<p>Email: ".$to_email."</p>
                            <p>Please click <a href=".base_url('auth/verify/').md5($to_email).">here</a>  to verify your email address and create a password.</p>
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
    public function reSendPasswordEmail()
	{
        // echo "hi";die;
		$to_email = $this->input->post('email');
        $website = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_title')); 
		$from = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'support_email'));
		$subject = "Reset your password";
		$message = 	"<html>
						<head>
							<title>Reset your password</title>
						</head>
						<body>
							<p>Hi,</p>
							<p>Admin has sent this email to reset your password for ".$website.".If you don't want or remember your password, then ignore this email.</p>
							<p>Email: ".$to_email."</p>
                            <p>Please click <a href=".base_url('auth/verify/').md5($to_email).">here</a>  to verify your email address and create a new password.</p>
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
}
