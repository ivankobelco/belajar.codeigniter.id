<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$data['title']='Test';
		$data['page']='test/test_v';
		$this->load->view('template', $data);
		// $this->load->view('test/test_v', $data);
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/test/Test.php */