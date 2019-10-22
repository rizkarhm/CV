<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skills extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("skills_model");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
        $data["skills"] = $this->skills_model->getData(); 
		$this->load->view('admin/skills/home', $data);
    }

	public function add()
    {
        $skills = $this->skills_model;
        $validation = $this->form_validation;
        $validation->set_rules($skills->rules());
        var_dump($validation->run());

        if ($validation->run()) {
            $skills->add();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		
        $this->load->view("admin/skills/add");
    }

	public function edit($id = null)
    {
        //if (!isset($id)) redirect('admin/skills');
       
        $skills = $this->skills_model;
        $validation = $this->form_validation;
        $validation->set_rules($skills->rules());
        var_dump($validation->run());

        if ($validation->run()) {
            $skills->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect(site_url('admin/skills'));
        }

        $data["skills"] = $skills->getById($id);
        if (!$data["skills"]) show_404();
        //var_dump($post);
        
        $this->load->view("admin/skills/edit", $data);
    }

	public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->skills_model->delete($id)) {
            redirect(site_url('admin/skills'));
        }
    }
}
