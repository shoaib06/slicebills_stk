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
		$this->user_id = $this->session->userdata('user_id');
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('admin_id');
		$this->session->sess_destroy();
		
		redirect(base_url('/'), 'refresh' );
	}
	
	public function index()
	{
		$user_id = $this->user_id;
		$module = $this->_module; 
		
		$all_debts = $this->common_model->GetTotalCount(LEADS_TABLE);
		$page_data['all_debts'] = $all_debts;
		
		$today_debts = $this->common_model->GetTotalCount(LEADS_TABLE, array('timestamp >= ' => strtotime(date('d-m-Y'))) ); 
		$page_data['today_debts'] = $today_debts;
		
		
//		$total_debt_amount = $this->common_model->GetSum(LEADS_TABLE,'debt_amount');
		$page_data['total_debt_amount'] = 0;

		$all_agents = $this->common_model->GetTotalCount(USERS_TABLE, array('user_type' => 2)); 
		$page_data['all_agents'] = $all_agents;

		$all_admins = $this->common_model->GetTotalCount(USERS_TABLE, array('user_type' => 1)); 
		$page_data['all_admins'] = $all_admins;
		
		$page_data['module_title'] = ucfirst($module);
		$page_data['module'] = $module;
		
		
		
		$this->load->view('common/header',$page_data);
		$this->load->view($module.'/detail',$page_data);
		$this->load->view('common/footer');
	}
}
?>
