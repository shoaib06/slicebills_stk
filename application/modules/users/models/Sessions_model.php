<?php
class Sessions_model extends CI_Model
{
    public function CheckAdminSession()
    {
        // check admin session
        if (!$this->session->userdata('admin_id')) {
            redirect(base_url(), 'refresh');
        }
    }
	
}
?>
