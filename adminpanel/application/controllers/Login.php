<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users'); 
        $this->load->model('permissionsusers'); 
	}

	public function index()
	{
		$data = array();
		if($this->session->userdata('isUserLoggedIn')){        	
        	redirect('dashboard');
        }
		$this->load->view('login/index',$data);
	}

	public function loginSubmit(){

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$remember_me = $this->input->post('remember_me');
		$wlId = settingsuserid();

		$checkLogin = $this->users->getUser($email,md5($password),$wlId);
        // print_r($checkLogin); die;

		if(
            isset($checkLogin) && 
            $checkLogin["status"] == 1 && 
            $checkLogin["is_deleted"]==0  && 
            (strtotime($checkLogin["account_validity"])>=strtotime(date('Y-m-d')))
        ){


            $permission = $this->getPermission($checkLogin['id'],$checkLogin['user_type']);
			
            $this->session->set_userdata('userType',$checkLogin['user_type']);
            $this->session->set_userdata('userId',$checkLogin['id']);
            $this->session->set_userdata('wlId',$checkLogin['wl_id']);
            $this->session->set_userdata('isAdmin',$checkLogin['isAdmin']);
            $this->session->set_userdata('userChain',$checkLogin['user_chain']);
            $this->session->set_userdata('userName',$checkLogin['username']);
            $this->session->set_userdata('name',$checkLogin['name']);
            $this->session->set_userdata('permission',$permission);
            
            $cookie_time = 60 * 60 * 24 * 30; // 30 days
            if( $remember_me == '1' )
           {
                $cookie_time_Onset=$cookie_time+ time();
                setcookie("email", $this->input->post("email"), $cookie_time_Onset);
                setcookie("password", $this->input->post("password"), $cookie_time_Onset);  

            } else {

                $cookie_time_fromOffset=time() -$cookie_time;
                setcookie("email", '',$cookie_time_fromOffset );
                setcookie("password", '', $cookie_time_fromOffset);  
            } 
            if(true){
                $this->session->set_userdata('isUserLoggedIn',TRUE);
                redirect(base_url('dashboard'));
            }
		}
        redirect(base_url('login'));
	}

	public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->unset_userdata('userType');
        $this->session->unset_userdata('wlId');
        $this->session->sess_destroy();
        redirect('login');
    }

    function getPermission($user_id,$user_type){

        $permission = array();

        $getPermission = $this->permissionsusers->getPermissionByUser($user_id);

        if(!isset($getPermission)){
            $getPermission = $this->permissionsusers->getPermissionByUserType($user_type);
        }

        if(isset($getPermission)){
            $permission = json_decode($getPermission["text"],true);
        }

        return $permission;

    }
}

