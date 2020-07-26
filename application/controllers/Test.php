<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$data['title']='Belajar';
		$data['sub_title']='Day #1';
		$this->load->view('test_v',$data);
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */