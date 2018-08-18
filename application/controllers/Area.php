<?php

class Area extends CI_Controller
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
	public function area_price_page()
	{
		$data['title'] 		= 'Area';
		$data['page_path'] 	= 'admin/area/area_page';
		$data['areas']	= $this->Area_model->get_all_area();
		$this->load->view('admin/master', $data); 
	}

	public function area_store()
	{
		$this->form_validation->set_rules('name', 'Area Name','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Area';
			$data['page_path'] 	= 'admin/area/area_page';
			$data['areas']	= $this->Area_model->get_all_area();
			$this->load->view('admin/master', $data); 
		}else{
			
			if($this->Area_model->insert_area_data()){
				$data['success'] = 'Area Store Successfully!';
				$this->session->set_flashdata($data);
				redirect('area_page');
			}else{
				$data['error'] = 'Area Store Un-Successfully. Try Again!';
				$this->session->set_flashdata($data);
				redirect('area_page');
			}
			
		}
	}


	public function area_edit($id = null)
	{
		$data['area'] = $this->Area_model->get_area_by_id($id);
		$this->load->view('admin/area/edit_area_page', $data);
	}


	/*========== update Service Info =============*/
	public function area_update($id=null)
	{	
		$this->form_validation->set_rules('name', 'Area Name','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Area';
			$data['page_path'] 	= 'admin/area/area_page';
			$data['areas']	= $this->Area_model->get_all_area();
			$this->load->view('admin/master', $data); 
		}else{
			
			if($this->Area_model->area_update_data( $id)){
				$data['success'] = 'Area Update Successfully!';
				$this->session->set_flashdata($data);
				redirect('area_page');
			}else{
				$data['error'] = 'Area Update Un-Successfully. Try Again!';
				$this->session->set_flashdata($data);
				redirect('area_page');
			}
		}
	}


	public function area_delete($id=null)
	{
		if($this->Area_model->delete_area_data($id)){
			$data['success'] = 'Area Delete Successfully!';
			$this->session->set_flashdata($data);
			redirect('area_page');
		}else{
			$data['error'] = 'Area Delete Un-Successfully!';
			$this->session->set_flashdata($data);
			redirect('area_page');
		}
	}



	public function area_wish_room_type()
	{
		$data['title'] 		= 'Area Wise Room';
		$data['page_path'] 	= 'admin/area/area_wise_room_type_page';
		$data['all_data']	= $this->Area_model->get_all_data();
		$data['areas']	= $this->Area_model->get_all_area();
		$data['room_types']	= $this->RoomType_model->get_all_room_type();
		$this->load->view('admin/master', $data); 
	}

	public function area_wish_room_type_store()
	{
		$this->form_validation->set_rules('area_id', 'Area Name','trim|required');
		$this->form_validation->set_rules('room_type_id', 'Room Type','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Area Wise Room';
			$data['page_path'] 	= 'admin/area/area_wise_room_type_page';
			$data['all_data']	= $this->Area_model->get_all_data();
			$data['areas']	= $this->Area_model->get_all_area();
			$data['room_types']	= $this->RoomType_model->get_all_room_type();
			$this->load->view('admin/master', $data);  
		}else{
			
			if($this->Area_model->insert_area_room_type_data()){
				$data['success'] = 'Store Successfully!';
				$this->session->set_flashdata($data);
				redirect('area_room_type');
			}else{
				$data['error'] = ' Store Un-Successfully. Try Again!';
				$this->session->set_flashdata($data);
				redirect('area_room_type');
			}
			
		}
	}

}