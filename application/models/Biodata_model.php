<?php 
class Biodata_model extends CI_Model{
	private $_table = "biodata";

    public $id;
    public $photo = "default.jpg";
    public $name;
	public $nick_name;
	public $place;
	public $date;
	public $job;
	public $phone;
	public $email;
	public $address;
	public $gender;
	public $nationality;

	public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'nick_name',
            'label' => 'Nick Name',
            'rules' => 'required'],
			
            ['field' => 'date',
            'label' => 'Date',
			'rules' => 'required'],
            
            ['field' => 'place',
            'label' => 'Place',
            'rules' => 'required'],
            
            ['field' => 'job',
            'label' => 'Job',
            'rules' => 'required'],
                        
            ['field' => 'phone',
            'label' => 'Phone',
			'rules' => 'required'],
			
            ['field' => 'email',
            'label' => 'Email',
			'rules' => 'required'],
			
            ['field' => 'address',
            'label' => 'Address',
			'rules' => 'required'],
						
            ['field' => 'gender',
            'label' => 'Gender',
			'rules' => 'required'],
			
            ['field' => 'nationality',
            'label' => 'Nationality',
			'rules' => 'required']
        ];
    }


	public function getAll()
	{
		return $this->db->get('biodata')->row_array();
    }
    
    public function getData()
    {
        return $this->db->get('biodata')->result();
    }

	public function getById($id)
	{
		return $this->db->get_where('biodata', ["id" => $id])->row_array();
	}

	public function add()
    {
        $post 				= $this->input->post();
        $this->id 			= uniqid();
		$this->name     	= $post["name"];
        $this->nick_name   	= $post["nick_name"];
        $this->place    	= $post["place"];
        $this->date     	= $post["date"];
        $this->job	     	= $post["job"];
        $this->phone    	= $post["phone"];
        $this->email    	= $post["email"];
        $this->address  	= $post["address"];
        $this->gender 		= $post["gender"];
		$this->nationality 	= $post["nationality"];
		$this->photo     	= $this->_uploadImage();
        
        //$this->db->insert($this->_table, $this); //query
        $this->db->insert('biodata', $this); //query
    }
    public function update()
    {
        $post				= $this->input->post();
        $this->id 			= $post["id"];
        $this->name     	= $post["name"];
        $this->nick_name   	= $post["nick_name"];
        $this->place    	= $post["place"];
        $this->date     	= $post["date"];
        $this->job	     	= $post["job"];
        $this->phone    	= $post["phone"];
        $this->email    	= $post["email"];
        $this->address  	= $post["address"];
        $this->gender 		= $post["gender"];
		$this->nationality 	= $post["nationality"];
        if (!empty($_FILES["photo"]["name"])) {
            $this->photo = $this->_uploadImage();
        } else {
            $this->photo = $post["old_image"];
		}
		
        $this->db->update('biodata', $this, array('id' => $post['id'])); //query
        
	}
	
    public function delete($id)
    {
        return $this->db->delete('biodata', array("id" => $id)); //query
	}
	
    private function _uploadImage()
    {
        $config['upload_path']          = "<?= base_url('assets/images/photo_profile/')?>";
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->id;
        $config['overwrite']			= true;
        //$config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('photo')) {
            return $this->upload->data("file_name");
        }
        
        return "profile.jpg";
    }
}