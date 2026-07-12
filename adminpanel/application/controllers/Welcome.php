<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('theme/dashboard');
	}

	public function home()
	{
		echo "Welcome to the home page!";
	}
}
