<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array();
        echo "ttst"; die;
        $this->load->view('project/index', $data);
    }

    public function list()
    {
        $data = array();
        $this->load->view('project_list/list', $data);
    }
}