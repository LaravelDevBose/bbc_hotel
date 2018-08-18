<?php

class Package_model  extends CI_Model
{
	
	/*========= get all package list=============*/
	public function get_all_package_list()
	{
		$result = $this->db->order_by('id', 'desc')->get('packages')->result();

		if($result): return $result; else: return FALSE; endif;
	}
 

	 /*========= get package data by id ========== */
	 public function get_package_by_id($id=null)
	 {
	 	$result = $this->db->where('id', $id)->get('packages')->row();

	 	if($result): return $result; else: return FALSE; endif;
	 }
	/* ======= Insert package Info =======*/
	public function insert_package_info($image_path = null)
	{	

		$attr = array(
			'title' 		=> $this->input->post('title'),
			'price' 		=> $this->input->post('price'),
			'description' 	=> $this->input->post('description'),
			'image' 		=> $image_path

		);

		$insert = $this->db->insert('packages', $attr);

		if($insert)
		{	
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}




	/*=========== update package==============*/
	public function update_package_info($id=null, $file_path = null)
	{
		$attr = array(
			'title' 		=> $this->input->post('title'),
			'price' 		=> $this->input->post('price'),
			'description'  	=> $this->input->post('description'),
			'image' 		=>$file_path
		);

		$this->db->where('id', $id);
		$this->db->update('packages', $attr);

		if( $this->db->affected_rows()){
			
			return TRUE;
		}else{
			return FALSE;
		}
	}


	public function package_delete($id=null)
	{	
		$data = $this->db->where('id', $id)->get('packages')->row();
		$this->db->where('id', $id);
		$this->db->delete('packages');
		if($this->db->affected_rows()){
			if(file_exists($data->image)){
				unlink($data->image);
			}
			return TRUE;
		}else{
			return FALSE;
		}
	}
}