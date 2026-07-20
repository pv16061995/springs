<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testimonial_model extends CI_Model {
	
	public function getTestimonialsList()
    {
        return $this->db
            ->select([
                't.testimonial_id',
                't.client_name',
                't.testimonial',
                't.rating',
                'pt.property_type_name AS property_type',
                'tt.transaction_type_name AS transaction_type',
                'pp.project_property_id',
                'pp.property_name AS project_property',
                'pp.location',
                'pp.city',
                'pp.state',
                't.display_status',
                't.display_order',
                't.created_at',
                't.updated_at'
            ])
            ->from('testimonials t')
            ->join(
                'property_types pt',
                'pt.property_type_id = t.property_type_id',
                'INNER'
            )
            ->join(
                'transaction_types tt',
                'tt.transaction_type_id = t.transaction_type_id',
                'INNER'
            )
            ->join(
                'project_properties pp',
                'pp.project_property_id = t.project_property_id',
                'INNER'
            )
            // ->order_by('t.display_order', 'ASC')
            ->order_by('t.created_at', 'DESC')
            ->get()
            ->result_array();
    }

    public function getPropertyTypesList() {
        return $this->db
            ->select('property_type_id, property_type_name')
            ->from('property_types')
            ->where('status', 1)
            ->get()
            ->result_array();
    }
    
    public function getTransactionTypesList() {
        return $this->db
            ->select('transaction_type_id, transaction_type_name')
            ->from('transaction_types')
            ->where('status', 1)
            ->get()
            ->result_array();
    }

    public function getProjectPropertiesList() {
        return $this->db
            ->select('project_property_id, property_name, location, city, state')
            ->from('project_properties')
            ->where('display_status', 1)
            ->get()
            ->result_array();
    }

    public function save($data) {
        $this->db->insert('testimonials', $data);
    }

    public function delete($id) {
        $this->db->where('testimonial_id', $id)->delete('testimonials');
    }

    public function getTestimonialById($id) {
        return $this->db
            ->select('*')
            ->from('testimonials')
            ->where('testimonial_id', $id)
            ->get()
            ->row_array();
    }

    public function update($data) {
        $this->db->where('testimonial_id', $data['testimonial_id'])->update('testimonials', $data);
    }
}
?>