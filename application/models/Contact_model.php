<?php 
class Contact_model extends CI_Model{
	private $_table = "contact";
    
    public $id;
    public $name;
	public $link;

	public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
			
            ['field' => 'link',
            'label' => 'Link',
			'rules' => 'required']
        ];
    }

	public function getAll()
	{
		return $this->db->get('contact')->row_array();
	}

	public function getData()
    {
        return $this->db->get('contact')->result();
    }

	public function getById($id)
	{
		return $this->db->get_where('contact', ["id" => $id])->row_array();
	}

	public function add()
    {
        $post 				= $this->input->post();
        $this->id 			= uniqid();
        $this->name     	= $post["name"];
        $this->link	        = $post["link"];
        
        //$this->db->insert($this->_table, $this); //query
        $this->db->insert('contact', $this); //query
    }
    public function update()
    {
        $post				= $this->input->post();
        $this->id 			= $post["id"];
        $this->name     	= $post["name"];
        $this->link       	= $post["link"];
        
		
        $this->db->update('contact', $this, array('id' => $post['id'])); //query
        
	}
	
    public function delete($id)
    {
        return $this->db->delete('contact', array("id" => $id)); //query
	}
}