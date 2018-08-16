<?php 

Class Admin extends CI_Controller{

	/*================View Login Page======================*/	
	public function index()
	{
		// echo $this->session->userdata('admin_id'); exit();

		if ($this->Admin_model->is_admin_loged_in()) 
		{
			redirect('dashboard');
			// $data['content'] = 'dashboard/home';  
			// $this->load->view('admin/master', $data);
		}
		else{
			$data['title']='Admin Login';
			$this->load->view('admin/login_page', $data);
		}
	}


	/*========== Admin Login Data Check ==========*/
	public function login_data_check()
	{
		$this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

		if($this->form_validation->run() == FALSE){
			echo json_encode(0);
			// $data['title']='Admin Login';
			// $this->load->view('admin/login_page', $data);
		}else{

			if($this->Admin_model->admin_login_data_check()){
				 echo json_encode(1);
			}else{
				echo json_encode(0);
			}
		}
	}

	/*=============== Logout Method ==============*/
	public function logout()
	{	
		//unset user session data
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');

		//destroy session data
		$this->session->sess_destroy();

		//redirect back to login page
		redirect('admin/login');
	}



	
}