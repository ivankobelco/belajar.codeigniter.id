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

	public function employee_list()
	{
		$data['title']='List Employee';
		$data['sub_title']='Day #1';
		$data['emp_list']=$this->employee_m->employee_list();

		$this->load->view('hris/employee_list_v',$data);	
	}

}

/* End of file Employee.php */
/* Location: ./application/controllers/Employee.php */