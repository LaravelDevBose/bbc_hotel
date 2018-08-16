<?php

class Event extends CI_Controller
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


	/*======== Event Page view ==========*/
	public function event_page_view()
	{
		$data['title'] 		= 'News & Event';
		$data['page_path'] 	= 'admin/event/event_page';
		$data['events']		= $this->NewsAndEvent_model->get_all_news_and_event();
		$this->load->view('admin/master', $data); 
	}

	/*======== Event Insert Page view ==========*/
	public function event_insert_page()
	{
		$data['title'] 		= 'News & Event';
		$data['page_path'] 	= 'admin/event/event_insert';
		$this->load->view('admin/master', $data); 
	}

	/*======= news and event store method ================*/

	public function news_and_event_store()
	{
		$this->form_validation->set_rules('title', 'Event Title', 'trim|required');
		$this->form_validation->set_rules('date', 'Event Date', 'trim|required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			
			$data['title'] 		= 'News & Event';
			$data['page_path'] 	= 'admin/event/event_insert';
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
					redirect('event/create');
				}
				
			}else{
				$file_path = null;
			}

			if($this->NewsAndEvent_model->insert_news_event_info($file_path)){
				$data['success'] = 'Stored Successfully.';
				$this->session->set_flashdata($data);
				redirect('event/create');
			}else{
				$data['error'] = 'Stored Un-Successfully.';
				$this->session->set_flashdata($data);
				redirect('event/create');
			}
			
		}
	}

	/*======= news and event Edit method ================*/

	public function news_and_event_edit($id=null)
	{
		$data['event'] = $this->NewsAndEvent_model->get_event_by_id($id);
		$this->load->view('admin/event/event_edit', $data);
	}

	/*======= news and event Edit method ================*/

	public function news_and_event_view($id=null)
	{
		$data['event'] = $this->NewsAndEvent_model->get_event_by_id($id);
		$this->load->view('admin/event/event_show', $data);
	}


	/*======= news and event Update method ================*/

	public function news_and_event_update($id=null)
	{
		$this->form_validation->set_rules('title', 'Event Title', 'trim|required');
		$this->form_validation->set_rules('date', 'Event Date', 'trim|required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');
			
		if($this->form_validation->run() == FALSE){
			
			$data['title']='News and Event';
			$data['page_path']='admin/event/news_event_edit_page';
			$data['event'] = $this->NewsAndEvent_model->get_event_by_id($id);
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
					redirect('event/edit_page/'.$id);
				}
				
			}else{
				$file_path = $this->input->post('old_image');
			}


			if($this->NewsAndEvent_model->update_news_event_info($id, $file_path)){
				$data['success'] = 'Update Successfully.';
				$this->session->set_flashdata($data);
				redirect('event_page');
			}else{
				$data['success'] = 'Update Un-Successfully.';
				$this->session->set_flashdata($data);
				redirect('event_page');
			}
		}
	}

	/*======= news and event delete method ================*/

	public function news_and_event_delete($id=null)
	{
		if($this->NewsAndEvent_model->new_event_delete($id)){
			$data['success'] = 'Delete Successfully.';
			$this->session->set_flashdata($data);
			redirect('event_page');
		}else{
			$data['error'] = 'Delete Un-Successfully.';
			$this->session->set_flashdata($data);
			redirect('event_page');
		}
	}



	/*==========Image Upload In Folder===========*/
	public function image_upload($imageName = null, $tmp_name){
		$type = explode('.', $imageName);
		$type = $type[count($type)-1];
		$file_name= uniqid(rand()).'.'.$type;

		if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' )) ){

				if( is_uploaded_file( $tmp_name ) ){
					$dist_path = 'libs/upload_pic/event_image/'.$file_name ;
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
		 $configSize1['new_image'] 		 = 'libs/upload_pic/event_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}
}