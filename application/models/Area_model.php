<?php

Class Area_model extends CI_Model{


	public function get_all_area()
	{
		$result = $this->db->where('status', 'a')->order_by('id', 'desc')->get('areas')->result();
		if($result): return $result; else: return FALSE; endif;
	}


	public function get_all_data()
	{
		$this->db->select('area_room_types.*, areas.name, room_types.title');
		$this->db->from('area_room_types');
		$this->db->join('areas', 'areas.id = area_room_types.area_id');
		$this->db->join('room_types', 'room_types.id = area_room_types.room_type_id');
		$result = $this->db->order_by('id', 'desc')->get()->result();

		if($result): return $result; else: return FALSE; endif;
	}
	public function insert_area_data()
	{
		
		$attr = array(
			'name' 	=> $this->input->post('name'),  
			'description' 		=> $this->input->post('description'), 
			'status' 		=> 'a', 
			);

		$insert = $this->db->insert('areas', $attr);
		if($insert): return TRUE; else: return FALSE; endif;
	}

	/*========== get service Information by Id===========*/
	public function get_area_by_id($id=null)
	{
		$result = $this->db->where('id', $id)->get('areas')->row();
		if($result): return $result; else: return FALSE; endif;
	}

	/*========= update Service Info ==============*/
	public function area_update_data($id=null)
	{
		$attr = array(
			'name' 	=> $this->input->post('name'),  
			'description' 		=> $this->input->post('description'), 
			'status' 		=> 'a', 
			);
		$this->db->where('id', $id);
		$res = $this->db->update('areas', $attr);

		if($res): return $res; else: return FALSE; endif;
	}

	/*========== Delete Service Information============*/
	public function delete_area_data($id=null)
	{
		$attr = array(
			'status' 		=> 'd', 
			);
		$this->db->where('id', $id);
		$res = $this->db->update('areas', $attr);

		if($res): return $res; else: return FALSE; endif;
	}

	public function insert_area_room_type_data()
	{
		
		$attr = array(
			'area_id' 	=> $this->input->post('area_id'),  
			'room_type_id' 		=> $this->input->post('room_type_id'), 
			);

		$insert = $this->db->insert('area_room_types', $attr);
		if($insert): return TRUE; else: return FALSE; endif;
	}
}