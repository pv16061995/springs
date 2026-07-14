

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

    function __construct() {
        parent::__construct();
        is_login();
        ini_set("display_error",1);
    }

	public function index()
	{
        $data = array();
        $this->load->view('dashboard/index', $data);
	}

}
