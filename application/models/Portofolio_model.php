<?php 
class Portofolio_model extends CI_Model{
	private $_table = "portofolio";
    
    public $id;
    public $name;
	public $type;
	public $about;

	public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
			
            ['field' => 'type',
            'label' => 'Type',
			'rules' => 'required'],
            
            ['field' => 'about',
            'label' => 'About',
            'rules' => 'required']
        ];
    }

	public function getAll()
	{
		return $this->db->get('portofolio')->row_array();
	}

	public function getData()
    {
        return $this->db->get('portofolio')->result();
    }

	public function getById($id)
	{
		return $this->db->get_where('portofolio', ["id" => $id])->row_array();
	}

	public function add()
    {
        $post 				= $this->input->post();
        $this->id 			= uniqid();
        $this->name     	= $post["name"];
        $this->type	    	= $post["type"];
        $this->about     	= $post["about"];
        
        //$this->db->insert($this->_table, $this); //query
        $this->db->insert('portofolio', $this); //query
    }
    public function update()
    {
        $post				= $this->input->post();
        $this->id 			= $post["id"];
        $this->name     	= $post["name"];
        $this->type	    	= $post["type"];
        $this->about     	= $post["about"];
        
		
        $this->db->update('portofolio', $this, array('id' => $post['id'])); //query
        
	}
	
    public function delete($id)
    {
        return $this->db->delete('portofolio', array("id" => $id)); //query
	}
}