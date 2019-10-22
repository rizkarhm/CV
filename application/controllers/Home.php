<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('home_model');

		$this->load->model("biodata_model");
		$this->load->model("education_model");
        $this->load->model("experience_model");
		$this->load->model("portofolio_model");
        $this->load->model("skills_model");
        $this->load->model("contact_model");
	}
 
	public function index()
	{
		$data["user"] 		= $this->home_model->getAll(); 
		$data["biodata"] 	= $this->biodata_model->getAll(); 
		$data["education"]	= $this->education_model->getAll(); 
		$data["experience"] = $this->experience_model->getAll(); 
		$data["skills"] 	= $this->skills_model->getAll(); 
		$data["portofolio"]	= $this->portofolio_model->getAll(); 
		$data["contact"]	= $this->contact_model->getAll(); 

		$this->load->view('home', $data); 		//load view + mengirim data
		
		//var_dump($data); 						//menampilkan isi $data		
		//$this->load->view('home'); 			//load view tanpa mengirim data
	}
}
