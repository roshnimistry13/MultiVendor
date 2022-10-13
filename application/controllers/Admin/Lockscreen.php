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
		
		$check_mail['email'] = $this->session->userdata[ADMIN_SESSION]['email'];
		$check_mail['password'] 			= md5($this->input->post('unlock_password'));;
		$check_mail['is_active'] = 1;
		$email_result = $this->Master_m->where('user',$check_mail);
// print_r($email_result);die;
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
		
		echo json_encode($json);
	}
}