<?php

class NewsAndEvent_model extends CI_Model
{
	
	/*========= get all news and event list=============*/
	public function get_all_news_and_event()
	{
		$result = $this->db->order_by('id', 'desc')->get('news_events')->result();

		if($result): return $result; else: return FALSE; endif;
	}

	/*========= limit news and evnet list ==============*/
	public function limit_news_evnet($limit=4)
	 {
	 	$result = $this->db->order_by('id', 'desc')->limit($limit)->get('news_events')->result();

		if($result): return $result; else: return FALSE; endif;
	 } 

	 /*========= get event data by id ========== */
	 public function get_news_event_by_id($id=null)
	 {
	 	$result = $this->db->where('id', $id)->get('news_events')->row();

	 	if($result): return $result; else: return FALSE; endif;
	 }
	/* ======= Insert News and Event Info =======*/
	public function insert_news_event_info($image_path = null)
	{	

		$attr = array(
			'title' 	=> $this->input->post('title'),
			'date' 	=> date("Y-m-d", strtotime($this->input->post('date'))),
			'description' 		=> $this->input->post('description'),
			'image' => $image_path

		);

		$insert = $this->db->insert('news_events', $attr);

		if($insert)
		{	
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}


	/*=========== find event by id===========*/
	public function get_event_by_id($id=null)
	{
		$result= $this->db->where('id', $id)->get('news_events')->row();
		if($result): return $result; else: return FALSE; endif;
	}

	/*=========== update news and event==============*/
	public function update_news_event_info($id=null, $file_path = null)
	{
		$attr = array(
			'title' 	=> $this->input->post('title'),
			'date' 	=> $this->input->post('date'),
			'description' 		=> $this->input->post('description'),
			'image' =>$file_path
		);

		$this->db->where('id', $id);
		$this->db->update('news_events', $attr);

		if( $this->db->affected_rows()){
			
			return TRUE;
		}else{
			return FALSE;
		}
	}


	public function new_event_delete($id=null)
	{	
		$data = $this->db->where('id', $id)->get('news_events')->row();
		$this->db->where('id', $id);
		$this->db->delete('news_events');
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