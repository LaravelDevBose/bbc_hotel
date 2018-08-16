<?php

Class Service_model extends CI_Model{


	public function get_all_service()
	{
		$result = $this->db->order_by('id', 'desc')->get('servies')->result();
		if($result): return $result; else: return FALSE; endif;
	}

	public function home_page_service_data()
	{
		$result = $this->db->order_by('id', 'desc')->limit(8)->get('servies')->result();
		if($result): return $result; else: return FALSE; endif;
	}

	public function insert_service_data($image_path = null)
	{
		
		$attr = array(
			's_title' 	=> $this->input->post('s_title'), 
			'price' 	=> $this->input->post('price'), 
			'image' 		=> $image_path, 
			'description' 		=> $this->input->post('description'), 
			);

		$insert = $this->db->insert('servies', $attr);
		if($insert): return TRUE; else: return FALSE; endif;
	}

	/*========== get service Information by Id===========*/
	public function get_service_by_id($id=null)
	{
		$result = $this->db->where('id', $id)->get('servies')->row();
		if($result): return $result; else: return FALSE; endif;
	}

	/*========= update Service Info ==============*/
	public function service_update_data($id=null, $image_path = null)
	{
		$attr = array(
			's_title' 	=> $this->input->post('s_title'), 
			'price' 	=> $this->input->post('price'), 
			'image' 		=> $image_path, 
			'description' 		=> $this->input->post('description'), 
			);
		$this->db->where('id', $id);
		$res = $this->db->update('servies', $attr);

		if($res): return $res; else: return FALSE; endif;
	}

	/*========== Delete Service Information============*/
	public function delete_service_data($id=null)
	{
		$info = $this->db->where('id', $id)->get('servies')->row();

		$this->db->where('id', $id);
		$this->db->delete('servies');

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