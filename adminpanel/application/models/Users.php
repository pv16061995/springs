<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Model {
	
	public function getUser($email,$password,$wl_id) {
	    $queryString = "select users.*,usertypes.isAdmin from users left join usertypes on usertypes.id = users.user_type  WHERE wl_id='$wl_id' and password = '$password' and (username='$email' or email='$email' or mobile='$email')";

	    $query=$this->db->query($queryString);
	    return $query->row_array();
    }
}
?>