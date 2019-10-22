<?php 
class Experience_model extends CI_Model{
	private $_table = "experience";
    
    public $id;
    public $name;
	public $type;
    public $year;
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

            ['field' => 'year',
            'label' => 'Year',
            'rules' => 'required'],
            
            ['field' => 'about',
            'label' => 'About',
            'rules' => 'required']
        ];
    }

	public function getAll()
	{
		return $this->db->get('experience')->row_array();
	}

	public function getData()
    {
        return $this->db->get('experience')->result();
    }

	public function getById($id)
	{
		return $this->db->get_where('experience', ["id" => $id])->row_array();
	}

	public function add()
    {
        $post 				= $this->input->post();
        $this->id 			= uniqid();
        $this->name     	= $post["name"];
        $this->type	    	= $post["type"];
        $this->year   		= $post["year"];
        $this->about     	= $post["about"];
        
        //$this->db->insert($this->_table, $this); //query
        $this->db->insert('experience', $this); //query
    }
    public function update()
    {
        $post				= $this->input->post();
        $this->id 			= $post["id"];
        $this->name     	= $post["name"];
        $this->type	    	= $post["type"];
        $this->year   		= $post["year"];
        $this->about     	= $post["about"];
        
		
        $this->db->update('experience', $this, array('id' => $post['id'])); //query
        
	}
	
    public function delete($id)
    {
        return $this->db->delete('experience', array("id" => $id)); //query
	}
}