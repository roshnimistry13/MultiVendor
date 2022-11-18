<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata(ADMIN_SESSION))){
			redirect('admin');
		}
	}
	public function index()	{
		$user_type 		= $this->session->userdata[ADMIN_SESSION]['user_type'];
		$user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$profile_data 	= array();
		if($user_type == 'admin'){
			$where['user_id'] 	= $user_id;
			$profile_data 		= $this->Master_m->where('user',$where);
		}
		else if($user_type == 'vendor'){
			$where['vendor_id'] 	= $user_id;
			$profile_data 			= $this->Master_m->where('vendor',$where);
		}
		$data['profile_data'] 	= $profile_data;
		$headdata['title'] 		= 'Profile | '.ADMIN_THEME;		
		$jsdata['pagejs']	 	= array('application/Profile.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Profile/Profile_v',$data);
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	/**** UPDATE PROFILE********* */
	public function updateProfile(){
		
		$user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$user_type 		= $this->session->userdata[ADMIN_SESSION]['user_type'];

		if(!empty($_FILES['file']['name'])){
			$image1 		= $_FILES['file']['name'];
			$extension 		= pathinfo($image1, PATHINFO_EXTENSION);
			$profile_pic	= $user_id.".".$extension;

			$filepath 	= PROFILE_IMG_PATH.$user_type.'/'.$user_id;
			if (!is_dir($filepath)) {
				mkdir($filepath, 0777, true);
			}	
			$uploadImg1 	= $filepath.'/'.$profile_pic;
			move_uploaded_file($_FILES['file']['tmp_name'],$uploadImg1);
			$update['profile_photo'] 	= $profile_pic;
		}
		
		$json = array();
		$name 			= $this->input->post('txt_name');
		$email 			= $this->input->post('txt_email');

		if($user_type == 'admin'){

			$update['name'] 	= $name;
			$update['email'] 	= $email;		
			$where['user_id'] 	= $user_id;
			
			$update_result = update('user',$update,$where);
			logThis($update_result->query, date('Y-m-d'),'User');
			$json['success'] 	= "success";

			$result = $this->Master_m->where('user',$where);
			$this->createSession($result,$user_type);
			
			// if($update_result->status == "success"){
			// 	$json['success'] 	= "success";
			// }else{
			// 	$json['error'] 	= "record not update !!";
			// }
		}else if($user_type == "vendor"){

			$update['name'] 	= $name;
			$update['email'] 	= $email;		
			$where['vendor_id'] = $user_id;
			
			$update_result = update('vendor',$update,$where);
			logThis($update_result->query, date('Y-m-d'),'Vendor');
			$json['success'] 	= "success";
			
			$result = $this->Master_m->where('vendor',$where);
			$this->createSession($result,$user_type);
			// if($update_result->status == "success"){
			// 	$json['success'] 	= "success";
			// }else{
			// 	$json['error'] 	= "record not update !!";
			// }
		}		
		
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));		
	}

	/**** UPDATE PASSWORD ******** */
	public function updatePassword(){
		$json = array();
		if($this->input->is_ajax_request()){
			$user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];
			$user_type 		= $this->session->userdata[ADMIN_SESSION]['user_type'];

			$old_password = trim($this->input->post('txt_oldpassword'));
			$new_password = trim($this->input->post('txt_new_password'));

			if(!empty($_FILES['file']['name'])){
				$image1 		= $_FILES['file']['name'];
				$extension 		= pathinfo($image1, PATHINFO_EXTENSION);
				$profile_pic	= $user_id.".".$extension;
	
				$filepath 	= PROFILE_IMG_PATH.$user_type.'/'.$user_id;
				if (!is_dir($filepath)) {
					mkdir($filepath, 0777, true);
				}	
				$uploadImg1 	= $filepath.'/'.$profile_pic;
				move_uploaded_file($_FILES['file']['tmp_name'],$uploadImg1);
				$update['profile_photo'] 	= $profile_pic;
			}

			if($user_type == 'admin'){
				
				$where['user_id'] 	= $user_id;
				$where['password'] 	= md5($old_password);
				$profile_data 		= $this->Master_m->where('user',$where);
				
				if(!empty($profile_data)){
					
					$whr['user_id'] 	= $user_id;
					$update['password'] = md5($new_password);
					
					$update_result = update('user',$update,$whr);
					logThis($update_result->query, date('Y-m-d'),'User');

					$result = $this->Master_m->where('user',$whr);
					$this->createSession($result,$user_type);
					
					$profile_arr = array(
						'user_id' =>$user_id,
						'user_type' =>$user_type,
						'old_password' =>$old_password,
						'new_password' =>$new_password,
						'name' =>$result[0]['name'],
						'email' =>$result[0]['email'],
					);

					$this->sendUpdateprofile($profile_arr);

					if($update_result->status == "success"){
						$json['success'] 	= "success";
					}else{
						$json['error'] 	= "record not update !!";
					}

				}else{
					$json['error'] 	= "Old password doesn't match !!";
				}
			}
			else if($user_type == 'vendor'){
				$where['vendor_id'] 	= $user_id;
				$where['password'] 		= md5($old_password);
				$profile_data 			= $this->Master_m->where('vendor',$where);

				if(!empty($profile_data)){
					
					$whr['vendor_id'] 	= $user_id;
					$update['password'] = md5($new_password);
					
					$update_result = update('vendor',$update,$whr);
					logThis($update_result->query, date('Y-m-d'),'Vendor');

					$result = $this->Master_m->where('vendor',$whr);
					$this->createSession($result,$user_type);
					$profile_arr = array(
						'user_id' =>$user_id,
						'user_type' =>$user_type,
						'old_password' =>$old_password,
						'new_password' =>$new_password,
						'name' =>$result[0]['name'],
						'email' =>$result[0]['email'],
					);

					$this->sendUpdateprofile($profile_arr);

					if($update_result->status == "success"){
						$json['success'] 	= "success";
					}else{
						$json['error'] 	= "record not update !!";
					}

				}else{
					$json['error'] 	= "Old password doesn't match !!";
				}
			}			
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	public function createSession($result,$user_type){

		$this->session->unset_userdata(ADMIN_SESSION);
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

	/****** SEND OTP TO FOR CHANGE PASSWORD*/
	public function sendOtp(){
		$json = array();
		if($this->input->is_ajax_request()){
			$user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];
			$user_type 		= $this->session->userdata[ADMIN_SESSION]['user_type'];
			$email 			= $this->session->userdata[ADMIN_SESSION]['email'];

			$length 	= 6;
			$chars 		= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
			$otp 		= substr( str_shuffle( $chars ), 0, $length );
			$html 		= "<div><p>Your One Time Password For Update Password is : <strong>".$otp."</strong></p>Use this OTP to update profile.<p></p></div>";
			$mailData['subject'] 			= "Multivendor OTP";
			$mailData['attachFile'] 		= "";
			$mailData['fromID'] 			= 'devloperproactii@gmail.com';
			$mailData['toID'] 				= 'devloperproactii@gmail.com';
			
			$mailData['message'] = $html;
			
			$send = send_email($mailData);
			if($send){
				$json['success'] = "success";
				$json['otp'] = $otp;
			}else{
				$json['error'] = "Please try again after few minutes !!";
			}			
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}
	
	public function sendUpdateprofile($data){		
		$html = "<table>
					<tr>
						<td>User ID : </td>
						<td>".$data['user_id']."</td>
					</tr>
					<tr>
						<td>User Type : </td>
						<td>".$data['user_type']."</td>
					</tr>
					<tr>
						<td>Name : </td>
						<td>".$data['name']."</td>
					</tr>
					<tr>
						<td>Email : </td>
						<td>".$data['email']."</td>
					</tr>							
					<tr>
						<td>Old Password : </td>
						<td>".$data['old_password']."</td>
					</tr>
					<tr>
						<td>New Password : </td>
						<td>".$data['new_password']."</td>
					</tr>
				</table>";
			$mailData['subject'] 			= "Multivendor - Profile Updatation";
			$mailData['attachFile'] 		= "";
			$mailData['fromID'] 			= 'devloperproactii@gmail.com';
			$mailData['toID'] 				= 'devloperproactii@gmail.com';			
			$mailData['message'] 			= $html;			
			$send = send_email($mailData);
	}
}