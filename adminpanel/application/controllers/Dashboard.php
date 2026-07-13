

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $data = array();
		$data['title'] = 'Dashboard';
        $data['page']  = 'dashboard/index';

        $this->load->view('dashboard/index', $data);
	}

	public function home()
	{
		echo "Welcome to the home page!";
	}
}
