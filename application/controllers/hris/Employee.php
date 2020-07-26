<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('hris/employee_m');
	}

	public function index()
	{
		$data['title']='Employee';
		$data['sub_title']='Day #1';
		$this->load->view('hris/employee_v',$data);		
	}

	public function save_master()
	{
		$data=[
			'emp_id'=>$this->input->post('emp_id'),
			'emp_name'=>$this->input->post('emp_name')
		];

		$this->employee_m->save_master($data);
		$this->employee_list();
	}

	public function update_master()
	{
		$emp_id=$this->input->post('emp_id');

		$data=[
			'emp_name'=>$this->input->post('emp_name')
		];

		$this->employee_m->update_master($emp_id,$data);
		$this->employee_list();
	}

	public function delete_master()
	{
		$emp_id=$this->input->get('emp_id');

		$this->db->where('emp_id', $emp_id);
		$this->db->delete('tbl_employee');
		
		$this->employee_list();
	}	

	public function employee_list()
	{
		$data['title']='List Employee';
		$data['sub_title']='Day #1';
		$data['emp_list']=$this->employee_m->employee_list();

		$this->load->view('hris/employee_list_v',$data);	
	}

	function edit_master()
	{
		$emp_id=$this->input->get('emp_id');

		$data['title']='List Employee';
		$data['sub_title']='Day #1';
		$data['emp_data']=$this->employee_m->edit_master($emp_id);

		$this->load->view('hris/edit_master_v',$data);		
	}

}

/* End of file Employee.php */
/* Location: ./application/controllers/Employee.php */