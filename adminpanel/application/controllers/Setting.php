
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('setting_model');
        is_login();
    }

	public function index()
	{
        $data = array();
        $data['settings'] = $this->setting_model->getSettings();
        $this->load->view('setting/index', $data);
	}

    public function save() {
        $post = $this->input->post();
        $this->setting_model->save($post);

        redirect('setting');
    }
}