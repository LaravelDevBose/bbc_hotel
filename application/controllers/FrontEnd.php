<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontEnd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$vars['phone'] 		= $this->Page_model->get_phone_info();
		$vars['email'] 		= $this->Page_model->get_email_info();
		$vars['logo'] 		= $this->Template_model->get_logo();
		$vars['address'] 	= $this->Page_model->get_address_info();
		$vars['about_us'] 	= $this->Page_model->get_about_us_info();
		$vars['sliders']	= $this->Slider_model->get_all_slider_data();
		$this->load->vars( $vars);
	}

	public function index()
	{	
		// var_dump($this->Ads_model->middel_ads_data()); exit();
		$data['title']		='Home Page';
		$data['page_path']	='frontEnd/home/index';
		$data['note']		= $this->Template_model->get_wellcome_note();
		$data['serviess']	= $this->Service_model->home_page_service_data();
		$data['gallarys']	= $this->Gallary_model->get_images_for_homePage();
		$data['packages']	= $this->Package_model->get_all_package_list();
		$data['areas']	= $this->Area_model->get_all_area();
		$this->load->view('frontEnd/master', $data);
	}

	/*========= serach Rome Type ============*/
	public function serach_room_type()
	{
		$data = $this->RoomType_model->find_room_type();
		echo json_encode($data);
	}
	

	/*========= Booking data===========*/
	public function booking()
	{
		$data = array(
			'area_id' => $this->input->post('area_id'),
			'room_type' => $this->input->post('room_type'),
			'room_qty' => $this->input->post('room_qty'),
			'start_date' => $this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
			'adults' => $this->input->post('adults'),
			'children' => $this->input->post('children'),
		);

		$this->session->set_userdata($data);

		return redirect('person_info');
	}

	/*======== Booking person Info ==========*/
	public function person_info_page()
	{
		$data['title']		='Personal Information';
		$data['page_path']	='frontEnd/booking/person_info';
		$data['areas']	= $this->Area_model->get_all_area();
		$this->load->view('frontEnd/master', $data);
	}


	/*======= Booking Informatio store=========*/
	public function booking_store_data()
	{
		$this->form_validation->set_rules('persone_name', 'Name','trim|required');
		$this->form_validation->set_rules('cmpy_name', 'Company Name','trim|required');
		$this->form_validation->set_rules('phone_num', 'Phone Number','trim|required');
		$this->form_validation->set_rules('email', 'Email','trim|required');

		if($this->form_validation->run() == FALSE){
			$data['title']		='Personal Information';
			$data['page_path']	='frontEnd/booking/person_info';
			$data['areas']	= $this->Area_model->get_all_area();
			$this->load->view('frontEnd/master', $data);
		}else{
			
			if($this->Booking_model->store_booking_data()){
				
				redirect('bookig/complete');
			}else{
				$data['error'] = 'Room Booking Not Success. Try Again!';
				$this->session->set_flashdata($data);
				redirect('person_info');
			}
			
		}
	}


	public function booking_complete_message()
	{
		$data['title']		='Booking Complete';
		$data['page_path']	='frontEnd/booking/booking_success';
		
		$this->load->view('frontEnd/master', $data);
	}



	/*========= About us page============*/
	public function about_us_page()
	{	
		$data['title']		='About Us';
		$data['page_path']	= 'frontEnd/about_us/about_us_page';
		$data['areas']	= $this->Area_model->get_all_area();
		$this->load->view('frontEnd/master', $data);
	}

	/*========= Our Service Page ============*/
	public function our_service_page()
	{
		$data['title']		='Our Service';
		$data['page_path']	= 'frontEnd/service/service_page';
		$data['serviess']	= $this->Service_model->get_all_service();
		$this->load->view('frontEnd/master', $data);
	}

	/*======== Singel Service Page===========*/
	public function singel_service_page($id=null)
	{
		$data['service'] 	= $this->Service_model->get_service_by_id($id);
		$this->load->view('frontEnd/service/singel_service', $data);
	}

	/*====== photo Gallary page ============*/
	public function phote_gallary_page()
	{
		$data['title']		= 'Photo Gallary';
		$data['page_path'] 	= 'frontEnd/gallary/photo_gallary_page';
		$data['images'] 	= $this->Gallary_model->get_all_gallery_images();
		$this->load->view('frontEnd/master', $data);
	}

	
	/*========= contacts us page============*/
	public function contacts_us_page()
	{
		$data['title']='Contacts Us';
		$data['page_path'] = 'frontEnd/contact/contacts_us_page';
		$data['areas']	= $this->Area_model->get_all_area();
		$this->load->view('frontEnd/master', $data);
	}




	public function message()
	{
		$attr = array(
			'name' 		=> $this->input->post('name'),
			'phone_no' 		=> $this->input->post('phone_no'),
			'message' 	=> $this->input->post('message'),
		);
		

		$insert = $this->db->insert('messages', $attr);

		if($insert){
			$data['success'] = 'Thank Your! Your Message Send Succesfully';
			$this->session->set_flashdata($data);
			redirect('index');
		}else{
			$data['error'] = 'Your Message Not Send. Try Again!';
			$this->session->set_flashdata($data);
			redirect('index');
		}
	}
}
