<?php

class Package extends CI_Controller
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


	/*======== package Page view ==========*/
	public function package_page_view()
	{
		$data['title'] 		= 'Package';
		$data['page_path'] 	= 'admin/package/package_page';
		$data['packages']		= $this->Package_model->get_all_package_list();
		$this->load->view('admin/master', $data); 
	}

	/*======== package Insert Page view ==========*/
	public function package_insert_page()
	{
		$data['title'] 		= 'Package Insert';
		$data['page_path'] 	= 'admin/package/package_insert';
		$this->load->view('admin/master', $data); 
	}

	/*======= package store method ================*/

	public function package_store()
	{
		$this->form_validation->set_rules('title', 'Package Title', 'trim|required');
		$this->form_validation->set_rules('price', 'Package Price', 'trim|required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			
			$data['title'] 		= 'Package';
			$data['page_path'] 	= 'admin/package/package_insert';
			$this->load->view('admin/master', $data);
		}else{
			$imageName = $_FILES['image']['name'];	
			$tmp_name = $_FILES['image']['tmp_name'];	

			if(!empty($imageName) && isset($imageName)){
				if($file_path = $this->image_upload($imageName, $tmp_name)){
					$this->image_resize($file_path);
				}else{
					$data['error'] = 'Image is not uploded';
					$this->session->set_flashdata($data);
					redirect('package/create');
				}
				
			}else{
				$file_path = null;
			}

			if($this->Package_model->insert_package_info($file_path)){
				$data['success'] = 'Stored Successfully.';
				$this->session->set_flashdata($data);
				redirect('package/create');
			}else{
				$data['error'] = 'Stored Un-Successfully.';
				$this->session->set_flashdata($data);
				redirect('package/create');
			}
			
		}
	}

	/*======= package Edit method ================*/

	public function package_edit($id=null)
	{	
		$data['title'] 		= 'Package Insert';
		$data['page_path'] 	= 'admin/package/package_edit';
		$data['package'] = $this->Package_model->get_package_by_id($id);
		$this->load->view('admin/master', $data);
	}

	/*======= package Edit method ================*/

	public function package_view($id=null)
	{
		$data['package'] = $this->Package_model->get_package_by_id($id);
		$this->load->view('admin/package/package_show', $data);
	}


	/*=======package Update method ================*/

	public function package_update($id=null)
	{
		$this->form_validation->set_rules('title', 'Package Title', 'trim|required');
		$this->form_validation->set_rules('price', 'Package Price', 'trim|required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			
			$data['title'] 		= 'Package';
			$data['page_path'] 	= 'admin/package/package_page';
			$data['packages']		= $this->Package_model->get_all_package_list();
			$this->load->view('admin/master', $data); 
		}else{
			$imageName = $_FILES['image']['name'];	
			$tmp_name = $_FILES['image']['tmp_name'];	

			if(!empty($imageName) && isset($imageName)){
				if($file_path = $this->image_upload($imageName, $tmp_name)){
					$this->image_resize($file_path);

					if(file_exists($this->input->post('old_image'))){
						unlink($this->input->post('old_image'));
					}
					
				}else{
					$data['error'] = 'Image is not uploded';
					$this->session->set_flashdata($data);
					redirect('package_page');
				}
				
			}else{
				$file_path = $this->input->post('old_image');
			}


			if($this->Package_model->update_package_info($id, $file_path)){
				$data['success'] = 'Update Successfully.';
				$this->session->set_flashdata($data);
				redirect('package_page');
			}else{
				$data['success'] = 'Update Un-Successfully.';
				$this->session->set_flashdata($data);
				redirect('event_page');
			}
		}
	}

	/*======= package delete method ================*/

	public function package_delete($id=null)
	{
		if($this->Package_model->package_delete($id)){
			$data['success'] = 'Delete Successfully.';
			$this->session->set_flashdata($data);
			redirect('package_page');
		}else{
			$data['error'] = 'Delete Un-Successfully.';
			$this->session->set_flashdata($data);
			redirect('package_page');
		}
	}



	/*==========Image Upload In Folder===========*/
	public function image_upload($imageName = null, $tmp_name){
		$type = explode('.', $imageName);
		$type = $type[count($type)-1];
		$file_name= uniqid(rand()).'.'.$type;

		if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' )) ){

				if( is_uploaded_file( $tmp_name ) ){
					$dist_path = 'libs/upload_pic/package_image/'.$file_name ;
				move_uploaded_file( $tmp_name, $dist_path);
				return $dist_path;
				
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
		 $configSize1['width']           = 600;
		 $config['quality']   			 = '100';
		 $configSize1['height']          = 600;
		 $configSize1['new_image'] 		 = 'libs/upload_pic/package_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}
}