

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('testimonial_model');
        is_login();
    }

	public function index()
	{
        $data = array();
        $data['testimonials_list'] = $this->testimonial_model->getTestimonialsList();
        $this->load->view('testimonial/list', $data);
	}
   
    public function add() {
        $data = array(
            'property_types' => $this->testimonial_model->getPropertyTypesList(),
            'transaction_types' => $this->testimonial_model->getTransactionTypesList(),
            'project_properties' => $this->testimonial_model->getProjectPropertiesList(),
        );
        $this->load->view('testimonial/add', $data);
    }

    public function save() {
        $data = $this->input->post();
        if (isset($data['testimonial_id'])) {
            $this->testimonial_model->update($data);
        } else {
            $this->testimonial_model->save($data);
        }
        redirect('testimonial');
    }

    public function delete($id) {
        $this->testimonial_model->delete($id);
        redirect('testimonial');
    }

    public function edit($id) {
        $data = array(
            'property_types' => $this->testimonial_model->getPropertyTypesList(),
            'transaction_types' => $this->testimonial_model->getTransactionTypesList(),
            'project_properties' => $this->testimonial_model->getProjectPropertiesList(),
            'testimonial' => $this->testimonial_model->getTestimonialById($id),
        );
        $this->load->view('testimonial/add', $data);
    }

}