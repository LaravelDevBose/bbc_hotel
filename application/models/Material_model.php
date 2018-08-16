<?php 
 
class Material_model extends CI_Model
{
	//======= Get all gallery images
	public function get_all_material_data()
	{
		$result = $this->db->order_by('id', 'desc')->get('materials')->result();

		if($result): return $result; else: return FALSE; endif;
	}

	//======= Get all gallery images
	public function get_images_for_homePage()
	{
		$result = $this->db->order_by('id', 'desc')->limit(4)->get('materials')->result();

		if($result): return $result; else: return FALSE; endif;
	}



	//======== Store Slider Image Information
	public function material_info_insert()
	{
		$imageName = $_FILES['image']['name'];	
		$tmp_name = $_FILES['image']['tmp_name'];	

		$file_path = $this->image_upload($imageName, $tmp_name);
		$this->image_resize($file_path);
		$attr = array(
			'material_name' => $this->input->post('material_name'),
			'image' =>$file_path
		);
		$insert = $this->db->insert('materials', $attr);

		if($insert): return TRUE; else: return FALSE; endif; 
	}

	//========= Slider Inage Delete ==========
	public function delete_material_info($id=null)
	{
		
		$image = $this->db->where('id', $id)->get('materials')->row();
		$this->db->where('id', $id);
		$this->db->delete('materials');

		if($this->db->affected_rows()){

			if(file_exists($image->image)){
				unlink($image->image);
			}
			return TRUE;
		}else{
			return FALSE;
		}

	}

	/*==========Image Upload In Folder===========*/
	public function image_upload($imageName = null, $tmp_name){
		$type = explode('.', $imageName);
		$type = $type[count($type)-1];
		$file_name= uniqid(rand()).'.'.$type;

		if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' )) ){

				if( is_uploaded_file( $tmp_name ) ){
					$dist_path = 'libs/upload_pic/material_image/'.$file_name ;
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
		 $configSize1['new_image'] 		 = 'libs/upload_pic/material_image/';

		 $this->image_lib->initialize($configSize1);
		 $this->image_lib->resize();
		 $this->image_lib->clear();		 
	}
	
}