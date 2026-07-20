<?php
function is_login(){ 
      if(isset($_SESSION['isUserLoggedIn'])){
          return true;
      }else{
      	redirect( base_url().'login', 'refresh');
      }
  }

  function setting_all($keys='')
	{  
		$CI = get_instance();
		$url = $_SERVER['HTTP_HOST'];
		$CI->db->select('user_id');
		$CI->db->from('settings');
		$CI->db->where('value' , $url);
		$querya = $CI->db->get();
		$resulta = $querya->row_array();		
		$userid = $resulta['user_id'];
		// echo "tes;".$url;
		// print_r($resulta);die;
		if(!empty($keys)){
			$CI->db->select('*');
			$CI->db->from('settings');
			$CI->db->where('keys' , $keys);
			$CI->db->where('user_id' , $userid);
			$query = $CI->db->get();
			$result = $query->row();
			if(!empty($result)){
				 $result = $result->value;
				// print_r($result);die;

				return $result;
			}
			else
			{
				// echo "test";die;
				return false;
			}
		}
		else{
			$CI->load->model('settings');
			$setting= $CI->setting->get_setting();
			return $setting;
		}
		
	}

    function setting_menu()
{  
	$CI = get_instance();		
	$CI->db->select('*');
	$CI->db->from('menus');
	$CI->db->where('status' , '1');
	$CI->db->where('parent_id' , 0);
	$CI->db->order_by("priority", "asc");

	$query = $CI->db->get();
	return $result = $query->result_array();
}

function setting_menu_child($parent_id)
{  
	$CI = get_instance();		
	$CI->db->select('*');
	$CI->db->from('menus');
	$CI->db->where('status' , '1');
	$CI->db->where('parent_id' , $parent_id);
	$CI->db->order_by("priority", "asc");

	$query = $CI->db->get();
	return $result = $query->result_array();
}

function settings() {
		$CI = get_instance();
		$url = $_SERVER['HTTP_HOST'];

		$CI->db->select('user_id');
		$CI->db->from('settings');
		$CI->db->where('value' , $url);
		$querya = $CI->db->get();
		$resulta = $querya->row_array();		
		$userid = $resulta['user_id'];

		$CI->load->model('settings');
		$setting= $CI->setting->get_settings($userid);
		$result = []; 		
		foreach ($setting as $key => $value) {
			$result[$value->keys] = $value->value;
		}
		return $result;
	}

	function settingsuserid()
	{ 
		$CI = get_instance();
		$url = $_SERVER['HTTP_HOST'];

		$CI->db->select('user_id');
		$CI->db->from('settings');
		$CI->db->where('value' , $url);

		$querya = $CI->db->get();
		$resulta = $querya->row_array(); 
		return $userid = $resulta['user_id'];
	} 
?>