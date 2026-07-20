<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

    public function getSettings() {
        return $this->db->select('*')->from('settings')->where('is_display', 1)->get()->result_array();
    }

    public function save($post) {
        foreach ($post as $key => $value) {
            $this->db->where('keys', $key);
            $this->db->update('settings', [ 'value' => $value ]);
        }
    }
    
}
?>