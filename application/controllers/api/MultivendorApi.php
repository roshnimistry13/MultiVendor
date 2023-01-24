<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

class MultivendorApi extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// Using get and post method featch all customer details.
	public function checkCustomerMobileEmail_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY)
		{
			$mobile_email = $this->post('mobile_email');
			if($mobile_email != '' || $mobile_email != NULL)
			{
				//Mobile number check
				$mobile_cond['mobile'] = $mobile_email;
				$mobile_cond['is_active'] = 1;
				$mobile_data = $this->Master_m->where('customer_detail',$mobile_cond);
				
				//email ccheck
				$email_cond['email'] = $mobile_email;
				$email_cond['is_active'] = 1;
				$email_data = $this->Master_m->where('customer_detail',$email_cond);

				if(!empty($mobile_data)){
					$this->response([
							'status' => TRUE,
							'message' => 'Mobile / Email is already register',
						], REST_Controller::HTTP_OK);
				}
				elseif(!empty($email_data)){
					$this->response([
							'status' => TRUE,
							'message' => 'Mobile / Email is already register',
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'message' => 'Mobile / Email not register'
						], REST_Controller::HTTP_OK);
				}
			}
			else
			{
				$this->response([
					'status' => FALSE,
					'message' => 'Mobile / Email is empty or null.'
				], REST_Controller::HTTP_OK);	
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//Register New Customer
	public function registerCustomer_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$customer_name = $this->post('customer_name');
			$gender = $this->post('gender');
			$email = $this->post('email');
			$mobile = $this->post('mobile');
			$password = $this->post('password');
			
			if($customer_name == '' || $customer_name == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer name is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			// else if($gender == '' || $gender == NULL )
			// {
			// 	$this->response([
			// 			'status' => FALSE,
			// 			'message' => 'Gender is empty or null.'
			// 		], REST_Controller::HTTP_OK);
			// }
			else if($email == '' || $email == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Email is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($mobile == '' || $mobile == NULL )
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Mobile number is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			// else if($password == '' || $password == NULL)
			// {
			// 	$this->response([
			// 			'status' => FALSE,
			// 			'message' => 'Password is empty or null.'
			// 		], REST_Controller::HTTP_OK);
			// }
			else
			{
				//Check email
				$check_mail['email'] = $email;
				$check_mail['is_active'] = 1;
				$email_res = $this->Master_m->where('customer_detail',$check_mail);
				
				//Check mobile
				$check_mobile['mobile'] = $mobile;
				$check_mobile['is_active'] = 1;
				$mobile_res = $this->Master_m->where('customer_detail',$check_mobile);
				
				if(!empty($email_res)){
					$this->response([
							'status' => FALSE,
							'message' => $email.' is already register',
						], REST_Controller::HTTP_OK);
				}
				else if(!empty($mobile_res)){
					$this->response([
							'status' => FALSE,
							'message' => $mobile.' is already register',
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$insertdata['customer_name'] = $customer_name;
					$insertdata['gender'] = $gender;
					$insertdata['email'] = $email;
					$insertdata['mobile'] = $mobile;
					$insertdata['password'] = md5($password);
					$insertdata['show_password'] = $password;
					
					$insert_result = insert('customer_detail',$insertdata,'');
					logThis($insert_result->query, date('Y-m-d'),'Customer');
						
					if($insert_result->status = "success")
					{
						// $mailData['subject'] = "Register Successfully - ".UI_THEME;
						// $mailData['attachFile'] = "";
						// $mailData['from_name'] = SITE_NAME;
						// $mailData['fromID'] = 'dainik.tandel@proactii.com';
						// //$mailData['toID'] = $email;
						// $mailData['toID'] = "dainik.tandel@proactii.com";
						
						// $msgData['name'] = $customer_name;
						// $message = registerCustomer($msgData); 	

						// $mailData['message'] = $message;

						// $send = send_email($mailData);
						$cust_id = $insert_result->id;
						$cust_cond['customer_id'] = $cust_id;
						$cust_result = $this->Master_m->where('customer_detail',$cust_cond);
						$this->response([
								'status' => TRUE,
								'message' => 'Successfully Register',
								'data' => $cust_result,
							], REST_Controller::HTTP_OK);
					}
					else
					{
						$this->response([
								'status' => FALSE,
								'message' => NETWORK_MESSAGE,
								'data' => array(),
							], REST_Controller::HTTP_OK);
					}
				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}
	
	//Email / Mobile no with password login check
	public function checkLogin_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY)
		{
			$mobile_email = $this->input->post('mobile_email');
			$password = $this->post('password');
			
			if($mobile_email == '' || $mobile_email == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Mobile / Email is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			// else if($password == '' || $password == NULL )
			// {
			// 	$this->response([
			// 			'status' => FALSE,
			// 			'message' => 'Password is empty or null.'
			// 		], REST_Controller::HTTP_OK);
			// }
			else
			{
							
				//Check mobile login
				$check_mobile['mobile'] = $mobile_email;				
				$check_mobile['is_active'] = 1;
				$mobile_res = $this->Master_m->where('customer_detail',$check_mobile);
				
				if(!empty($mobile_res)){
					$this->response([
							'status' => TRUE,
							'message' => 'Successfully login',
							'data' => $mobile_res,
						], REST_Controller::HTTP_OK);
				}				
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Invalid Mobile / Email or Password'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//Forget Password 
	public function forgetPassword_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY)
		{
			//Check email
			$email = $this->input->post('email');
			
			if($email == '' || $email == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Email is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$check_mail['email'] = $email;
				$check_mail['is_active'] = 1;
				$email_res = $this->Master_m->where('customer_detail',$check_mail);
				
				if(!empty($email_res))
				{
					$customer_id = $email_res[0]['customer_id'];				
					$customer_name = $email_res[0]['customer_name'];			
					$new_pwd = rand_password();
					
					$mailData['subject'] = "Forget Password - ".UI_THEME;
					$mailData['attachFile'] = "";
					$mailData['from_name'] = SITE_NAME;
					$mailData['fromID'] = 'dainik.tandel@proactii.com';
					$mailData['toID'] = $email;
					//$mailData['toID'] = "dainik.tandel@proactii.com";
					
					$msgData['name'] = $customer_name;
					$msgData['password'] = $new_pwd;
					$message = resetPassword($msgData); 	

					$mailData['message'] = $message;

					$send = send_email($mailData);
					
					if($send)
					{
						$update_data['password'] = md5($new_pwd);
						$update_data['show_password'] = $new_pwd;
						$custID['customer_id'] = $customer_id;
						$update_result = update('customer_detail',$update_data,$custID);
						logThis($update_result->query, date('Y-m-d'),'Customer');
						
						$this->response([
								'status' => TRUE,
								'message' => 'Update password send to your email. Please check.',
							], REST_Controller::HTTP_OK);
					}
					else{
						$this->response([
								'status' => TRUE,
								'message' => NETWORK_MESSAGE,
							], REST_Controller::HTTP_OK);
					}
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'message' => 'Email id not register.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//customer Profile details
	public function customerProfile_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			
			if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{	
				$results = $this->Master_m->customerProfile($customer_id);

				if(!empty($results)){
					$this->response([
							'status' => TRUE,
							'message' => 'Customer profile details',
							'data' => $results,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Customer not found.',
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//Update customer profile update data
	public function updateCustomerProfile_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$customer_id 			= $this->input->post('customer_id');
			$customer_name 			= $this->post('customer_name');
			$gender 				= $this->post('gender');
			$email 					= $this->post('email');
			$mobile 				= $this->post('mobile');
			$alternate_mobile 		= $this->post('alternate_mobile');
			$birth_date 			= $this->post('birth_date');

			$data['email'] 				= $email;
			$data['mobile'] 			= $mobile;
			$data['customer_id'] 		= $customer_id;
			$verify_phone 				= $this->Master_m->check_mobile($data); 
			$verify_email 				= $this->Master_m->check_email($data); 
			
			
			if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($customer_name == '' || $customer_name == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer name is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($gender == '' || $gender == NULL )
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Gender is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($email == '' || $email == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Email is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($mobile == '' || $mobile == NULL )
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Mobile number is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if(!empty($verify_phone)){
				$this->response([
					'status' => FALSE,
					'message' => 'Mobile number is already exsist.'
				], REST_Controller::HTTP_OK);
			}
			else if(!empty($verify_email)){
				$this->response([
					'status' => FALSE,
					'message' => 'Email Address is already exsist.'
				], REST_Controller::HTTP_OK);
			}
			else
			{	
				$cond['customer_id'] 		= $customer_id;
				$results 					= $this->Master_m->where('customer_detail',$cond);

				if(!empty($results))
				{
					$updatedata['customer_name'] 			= $customer_name;
					$updatedata['gender'] 					= $gender;
					$updatedata['email'] 					= $email;
					$updatedata['mobile'] 					= $mobile;					
					$updatedata['mobile'] 					= $mobile;					
					$updatedata['alternate_mobile'] 		= $alternate_mobile;					
					$updatedata['birth_date'] 				= date('Y-m-d',strtotime($birth_date));					
					
					$custID['customer_id'] 					= $customer_id;
					$update_result 							= update('customer_detail',$updatedata,$custID);
					logThis($update_result->query, date('Y-m-d'),'Customer');
					
					$cust_results =  $this->Master_m->customerProfile($customer_id);
					
					$this->response([
							'status' => TRUE,
							'message' => 'Your profile update successfully.',
							'data' => $results,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Customer not found.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//Update customer password
	public function updateCustomerPassword_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			$current_password = $this->post('current_password');
			$new_password = $this->post('new_password');
			$confirm_password = $this->post('confirm_password');
			
			if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($current_password == '' || $current_password == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Current password is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($new_password == '' || $new_password == NULL )
			{
				$this->response([
						'status' => FALSE,
						'message' => 'New password is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($confirm_password == '' || $confirm_password == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Confirm password is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($new_password != $confirm_password )
			{
				$this->response([
						'status' => FALSE,
						'message' => 'New password and Confirm password are not matched.'
					], REST_Controller::HTTP_OK);
			}
			else
			{	
				$cond['customer_id'] = $customer_id;
				$results = $this->Master_m->where('customer_detail',$cond);

				if(!empty($results))
				{
					$cond1['customer_id'] = $customer_id;
					$cond1['password'] = md5($current_password);
					$results1 = $this->Master_m->where('customer_detail',$cond1);

					if(!empty($results1))
					{
						$updatedata['password'] = md5($new_password);
						$updatedata['show_password'] = $new_password;
						
						$custID['customer_id'] = $customer_id;
						$update_result = update('customer_detail',$updatedata,$custID);
						logThis($update_result->query, date('Y-m-d'),'Customer');
						
						$cust_results =  $this->Master_m->customerProfile($customer_id);
						
						$this->response([
								'status' => TRUE,
								'message' => 'Your password updated successfully.',
								'data' => $cust_results,
							], REST_Controller::HTTP_OK);						
					}
					else
					{
						$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Your current password is wrong.'
						], REST_Controller::HTTP_OK);
					}
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'message' => 'Customer not found.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}
	
	//Get customer address list
	public function getAddress_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			
			if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$address_result = $this->Master_m->getAllCustomerAddress($customer_id);
				
				if(!empty($address_result)){
					$this->response([
							'status' => true,
							'message' => 'Customer address list.',
							'data' => $address_result
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'message' => 'Address not Found.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}
	
	//Get address details
	public function getAddressDetails_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			$address_id = $this->input->post('address_id');
			
			if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($address_id == '' || $address_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Address id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$cond['customer_id'] = $customer_id;
				$cond['address_id'] = $address_id;
				$cond['is_active'] = 1;
				$address_details = $this->Master_m->where('customer_address',$cond);
				
				if(!empty($address_details)){
					$this->response([
							'status' => true,
							'message' => 'Customer address details.',
							'data' => $address_details,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Address not Found.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	public function addAddress_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY)
		{
			
			$customer_id 			= $this->input->post('customer_id');
			$first_name 			= $this->input->post('first_name');
			$last_name 				= $this->input->post('last_name');
			// $email 					= $this->input->post('email');
			$mobile 				= $this->input->post('mobile');
			$address 				= $this->input->post('address');
			/*$locality = $this->input->post('locality');
			$landmark = $this->input->post('landmark');*/
			$city 					= $this->input->post('city');
			$state 					= $this->input->post('state');
			$pincode 				= $this->input->post('pincode');
			$country 				= $this->input->post('country');
			$address_type 			= $this->input->post('address_type');
			$set_default 			= $this->input->post('set_default');
			
			if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($first_name == '' || $first_name == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'First name is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($last_name == '' || $last_name == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Last name is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			// else if($email == '' || $email == NULL)
			// {
			// 	$this->response([
			// 			'status' => FALSE,
			// 			'message' => 'Email is empty or null.'
			// 		], REST_Controller::HTTP_OK);
			// }
			else if($mobile == '' || $mobile == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Mobile is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($address == '' || $address == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Address is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			/*else if($landmark == '' || $landmark == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Landmark is empty or null.'
					], REST_Controller::HTTP_OK);
			}*/
			else if($city == '' || $city == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'City is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($state == '' || $state == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'State is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($pincode == '' || $pincode == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Pincode is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($country == '' || $country == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Country is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($address_type == '' || $address_type == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Address type is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				if($set_default != "" && $set_default != null && $set_default > 0){
					$whr['customer_id'] = $customer_id;
					$update1['set_default'] = 0;
					$update_address_result 				= update('customer_address',$update1,$whr);
					logThis($update_address_result->query, date('Y-m-d'),'Customer Address');

					$insertdata['set_default'] = 1;
				}
				
				$insertdata['customer_id'] 		= $customer_id;
				$insertdata['first_name'] 		= $first_name;
				$insertdata['last_name'] 		= $last_name;
				// $insertdata['email'] 			= $email;
				$insertdata['mobile'] 			= $mobile;
				$insertdata['address'] 			= $address;
				$insertdata['city'] 			= $city;
				$insertdata['state'] 			= $state;
				$insertdata['pincode'] 			= $pincode;
				$insertdata['country'] 			= $country;
				$insertdata['address_type'] 	= $address_type;
				//$insertdata['set_default'] = $set_default;
				
				$insert_result = insert('customer_address',$insertdata,'');
				logThis($insert_result->query, date('Y-m-d'),'Customer Address');
				
				if($insert_result->status = 'success')
				{
					$id['address_id'] = $insert_result->id;
					$result = $this->Master_m->where('customer_address',$id);

					$this->response([
							'status' => true,
							'message' => 'Address insert successfully.',
							'data' => $result,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Address not Found.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}


	// CHANGE DELIVERY ADDRESS

	public function changeDeliveryAddress_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){
			$customer_id 				= $this->input->post('customer_id');
			$deliverd_address_id 		= $this->input->post('address_id');

			$whr['customer_id'] = $customer_id;
			$update1['set_default'] = 0;
			$update_result 				= update('customer_address',$update1,$whr);
			logThis($update_result->query, date('Y-m-d'),'Customer Address');

			// if($update_result->status == "success"){
				$whr1['address_id'] 		= $deliverd_address_id;
				$whr1['customer_id'] 		= $customer_id;
				$upadte2['set_default'] = 1;
				$update_result2 				= update('customer_address',$upadte2,$whr1);
				logThis($update_result2->query, date('Y-m-d'),'Customer Address');
				if($update_result2->status == "success"){
					$this->response([
						'status' 		=> TRUE,
						'data' 			=> array(),
						'message' 		=> 'Address Change Successfully.'
					], REST_Controller::HTTP_OK);
	
				}
			// }else{
			// 	$this->response([
			// 		'status' 		=> FALSE,
			// 		'data' 			=> array(),
			// 		'message' 		=> 'Try again after sometimes!!'
			// 	], REST_Controller::HTTP_OK);
			// }
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}
	public function editAddress_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY)
		{
			$customer_id 		= $this->input->post('customer_id');
			$address_id			= $this->input->post('address_id');
			$first_name 		= $this->input->post('first_name');
			$last_name 			= $this->input->post('last_name');
			// $email 				= $this->input->post('email');
			$mobile 			= $this->input->post('mobile');
			$address 			= $this->input->post('address');
			$city 				= $this->input->post('city');
			$state 				= $this->input->post('state');
			$pincode 			= $this->input->post('pincode');
			$country 			= $this->input->post('country');
			$address_type 		= $this->input->post('address_type');
			$set_default 		= $this->input->post('set_default');
			
			if($address_id == '' || $address_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Address id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($first_name == '' || $first_name == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'First name is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($last_name == '' || $last_name == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Last name is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			// else if($email == '' || $email == NULL)
			// {
			// 	$this->response([
			// 			'status' => FALSE,
			// 			'message' => 'Email is empty or null.'
			// 		], REST_Controller::HTTP_OK);
			// }
			else if($mobile == '' || $mobile == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Mobile is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($address == '' || $address == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Address is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($city == '' || $city == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'City is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($state == '' || $state == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'State is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($pincode == '' || $pincode == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Pincode is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($country == '' || $country == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Country is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($address_type == '' || $address_type == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Address type is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				if($set_default != "" && $set_default != null){
					$whr['customer_id'] = $customer_id;
					$update1['set_default'] = 0;
					$update_address_result 				= update('customer_address',$update1,$whr);
					logThis($update_address_result->query, date('Y-m-d'),'Customer Address');

					// $updatedata['set_default'] = 1;
					$updatedata['set_default'] = $set_default;
				}
				$updatedata['first_name'] = $first_name;
				$updatedata['last_name'] = $last_name;
				// $updatedata['email'] = $email;
				$updatedata['mobile'] = $mobile;
				$updatedata['address'] = $address;
				$updatedata['city'] = $city;
				$updatedata['state'] = $state;
				$updatedata['pincode'] = $pincode;
				$updatedata['country'] = $country;
				$updatedata['address_type'] = $address_type;
				
				$cond['address_id'] 		= $address_id;
				$cond['customer_id'] 		= $customer_id;
				$update_result = update('customer_address',$updatedata,$cond);
				logThis($update_result->query, date('Y-m-d'),'Customer Address');
				
				
				if($update_result->status = 'success')
				{
					$result = $this->Master_m->where('customer_address',$cond);

					$this->response([
							'status' => true,
							'message' => 'Address update successfully.',
							'data' => $result,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Address not Found.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	public function deleteAddress_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY)
		{
			$address_id = $this->input->post('address_id');
			$customer_id = $this->input->post('customer_id');
			
			if($address_id == '' || $address_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Address id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$whr1['address_id'] 		= $address_id;
				$whr1['customer_id'] 		= $customer_id;
				$update_result				= delete('customer_address',$whr1);
				
				logThis($update_result->query, date('Y-m-d'),'Customer Address');
				
				if($update_result->status == 'success')
				{
					$this->response([
						'status' => TRUE,
						'message' => 'Customer address successfully delete.',
					], REST_Controller::HTTP_OK);
				}
				else if($update_result->status == 'warning')
				{
					$this->response([
						'status' => TRUE,
						'message' => $update_result->message,
					], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
						'status' => FALSE,
						'message' => NETWORK_MESSAGE
					], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//slider details api
	public function getSlider_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$sliderList = $this->Master_m->sliderList();
			if(!empty($sliderList))
			{
				$this->response([
						'status' => TRUE,
						'message' => 'Slider list.',
						'image_url' => base_url().SLIDER_IMAGE_PATH,
						'data' => $sliderList,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'Slider not found.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/*** GET CATEGORY LIST : CLOTHING */
	public function getCategory_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$categoryList 	= $this->Master_m->categoryList();
			//$categoryList 		= $this->Master_m->getChildCategory();
			//$remove 			= array_pop($categoryList);;
			if(!empty($categoryList))
			{
				$this->response([
						'status' => TRUE,
						'message' => 'Category list.',
						'image_url' => base_url().CATEGORY_IMAGE_PATH,
						'data' => $categoryList,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'Category not found.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/*** GET CHILD CATEGORY FOR CATEGOTY : WOMEN ,MEN , KIDS */

	public function getChildCategory_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$short_code 		= strtolower($this->post('cat_short_code'));
			$categoryList 		= $this->Master_m->getChildCategoryAPI($short_code);
			//$remove 			= array_pop($categoryList);;
			if(!empty($categoryList))
			{
				$this->response([
						'status' => TRUE,
						'message' => 'Category list.',
						'image_url' => base_url().CATEGORY_IMAGE_PATH,
						'data' => $categoryList,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'Category not found.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}
	
	///category wise product display
	public function categoryProduct_post()
	{
		$key         = $this->post('secretkey');		
		//Secret key
		if($key == SECRETKEY)
		{
			$category_id 		= $this->post('category_id');	
			$customer_id 		= $this->post('customer_id');

			if($category_id == '' || $category_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Category id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{							
				$results 						= $this->Master_m->getCategoryProduct($category_id);								
				if(!empty($results))
				{
					$product						= $this->setProductList($results);	
					$cat_product 					= $this->Master_m->checkisinWishlist($customer_id,$product);				
					$this->response([
							'status' => TRUE,
							'message' => 'Category wise product list .',
							'image_url' => base_url().PRODUCT_IMAGE_PATH,							
							'data' => $cat_product,
						], REST_Controller::HTTP_OK);
				}				
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Products not found or null.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//function for set product list 
	public function setProductList($results)
	{
		$i     = 0;
		$product = array();
		// /print_r($results);
		foreach($results as $key => $val)
		{	$data = array();		
			if(!empty($val)){
				foreach($val as $key1 => $val1){
					
					if($key1 == "image"){
						$data[$key1] = explode ("|", $val1);
						// echo "<pre>".print_r($product[$key])."</pre>";
					}
					else if($key1 == "elements_attributes"){
						$eleattr = array();
						$i     = 0;
						$attr 	= json_decode($val1,true);
						
						if(!empty($attr)){

							foreach($attr as $key2=>$val2){
								$eleattr[$i]['element'] 	= getElementNameByID($key2);
								$eleattr[$i]['value'] 		= getAttributeNameByID($val2);
								$i++;								
							}
						}
						
						$data[$key1] = $eleattr;
						// $data[$key1] = json_decode($val1,true);						
					}
					else{
						$data[$key1] = $val1;
					}
				}
			}
			$product[$key] = $data;
			
		}		
		
		return $product;
	}
	/****** SET ORDER DETAIL RECORDS */
	public function setorderrecords($results)
	{
		
		$order = array();
		// /print_r($results);
		foreach($results as $key => $val)
		{	$data = array();		
			if(!empty($val)){
				foreach($val as $key1 => $val1){
					$eleattr = array();
					$i     = 0;
					if($key1 == "elements_attributes"){
						$attr 	= json_decode($val1,true);
						if(!empty($attr)){
							foreach($attr as $key2=>$val2){
								$eleattr[$i]['element'] = $key2;
								$eleattr[$i]['value'] = $val2;
								$i++;
							}
						}
						
						$data[$key1] = $eleattr;
						// $data[$key1] = json_decode($val1,true);						
					}else if($key1 == "delivery_address"){						
						if($val1 != null || $val1 != ""){
							$delicer_add[] = json_decode($val1,true);
							$data[$key1] = $delicer_add;
						}else{
							$data[$key1] = array();
						}					
						
					}
					else{
						$data[$key1] = $val1;
					}
				}
			}
			$order[$key] = $data;
			
		}		
		
		return $order;
	}

	//brand list api
	public function getAllBrand_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$brandList = $this->Master_m->getAllBrand();
			
			if(!empty($brandList))
			{
				$this->response([
						'status' => TRUE,
						'message' => 'Brand list.',						
						'data' => $brandList,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'Brand not found.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}
	
	//brand wise product display
	public function brandProduct_post()
	{
		$key         = $this->post('secretkey');
		
		//Secret key
		if($key == SECRETKEY)
		{
			$brand_id 			= $this->post('brand_id');	
			$customer_id 		= $this->post('customer_id');			
			$cat_short_code 	= strtolower($this->post('cat_short_code'));			
			
			if($brand_id == '' || $brand_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Brand id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$data['brand_id'] 			= $brand_id; 
				$data['cat_short_code'] 	= $cat_short_code; 
				$results = $this->Master_m->getBrandProduct($data);
				if(!empty($results))
				{
					$product 						= $this->setProductList($results);
					$brand_product 					= $this->Master_m->checkisinWishlist($customer_id,$product);
					
					$this->response([
							'status' => TRUE,
							'message' => 'Brand wise product list .',
							'image_url' => base_url().PRODUCT_IMAGE_PATH,
							'data' => $brand_product,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Products not found or null.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}
	
	//all products list api
	public function allProducts_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$category_id 		= $this->input->post('category_id');
			$customer_id 		= $this->input->post('customer_id');
			$results 			= $this->Master_m->getAllProductInGrid($category_id); 
			$whish_product 		= array();
			if(!empty($results))
			{
				$product = $this->setProductList($results);
				if($customer_id != "" || $customer_id != null){	
					$wh['customer_id'] 		= $customer_id;
					$wishlist 				= $this->Master_m->where('whish_list',$wh);
					if(!empty($wishlist)){
						foreach($wishlist as $row){
							$whish_product[] = $row['product_id'];
						}
					}
				}
				
				$this->response([
						'status' => TRUE,
						'message' => 'All product list .',
						'image_url' => base_url().PRODUCT_IMAGE_PATH,
						'wishlist' => $whish_product,
						'data' => $product,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'Products not found or null.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}
	
	//product id wise product details display
	public function productDetails_post()
	{
		$key        = $this->input->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$product_id 		= $this->input->post('product_id');
			$variant_code 		= $this->input->post('variant_code');
			$customer_id 		= $this->input->post('customer_id');
			$result_array 		= array();
			
			$product_img = array();
			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Product id is empty or null.'
					], REST_Controller::HTTP_OK);
			}			
			else
			{
				$results 				= $this->Master_m->getAllProductDetails($product_id);
				$product_reviews 		= $this->Master_m->getProductAllReviews($product_id);
				$revirew_arr 			= array();
				$allrevirew_arr 		= array();
				
				/**** TOTAL REVIEWS AND STAR COUNT  */
				if(!empty($product_reviews)) {
					$totalReviewcount 		= count($product_reviews);
					$total_rate     		= 0;
					$avg_rate      			= 0;
					$avg_rate_star  		= 0;
					$review_total  			= 0;
					$star_total  			= 0;
					
					foreach($product_reviews as $row2){
						$total_rate += $row2['star_rate'];
						if($row2['star_rate'] != "" || $row2['star_rate'] != null || $row2['star_rate'] > 0){
							$star_total = $star_total + 1;
						}
						
						if($row2['review_content'] != "" || $row2['review_content'] != null || $row2['review_content'] != ''){
							$review_total = $review_total + 1;
						}
						
					}
					 if($total_rate > 0){
						$avg_rate           = $total_rate / $totalReviewcount;
						$avg_rate_star      =  round($avg_rate);
					 }
					
					 $revirew_arr['total_star'] 				= $avg_rate_star;
					 $revirew_arr['total_reviews_count'] 		= $review_total;
					 $revirew_arr['total_rating_count'] 		= $review_total;
					 $revirew_arr['reviews'] 					= $product_reviews;
					 $allrevirew_arr[] = $revirew_arr;
				}				
						
				if(!empty($results))
				{					
					/**** BIND PRODUCT VARIANT LIST  */
					if($variant_code != "" && $variant_code != null && !empty($variant_code)){
						$variant_list 				= $this->Master_m->getVariationListByCode($variant_code);
						array_multisort(array_column($variant_list, 'attributes_id'), SORT_ASC, $variant_list);
						
						$elearr 					= array();
						$vararr 					= array();
					
						if(!empty($variant_list)){
							foreach($variant_list as $item)
							{
								$pid 					= $item['product_id']; 
								$element_id 			= $item['element_id']; 
								$ele_name 				= getElementNameByID($element_id);
								$attributes_id 			= $item['attributes_id']; 
								$attr_name				= getAttributeNameByID($attributes_id);
								$attr_data				= getAttributeData($attributes_id);
								$attribute_code 		= $attr_data[0]['attribute_code'];
								$is_selected 			= false;
								$enable 				= "";
			
								$elearr[$ele_name][$attr_name]['element_id'] 		= $element_id;
								$elearr[$ele_name][$attr_name]['attribute_code'] 	= trim(ltrim($attribute_code, '#'));
								$elearr[$ele_name][$attr_name]['attr_id'] 			= $attributes_id;
								
								
								$elearr[$ele_name][$attr_name]['p_id'][] 			= $pid;	
								if(in_array($product_id,$elearr[$ele_name][$attr_name]['p_id'])){					
									$is_selected 		= true;
								}				
								$elearr[$ele_name][$attr_name]['is_selected'] 		= $is_selected;
							}
						}
					}else{
			
						$elearr 	= $this->Master_m->getProductElemetsAttributesApi($product_id);			
					}
					$elearr_arra = array();
					$j=0;
					if(!empty($elearr)){
						
						foreach($elearr as $key1=>$val1){
							$attr_arr = array();
							$k =0;
							$elearr_arra[$j]['element'] = $key1;
							foreach($val1 as $key1=>$val2){
								$attr_arr[$k]['element_name'] = (string) $key1;
								$attr_arr[$k]['element_value'] = $val2;
								$k++;
							}
							$elearr_arra[$j]['value'] 	= $attr_arr;
							$j++;
						}
					}
					
					/**** ADD WISHLIST FLAG TO DETAIL ARRAY ***/
					$wishlist_flag 		= false;
					if($customer_id != "" || $customer_id != null || $customer_id > 0){					
						$wh['product_id'] 		= $product_id;
						$wh['customer_id'] 		= $customer_id;
						$wishlist 				= $this->Master_m->where('whish_list',$wh);
						if(!empty($wishlist)){
							$wishlist_flag 		= true;
						}
					}

					foreach($results as $key3=>$val3){
						$val3['wishlist'] 			= $wishlist_flag;						
						$result_array[$key3] 		= $val3;
					}
					//UPDATE PRODUCT VIEWS COUNT
					$views_count 				= $this->Master_m->updateProductViews($product_id);
					$product = $this->setProductList($result_array);
					$this->response([
							'status' => TRUE,
							'message' => 'Product details .',
							'image_url' => base_url().PRODUCT_IMAGE_PATH.$product_id,							
							'data' => $product,
							'product_element' => $elearr_arra,
							'product_review' => $allrevirew_arr,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					//Secret key invalid
					$this->response([
							'status' => FALSE,
							'data' => array(),
							'message' => 'Product not found or null.'
						], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/******* NEW PRODUCT LIST  */
	public function newProduct_post()
	{
		$key         = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$new_product = 1;
			$results = $this->Master_m->getProductsList($category_id = NULL, $brand_id = NULL, $new_product, $best_seller = NULL);
				
			if(!empty($results))
			{
				$product = $this->setProductList($results);
				
				$this->response([
						'status' => TRUE,
						'message' => 'New product list .',
						'image_url' => base_url().PRODUCT_IMAGE_PATH,
						'data' => $product,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'Products not found or null.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/**** BEST SELLER PRODUCT */ 
	public function bestSellerProduct_post()
	{
		$key         = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			
			$customer_id 		= $this->post('customer_id');
			$short_code 		= strtolower($this->post('cat_short_code'));
			$results 			= $this->Master_m->getBestSellingProductsForCategory($short_code);
			
			if(!empty($results))
			{
				$product 			= $this->setProductList($results);
				
				/****ADD WISHLIST FLAG FOR PRODUCT LIST */

				$bestselling_product = $this->Master_m->checkisinWishlist($customer_id,$product);				

				$this->response([
						'status' => TRUE,
						'message' => 'New product list .',
						'image_url' => base_url().PRODUCT_IMAGE_PATH,
						'data' => $bestselling_product,	
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'Products not found or null.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/***** RECENT SEARCH PRODUCT LIST*/
	public function getRecentSearch_post(){

		$key         = $this->post('secretkey');

		if($key == SECRETKEY) {

			$customer_id 				= $this->input->post('customer_id');
			$result 					= $this->Master_m->getRecentViewProduct($customer_id);			
			if(!empty($result)){

				$this->response([
					'status' => TRUE,
					'message' => 'recently view product list .',
					'image_url' => base_url().PRODUCT_IMAGE_PATH,
					'data' => $result,
				], REST_Controller::HTTP_OK);
			}
			else{

				$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => 'Products not found or null.'
				], REST_Controller::HTTP_OK);
			}			
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/***** RECENT SEARCH PRODUCT LIST*/

	public function getRecentSearchCategory_post(){

		$key         = $this->post('secretkey');

		if($key == SECRETKEY) {

			$customer_id 				= $this->input->post('customer_id');
			$result 					= $this->Master_m->getRecentSearchCategory($customer_id);			
			if(!empty($result)){

				$this->response([
					'status' => TRUE,
					'message' => 'recently view product list .',
					'image_url' => base_url().PRODUCT_IMAGE_PATH,
					'data' => $result,
				], REST_Controller::HTTP_OK);
			}
			else{

				$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => 'Products not found or null.'
				], REST_Controller::HTTP_OK);
			}			
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/***** FREQUENT SEARCH PRODUCT LIST*/

	public function getFrequentSearch_post(){
		$key         = $this->post('secretkey');
		if($key == SECRETKEY) {
			$customer_id 				= $this->post('customer_id'); 			
			$cat_short_code 			= strtolower($this->post('cat_short_code')); 			
			$result 					= $this->Master_m->getFrequentSearch($customer_id,$cat_short_code);			
			if(!empty($result)){
				$result_arr = array();
				foreach($result as $key=>$val){
					
					foreach($val as $row){
						$result_arr[] = $row;
					}
				}
				$final_res = $result_arr;
				if(count($result_arr) > 20){
					$final_res = array_slice($result_arr, 0, 20);
				}
				$this->response([
					'status' => TRUE,
					'message' => 'frequent search product',
					'image_url' => base_url().PRODUCT_IMAGE_PATH,
					'data' => $final_res,
				], REST_Controller::HTTP_OK);
			}
			else{

				$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => 'no product found'
				], REST_Controller::HTTP_OK);
			}			
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/* SERACH FOR ORDER : KEYWORD  *
	 * PARAMETR : PRODUCT NAME , BRAND NAME
	*/
	public function searchInOrder_post(){
		$key         = $this->post('secretkey');
		if($key == SECRETKEY) {	
			$keyword         		= $this->post('keyword');
			$customer_id        	= $this->post('customer_id');
			$status        			= $this->post('status');
			$time        			= $this->post('time');
			$filter['status'] 		= strtolower(str_replace(' ', '', $status));
			$filter['time'] 		= strtolower(str_replace(' ', '', $time));
			
			if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is empty or null.',
						'data' => array(),
					], REST_Controller::HTTP_OK);
			}
			else{

				$result 	 			= $this->Master_m->getCustomerOrderListApi($customer_id,$keyword,$filter);
				if(!empty($result)){
					$this->response([
						'status' => TRUE,
						'message' => 'order history data',
						'image_url' => base_url().PRODUCT_IMAGE_PATH,
						'data' => $result,
					], REST_Controller::HTTP_OK);
				}
				else{
					$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'product not found'
					], REST_Controller::HTTP_OK);
				}
			}	
			
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/****** FILTER FOR ORDER */
	public function getOrderByFilter_post(){
		$key         = $this->post('secretkey');
		if($key == SECRETKEY) {	
			$customer_id        	= $this->post('customer_id');
			$status        			= $this->post('status');
			$time        			= $this->post('time');
			$filter['status'] 		= strtolower(str_replace(' ', '', $status));
			$filter['time'] 		= strtolower(str_replace(' ', '', $time));
			$result 	 			= $this->Master_m->getCustomerOrderListApi($customer_id,null,$filter);
			if(!empty($result)){
				$this->response([
					'status' => TRUE,
					'message' => 'order history data',
					'image_url' => base_url().PRODUCT_IMAGE_PATH,
					'data' => $result,
				], REST_Controller::HTTP_OK);
			}
			else{
				$this->response([
					'status' => FALSE,
					'message' => 'order not found',
					'data' => array(),
				], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE,
					'data' => array(),
				], REST_Controller::HTTP_OK);
		}
	}

	// function to add product in cart
	public function addToCart_post()
	{	
		
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$product_id 	= $data['product_id'] 			= $this->post('product_id');
			$quantity 		= $data['quantity']  			= $this->post('quantity');
			$customer_id 	= $data['customer_id'] 			= $this->post('customer_id');
			
			
			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'customer_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}else{
				$elements_attributes 		= $data['elements_attributes'] 	= $this->Master_m->getElememtAttributeForSingleProduct($product_id);
				$res 						= $this->Master_m->addTocart($data);
				if(!empty($res)){
					$this->response([
							'status' => TRUE,
							'message' => $res['message']
						], REST_Controller::HTTP_OK);
				}
				else
				{					
					$this->response([
								'status' => FALSE,
								'message' => 'item not added to bag'
							], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//function to remove product from cart
	public function removeFromCart_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$product_id 					= $this->post('product_id');
			$customer_id					= $this->post('customer_id');
			$condition['customer_id'] 		= $customer_id;
			$condition['product_id'] 		= $product_id;

			if($product_id == '' || $product_id == NULL && $product_id >0)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($customer_id == '' || $customer_id == NULL && $customer_id >0)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'customer_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else{		

				$result = delete('customer_cart',$condition);
				if($result->status == "success"){
					$this->response([
						'status' => TRUE,
						'message' => 'item removed from bag'
					], REST_Controller::HTTP_OK);
				}else{
					$this->response([
						'status' => FALSE,
						'message' => 'Something Went Wrong, Try Again Later,'
					], REST_Controller::HTTP_OK);
				}	
			}		
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//function to show cart items
	public function getCartItems_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$customer_id 				= $this->post('customer_id');
			if($customer_id != "" && $customer_id != null && $customer_id >0){
				$where['customer_id'] 		= $customer_id;
				$cart_items 				= $this->Master_m->getCustomerCartItems($customer_id);			
				
				if(!empty($cart_items))
				{
					$result 					= $this->setProductList($cart_items);
					$this->response([
							'status' 	=> TRUE,
							'data'		=> $result,
							'image_url' => base_url().PRODUCT_IMAGE_PATH,
							'message' 	=>	'Cart Items List'
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
						'status' => FALSE,
						'data' => array(),
						'message' => 'No Cart Items found'
					], REST_Controller::HTTP_OK);
				}
			}else{
				$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => 'customer id is not empty / null or 0 '
				], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//function to empty the cart
	public function emptyCart_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$customer_id 					= $this->post('customer_id');
			$condition['customer_id'] 		= $customer_id;
			$result 						= delete('customer_cart',$condition);
			
			if($result->status == "success"){
				$this->response([
					'status' => TRUE,
					'message' => 'Cart Is Empty'
				], REST_Controller::HTTP_OK);
			}else{
				$this->response([
					'status' => FALSE,
					'message' => 'Please Try Again Later,'
				], REST_Controller::HTTP_OK);
			}	
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//function to change the quantity of item in cart
	public function updateProductQty_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$product_id 		= $this->post('product_id');
			$quantity     		= $this->post('quantity');
			$customer_id		= $this->post('customer_id');

			$where['product_id'] 	= $product_id;
			$result   				= $this->Master_m->where('product_details',$where);
			$net_price 				= $result[0]['net_price'];
			$total_amt              = $quantity * $net_price;

			$condition['product_id'] 	= $product_id;
			$condition['customer_id'] 	= $customer_id;
			$updatedata['quantity'] 	= $quantity;			
					
			$update_result = update('customer_cart',$updatedata,$condition);			
			logThis($update_result->query, date('Y-m-d'),'Customer Cart');			
			if($update_result->status == 'success'){
				$this->response([
					'status' => TRUE,
					'message' => 'Quantity Updated'
				], REST_Controller::HTTP_OK);
				
			}else{

				$this->response([
					'status' => FALSE,
					'message' => 'Please Try Again !'
				], REST_Controller::HTTP_OK);
			}		
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	//order product details and save database
	public function addOrder_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY){
			$customer_id 				= $this->input->post('customer_id');
			$product_id					= $this->input->post('product_id');
			
			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'customer_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}else{
				$checkitemStock      		= $this->Master_m->checkCartItemStock($customer_id); // 0 :instock , <0 :outofstock
			
			
				$product_arr				= array();
				if(!empty($product_id)){
					$product_arr = explode(',',$product_id);
				}
				
				$cart_items 				= $this->Master_m->getSelectedCartItemDetail($customer_id,$product_arr);
				
				$whr['customer_id'] 	= $customer_id;
				$whr['set_default'] 	= 1;
				$address_res 			= $this->Master_m->where('customer_address',$whr);
				$shipping_address       = "";
				$address_arr       		= array();
				if(!empty($address_res)){
					$name 			= $address_res[0]['first_name'].' '.$address_res[0]['last_name'];
					$mobile 		= $address_res[0]['mobile'];
					$address 		= $address_res[0]['address'].' ,<br>'.$address_res[0]['city'].' , '.$address_res[0]['state'].' ,<br>'.$address_res[0]['country'].' - '.$address_res[0]['pincode'];
					$shipping_address 	= '<strong>'.ucwords($name).'</strong><br>'.$address.'<br>Phone no : '.$mobile; 
					$address_arr['name'] = $name;
					$address_arr['mobile'] = $mobile;
					$address_arr['address'] = $address_res[0]['address'];
					$address_arr['city'] = $address_res[0]['city'];
					$address_arr['state'] = $address_res[0]['state'];
					$address_arr['country'] = $address_res[0]['country'];
					$address_arr['pincode'] = $address_res[0]['pincode'];
					$delivery_address = json_encode($address_arr,true);
				}
			
				if(!empty($cart_items)){
					
					$total_item  		= count($cart_items);
					$total_amt 			= 0;
					$total_gst 			= 0;
					$total_discount 	= 0;
					$total_quantity		= 0;
					$total_mrp			= 0;
					foreach($cart_items  as $item){
						$gst_amt			= $item['gst_amt'];
						$discount_amt		= $item['discount_amt'];
						$quantity			= $item['quantity'];
						$net_price			= $item['net_price'];
						$mrp_price			= $item['mrp_price'];
						$total_amt			= $total_amt + ($net_price * $quantity);
						$total_quantity		= $total_quantity + $quantity;
						$total_gst 			= $total_gst + $gst_amt;
						$total_discount 	= $total_discount + ($discount_amt * $quantity);
						$total_mrp 			= $total_mrp + ($mrp_price * $quantity);		
					}
					
					$current_fy 						= getFY();				
					$order_number 						= $this->Master_m->getLatestOrderNumber();
					$order_data['order_number'] 		= 'OD'.$current_fy.'-'.$customer_id.time();
					$order_data['customer_id']			= $customer_id;
					$order_data['total_item']			= $total_item;
					$order_data['total_mrp']			= $total_mrp;
					$order_data['total_quantity']		= $total_quantity;
					$order_data['total_amount'] 		= $total_amt;
					$order_data['gst_amount'] 			= $total_gst;
					$order_data['discount_amt'] 		= $total_discount;
					$order_data['order_date']			= date('Y-m-d');
					$order_data['is_active']			= 1;
					$order_data['delivery_status_id']	= 1;
					$order_data['shipping_address']		= $shipping_address;
					$order_data['delivery_address']		= $delivery_address;

					if($checkitemStock == 0){
						$insert_result = insert('orders',$order_data,'');				
						logThis($insert_result->query, date('Y-m-d'),'Order');
						$order_id = $insert_result->id;
						
						if($insert_result->status = 'success') {				
							foreach($cart_items as $row){
								$ele_arr = array();
								$ele_attr 				= "";
								$quantity				= $row['quantity'];
								$net_price				= $row['net_price'];
								$elements_attributes	= json_decode($row['elements_attributes'],true);
								
								if(!empty($elements_attributes)){
									foreach($elements_attributes as $key=>$val){
										$ele_name 				= getElementNameByID($key);
										$value 					= getAttributeNameByID($val);
										$ele_arr[$ele_name] 	= $value;
									}
								}
								if(!empty($ele_arr)){
									$ele_attr = json_encode($ele_arr,true);
								}
								$total		= ($net_price * $quantity);
								
								$order_detail['order_id'] 					= $order_id;
								$order_detail['product_id'] 				= $row['product_id'];
								$order_detail['product_name'] 				= $row['product_name'];
								$order_detail['quantity'] 					= $row['quantity'];
								$order_detail['net_price'] 					= $row['net_price'];
								$order_detail['mrp_price'] 					= $row['mrp_price'];
								$order_detail['total_amt'] 					= $total;
								$order_detail['discount'] 					= $row['discount'];
								$order_detail['return_or_replace'] 			= $row['return_or_replace'];
								$order_detail['return_replace_validity'] 	= $row['return_replace_validity'];
								$order_detail['discount_amt'] 				= ($row['discount_amt'] * $quantity);
								$order_detail['gst'] 						= $row['tax'];
								$order_detail['gst_amt'] 					= $row['gst_amt'];
								$order_detail['vendor_id'] 					= $row['vendor_id'];
								$order_detail['elements_attributes'] 		= $ele_attr;
								$order_detail['order_date'] 				= date('Y-m-d');
				
								$insert_order 	= insert('order_details',$order_detail,'');
								logThis($insert_order->query, date('Y-m-d'),'Order Detail');	
								$update_stock = $this->Master_m->updateProductStock($row['product_id'],$quantity);				
				
							}
		
							$payment['payment_mode']		= 'cod';
							$payment['order_id'] 			= $order_id;
							$payment['customer_id'] 		= $customer_id;
							$payment['total_pay_amount']	= $total_amt;
							$payment['payment_date']		= date('Y-m-d');
							$payment['pay_status']			= 1;
		
							$insert_payment = insert('payment_details',$payment,'');				
							logThis($insert_payment->query, date('Y-m-d'),'Payment Detail');
		
							// $condition['customer_id'] 		= $customer_id;
							// $result 						= delete('customer_cart',$condition);
							
							$result 						= $this->Master_m->removeSelectedCartItem($customer_id,$product_arr);
							
							//SEND ORDER CONFRIMATION EMAIL
							$email 							= $this->Master_m->sendConfirmationEmail($order_id);
							$this->response([
								'status' => TRUE,
								'message' => 'Order Placed'
							], REST_Controller::HTTP_OK);
						}
						else{
							$this->response([
								'status' => FALSE,				
								'message' => 'Try Again !!'
							], REST_Controller::HTTP_OK);
						}
					}else{
						$this->response([
							'status' => false,
							'message' => 'please check items in stock or not !'
						], REST_Controller::HTTP_OK);
					}					
					
				}else{
					
					$this->response([
						'status' => FALSE,				
						'message' => 'No Item Found in Cart'
					], REST_Controller::HTTP_OK);
				}
			}
		}
		else
		{			//Secret key invalid
			$this->response([
					'status' => FALSE,				
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	public function placeOrder_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY){
			$customer_id 				= $this->input->post('customer_id');
			$add_order 					= $this->Master_m->addOrder($customer_id);			
			if($add_order){				
					$this->response([
						'status' => TRUE,
						'message' => 'Order Placed'
					], REST_Controller::HTTP_OK);				
			}else{
				$this->response([
					'status' => FALSE,				
					'message' => 'No Item Found in Cart'
				], REST_Controller::HTTP_OK);
			}
		}
		else
		{			//Secret key invalid
			$this->response([
					'status' => FALSE,				
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}


	

	////order history list
	public function orderHistory_post()
	{
		$key = $this->post('secretkey');

		if($key == SECRETKEY){

			$customer_id 				= $this->input->post('customer_id');
			$where['customer_id'] 		= $customer_id;
			$orderdata   				= $this->Master_m->where('orders',$where);			
			if(!empty($orderdata)){
				$OrderList   			= $this->Master_m->getCustomerOrderListApi($customer_id,null);
				$this->response([
					'status' 		=> TRUE,
					'image_url' => base_url().PRODUCT_IMAGE_PATH,
					'data' 			=> $OrderList,
					'message' 		=> 'order hitory data.'
				], REST_Controller::HTTP_OK);

			}else{
				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> array(),
					'message' 		=> 'No Order Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/*** order detail from order Id */
	public function orderDetail_post(){
		
		$key = $this->post('secretkey');
		if($key == SECRETKEY){

			$product_id 			= $this->input->post('product_id');
			$order_id 				= $this->input->post('order_id');

			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($order_id == '' || $order_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'order is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else{
				$OrderList   			= $this->Master_m->getCustomerOrderProductDetails($order_id,$product_id);
				$customer_id 			= $OrderList[0]['customer_id'];
				$product_review			= $this->Master_m->getSingleProductReviewaApi($customer_id,$product_id);
				$list_array 			= array();
				$star_rate				= '0';
				$review_flag 			= false;
				if(!empty($product_review)){
					$star_rate = $product_review[0]['star_rate'];					
					$review_flag = true;
					
				}
				foreach($OrderList as $key=>$val){
					$val['star_rate'] 			= $star_rate;
					$val['review_flag'] 		= $review_flag;
					$list_array[$key] 			= $val;
				}
				
				$invoice 				= $this->Master_m->generateInvoice($order_id,$product_id);
				$orderdata 				= $this->setorderrecords($list_array); 
				$invoicepath 		= "";
				if(!empty($invoice)){
					$invoicepath = base_url().$invoice;
				}
				if(!empty($OrderList)){	
					$this->response([
						'status' 		=> TRUE,
						'data' 			=> $orderdata,
						'image_url' 	=> base_url().PRODUCT_IMAGE_PATH,
						'invoice_url' 	=> $invoicepath,
						'message' 		=> 'order detail.'
					], REST_Controller::HTTP_OK);
	
				}else{
					
					$this->response([
						'status' 		=> FALSE,
						'data' 			=> array(),
						'message' 		=> 'no data Found !!'
					], REST_Controller::HTTP_OK);
	
				}	
			}				
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}


	public function getOrderInvoice_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY){

			$product_id 		= $this->input->post('product_id');
			$order_id 			= $this->input->post('order_id');

			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($order_id == '' || $order_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'order id is empty or null.'
					], REST_Controller::HTTP_OK);
			}else{

				$result 			= $this->Master_m->generateInvoice($order_id,$product_id); 
				$invoicepath 		= "";
				if(!empty($result)){
					$invoicepath = base_url().$result;
				}
			
				if(!empty($result)){
					$this->response([
						'status' 	=> TRUE,						
						'filepath'	=> $invoicepath,
						'message' 	=> 'invoice Data.'
					], REST_Controller::HTTP_OK);
				}
				else{
					$this->response([
						'status' 	=> FALSE,
						'filepath'	=> "",
						'message' 	=> 'No Invoice Found For This Order !'
					], REST_Controller::HTTP_OK);
				}	
			}					
		}
		else
		{	
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/****** PRODUCT ELEMENTS & ATTRIBUTES VALUE********* */
	public function getProductElemetsAttributes($product_id){

		$this->db->select('pea.element_id,pea.attributes_id,pe.element_name,pe.element_id');
		$this->db->from('product_elements_attributes pea');
		$this->db->join('product_elements pe','pe.element_id = pea.element_id');
		$this->db->where('pea.product_id', $product_id);
		$query		= $this->db->get()->result_array();
		
		$elements = array();
		$i = 0;
		if(!empty($query)){
			
			foreach($query as $row){
				
				$element_name 				= $row['element_name'];
				$attributes_id 				= explode(',', $row['attributes_id']);
				$attr_arr = array();
				
				if(!empty($attributes_id)){
					
					foreach($attributes_id as $attr){
						$whr['attributes_id'] 	= $attr;
						$attr_res 				= $this->Master_m->where('attributes',$whr);
						$attr_name = $attr_res[0]['attributes_name'];
						$attr_arr[] = $attr_name;	
					}
				}
				
				$elements[$i]['elemant'] 	= $element_name;
				$elements[$i]['value'] 		= $attr_arr;
				$i++;
			}
		}
		return $elements;
	}

	/***** CATEGORY WITH OFFERS VALUE********** */

	public function getOfferwithCategoryList_post(){
		$key = $this->post('secretkey');

		if($key == SECRETKEY){

			//$category_id 				= $this->input->post('category_id');
			$short_code 				= strtolower($this->post('cat_short_code'));
			$result   					= $this->Master_m->getAllCategoryByoffer($short_code);
			
			if(!empty($result)){	
				$this->response([
					'status' 		=> TRUE,
					'data' 			=> $result,
					'message' 		=> 'offer data.'
				], REST_Controller::HTTP_OK);

			}else{
				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> array(),
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/****** PRODUCTS WITH OFFER VALUES */
	public function getCategoryProductwithOffers_post(){
		$key = $this->post('secretkey');
		
		if($key == SECRETKEY){
			
			$offer_id 				= $this->input->post('offer_id');
			$category_id 			= $this->input->post('category_id');
			$customer_id 			= $this->input->post('customer_id');

			if($offer_id == '' || $offer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'offer id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($category_id == '' || $category_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'category id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else{
				
				$result 	= $this->Master_m->getProductsByOffer($offer_id,$category_id);				
				if(!empty($result)){
					$product 					= $this->Master_m->checkisinWishlist($customer_id,$result);	
					$this->response([
						'status' 		=> TRUE,
						'image_url' 	=> base_url().PRODUCT_IMAGE_PATH,
						'data' 			=> $product,
						'message' 		=> 'item list.'
					], REST_Controller::HTTP_OK);
	
				}else{
					
					$this->response([
						'status' 		=> FALSE,
						'data' 			=> array(),
						'message' 		=> 'No Item Found !!'
					], REST_Controller::HTTP_OK);	
				}		
			}				
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/***** PRODUCT FILTER COLOR LIST  */
	public function getProductFilterColor_post(){
		$key = $this->post('secretkey');

		if($key == SECRETKEY){
			$short_code 				= strtolower($this->post('cat_short_code'));
			$data['short_code']			= $short_code;		
			$data['element_type']		= "Color";		
			$result   					= $this->Master_m->allProductAttributesByElementAPI($data);
			
			if(!empty($result)){	
				$this->response([
					'status' 		=> TRUE,
					'data' 			=> $result,
					'message' 		=> 'color list.'
				], REST_Controller::HTTP_OK);

			}else{
				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> array(),
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/***** TOP BRAND : TRENDING BRANDS  */
	public function getTrendingBrands_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){
			$short_code 				= strtolower($this->post('cat_short_code'));
			$result   					= $this->Master_m->getBrandTrendingslist($short_code);			
			if(!empty($result)){	
				$this->response([
					'status' 		=> TRUE,
					'image_url' 	=> base_url().BRAND_LOGO_PATH,
					'data' 			=> $result,
					'message' 		=> 'Brand Trending'
				], REST_Controller::HTTP_OK);

			}else{				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> array(),
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/***** NEW LANUCHES PRODUCTS  */
	public function getNewLaunch_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){
			$short_code 				= strtolower($this->post('cat_short_code'));
			$result   					= $this->Master_m->getNewLaunchelist($short_code);			
			if(!empty($result)){	
				$this->response([
					'status' 		=> TRUE,
					'image_url' 	=> base_url().PRODUCT_IMAGE_PATH,
					'data' 			=> $result,
					'message' 		=> 'Peoduct List'
				], REST_Controller::HTTP_OK);

			}else{				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> array(),
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}
	
	/***** PRODUCT LIST BY ATTRIBUTE ID, CATEGORY  */
	public  function getProductByAttributeAndCategory_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){
			$short_code 				= strtolower($this->post('cat_short_code'));
			$attribute_id 				= $this->post('attribute_id');
			$customer_id 				= $this->post('customer_id');
			$result   					= $this->Master_m->getProductByAttributeAndCategory($short_code,$attribute_id);			
			if(!empty($result)){	
				$attr_product 					= $this->Master_m->checkisinWishlist($customer_id,$result);
				$this->response([
					'status' 		=> TRUE,
					'image_url' 	=> base_url().PRODUCT_IMAGE_PATH,
					'data' 			=> $attr_product,
					'message' 		=> 'Product List'
				], REST_Controller::HTTP_OK);

			}else{				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> array(),
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/**** ADD TO WISHLIST */
	public function addToWishlist_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){						
			$product_id 			= $this->post('product_id');
			$customer_id 			= $this->post('customer_id');			
			
			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product_id is empty or null.',
						'data' 			=> array()
					], REST_Controller::HTTP_OK);
			}
			else if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'customer_id is empty or null.',
						'data' 			=> array()
					], REST_Controller::HTTP_OK);
			}
			else{
				$data['product_id'] 			= $this->post('product_id');
				$data['customer_id'] 			= $this->post('customer_id');
				$res 							= $this->Master_m->addToWishlist($data);	
				if(!empty($res)){	
					$this->response([
						'status' => TRUE,
						'message' => $res['message'],
						'totalwishlist' => $res['totalWishList']
					], REST_Controller::HTTP_OK);
	
				}else{				
					$this->response([
						'status' 		=> FALSE,
						'data' 			=> array(),
						'message' 		=> 'item already added',
						'totalwishlist' => $this->Master_m->getTotalWhishList($customer_id)
					], REST_Controller::HTTP_OK);
	
				}		
			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/**** MOVE  TO WISHLIST */
	public function moveToWishlist_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){						
			$product_id 			= $this->post('product_id');
			$customer_id 			= $this->post('customer_id');			
			
			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product_id is empty or null.',
						'data' 			=> array()
					], REST_Controller::HTTP_OK);
			}
			else if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'customer_id is empty or null.',
						'data' 			=> array()
					], REST_Controller::HTTP_OK);
			}
			else{
				$data['product_id'] 			= $this->post('product_id');
				$data['customer_id'] 			= $this->post('customer_id');
				$res 							= $this->Master_m->moveToWishlist($data);	
				if(!empty($res)){	
					$this->response([
						'status' => TRUE,
						'message' => $res['message'],
					], REST_Controller::HTTP_OK);
	
				}else{				
					$this->response([
						'status' 		=> FALSE,
						'data' 			=> array(),
						'message' 		=> 'item not moved',
					], REST_Controller::HTTP_OK);
	
				}		
			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/*** GET WISHLIST ITEM  */
	public function getWishlistItem_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){						
			
			$customer_id 					= $this->post('customer_id');
			$cat_short_code 				= strtolower($this->post('cat_short_code'));
			if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'No item found in your wishlist!'
					], REST_Controller::HTTP_OK);
			}else{			
				$res 							= $this->Master_m->getWishListItem($customer_id ,'','',$cat_short_code);					
				if(!empty($res)){	
					$this->response([
						'status' 	=> TRUE,
						'image_url' => base_url().PRODUCT_IMAGE_PATH,
						'data'		=> $res,					
						'message' 	=>	'Wishlist Items List'
					], REST_Controller::HTTP_OK);

				}else{				
					$this->response([
						'status' 		=> FALSE,
						'data' 			=> array(),
						'message' 		=> 'no wishlist !!'
					], REST_Controller::HTTP_OK);

				}
			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/****REMOVE WISHLIST ITEM */
	public function removeWishlistItem_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){						
			
			$product_id 					= $this->post('product_id');
			$customer_id					= $this->post('customer_id');

			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'customer_id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else{

				$condition['customer_id'] 		= $customer_id;
				$condition['product_id'] 		= $product_id;

				$result = delete('whish_list',$condition);
				if($result->status == "success"){
					$this->response([
						'status' => TRUE,
						'message' => 'item remove from wishlist'
					], REST_Controller::HTTP_OK);
				}else{
					$this->response([
						'status' => FALSE,
						'message' => 'Something Went Wrong, Try Again Later,'
					], REST_Controller::HTTP_OK);
				}	
			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/***** ADD PRODUCT RATING REVIEWS */
	public function addProductRatingReviews_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){						
			$product_id 			= $this->post('product_id');
			$customer_id 			= $this->post('customer_id');			
			
			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product id is empty or null.',						
					], REST_Controller::HTTP_OK);
			}
			else if($customer_id == '' || $customer_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'customer id is empty or null.',						
					], REST_Controller::HTTP_OK);
			}
			else{
				$data['product_id'] 			= $product_id;
				$data['customer_id'] 			= $customer_id;
				$data['rate'] 					= $this->post('star_rate');
				$data['review_title'] 			= $this->post('review_title');
				$data['review_content'] 		= $this->post('review_content');
				$data['customer_name'] 			= $this->post('customer_name');
				$data['email'] 					= "";
				$res 							= $this->Master_m->submitRatingReviews($data);	
				if(!empty($res)){	
					$this->response([
						'status' => TRUE,
						'message' => $res['message'],						
					], REST_Controller::HTTP_OK);
	
				}else{				
					$this->response([
						'status' 		=> FALSE,						
						'message' 		=> 'Please try again later !!',						
					], REST_Controller::HTTP_OK);
	
				}		
			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/***** BIND SIMILER PRODUCT BY CATEGORY */
	public function getSimilarProduct_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){						
			$product_id 			= $this->post('product_id');
			$category_id 			= $this->post('category_id');	
			$customer_id 			= $this->post('customer_id');		
			
			if($product_id == '' || $product_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'product_id is empty or null.',						
					], REST_Controller::HTTP_OK);
			}
			else if($category_id == '' || $category_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'category_id is empty or null.',						
					], REST_Controller::HTTP_OK);
			}
			else{				
				$res 							= $this->Master_m->getSimilerProducts($category_id,$product_id);	
				$similar_product 				= $this->Master_m->checkisinWishlist($customer_id,$res);				
 
				if(!empty($res)){	
					$this->response([
						'status' => TRUE,
						'image_url' => base_url().PRODUCT_IMAGE_PATH,
						'data' => $similar_product,						
					], REST_Controller::HTTP_OK);
	
				}else{				
					$this->response([
						'status' 		=> FALSE,						
						'data' => array(),
						'message' 		=> 'no item found',						
					], REST_Controller::HTTP_OK);
	
				}		
			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/****GET VARIANT PRODUCT */

	public function getProductFromVariant_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){	

			$current_attribute 		= $this->input->post('current_attribute');	
			$selected_attribute 	= $this->input->post('selected_attribute');	
			$variant_code 			= $this->input->post('variant_code');

			if($current_attribute == '' || $current_attribute == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'attribute id is empty or null.',						
					], REST_Controller::HTTP_OK);
			}
			// else if($selected_attribute == '' || $selected_attribute == NULL)
			// {
			// 	$this->response([
			// 			'status' => FALSE,
			// 			'message' => 'attribute id is empty or null.',						
			// 		], REST_Controller::HTTP_OK);
			// }
			else if($variant_code == '' || $variant_code == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'variantion code id is empty or null.',						
					], REST_Controller::HTTP_OK);
			}
			else{
			
				$response  			= array();		
				$product_result  	= array();		
				
				$data['current_attribute'] 	= $current_attribute;
				$data['variant_code'] 		= $variant_code;
				$res 						= $this->Master_m->getvariantproductBYeleattrApi($data);
				$product_id 				= $res[0]['product_id'];
				if($selected_attribute != "" || $selected_attribute != null || !empty($selected_attribute)){
					
					$selected_attribute = explode(',',$selected_attribute);						
					foreach($res as $row)
					{
						$p_id 				= $row['product_id'];
						foreach($selected_attribute as $ele=>$attr){ 
							//$item_ele 		= $ele;
							$item_attr 		= $attr;
							$res1 			= $this->Master_m->getvariantproductBYSelectedeleattr($p_id,'',$item_attr);	
									
							if(!empty($res1)) {							
								$product_id 				= $res1->product_id;
								break;
							}										
						}					
					}
				}else{
					$product_id 				= $res[0]['product_id'];
				}

				$response['product_id']	 	= $product_id; 
				$response['variant_code'] 	= $variant_code;				
				
				if(!empty($response)){	
					$product_result[] = $response;
					$this->response([
						'status' => TRUE,					
						'data' => $product_result,						
					], REST_Controller::HTTP_OK);

				}else{
					$this->response([
						'status' => false,					
						'data' => array(),						
					], REST_Controller::HTTP_OK);

				}
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/****** SERACH PRODUCT,BRAND,CTAEGORY */
	public function searchBykeywords_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){	

			$keyword 			= $this->input->post('keyword');
			$customer_id 		= $this->input->post('customer_id');
			$category 			= strtolower($this->input->post('cat_short_code'));

			if($keyword == '' || $keyword == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'please enter search keyword.',						
					], REST_Controller::HTTP_OK);
			}
			else{	
					$result 					= $this->Master_m->searchBykeywords($keyword,$category); 
					if(!empty($result))
					{
						if($customer_id != "" || $customer_id != null || $customer_id < 0)
						{
							$data['keyword'] 			= $keyword;
							$data['customer_id'] 		= $customer_id;
							$data['category'] 			= $category;
							$query 						= $this->Master_m->where('recent_search',$data);
							if(empty($query)){
								$data['created_at'] 		= date('Y-m-d');
								$insert_result = insert('recent_search',$data,'');
								logThis($insert_result->query, date('Y-m-d'),'Recent Search');
							} 				
						}			
						
						$search_product 		= $this->Master_m->checkisinWishlist($customer_id,$result);	
						$this->response([
							'status' => TRUE,	
							'image_url' => base_url().PRODUCT_IMAGE_PATH,				
							'data' => $search_product,						
						], REST_Controller::HTTP_OK);
	
					}else{
						$this->response([
							'status' => false,					
							'data' => array(),
							'message' => 'no data found !',						
						], REST_Controller::HTTP_OK);
					}				
			}		
			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/**** GET RECENT SEARCH */
	public function getRecentsearchkeywords_post(){
		$key 				= $this->post('secretkey');
		if($key == SECRETKEY){	
			
			$customer_id 		= $this->input->post('customer_id');
			$category 			= $this->input->post('cat_short_code');
			$result 			= $this->Master_m->getRecentsearchkeywords($customer_id,$category);

			if(!empty($result)){	
				
				$this->response([
					'status' => TRUE,
					'image_url' 		=> base_url().PRODUCT_IMAGE_PATH,					
					'data' => $result,						
				], REST_Controller::HTTP_OK);

			}else{
				$this->response([
					'status' => false,					
					'data' => array(),						
				], REST_Controller::HTTP_OK);

			}
		}
		else
		{	
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/****  GET SUGGESTION FORM KEYWORD */

	public function getSuggestionFromKeyword_post(){
		$key = $this->post('secretkey');
		
		if($key == SECRETKEY){	

			$keyword 			= $this->input->post('keyword');
			$category 			= strtolower($this->input->post('cat_short_code'));
			if($keyword == '' || $keyword == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'please enter search keyword.',						
					], REST_Controller::HTTP_OK);
			}
			else{

				$category_id 		= ""; 
				if($category != null || $category != ""){
					$cat_cond['short_code'] 	= $category;
					$result						= $this->Master_m->where('category',$cat_cond);
					$category_id				= $result[0]['category_id'];	
				}

				//$result = $this->Master_m->getSuggestionbyKeywords($keyword,$category_id);
				$result 					= $this->Master_m->searchBykeywords($keyword,$category); 
				
				if(!empty($result))
				{
					$tag_arr = array();
					foreach($result as $row)
					{
						$tag = explode(',',$row['tag']);
						foreach($tag as $t_row)
						{
							if(strpos(strtolower($t_row),strtolower($keyword)) !== false)
							{
								if(!in_array($t_row,$tag_arr))
									$tag_arr[] = $t_row;
							}
							else
							{
								// print_r("no");
								// print_r($t_row);
							}	
						}
					}

					$this->response([
						'status' => true,					
						'data' => $tag_arr,						
					], REST_Controller::HTTP_OK);
				}else{
					$this->response([
						'status' => false,					
						'data' => array(),						
					], REST_Controller::HTTP_OK);
				}
			}
			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/**** REMOVE RECENT SEARCH  */
	public function removeRecentSearch_post(){
		$key = $this->post('secretkey');
		
		if($key == SECRETKEY){	
			$customer_id 			= $this->post('customer_id');
			$search_id 				= $this->post('search_id');
			
			if($customer_id == "" || $customer_id == null){

				$this->response([
					'status' => FALSE,
					'message' => 'customer id is empty or null.',						
				], REST_Controller::HTTP_OK);
				
			}else{

				$data['customer_id'] 	= $customer_id; 
				$data['search_id'] 		= $search_id;
				$result 				= $this->Master_m->removeRecentSearch($data); 
				if($result){
					$this->response([
						'status' => true,					
						'message' => 'Removed Succesfully',						
					], REST_Controller::HTTP_OK);
				}else{
					$this->response([
						'status' => true,					
						'message' => 'Try again !!',						
					], REST_Controller::HTTP_OK);
				}
				
			}		

		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/****** SET FILTER OPTION FOR PRODUCTS */

	public function getProductFilterOption_post(){
		$key = $this->post('secretkey');		
		if($key == SECRETKEY){			
			$category_id 					= $this->post('category_id');
			$brand_id 						= $this->post('brand_id');
			$attributes_id 					= $this->post('attributes_id');
			$cat_short_code 				= strtolower($this->post('cat_short_code'));
			$gender 						= $this->post('gender');
			$data['category_id'] 			= $category_id;
			$data['brand_id'] 				= $brand_id; 
			$data['attributes_id'] 			= $attributes_id; 
			$data['cat_short_code'] 		= $cat_short_code; 
			$data['gender'] 				= $gender; 
			$result 						= $this->Master_m->getAllProductfilteroption($data); 			
			if($result){				
				$this->response([
					'status' 		=> true,
					'data' 			=> $result,					
					'price_range' 	=> array("0","5000"),					
				], REST_Controller::HTTP_OK);
			}else{
				$this->response([
					'status' => true,					
					'message' => 'Try again !!',						
					'data' => array(),
				], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/***** PRODUCT LIST PAGE : SORT BY FILTER */
	public function productSortByWithFilter_post(){
		$key = $this->post('secretkey');		
		
		if($key == SECRETKEY){

			$category_id 		= $this->post('category_id');
			$customer_id 		= $this->post('customer_id');
			$tag 				= $this->post('tag');
			$cat_short_code 	= strtolower($this->post('cat_short_code'));
			$sort_by 			= generateShortcode($this->post('sort_by'));
			$filter_option 		= $this->post('filter_option'); 
			$min_price 			= $this->post('min_price'); 
			$max_price 			= $this->post('max_price'); 
			
			$filter_arr 		= array();			
			$brand_arr 			= array();
			$product_arr 		= array();
			
			if($filter_option != "" || $filter_option != null){
				$filter_option 		= json_decode($filter_option,true);
				
				foreach($filter_option as $row){
					$ele_id 			= $row['element_id'];
					$attr_id 			= $row['attr_id'];
					//$filter_arr[$ele_id][] = $attr_id;
					if(is_numeric($ele_id)){
						// $filter_arr['ele'][] 		= $ele_id;
						// $filter_arr['atrr'][] 		= $attr_id;	
						$filter_arr[$ele_id][] = $attr_id;
					}
					else {
						// $brand_arr['brands'][] = $attr_id;
						$brand_arr[] = $attr_id;
					}								
				}
			}			
			
			// if($category_id == "" || $category_id == null){
			// 	$this->response([
			// 		'status' => FALSE,
			// 		'message' => 'category id is empty or null.',						
			// 	], REST_Controller::HTTP_OK);
				
			// }
			// else{
				$data['category_id'] 		= $category_id;
				$data['cat_short_code'] 	= $cat_short_code;
				$data['brands'] 			= array_unique($brand_arr);				
				$data['tag'] 				= $tag;				
				
				//$result 					= $this->Master_m->popularProductByCategory($data);					
				$result 					= $this->Master_m->productSortByWithFilter($data);
					
				if(!empty($result)){
					$count			= count($filter_arr);
					if(!empty($filter_arr)){
						
						foreach($result as $row)
						{
							$element_id 			= $row['element_id'];
							$attributes_id 			= $row['attributes_id'];
							$product_id 			= $row['product_id'];													
							foreach($filter_arr as $akey=>$aval){
								if(in_array($attributes_id ,$aval)){																	
									$product_arr[$product_id][$element_id][] 	= $attributes_id;
								}															
							}
						}
						foreach($product_arr as $pkey=>$pval){
							if($count == count($pval)){
								$p[] = $pkey;
							}
						}						
					}else{
						foreach($result as $prow)
						{
							$p[] 			= $prow['product_id'];
						}
						
					}
					if(!empty($p)){
						$pdata['min_price'] 		= $min_price;
						$pdata['max_price'] 		= $max_price;
						$pdata['sort_by'] 			= $sort_by;
						$pdata['product_id'] 		= array_unique($p);
						$final_prodduct		= $this->Master_m->getProductdetailfromFilter($pdata);
					}						
					if(!empty($final_prodduct)){
						$res_product 		= $this->Master_m->checkisinWishlist($customer_id,$final_prodduct);	
					}else{
						$res_product = array();
					}
					
					$this->response([
						'status' => true,
						'image_url' => base_url().PRODUCT_IMAGE_PATH,						
						'data' => $res_product,						
					], REST_Controller::HTTP_OK);
				}else{
					$this->response([
						'status' => true,
						'data' => array(),					
						'message' => 'no item found !!',						
					], REST_Controller::HTTP_OK);
				}
			// }			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);
		}
	}

	/****** BIND KIDS CTAEGORY BY AGE:  SOP BY AGE */
	public function getCategoryByAge_post(){
		$key = $this->post('secretkey');		
		
		if($key == SECRETKEY){
			$customer_id 					= $this->post('customer_id');
			$cat_short_code 				= strtolower($this->post('cat_short_code'));
			$data['short_code']				= $cat_short_code;		
			$data['element_type']			= "Age";	
			$result   						= $this->Master_m->allProductAttributesByElementAPI($data);
			if(!empty($result)){				
				$this->response([
					'status' 		=> true,
					'data' 			=> $result,										
				], REST_Controller::HTTP_OK);
			}else{
				$this->response([
					'status' => true,					
					'message' => 'No data found !',						
					'data' => array(),
				], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => array(),
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}
	

/******************************* NOT IN USED  *************************************************************** */


/******************************* NOT IN USE END  ******************************************************************* */

}