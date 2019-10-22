<?php 
class Skills_model extends CI_Model{
	private $_table = "skills";
    
    public $id;
    public $name;
	public $percentage;
	public $about;

	public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
			
            ['field' => 'percentage',
            'label' => 'Percentage',
			'rules' => 'required'],
            
            ['field' => 'about',
            'label' => 'About',
            'rules' => 'required']
        ];
    }

	public function getAll()
	{
		return $this->db->get('skills')->row_array();
	}

	public function getData()
    {
        return $this->db->get('skills')->result();
    }

	public function getById($id)
	{
		return $this->db->get_where('skills', ["id" => $id])->row_array();
	}

	public function add()
    {
        $post 				= $this->input->post();
        $this->id 			= uniqid();
        $this->name     	= $post["name"];
        $this->percentage	= $post["percentage"];
        $this->about     	= $post["about"];
        
        //$this->db->insert($this->_table, $this); //query
        $this->db->insert('skills', $this); //query
    }
    public function update()
    {
        $post				= $this->input->post();
        $this->id 			= $post["id"];
        $this->name     	= $post["name"];
        $this->percentage  	= $post["percentage"];
        $this->about     	= $post["about"];
        
		
        $this->db->update('skills', $this, array('id' => $post['id'])); //query
        
	}
	
    public function delete($id)
    {
        return $this->db->delete('skills', array("id" => $id)); //query
	}
}