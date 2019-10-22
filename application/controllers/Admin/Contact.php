<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("contact_model");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
        $data["contact"] = $this->contact_model->getData(); 
		$this->load->view('admin/contact/home', $data);
    }

	public function add()
    {
        $contact = $this->contact_model;
        $validation = $this->form_validation;
        $validation->set_rules($contact->rules());
        //var_dump($validation->run());

        if ($validation->run()) {
            $contact->add();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		
        $this->load->view("admin/contact/add");
    }

	public function edit($id = null)
    {
        //if (!isset($id)) redirect('admin/contact');
       
        $contact = $this->contact_model;
        $validation = $this->form_validation;
        $validation->set_rules($contact->rules());
        var_dump($validation->run());

        if ($validation->run()) {
            $contact->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect(site_url('admin/contact'));
        }

        $data["contact"] = $contact->getById($id);
        if (!$data["contact"]) show_404();
        //var_dump($post);
        
        $this->load->view("admin/contact/edit", $data);
    }

	public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->contact_model->delete($id)) {
            redirect(site_url('admin/contact'));
        }
    }
}
