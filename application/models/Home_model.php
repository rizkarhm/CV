<?php 
class Home_model extends CI_Model{
	public function getAll()
	{
		return $this->db->get('biodata')->row_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('biodata', ["id" => $id])->row();
	}

}