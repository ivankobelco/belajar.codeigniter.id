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

	function edit_master($emp_id)
	{
		$this->db->where('emp_id', $emp_id);
		$this->db->from('tbl_employee');

		return $this->db->get();		
	}

	function update_master($emp_id,$data){
		$this->db->where('emp_id', $emp_id);
		$this->db->update('tbl_employee',$data);		
	}

}

/* End of file Employee_m.php */
/* Location: ./application/models/hris/Employee_m.php */