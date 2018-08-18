<?php

Class RoomType_model extends CI_Model{


	public function get_all_room_type()
	{
		$result = $this->db->where('status', 'a')->order_by('id', 'desc')->get('room_types')->result();
		if($result): return $result; else: return FALSE; endif;
	}


	public function find_room_type()
	{
		// $area_id = '3';
		$area_id = $this->input->post('area_id');
		$this->db->select('room_types.id,room_types.title ');
		$this->db->from('area_room_types');
		$this->db->join('room_types', 'room_types.id = area_room_types.room_type_id');
		$this->db->where('area_room_types.area_id', $area_id);
		$result = $this->db->order_by('id', 'desc')->get()->result();
		if($result): return $result; else: return FALSE; endif;
	}

	public function insert_room_type_data()
	{
		
		$attr = array(
			'title' 	=> $this->input->post('title'),  
			'description' 		=> $this->input->post('description'), 
			'status' 		=> 'a', 
			);

		$insert = $this->db->insert('room_types', $attr);
		if($insert): return TRUE; else: return FALSE; endif;
	}

	/*========== get service Information by Id===========*/
	public function get_room_type_by_id($id=null)
	{
		$result = $this->db->where('id', $id)->get('room_types')->row();
		if($result): return $result; else: return FALSE; endif;
	}

	/*========= update Service Info ==============*/
	public function room_type_update_data($id=null)
	{
		$attr = array(
			'title' 	=> $this->input->post('title'),  
			'description' 		=> $this->input->post('description'), 
			'status' 		=> 'a', 
			);
		$this->db->where('id', $id);
		$res = $this->db->update('room_types', $attr);

		if($res): return $res; else: return FALSE; endif;
	}

	/*========== Delete Service Information============*/
	public function delete_room_type_data($id=null)
	{
		$attr = array(
			'status' 		=> 'd', 
			);
		$this->db->where('id', $id);
		$res = $this->db->update('room_types', $attr);

		if($res): return $res; else: return FALSE; endif;
	}
}