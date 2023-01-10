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
		$this->user_id = $this->session->userdata('admin_id');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$user_id = $this->user_id;
		$where = [];
		$where = self::filter_query($where);
		
		$where = implode(' AND ', $where);
		
		$config["base_url"] = base_url().$this->path."/".$this->method_name;
		$config["total_rows"] = $this->common_model->GetTotalCount(LEADS_TABLE, $where);
		$result_per_page = $this->common_model->GetSingleValue(SETTINGS_TABLE,'value',array('type' => 'result_per_page'));
		$config["per_page"] = $result_per_page;
		$config['uri_segment'] = 4;
		$limit = $config['per_page'];
		$config['reuse_query_string'] = true;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$join_table = USERS_TABLE;
		$condition = "tbl_leads.user_id=tbl_users.id";
		$page_data["results"] = $this->common_model->GetTableRows('tbl_leads', $where);


		// $this->db->select('*');
		// $this->db->from('tbl_leads leads'); 
		// $this->db->join('tbl_users users', 'leads.user_id=users.id');
		
		// $this->db->order_by('c.track_title','asc');         
		// $query = $this->db->get(); 


		$page_data["pagination"] = $this->pagination->create_links();
		$controllerName =  $this->_module.'/admin';
		$module = $this->_module;
		$page_data['module_title'] = ucfirst($module); 
		
		// echo "<pre>";
		// print_r($page_data["results"]);die;
		
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
		if(isset($_GET['from']) && isset($_GET['to']) )
			{
				if(!empty($_GET['from']) && !empty($_GET['to']))
				{
					$from = strtotime($_GET['from']);
					$to = strtotime($_GET['to']);
					$where[] = "  timestamp between '$from' and '$to'   ";
				}
				elseif(!empty($_GET['from']))
				{
					$from = strtotime($_GET['from']);
					$where[] = "  timestamp >= '$from' ";
				}
				elseif(!empty($_GET['to']))
				{
					$to = strtotime($_GET['to']);
					$where[] = "  timestamp <= '$to' ";
				}
			}
		return $where; 
	}
	// Export data in CSV format 
	public function exportCSV()
	{ 
	   // file name 
	   $filename = 'leads'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
	   header("Content-Disposition: attachment; filename=$filename"); 
	   header("Content-Type: application/csv; "); 
	   
		// get data 
		$where = [];
		$where = self::filter_query($where);
		$where = implode(' AND ', $where);


		$results = $this->common_model->GetTableRows('tbl_leads', $where);
		
		
	   // file creation 
	   $file = fopen('php://output', 'w');
	 
	   $header = array("First Name","Last Name","Email","Phone","DOB","Gender","State","City","Zip Code","Certificate","Ping Url","IP Address","Submitted by");
		fputcsv($file, $header);
	   foreach($results as $key=>$data){

			$new_data['first_name'] = $data['first_name'];
			$new_data['last_name'] = $data['last_name'];
			$new_data['email'] = $data['email'];
			$new_data['phone'] = $data['phone'];
			$new_data['debt_amount'] = $data['debt_amount'];
			$new_data['employment_status'] = $data['employment_status'];
			$new_data['contibute_factor'] = $data['contibute_factor'];
			$new_data['loan_type'] = $data['loan_type'];
			$new_data['have_st_loan'] = $data['have_st_loan'];
			$new_data['st_loan_type'] = $data['st_loan_type'];
			$new_data['falling_behind_payment'] = $data['falling_behind_payment'];
			$new_data['property_live_in'] = $data['property_live_in'];
			$new_data['zip_code'] = $data['zip_code'];
		    // $new_data['date_time'] = date('m-d-Y H:i A',strtotime($data['date_time']));
			$new_data['certUrl'] = $data['certUrl'];
			$new_data['pingUrl'] = $data['pingUrl'];
			$new_data['ip_address'] = $data['ip_address'];
			$new_data['timestamp'] = date('d-M-Y',$data['timestamp']);
			fputcsv($file,$new_data); 
	   }
		fclose($file); 
	   exit; 
	  }
	
	
}
?>
