<?php
Class User_model extends CI_Model{

	/*========== User Login data check ========*/
	public function user_login_data_check()
	{
		$name 	= $this->input->post('username');
		$pass 	= md5($this->input->post('password'));

		$attr = array(
			'username' => $name, 
			'password' => $pass, 
		);

		$res = $this->db->get_where('users', $attr);
		if($res->num_rows() == 1)
		{
			$attr = array(
				'user_id' => $res->row(0)->id, 
				'user_name' => $res->row(0)->name
			);
			$this->session->set_userdata($attr);
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	/*======== Register User Data=============*/
	public function register_user_data()
	{
		$pass = md5($this->input->post('password'));
		$attr = array(
			'name' 		=> $this->input->post('name'),  
			'email' 	=> $this->input->post('email'), 
			'phone_num' => $this->input->post('phone_num'),
			'message'	=> $this->input->post('message'),
		);
		$insert = $this->db->insert('users', $attr);
		if($insert)
		{	
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	/*======= get_all_user =========*/
	public function get_all_user()
	{
		return $this->db->get('users')->result();
	}
}