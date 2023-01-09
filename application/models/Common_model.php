<?php
class Common_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
        $this->load->library('email');

    }

    public function getMetaTagsgetMetaTags($page)
    {
        $result = $this->db
            ->select('*')
            ->from('seo')
            ->where("title LIKE '%$page%' AND deleted = '0' ")
            ->limit(1)
            ->get()
            ->result_array();
        if ($result) {
            return $result[0];
        } else {
            $default = [
                'keywords' => 'Subhash shipu,School,goschoolz,school promotion,teachers,school gallery,school events,events',
                'description' => 'Goschoolz.com, Promote Your school, Free of cost, get info about school staff, checkout school toppers, Check events held in school',
                'author' => 'Subhash Shipu',
            ];
            return $default;
        }
    }

    public function showAlertMsg()
    {
        if ($this->session->flashdata('flash_message')) { ?>
				<div class="sufee-alert alert with-close alert-<?php echo $this->session->flashdata('class'); ?> alert-dismissible fade show">
					 <?php echo $this->session->flashdata('flash_message'); ?>
                  
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<?php }
    }

    function get_letitude($address)
    {
        if (!empty($address)) {
            //Formatted address
            $formattedAddr = urlencode($address); //str_replace(' ','+',$address);
            //Send request and receive json data by address
            $geocodeFromAddr = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddr . '&sensor=true_or_false&key=AIzaSyBctpccdlEyWIjViiJ647iu4Gv2elTPw-I');
            $output = json_decode($geocodeFromAddr);
            //Get latitude and longitute from json data
            $data['latitude'] = $output->results[0]->geometry->location->lat;
            $data['longitude'] = $output->results[0]->geometry->location->lng;
            //Return latitude and longitude of the given address
            if (!empty($data)) {
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /* clean string */
    function clean($string)
    {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

        return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
    }

    /* FUNCTION USED TO CHECK ROW EXISTS OR NOTE IN TABLE */
    public function checkExists($table, $where)
    {
        return $this->db
            ->where($where)
            ->from($table)
            ->count_all_results();
    }
    /* Function used to get single row from table */
    public function GetSingleRow($table, $where)
    {
        $this->db->where($where);
        $query = $this->db->get($table);
        if ($query) {
            return $query->row();
        } else {
            return false;
        }
    }
    /* Function used to get single value from table */
    public function GetSingleValue($table, $select, $where)
    {
        $this->db->select($select);
        $this->db->limit(1);
        $this->db->where($where);
        $query = $this->db->get($table);
        if ($query) {
            return $query->row($select);
        } else {
            return false;
        }
    }
    /* Function used to get table rows  */
    public function GetTableRows($table, $where = null, $order = '', $limit_perpage = 0, $offset = 0)
    {
        if (!empty($limit_perpage)) {
            $this->db->limit($limit_perpage, $offset);
        }
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (is_array($order)) {
            $this->db->order_by($order[0], $order[1]);
        }
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function GetSelectedFields($table, $fields, $where = null)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (!empty($fields)) {
            $this->db->select($fields);
        }
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    /* FUNCTION USED TO SEND EMAIL ; */
    public function SendEmail($to, $from, $subject, $message,$website="")
    {
        $black_list = []; // GRAB THE LOCALHOST IP ADDRESS

        if (!in_array($_SERVER['REMOTE_ADDR'], $black_list)) {
            // CHECK IF NOT LOCALHOST
            $this->email->from($from, $website);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->set_mailtype("html");
            //Send mail
            if ($this->email->send()) {
                // if successfully send
                return true;
            } else {
                $errors = $this->email->print_debugger();
                echo "<pre>";
                print_r($errors);
                die;
            }
        }
    }

    

    public function CheckAdminSession()
    {
        // check admin session
        if (!$this->session->userdata('admin_id')) {
            redirect(base_url(), 'refresh');
        }
    }

    public function is_admin()
    {
        // check admin session
        // print_r($this->session->userdata('admin_id'));die;
        if ($this->session->userdata('admin_id')) {
            $admin_id= $this->session->userdata('admin_id');
            $users=$this->GetSingleRow(USERS_TABLE,['id'=>$admin_id]);
            // print_r($users);die;
            if($users && $users->user_type==1){
                return true;
            }
            return false;
        }
            return false;

    }

    public function GetTableResults($table, $where = null, $limit_perpage = 0, $offset = 0)
    {
        if (!empty($limit_perpage)) {
            $this->db->limit($limit_perpage, $offset);
        }
        if (!empty($where)) {
            $this->db->where($where);
        }
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function GetSum($table, $field, $where = "")
    {
        $this->db->select('sum(' . $field . ') as total');
        $this->db->from($table);
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            return $row['total'];
        } else {
            return 0;
        }
    }

    public function GetTableResultsIn($table, $where = null, $limit_perpage = 0, $offset = 0)
    {
        if (!empty($limit_perpage)) {
            $this->db->limit($limit_perpage, $offset);
        }
        if (!empty($where)) {
            $this->db->where_in($where[0], $where[1]);
        }
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function GetJoinData($fields, $table, $join_table, $condition,$where="")
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->join($join_table, $condition);
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get();
        return $query->result_array();
    }
    

    /* insert data into table */
    public function InsertTableData($table, $data)
    {
        if ($this->db->insert($table, $data)) {
            $insert_id = $this->db->insert_id();
            return $insert_id;
        } else {
            return false;
        }
    }

    /* insert multiple data into table */

    public function InsertMultipleData($table, $data)
    {
        if ($this->db->insert_batch($table, $data)) {
            $insert_id = $this->db->insert_id();
            return $insert_id;
        } else {
            return false;
        }
    }

    /* update table with new record */

    public function UpdateTableData($table, $data, $where)
    {
        $this->db->where($where);
        if ($this->db->update($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    /* delete row  */

    public function DeleteTableData($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    public function GetTotalCount($table, $where = "")
    {
        // get total counts ;

        if ($where) {
            $this->db->where($where);
        }
        return $this->db->from($table)->count_all_results();
    }

    public function SelectDropdownIn($table, $option, $field, $value = [], $where = "", $extra_field = '', $order = '')
    {
        // selected
        $html = "";
        if (!empty($where)) {
            $this->db->where_in($where[0], $where[1]);
        }
        if (is_array($order)) {
            $this->db->order_by($order[0], $order[1]);
        }
        $rows = $this->db->get($table)->result_array();
        foreach ($rows as $row) {
            $selected = "";
            if (is_array($value)) {
                if (in_array($row[$field], $value)) {
                    $selected = "selected";
                }
            }
            $efield = '';
            if (!empty($extra_field)) {
                $efield = $row[$extra_field];
            }
            $html .= '<option value = "' . $row[$field] . '" ' . $selected . ' extra_field = "' . $efield . '" >' . $row[$option] . '</option>';
        }
        return $html;
    }

    public function SelectDropdown($table, $option, $field, $value = [], $where = "", $extra_field = '', $order = '')
    {
        // selected
        $html = "";
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (is_array($order)) {
            $this->db->order_by($order[0], $order[1]);
        }
        $rows = $this->db->get($table)->result_array();

        $options = explode(',', $option);
        $option = $options[0];

        foreach ($rows as $row) {
            $selected = "";
            if (is_array($value)) {
                if (in_array($row[$field], $value)) {
                    $selected = "selected";
                }
            }
            $efield = '';
            if (!empty($extra_field)) {
                $efield = $row[$extra_field];
            }
            $option_1 = '';
            if (isset($options[1])) {
                $option_1 = '(' . $row[$options[1]] . ')';
            }

            $html .= '<option value = "' . $row[$field] . '" ' . $selected . ' extra_field = "' . $efield . '" >' . $row[$option] . ' ' . $option_1 . '</option>';
        }
        return $html;
    }

    function randomPassword()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyz0123456789";
        $pass = []; //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function GetAveRating($where)
    {
        $this->db->select('count(id) as rows');
        $this->db->select('sum(rating) as rating');
        $this->db->from('tbl_review');
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            $json_data['rows'] = $row['rows'];
            $json_data['ratings'] = $row['rating'];
        } else {
            $json_data['rows'] = 0;
            $json_data['ratings'] = 0;
        }
        return json_encode($json_data);
    }

    public function Timeago($time)
    {
        $time_difference = time() - $time;

        if ($time_difference < 1) {
            return 'less than 1 second ago';
        }
        $condition = [12 * 30 * 24 * 60 * 60 => 'year', 30 * 24 * 60 * 60 => 'month', 24 * 60 * 60 => 'day', 60 * 60 => 'hour', 60 => 'minute', 1 => 'second'];

        foreach ($condition as $secs => $str) {
            $d = $time_difference / $secs;

            if ($d >= 1) {
                $t = round($d);
                return $t . ' ' . $str . ($t > 1 ? 's' : '') . ' ago';
            }
        }
    }
}
