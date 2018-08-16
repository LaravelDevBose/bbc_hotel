<?php

class Material extends CI_Controller
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
	public function material_page()
	{
		$data['title'] 		= 'Material';
		$data['page_path'] 	= 'admin/material/material_page';
		$data['materials']	= $this->Material_model->get_all_material_data();
		$this->load->view('admin/master', $data); 
	}


	// ====== Slider Image Insert In database===========
	public function material_store()
	{ 	
		$imageName = $_FILES['image']['name'];

		
		if(!empty($imageName) && $imageName){
			if($this->Material_model->material_info_insert()){

				$data['success'] = 'Material Store Successfully';
				$this->session->set_flashData($data);
				redirect('material_page');
			}else{
				$data['error'] = 'Some Thing Wrong Try again Later';
				$this->session->set_flashData($data);
				redirect('material_page');
			}
		}else{
			$data['error'] = 'Select A Material Image First';
			$this->session->set_flashData($data);
			redirect('material_page');
		}
		
		
	}


	//========== Slider Image Delete ============
	public function material_delete($id=null)
	{
		if($this->Material_model->delete_material_info($id)){

			$data['success'] = 'Material Delete Successfully';
			$this->session->set_flashData($data);
			redirect('material_page');
		}else{
			$data['error'] = 'Material Not Deleted. Try Again!';
			$this->session->set_flashData($data);
			redirect('material_page');
		}
	}
}