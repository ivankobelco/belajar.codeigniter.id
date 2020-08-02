<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_list extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('hris/employee_m');
	}

	public function index()
	{
		$data['title']='Employee List';
		$data['sub_title']='Day #2';
		$data['page']='hris/employee_list_dt_v';

		$this->load->view('template',$data);		
	}

	function data_table(){
		$qry =$this->employee_m->employee_list();

		$i=1;
		foreach ($qry->result() as $rows) {

			$row=[];
			$row[] = $i;
			$row[] = $rows->emp_id;
			$row[] = $rows->emp_name;

			$row[] = '<span class="btn btn-xs btn-success waves-effect" onclick="update_emp(\''.$i.'\',\''.$rows->emp_id.'\',\''.$rows->emp_name.'\')"><i class="fas fa-save"></i>EDIT</span>	';
			$row[] = '';

			$data[]=$row;
		$i++;
		}
		echo json_encode(['data' => $data]);		

	}



}

/* End of file Employee_list.php */
/* Location: ./application/controllers/hris/Employee_list.php */