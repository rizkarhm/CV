<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("biodata_model");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
        $data["biodata"] = $this->biodata_model->getData(); 
		$this->load->view('admin/biodata/home', $data);
    }

	public function add()
    {
        $biodata = $this->biodata_model;
        $validation = $this->form_validation;
        $validation->set_rules($biodata->rules());
        //var_dump($validation->run());

        if ($validation->run()) {
            $biodata->add();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		
        $this->load->view("admin/biodata/add");
    }

	public function edit($id = null)
    {
        //if (!isset($id)) redirect('admin/biodata');
       
        $biodata = $this->biodata_model;
        $validation = $this->form_validation;
        $validation->set_rules($biodata->rules());
        //var_dump($validation->run());

        if ($validation->run()) {
            $biodata->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');            
            redirect(site_url('admin/biodata'));
        }

        $data["biodata"] = $biodata->getById($id);
        if (!$data["biodata"]) show_404();
        //var_dump($post);
        
        $this->load->view("admin/biodata/edit", $data);
    }

	public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->biodata_model->delete($id)) {
            redirect(site_url('admin/biodata'));
        }
    }
}
