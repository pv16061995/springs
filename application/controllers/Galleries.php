<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Galleries extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array();
        
        $this->load->view('galleries/index', $data);
    }
}