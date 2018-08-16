<?php

class Business extends CI_Controller
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


	/*======== business Page view ==========*/
	public function business_page()
	{
		$data['title'] 		= 'Other Business';
		$data['page_path'] 	= 'admin/business/business_page';
		$data['business']	= $this->Business_model->get_all_business();
		$this->load->view('admin/master', $data); 
	}

	public function business_store_data()
	{
		$this->form_validation->set_rules('b_title', 'Title','trim|required');
		$this->form_validation->set_rules('description', 'Description','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Other Business';
			$data['page_path'] 	= 'admin/business/business_page';
			$data['business']	= $this->Business_model->get_all_business();
			$this->load->view('admin/master', $data);
		}else{
			
			if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
				$image_path = null;
				if($this->Business_model->insert_business_data($image_path)){
					$data['success'] = 'Data Store Successfully!';
					$this->session->set_flashdata($data);
					redirect('business');
				}else{
					$data['error'] = 'Data Store Un-Successfully. Try Again!';
					$this->session->set_flashdata($data);
					redirect('business');
				}

			}else{
				if($image_path = $this->image_upload() ){
						$this->image_resize($image_path);

					if($this->Business_model->insert_business_data($image_path)){
						$data['success'] = 'Service Store Successfully!';
						$this->session->set_flashdata($data);
						redirect('business');
					}else{
						$data['error'] = 'Service Store Un-Successfully. Try Again!';
						$this->session->set_flashdata($data);
						redirect('business');
					}
					
				}else{
					$data['error']="Image Upload Failed!";
					$this->session->set_flashdata($data);
					redirect('business');
				}
			}
			
		}
	}

	/*========= Show View page =========*/
	public function business_view_page($id = null)
	{	
		$data['title'] 		= 'Other Business View';
		$data['page_path'] 	= 'admin/business/business_view_page';
		$data['busines'] = $this->Business_model->get_busines_by_id($id);
		$this->load->view('admin/master', $data); 
	}

	/*========= Show Edit page =========*/
	public function business_edit_page($id = null)
	{	

		$data['title'] 		= 'Other Business Edit';
		$data['page_path'] 	= 'admin/business/business_edit_page';
		$data['busines'] = $this->Business_model->get_busines_by_id($id);
		$this->load->view('admin/master', $data); 
	}


	/*========== update business Info =============*/
	public function business_update_data($id=null)
	{	
		$old_image = $this->input->post('old_image');
		$this->form_validation->set_rules('b_title', 'Title','trim|required');
		$this->form_validation->set_rules('description', 'Description','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Other Business Edit';
			$data['page_path'] 	= 'admin/business/business_edit_page';
			$data['busines'] = $this->Business_model->get_busines_by_id($id);
			$this->load->view('admin/master', $data);
		}else{
			
			if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
				$image_path = $old_image;
				if($this->Business_model->business_update_data( $id, $image_path)){
					$data['success'] = 'Data Update Successfully!';
					$this->session->set_flashdata($data);
					redirect('business');
				}else{
					$data['error'] = 'Data Update Un-Successfully. Try Again!';
					$this->session->set_flashdata($data);
					redirect('business');
				}

			}else{
				if($image_path = $this->image_upload() ){
						$this->image_resize($image_path);

					if($this->Business_model->business_update_data($id, $image_path)){

						if(file_exists($old_image)){
							unlink($old_image);
						}
						$data['success'] = 'Data Update Successfully!';
						$this->session->set_flashdata($data);
						redirect('business');
					}else{
						$data['error'] = 'Data Update Un-Successfully. Try Again!';
						$this->session->set_flashdata($data);
						redirect('business');
					}
					
				}else{
					$data['error']="Image Upload Failed!";
					$this->session->set_flashdata($data);
					redirect('business');
				}
			}
			
		}
	}


	public function business_delete_data($id=null)
	{
		if($this->Business_model->delete_business_data($id)){
			$data['success'] = 'Data Delete Successfully!';
			$this->session->set_flashdata($data);
			redirect('business');
		}else{
			$data['error'] = 'Data Delete Un-Successfully!';
			$this->session->set_flashdata($data);
			redirect('business');
		}
	}


	/*====================Image Upload In Folder=====================*/
	/*====================Image Upload In Folder=====================*/
	public function image_upload(){
		if($this->Admin_model->is_admin_loged_in() ){
			$type = explode('.', $_FILES['image']['name']);
			$type = $type[count($type)-1];
			$file_name= uniqid(rand()).'.'.$type;

			if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPEG', 'PNG', 'JPEG', 'GIF' )) ){

					if( is_uploaded_file( $_FILES['image']['tmp_name'] ) ){
						$dist = './libs/upload_pic/business_image/'.$file_name;
					move_uploaded_file( $_FILES['image']['tmp_name'], $dist);
					return $dist;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	// =============== Resize Uploded Image ==================
	public function image_resize($sourse){

		 /* First size */
		 $configSize1['image_library']   = 'gd2';
		 $configSize1['source_image'] 	 = $sourse;
		 $configSize1['create_thumb']    = FALSE;
		 $configSize1['maintain_ratio']  = FALSE;
		 $configSize1['width']           = 200;
		 $config['quality']   			 = '100';
		 $configSize1['height']          = 200;
		 $configSize1['new_image'] 		 = './libs/upload_pic/business_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}










}