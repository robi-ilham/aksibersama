<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registers extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/view_registers');
	}

	function addData()
	{
		$this->load->view('admin/view_form_registers');
	}

}

/* End of file registers.php */
/* Location: ./application/controllers/registers.php */