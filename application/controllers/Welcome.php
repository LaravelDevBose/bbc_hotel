<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/login_page');
	}

	public function dashboard()
	{	
		$data['page_path'] = 'admin/home/index';
		$this->load->view('admin/master', $data);
	}
}
