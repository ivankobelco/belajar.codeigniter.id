<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function index()
	{
		$data['title']='Employee';
		$data['sub_title']='Day #1';
		$this->load->view('test_v',$data);		
	}

}

/* End of file Employee.php */
/* Location: ./application/controllers/Employee.php */