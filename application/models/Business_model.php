<?php

Class Business_model extends CI_Model{


	public function get_all_business()
	{
		$result = $this->db->order_by('id', 'desc')->get('other_business')->result();
		if($result): return $result; else: return FALSE; endif;
	}

	public function singel_business($id = null)
	{
		$result = $this->db->where('id', $id)->get('other_business')->row();
		if($result): return $result; else: return FALSE; endif;
	}


	public function home_business_data()
	{
		$result = $this->db->order_by('id', 'desc')->limit(6)->get('other_business')->result();
		if($result): return $result; else: return FALSE; endif;
	}

	public function insert_business_data($image_path = null)
	{
		
		$attr = array(
			'b_title' 	=> $this->input->post('b_title'), 
			'image' 		=> $image_path, 
			'description' 		=> $this->input->post('description'), 
			);

		$insert = $this->db->insert('other_business', $attr);
		if($insert): return TRUE; else: return FALSE; endif;
	}

	/*========== get service Information by Id===========*/
	public function get_busines_by_id($id=null)
	{
		$result = $this->db->where('id', $id)->get('other_business')->row();
		if($result): return $result; else: return FALSE; endif;
	}

	/*========= update Service Info ==============*/
	public function business_update_data($id=null, $image_path = null)
	{
		$attr = array(
			'b_title' 	=> $this->input->post('b_title'), 
			'image' 		=> $image_path, 
			'description' 		=> $this->input->post('description'), 
			);
		$this->db->where('id', $id);
		$res = $this->db->update('other_business', $attr);

		if($res): return $res; else: return FALSE; endif;
	}

	/*========== Delete Service Information============*/
	public function delete_business_data($id=null)
	{
		$info = $this->db->where('id', $id)->get('other_business')->row();

		$this->db->where('id', $id);
		$this->db->delete('other_business');

		if($this->db->affected_rows()){

			if(file_exists($info->image)){
				unlink($info->image);
			}
			return TRUE;
		}else{
			return FALSE;
		}
	}
}