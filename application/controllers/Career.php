<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array();
        
        $this->load->view('career/index', $data);
    }
}