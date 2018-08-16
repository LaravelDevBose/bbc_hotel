<?php

class Service extends CI_Controller
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
	public function service_price_page()
	{
		$data['title'] 		= 'Service & Price';
		$data['page_path'] 	= 'admin/service/service_page';
		$data['services']	= $this->Service_model->get_all_service();
		$this->load->view('admin/master', $data); 
	}

	public function service_store()
	{
		$this->form_validation->set_rules('s_title', 'Title','trim|required');
		$this->form_validation->set_rules('price', 'Price','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Service & Price';
			$data['page_path'] 	= 'admin/service/service_page';
			$data['services']	= $this->Service_model->get_all_service();
			$this->load->view('admin/master', $data);
		}else{
			
			if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
				$image_path = null;
				if($this->Service_model->insert_service_data($image_path)){
					$data['success'] = 'Service Store Successfully!';
					$this->session->set_flashdata($data);
					redirect('service_page');
				}else{
					$data['error'] = 'Service Store Un-Successfully. Try Again!';
					$this->session->set_flashdata($data);
					redirect('service_page');
				}

			}else{
				if($image_path = $this->image_upload() ){
						$this->image_resize($image_path);

					if($this->Service_model->insert_service_data($image_path)){
						$data['success'] = 'Service Store Successfully!';
						$this->session->set_flashdata($data);
						redirect('service_page');
					}else{
						$data['error'] = 'Service Store Un-Successfully. Try Again!';
						$this->session->set_flashdata($data);
						redirect('service_page');
					}
					
				}else{
					$data['error']="Image Upload Failed!";
					$this->session->set_flashdata($data);
					redirect('service_page');
				}
			}
			
		}
	}


	public function service_edit($id = null)
	{
		$data['service'] = $this->Service_model->get_service_by_id($id);
		$this->load->view('admin/service/edit_service_page', $data);
	}


	/*========== update Service Info =============*/
	public function service_update($id=null)
	{	
		$old_image = $this->input->post('old_image');
		$this->form_validation->set_rules('s_title', 'Title','trim|required');
		$this->form_validation->set_rules('price', 'Price','trim|required');
		
		if($this->form_validation->run() == FALSE){
			$data['title'] 		= 'Service & Price';
			$data['page_path'] 	= 'admin/service/service_page';
			$data['services']	= $this->Service_model->get_all_service();
			$this->load->view('admin/master', $data);
		}else{
			
			if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
				$image_path = $old_image;
				if($this->Service_model->service_update_data( $id, $image_path)){
					$data['success'] = 'Service Update Successfully!';
					$this->session->set_flashdata($data);
					redirect('service_page');
				}else{
					$data['error'] = 'Service Update Un-Successfully. Try Again!';
					$this->session->set_flashdata($data);
					redirect('service_page');
				}

			}else{
				if($image_path = $this->image_upload() ){
						$this->image_resize($image_path);

					if($this->Service_model->service_update_data($id, $image_path)){

						if(file_exists($old_image)){
							unlink($old_image);
						}
						$data['success'] = 'Service Update Successfully!';
						$this->session->set_flashdata($data);
						redirect('service_page');
					}else{
						$data['error'] = 'Service Update Un-Successfully. Try Again!';
						$this->session->set_flashdata($data);
						redirect('service_page');
					}
					
				}else{
					$data['error']="Image Upload Failed!";
					$this->session->set_flashdata($data);
					redirect('service_page');
				}
			}
			
		}
	}


	public function service_delete($id=null)
	{
		if($this->Service_model->delete_service_data($id)){
			$data['success'] = 'Service Delete Successfully!';
			$this->session->set_flashdata($data);
			redirect('service_page');
		}else{
			$data['error'] = 'Service Delete Un-Successfully!';
			$this->session->set_flashdata($data);
			redirect('service_page');
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
						$dist = './libs/upload_pic/service_image/'.$file_name;
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
		 $configSize1['width']           = 400;
		 $config['quality']   			 = '100';
		 $configSize1['height']          = 400;
		 $configSize1['new_image'] 		 = './libs/upload_pic/service_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}










}