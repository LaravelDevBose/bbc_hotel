<?php

Class Page_model extends CI_Model{


	// ==== insert about us informaion

	public function insert_or_update_about_us_info()
	{
		$attr = array(
			'field_name' => 'about_us',
			'value' => $this->input->post('about_us')
		);


		$result = $this->get_about_us_info();
		if($result){
			$this->db->where('field_name', 'about_us');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get about Us Information

	public function get_about_us_info()
	{
		$result = $this->db->where('field_name', 'about_us')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}


	public function insert_or_update_contact_us_info()
	{
		$res1 = $this->insert_or_update_address_info();
		$res2 = $this->insert_or_update_phone_info();
		$res3 = $this->insert_or_update_email_info();

		if($res1 && $res2 && $res3){
			return TRUE;
		}else{
			return FALSE;
		}
	}


	// ==== insert and Update adress informaion
	public function insert_or_update_address_info()
	{
		$attr = array(
			'field_name' => 'address',
			'value' => $this->input->post('address')
		);


		$result = $this->get_address_info();
		if($result){
			$this->db->where('field_name', 'address');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get address Information

	public function get_address_info()
	{
		$result = $this->db->where('field_name', 'address')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}


	// ==== insert and Update phone informaion
	public function insert_or_update_phone_info()
	{
		$attr = array(
			'field_name' => 'phone',
			'value' => $this->input->post('phone')
		);


		$result = $this->get_phone_info();
		if($result){
			$this->db->where('field_name', 'phone');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get phone Information

	public function get_phone_info()
	{
		$result = $this->db->where('field_name', 'phone')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}


	// ==== insert and Update Email informaion
	public function insert_or_update_email_info()
	{
		$attr = array(
			'field_name' => 'email',
			'value' => $this->input->post('email')
		);


		$result = $this->get_email_info();
		if($result){
			$this->db->where('field_name', 'email');
			$this->db->update('template', $attr);

			if($this->db->affected_rows()){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		$insert = $this->db->insert('template', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}


	//======= get address Information

	public function get_email_info()
	{
		$result = $this->db->where('field_name', 'email')->get('template')->row();

		if($result): return $result;  else: return FALSE; endif;
	}



	

	/*========== get all video information=-=============*/
	public function get_all_video()
	{
		$result = $this->db->order_by('id', 'desc')->get('videos')->result();

		if($result): return $result; else: return FALSE; endif;
	}

	public function insert_video_path()
	{
		$attr = array(
			'v_type' => 'y',
			'video_link' => $this->input->post('video_link')
		);

		$insert = $this->db->insert('videos', $attr);

		if($insert): return TRUE; else: return FALSE; endif;
	}

	//========= Delete Video url ============
	public function delete_video($id = null)
	{
		$this->db->where('id', $id);
		$this->db->delete('videos');

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	//======== get limit video ==========
	public function get_limt_video($limit)
	{
		$result = $this->db->order_by('id', 'desc')->limit($limit)->get('videos')->result();

		if($result): return $result; else: return FALSE; endif;
	}

	


}