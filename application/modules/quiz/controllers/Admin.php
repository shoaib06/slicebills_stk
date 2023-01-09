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
        if (!$this->common_model->is_admin()) {
            redirect('dashboard/admin');
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('admin_id');
        $where = [];
        // $where[] = "id <> '$user_id' and user_type=1 ";
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
        $page_data["results"] = $this->common_model->GetTableRows(QUESTION_TABLE, $where, ['id', 'desc'], $limit, $page);
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
            $question = strip_tags($this->input->post('question'));
            $answers = $this->input->post('answer');
            $correct = strip_tags($this->input->post('correct'));
            
            $this->form_validation->set_rules('question', 'Question', 'trim|required|xss_clean');
            $this->form_validation->set_rules('correct', 'Correct Answer', 'trim|required|xss_clean');
            
            // print_r($this->input->post());die;


            if ($this->form_validation->run() == true) {
                $data = [
                    'question' => $question,                    
                    'status' => 1,
                    'created_by' => $admin_id,
                    'timestamp' => time(),
                    
                ];

                $insert_id = $this->common_model->InsertTableData(QUESTION_TABLE, $data);
                if ($insert_id) {
                    $i=1;
                    foreach ($answers as $answer) {

                        $q_answer_data=[
                            'question_id'=>$insert_id,
                            'answer'=>$answer,
                            'is_correct'=>$correct==$i?1:0

                        ];
                        $i++; 
                       $this->common_model->InsertTableData(QUESTION_ANSWER_TABLE, $q_answer_data);
                        
                    }
                    // echo "<pre>";
                    // print_r($q_answer_data);die;

                    
                    $this->session->set_flashdata('flash_message', 'Question added successfully ');
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
        $page_data = (array) $this->common_model->GetSingleRow(QUESTION_TABLE, ['id' => $id]); 
        $page_data['id']=$id;
        $condition = QUESTION_TABLE.".id=".QUESTION_ANSWER_TABLE.".question_id";

        $page_data["answers"] = $this->common_model->GetJoinData([QUESTION_ANSWER_TABLE.'.*'], QUESTION_TABLE, QUESTION_ANSWER_TABLE, $condition,['question_id'=>$id]);


        // echo "<pre>";
        // print_r($page_data);die;


        if (!count($page_data)) {
            redirect(base_url($this->_module . '/admin'));
        }
        
        if ($this->input->post('s')) {
            // if form submitted
            $question = strip_tags($this->input->post('question'));
            $answers = $this->input->post('answers');
            $correct = strip_tags($this->input->post('correct'));
            $status = strip_tags($this->input->post('status'));
            // echo "<pre>";
            // print_r($this->input->post());die;

           
            $this->form_validation->set_rules('question', 'Question', 'trim|required|xss_clean');
            $this->form_validation->set_rules('correct', 'Correct Answer', 'trim|required|xss_clean');


            if ($this->form_validation->run() == true) {
                $data = [
                    'question' => $question,                    
                    'status' => $status,
                    'timestamp' => time(),
                    
                ];
               
                $update_data = $this->common_model->UpdateTableData(QUESTION_TABLE, $data, ['id' => $id]);
                echo "<pre>";
                // print_r($correct);die;
                if ($update_data) {

                    $i=1;
                    foreach ($answers as $key=>$answer) {

                        $q_answer_data=[
                            
                            'answer'=>$answer,
                            'is_correct'=>$correct==$i?1:0

                        ];
                        $i++; 
                       $this->common_model->UpdateTableData(QUESTION_ANSWER_TABLE, $q_answer_data, ['id' => $key]);
                        
                    }

                    $this->session->set_flashdata('flash_message', 'Question successfully updated.');
                    $this->session->set_flashdata('class', 'success');
                    redirect(base_url($this->path).'/edit/'.$id);
                    die();
                } else {
                    $this->session->set_flashdata('flash_message', 'Something went wrong please try again.');
                    $this->session->set_flashdata('class', 'danger');
                    redirect(base_url($this->path).'/edit/'.$id);
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
        $update_data = $this->common_model->DeleteTableData(QUESTION_TABLE, ['id' => $id]);
        $delete_answer_data = $this->common_model->DeleteTableData(QUESTION_ANSWER_TABLE, ['question_id' => $id]);

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

    
}
