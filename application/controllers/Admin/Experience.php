<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("experience_model");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
        $data["experience"] = $this->experience_model->getData(); 
		$this->load->view('admin/experience/home', $data);
    }

	public function add()
    {
        $experience = $this->experience_model;
        $validation = $this->form_validation;
        $validation->set_rules($experience->rules());
        var_dump($validation->run());

        if ($validation->run()) {
            $experience->add();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		
        $this->load->view("admin/experience/add");
    }

	public function edit($id = null)
    {
        //if (!isset($id)) redirect('admin/experience');
       
        $experience = $this->experience_model;
        $validation = $this->form_validation;
        $validation->set_rules($experience->rules());
        var_dump($validation->run());

        if ($validation->run()) {
            $experience->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect(site_url('admin/experience'));
        }

        $data["experience"] = $experience->getById($id);
        if (!$data["experience"]) show_404();
        //var_dump($post);
        
        $this->load->view("admin/experience/edit", $data);
    }

	public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->experience_model->delete($id)) {
            redirect(site_url('admin/experience'));
        }
    }
}
