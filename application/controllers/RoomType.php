<?php

class RoomType extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	public function index()
	{	
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}else{
			redirect('dashboard');
		}
	}


	/*======== Gallary Page view ==========*/
	public function room_type_page()
	{
		$data['title'] 		= 'Room Type';
		$data['page_path'] 	= 'admin/room_type/room_type_page';
		$data['room_types']	= $this->RoomType_model->get_all_room_type();
		$this->load->view('admin/master', $data); 
	}

	public function room_type_store()
	{
		$this->form_validation->set_rules('title', 'Title','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Room Type';
			$data['page_path'] 	= 'admin/room_type/room_type_page';
			$data['room_types']	= $this->RoomType_model->get_all_room_type();
			$this->load->view('admin/master', $data); 
		}else{
			
			if($this->RoomType_model->insert_room_type_data()){
				$data['success'] = 'Room Type Store Successfully!';
				$this->session->set_flashdata($data);
				redirect('room_type_page');
			}else{
				$data['error'] = 'Room Type Store Un-Successfully. Try Again!';
				$this->session->set_flashdata($data);
				redirect('room_type_page');
			}
			
		}
	}


	public function room_type_edit($id = null)
	{
		$data['room_type'] = $this->RoomType_model->get_room_type_by_id($id);
		$this->load->view('admin/room_type/edit_room_type_page', $data);
	}


	/*========== update Service Info =============*/
	public function room_type_update($id=null)
	{	
		$this->form_validation->set_rules('title', 'Title','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Room Type';
			$data['page_path'] 	= 'admin/room_type/room_type_page';
			$data['room_types']	= $this->RoomType_model->get_all_room_type();
			$this->load->view('admin/master', $data); 
		}else{
			
			if($this->RoomType_model->room_type_update_data( $id)){
				$data['success'] = 'Room Type Update Successfully!';
				$this->session->set_flashdata($data);
				redirect('room_type_page');
			}else{
				$data['error'] = 'Room Type Update Un-Successfully. Try Again!';
				$this->session->set_flashdata($data);
				redirect('room_type_page');
			}
		}
	}


	public function room_type_delete($id=null)
	{
		if($this->RoomType_model->delete_room_type_data($id)){
			$data['success'] = 'Room Type Delete Successfully!';
			$this->session->set_flashdata($data);
			redirect('room_type_page');
		}else{
			$data['error'] = 'Room Type Delete Un-Successfully!';
			$this->session->set_flashdata($data);
			redirect('room_type_page');
		}
	}


}