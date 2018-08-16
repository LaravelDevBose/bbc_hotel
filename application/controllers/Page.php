<?php
Class Page extends CI_Controller{


	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	/*========== member List page ===========*/
	public function member_list_page()
	{
		$data['title'] 		= 'Member List';
		$data['page_path'] 	= 'admin/member/member_list';
		$data['members']	= $this->User_model->get_all_user();
		$this->load->view('admin/master', $data); 
	}
	


	/*============== About Us Pages==============*/
	public function about_us_page()
	{
		$data['title']='About Us';
		$data['page_path']='admin/pages/about_us_page';
		$data['about_us'] = $this->Page_model->get_about_us_info();
		$this->load->view('admin/master', $data);
	}


	/*============ about us info update =============*/
	public function about_us_update()
	{
		$this->form_validation-> set_rules('about_us', 'About Us', 'trim|required');
			
		if($this->form_validation->run() == FALSE){ 
			$data['title']='About Us';
			$data['page_path']='admin/pages/about_us_page';
			$data['about_us'] = $this->Page_model->get_about_us_info();
			$this->load->view('admin/master', $data);
		}else{

			if($this->Page_model->insert_or_update_about_us_info()){
				$data['success'] = 'About Us Info Updated Successfully!';
				$this->session->set_flashdata($data);
				redirect('about_insert_page');
			}else{
				$data['error'] = 'About Us Info Not Updated Successfully!';
				$this->session->set_flashdata($data);
				redirect('about_insert_page');
			}
		}
	}


	// -----view About Page

	public function contact_us_page()
	{
		$data['title']='Contact Us';
		$data['page_path']='admin/pages/contact_us_page';
		$data['address'] = $this->Page_model->get_address_info();
		$data['phone'] = $this->Page_model->get_phone_info();
		$data['email'] = $this->Page_model->get_email_info();
		$this->load->view('admin/master', $data);
	}


	//========== updated About Us info

	public function contact_us_update()
	{
		if($this->Page_model->insert_or_update_contact_us_info()){
			$data['success'] = 'Contact Us Info Updated Successfully!';
			$this->session->set_flashdata($data);
			redirect('contact_us_page');
		}else{
			$data['error'] = 'Contact Us Info Not Updated Successfully!';
			$this->session->set_flashdata($data);
			redirect('contact_us_page');
		}
	}




	//========== Video Gallery page==========
	public function video_page()
	{
		$data['title']='Video Gallery';
		$data['page_path']='admin/pages/video_page';
		$data['videos'] = $this->Page_model->get_all_video();
		$this->load->view('admin/master', $data);
	}

	public function video_store()
	{
		$this->form_validation-> set_rules('video_link', 'Video Link', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			$data['title']='Video Gallery';
			$data['page_path']='admin/pages/video_page';
			$data['videos'] = $this->Page_model->get_all_video();
			$this->load->view('admin/master', $data);
		}else{

			if($this->Page_model->insert_video_path()){
				$data['success'] = 'Updated Successfully!';
				$this->session->set_flashdata($data);
				redirect('page/video');
			}else{
				$data['error'] = 'Updated Un-Successfully!';
				$this->session->set_flashdata($data);
				redirect('page/video');
			}
		}
	}

	//========== Slider Image Delete ============
	public function video_delete($id=null)
	{
		if($this->Page_model->delete_video($id)){

			$data['success'] = 'Delete Successfully';
			$this->session->set_flashData($data);
			redirect('page/video');
		}else{
			$data['error'] = 'Video Not Deleted. Try Again!';
			$this->session->set_flashData($data);
			redirect('page/video');
		}
	}
	
}