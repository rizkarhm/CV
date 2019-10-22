<?php 
class User_model extends CI_Model{
	public function getAll()
	{
		return $this->db->get('user')->row_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('user', ["id" => $id])->row();
	}

}