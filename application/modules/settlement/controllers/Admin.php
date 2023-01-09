<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
		$this->path =$this->_module.'/'.$this->controller_name;
		
	}
	
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$where = [];
		$where = self::filter_query($where);
		$where = implode(' AND ', $where);
		
		$config["base_url"] = base_url().$this->path."/".$this->method_name;
		$config["total_rows"] = $this->common_model->GetTotalCount(SETTLEMENT_TABLE, $where);
		$result_per_page = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'result_per_page'));
		$config["per_page"] = $result_per_page;
		$config['uri_segment'] = 4;
		$config['reuse_query_string'] = true;
		$limit = $config['per_page'];
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$page_data["results"] = $this->common_model->GetTableRows(SETTLEMENT_TABLE,$where,array('id','desc'),$limit,$page);
		$page_data["pagination"] = $this->pagination->create_links();
		
		$controllerName =  $this->_module.'/admin';
		$module = $this->_module;
		$page_data['module_title'] = ucfirst($module); 
		
		
		$page_data['module'] = $module;
		$this->load->view('common/header',$page_data);
		$this->load->view($module.'/detail',$page_data);
		$this->load->view('common/footer');
	}
	
	public function filter_query($where = [])
	{
		foreach($_GET as $key => $value)
		{
			$value = strip_tags($value);
			if($key <> "from" && $key <> "to")
			{
				if($key == "type")
				{
					if($value <> "")
					{
						$where[] = "  $key LIKE '%$value%'   ";
					}
				}
				else
				{
					if($value <> "")
					{
						$where[] = "  $key = '$value'   ";
					}
				}
			}
		}
		return $where; 
	}
	
	public function add()
	{
		if($this->input->post('s')) // if form submitted
		{
			$creditor = strip_tags($this->input->post('creditor'));
			$debt_amount = strip_tags($this->input->post('debt_amount'));
			$settlement = strip_tags($this->input->post('settlement'));
			$savings = strip_tags($this->input->post('savings'));
			
			
			$this->form_validation->set_rules('creditor', 'Creditor', 'trim|required|xss_clean');
			$this->form_validation->set_rules('debt_amount', 'Debt Amount', 'trim|required|xss_clean');
			$this->form_validation->set_rules('settlement', 'Settlement', 'trim|required|xss_clean');
			$this->form_validation->set_rules('savings', 'Savings', 'trim|required|xss_clean');
			if ($this->form_validation->run() == true)
			{
			
				$data = array
					(
						
						'creditor' => $creditor,
						'debt_amount' => $debt_amount,
						'settlement' => $settlement,
						'savings' => $savings,
						'timestamp' => time(),
					);
					
				$insert_id = $this->common_model->InsertTableData(SETTLEMENT_TABLE,$data);
				if($insert_id)
				{
					$this->session->set_flashdata('flash_message','Review successfully added.');
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
		}
		
		$page_data['module_path'] = $this->path;
		$module = $this->_module;
		$controllerName =  $this->_module.'/admin';
		$page_data['module_title'] = $module." : Add ";
		$page_data['module'] = $module;
		$this->load->view('common/header',$page_data);
		$this->load->view($module.'/forms/add',$page_data);
		$this->load->view('common/footer');
	}
	
	public function edit($id) // Update function
	{
		$page_data = (array)$this->common_model->GetSingleRow(SETTLEMENT_TABLE,array('id' => $id)); // get data
		if(!count($page_data)) { redirect(base_url($this->_module.'/admin')); }
		
		if($this->input->post('s')) // if form submitted
		{
			$creditor = strip_tags($this->input->post('creditor'));
			$debt_amount = strip_tags($this->input->post('debt_amount'));
			$settlement = strip_tags($this->input->post('settlement'));
			$savings = strip_tags($this->input->post('savings'));
			
			
			$this->form_validation->set_rules('creditor', 'Creditor', 'trim|required|xss_clean');
			$this->form_validation->set_rules('debt_amount', 'Debt Amount', 'trim|required|xss_clean');
			$this->form_validation->set_rules('settlement', 'Settlement', 'trim|required|xss_clean');
			$this->form_validation->set_rules('savings', 'Savings', 'trim|required|xss_clean');
			
			$password = $this->common_model->randomPassword(6);
			
			if ($this->form_validation->run() == true)
			{
				$data = array
					(
						
						'creditor' => $creditor,
						'debt_amount' => $debt_amount,
						'settlement' => $settlement,
						'savings' => $savings,
						
					);
					
					
				$update_data = $this->common_model->UpdateTableData(SETTLEMENT_TABLE,$data,array('id' => $id));
				if($update_data)
				{
					$this->session->set_flashdata('flash_message','Review successfully updated.');
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
		}
		
		$page_data['module_path'] = $this->path;
		$module = $this->_module;
		$controllerName =  $this->_module.'/admin';
		$page_data['module_title'] = $module." : Edit ";
		$page_data['module'] = $module;
		$this->load->view('common/header',$page_data);
		$this->load->view($module.'/forms/edit',$page_data);
		$this->load->view('common/footer');
		
	}
	
	
	/* Delete function */
	
	public function delete()
	{
		$id = $this->input->post('id');
		$update_data = $this->common_model->DeleteTableData(SETTLEMENT_TABLE,array('id' => $id));
		if($update_data)
		{
			$result['status'] = "success";
			$result['html'] = "Review Successfully Deleted.";
			$result['type'] = "alert";
		}
		else
		{
			$result['status'] = "error";
			$result['html'] = "Something went wrong please try again.";
			$result['type'] = "alert";
		}
		echo json_encode($result);
	}
}
	
?>
