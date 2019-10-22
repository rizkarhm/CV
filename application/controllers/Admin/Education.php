<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("education_model");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
        $data["education"] = $this->education_model->getData(); 
		$this->load->view('admin/education/home', $data);
    }

	public function add()
    {
        $education = $this->education_model;
        $validation = $this->form_validation;
        $validation->set_rules($education->rules());
        var_dump($validation->run());

        if ($validation->run()) {
            $education->add();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		
        $this->load->view("admin/education/add");
    }

	public function edit($id = null)
    {
        //if (!isset($id)) redirect('admin/education');
       
        $education = $this->education_model;
        $validation = $this->form_validation;
        $validation->set_rules($education->rules());
        var_dump($validation->run());

        if ($validation->run()) {
            $education->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect(site_url('admin/education'));
        }

        $data["education"] = $education->getById($id);
        if (!$data["education"]) show_404();
        //var_dump($post);
        
        $this->load->view("admin/education/edit", $data);
    }

	public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->education_model->delete($id)) {
            redirect(site_url('admin/education'));
        }
    }
}
