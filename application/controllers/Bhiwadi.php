<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bhiwadi extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array();
        
        $this->load->view('bhiwadi/index', $data);
    }
}