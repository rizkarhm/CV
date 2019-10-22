<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partials extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/_partials/navbar_mobile.php');
	}
}
