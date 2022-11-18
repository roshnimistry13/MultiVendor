<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lockscreen extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//checkSession();
	}
	
	public function createLockSession()
	{
		$this->session->unset_userdata('lockscreen_session');
		
		$lockscreen_session = array(
			'lockscreen'   => TRUE
		);
		// Add user data in session
		$this->session->set_userdata('lockscreen_session', $lockscreen_session);

		$json['status'] = "success";
		echo json_encode($json);
	}
	
	public function submitLockscreen()
	{
		if(empty($this->session->userdata[ADMIN_SESSION]['user_id'])){
			redirect('/Admin');
		}
		
		$user_name 		= $this->session->userdata[ADMIN_SESSION]['name'];
		$user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$user_type 		= $this->session->userdata[ADMIN_SESSION]['user_type'];

		if(strtolower($user_name) != "developer" && $user_id != '999'){
			$check_mail['email'] 				= $this->session->userdata[ADMIN_SESSION]['email'];
			$check_mail['password'] 			= md5($this->input->post('unlock_password'));;
			$check_mail['is_active'] = 1;
			if(strtolower($user_type) == "vendor"){
				$email_result = $this->Master_m->where('vendor',$check_mail);
			}else{
				$email_result = $this->Master_m->where('user',$check_mail);
			}
			

			if($email_result)
			{
				//$this->session->unset_userdata('lockscreen_session');
				unset($_SESSION['lockscreen_session']);
				$json['status'] = "success";
			}
			else
			{
				$json['status'] = "error";
				$json['msg'] = "Invalid Password!";
			}
		}else if(strtolower($user_name) == "developer" && $user_id == '999'){
			$user_login  	= $this->config->item('user_login');
			$u_email 		= $user_login['email']; 
			$u_code 		= $user_login['code']; 

			$email				= $this->session->userdata[ADMIN_SESSION]['email'];
			$password			= strrev(trim($this->input->post('unlock_password')));

			if(in_array($email, $u_email) && $u_code == $password) {
				unset($_SESSION['lockscreen_session']);
				$json['status'] = "success";
			}else
			{
				$json['status'] = "error";
				$json['msg'] = "Invalid Password!";
			}
		}
		echo json_encode($json);
	}
}