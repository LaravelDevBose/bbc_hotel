<?php

class Booking_model extends CI_Model
{
	
	public function get_all_booking_data()
	{	
		$this->db->select('booking.*, areas.name, room_types.title');
		$this->db->from('booking');
		$this->db->join('areas','areas.id = booking.area_id');
		$this->db->join('room_types', 'room_types.id = booking.room_type');
		$result = $this->db->order_by('id', 'desc')->get()->result();
		if($result): return $result; else: return FALSE; endif;	
	}

	public function get_booking_data_by_id($id=null)
	{
		$this->db->select('booking.*, areas.name, room_types.title');
		$this->db->from('booking');
		$this->db->join('areas','areas.id = booking.area_id');
		$this->db->join('room_types', 'room_types.id = booking.room_type');
		$result = $this->db->where('booking.id', $id)->get()->row();
		if($result): return $result; else: return FALSE; endif;
	}


	/* ======= Insert Booking Info =======*/
	public function store_booking_data()
	{	

		$attr = array(
			'persone_name' 	=> $this->input->post('persone_name'),
			'cmpy_name' 	=> $this->input->post('cmpy_name'),
			'phone_num' 	=> $this->input->post('phone_num'),
			'email' 		=> $this->input->post('email'),
			'reference' 	=> $this->input->post('reference'),
			'area_id' 		=> $this->session->userData('area_id'),
			'room_type' 	=> $this->session->userData('room_type'),
			'room_qty' 		=> $this->session->userData('room_qty'),
			'start_date' 	=> date('Y-m-d', strtotime($this->session->userData('start_date'))),
			'end_date' 		=> date('Y-m-d', strtotime($this->session->userData('end_date'))),
			'adults' 		=> $this->session->userData('adults'),
			'children' 		=> $this->session->userData('children'),
			'status'		=>'a',

		);

		$insert = $this->db->insert('booking', $attr);

		if($insert)
		{	
			$data = array(
				'area_id' 		=> $this->session->userData('area_id'),
				'room_type' 	=> $this->session->userData('room_type'),
				'room_qty' 		=> $this->session->userData('room_qty'),
				'start_date' 	=> $this->session->userData('start_date'),
				'end_date' 		=> $this->session->userData('end_date'),
				'adults' 		=> $this->session->userData('adults'),
				'children' 		=> $this->session->userData('children'),
			);
			$this->session->unset_userdata($data);

			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}