<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_m extends CI_Model {

	public function save_master($data)
	{
		$this->db->insert('tbl_employee',$data);
	}

	public function employee_list()
	{
		$this->db->from('tbl_employee');
		return $this->db->get();
	}

}

/* End of file Employee_m.php */
/* Location: ./application/models/hris/Employee_m.php */