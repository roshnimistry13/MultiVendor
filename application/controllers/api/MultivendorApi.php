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
			else if($password == '' || $password == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Password is empty or null.'
					], REST_Controller::HTTP_OK);
			}
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
						$mailData['subject'] = "Register Successfully - ".UI_THEME;
						$mailData['attachFile'] = "";
						$mailData['from_name'] = SITE_NAME;
						$mailData['fromID'] = 'dainik.tandel@proactii.com';
						//$mailData['toID'] = $email;
						$mailData['toID'] = "dainik.tandel@proactii.com";
						
						$msgData['name'] = $customer_name;
						$message = registerCustomer($msgData); 	

						$mailData['message'] = $message;

						$send = send_email($mailData);
						
						$this->response([
								'status' => TRUE,
								'message' => 'Successfully Register',
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
			else if($password == '' || $password == NULL )
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Password is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				//Check email login
				$check_mail['email'] = $mobile_email;
				$check_mail['password'] = md5($password);
				$check_mail['is_active'] = 1;
				$email_res = $this->Master_m->where('customer_detail',$check_mail);
				
				//Check mobile login
				$check_mobile['mobile'] = $mobile_email;
				$check_mobile['password'] = md5($password);
				$check_mobile['is_active'] = 1;
				$mobile_res = $this->Master_m->where('customer_detail',$check_mobile);
				
				if(!empty($email_res)){
					$this->response([
							'status' => TRUE,
							'message' => 'Successfully login',
							'data' => $email_res,
						], REST_Controller::HTTP_OK);
				}
				else if(!empty($mobile_res)){
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
			$customer_id = $this->input->post('customer_id');
			$customer_name = $this->post('customer_name');
			$gender = $this->post('gender');
			$email = $this->post('email');
			$mobile = $this->post('mobile');
			
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
			else
			{	
				$cond['customer_id'] = $customer_id;
				$results = $this->Master_m->where('customer_detail',$cond);

				if(!empty($results))
				{
					$updatedata['customer_name'] = $customer_name;
					$updatedata['gender'] = $gender;
					$updatedata['email'] = $email;
					$updatedata['mobile'] = $mobile;
					
					$custID['customer_id'] = $customer_id;
					$update_result = update('customer_detail',$updatedata,$custID);
					logThis($update_result->query, date('Y-m-d'),'Customer');
					
					$cust_results =  $this->Master_m->customerProfile($customer_id);
					
					$this->response([
							'status' => TRUE,
							'message' => 'Your profile update successfully.',
							'data' => $cust_results,
						], REST_Controller::HTTP_OK);
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
				$cond['customer_id'] = $customer_id;
				$cond['is_active'] = 1;
				$address_result = $this->Master_m->where('customer_address',$cond);
				
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

	public function addAddress_post()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY)
		{
			
			$customer_id 			= $this->input->post('customer_id');
			$first_name 			= $this->input->post('first_name');
			$last_name 				= $this->input->post('last_name');
			$email 					= $this->input->post('email');
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
			else if($email == '' || $email == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Email is empty or null.'
					], REST_Controller::HTTP_OK);
			}
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
				$insertdata['email'] 			= $email;
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

			if($update_result->status == "success"){
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
			}else{
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> array(),
					'message' 		=> 'Try again after sometimes!!'
				], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
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
			$email 				= $this->input->post('email');
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
			else if($email == '' || $email == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Email is empty or null.'
					], REST_Controller::HTTP_OK);
			}
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
				if($set_default != "" && $set_default != null && $set_default > 0){
					$whr['customer_id'] = $customer_id;
					$update1['set_default'] = 0;
					$update_address_result 				= update('customer_address',$update1,$whr);
					logThis($update_address_result->query, date('Y-m-d'),'Customer Address');

					$updatedata['set_default'] = 1;
				}
				$updatedata['first_name'] = $first_name;
				$updatedata['last_name'] = $last_name;
				$updatedata['email'] = $email;
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
				$cond['address_id'] 	= $address_id;
				$cond['customer_id'] 	= $customer_id;
				$updatedata['is_active'] = 2;
						
				$update_result = update('customer_address',$updatedata,$cond);
				
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
						'message' => 'Slider not found.'
					], REST_Controller::HTTP_OK);
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
						'message' => 'Category not found.'
					], REST_Controller::HTTP_OK);
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

	/*** GET CHILD CATEGORY FOR CATEGOTY : WOMEN ,MEN , KIDS */

	public function getChildCategory_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$short_code 		= $this->post('cat_short_code');
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
						'message' => 'Category not found.'
					], REST_Controller::HTTP_OK);
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
	
	///category wise product display
	public function categoryProduct_post()
	{
		$key         = $this->post('secretkey');
		
		//Secret key
		if($key == SECRETKEY)
		{
			$category_id = $this->post('category_id');
			
			if($category_id == '' || $category_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Category id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$child_results = $this->Master_m->childCategoryList($category_id);
				
				$results = $this->Master_m->getProductsList($category_id, $brand_id = NULL, $new_product = NULL, $best_seller = NULL);
				
				if(!empty($results))
				{
					$product = $this->setProductList($results);
					
					$this->response([
							'status' => TRUE,
							'message' => 'Category wise product list .',
							'image_url' => base_url().PRODUCT_IMAGE_PATH,
							'categoryData' => array(),
							'productData' => $product,
						], REST_Controller::HTTP_OK);
				}
				else if(!empty($child_results)){
					$this->response([
						'status' => TRUE,
						'message' => 'Child category list.',
						'image_url' => base_url().CATEGORY_IMAGE_PATH,
						'categoryData' => $child_results,
						'productData' => array(),
					], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'message' => 'Products not found or null.'
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
					else{
						$data[$key1] = $val1;
					}
				}
			}
			$product[$key] = $data;
			
		}		
		
		return $product;
	}

	//brand list api
	public function getBrand_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$brandList = $this->Master_m->brandList();
			if(!empty($brandList))
			{
				$this->response([
						'status' => TRUE,
						'message' => 'Brand list.',
						'image_url' => base_url().BRAND_IMAGE_PATH,
						'data' => $brandList,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Brand not found.'
					], REST_Controller::HTTP_OK);
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
	
	//brand wise product display
	public function brandProduct_post()
	{
		$key         = $this->post('secretkey');
		
		//Secret key
		if($key == SECRETKEY)
		{
			$brand_id = $this->post('brand_id');			
			if($brand_id == '' || $brand_id == NULL)
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Brand id is empty or null.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$results = $this->Master_m->getProductsList($category_id = NULL, $brand_id, $new_product = NULL, $best_seller = NULL);				
				if(!empty($results))
				{
					$product = $this->setProductList($results);
					
					$this->response([
							'status' => TRUE,
							'message' => 'Brand wise product list .',
							'image_url' => base_url().PRODUCT_IMAGE_PATH,
							'data' => $product,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'message' => 'Products not found or null.'
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
	
	//all products list api
	public function allProducts_post()
	{
		$key = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$category_id 				= $this->input->post('category_id');
			$results 					= $this->Master_m->getAllProductInGrid($category_id); 
			if(!empty($results))
			{
				$product = $this->setProductList($results);
				
				$this->response([
						'status' => TRUE,
						'message' => 'All product list .',
						'image_url' => base_url().PRODUCT_IMAGE_PATH,
						'data' => $product,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Products not found or null.'
					], REST_Controller::HTTP_OK);
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
	
	//product id wise product details display
	public function productDetails_post()
	{
		$key        = $this->input->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			$product_id = $this->input->post('product_id');
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
				$results = $this->Master_m->getAllProductDetails($product_id);				
				if(!empty($results))
				{
					$product_element 			= $this->getProductElemetsAttributes($product_id);					
					
					//UPDATE PRODUCT VIEWS COUNT
					$views_count 				= $this->Master_m->updateProductViews($product_id);
					$product = $this->setProductList($results);
					$this->response([
							'status' => TRUE,
							'message' => 'Product details .',
							'image_url' => base_url().PRODUCT_IMAGE_PATH.$product_id,
							'data' => $product,
							'product_element' => $product_element,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					//Secret key invalid
					$this->response([
							'status' => FALSE,
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
					'data' => 'null',
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
						'message' => 'Products not found or null.'
					], REST_Controller::HTTP_OK);
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

	/**** BEST SELLER PRODUCT */ 
	public function bestSellerProduct_post()
	{
		$key         = $this->post('secretkey');

		//Secret key
		if($key == SECRETKEY)
		{
			//$best_seller = 1;
			// $results = $this->Master_m->getProductsList($category_id = NULL, $brand_id = NULL, $new_product = NULL, $best_seller);
			$short_code 		= $this->post('cat_short_code');
			$results 			= $this->Master_m->getBestSellingProductsForCategory($short_code);
			
			if(!empty($results))
			{
				$product = $this->setProductList($results);
				
				$this->response([
						'status' => TRUE,
						'message' => 'New product list .',
						'image_url' => base_url().PRODUCT_IMAGE_PATH,
						'data' => $results,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Products not found or null.'
					], REST_Controller::HTTP_OK);
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
					'message' => 'Products not found or null.'
				], REST_Controller::HTTP_OK);
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
					'message' => 'Products not found or null.'
				], REST_Controller::HTTP_OK);
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
	/***** FREQUENT SEARCH PRODUCT LIST*/

	public function getFrequentSearch_post(){
		$key         = $this->post('secretkey');
		if($key == SECRETKEY) {			
			$result 					= $this->Master_m->getFrequentViewProduct();			
			if(!empty($result)){

				$this->response([
					'status' => TRUE,
					'message' => 'frequent search product',
					'image_url' => base_url().PRODUCT_IMAGE_PATH,
					'data' => $result,
				], REST_Controller::HTTP_OK);
			}
			else{

				$this->response([
					'status' => FALSE,
					'message' => 'no product found'
				], REST_Controller::HTTP_OK);
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

	
	
	
	
	
	
	
	
	
	
	
	
	
	//search api for product name,model no,profile no
	public function searching_post()
	{
		$key         = $this->post('secretkey');
		$keyword     = $this->post('search_keyword');
		$customer_id = $this->post('customer_id');

		//Secret key
		if($key == SECRETKEY){
			if($keyword != '' || $keyword != NULL){
				$category_data = $this->APiModel->searchCategory($keyword);
				$model_no_data = $this->APiModel->searchModelNo($keyword);
				$product_data  = $this->APiModel->searchProduct($keyword);

				//check category data null or not
				if($category_data)
				{
					$category_list = $category_data;
				}
				else
				{
					$category_list = array();
				}

				//check model no data null or not
				if($model_no_data)
				{
					$model_no_list = $model_no_data;
				}
				else
				{
					$model_no_list = array();
				}


				$store = [];
				if(!empty($product_data)){
					$k = 0;
					//$store1 = array();
					//$store = [];
					foreach($product_data as $value){
						$cteid         = explode(',',$value['category_id']);
						$store_categoy = array();
						foreach($cteid as $val)
						{
							# code...
							$ci['category_id'] = $val;
							$resu = $this->Master_m->where('catalog_category',$ci);
							$store_categoy[] = $resu[0]['category_name'];
						}
						$catgdetails = @implode(',', $store_categoy);

						//Get customer price list
						$where2['customer_id'] = $customer_id;
						$pricelist_details = $this->Master_m->where('customer_price_list',$where2);
						$check_ids         = array();
						foreach($pricelist_details as $row1){
							$check_ids[] = $row1['model_no_id'];
						}

						//check in customer price
						if(in_array($value['model_no_id'], $check_ids)){
							//Get model no price
							$where3['customer_id'] = $customer_id;
							$where3['model_no_id'] = $value['model_no_id'];
							$price_details      = $this->Master_m->where('customer_price_list',$where3);
							$model_no_price     = $price_details[0]['price'];
							$model_no_old_price = $price_details[0]['old_price'];

							//Get model no price
							$m_id['model_no_id'] = $value['model_no_id'];
							$model_no_result   = $this->Master_m->where('model_no',$m_id);
							$customer_price    = $model_no_result[0]['customer_price'];
							$sales_price       = $model_no_result[0]['sales_price'];
							$distributor_price = $model_no_result[0]['distributor_price'];
							$customer_new_price= $model_no_price;
							$in_price_list     = TRUE;
						}
						else
						{
							//Get model no price
							$m_id['model_no_id'] = $value['model_no_id'];
							$model_no_result   = $this->Master_m->where('model_no',$m_id);
							$customer_price    = $model_no_result[0]['customer_price'];
							$sales_price       = $model_no_result[0]['sales_price'];
							$distributor_price = $model_no_result[0]['distributor_price'];
							$customer_new_price= '';
							$in_price_list     = FALSE;
						}

						$store[$k]['id'] = $value['product_id'];
						$store[$k]['product_name'] = $value['product_name'];
						$store[$k]['profile_No'] = $value['profile_no'];
						$store[$k]['model_no'] = @$value['model_no'];
						/*$store[$k]['dimension_id'] = @$value['size'];
						$store[$k]['category'] = @$catgdetails;
						$store[$k]['Future_Product'] = @$value['Future_Product'];
						$store[$k]['New_Product'] = @$value['New_Product'];
						$store[$k]['Best_Seller'] = @$value['Best_Seller'];*/
						$store[$k]['Customerprice'] = $customer_price;
						$store[$k]['Distributorprice'] = $distributor_price;
						$store[$k]['Salesmanprice'] = $sales_price;
						$store[$k]['Customernewprice'] = $customer_new_price;
						$store[$k]['in_price_list'] = $in_price_list;
						//$store[$k]['dimension_id'] = @$value['size'];
						//$store[$k]['imagepath'] = base_url('upload / Image / Product / ');
						$store[$k]['image'] = explode ("|", @$value['image']);
						//$store[$k]['color'] = explode (",", @$value['color']);
						//$store[$k]['is_status'] = $value['is_status'];
						$k++;
					}
				}
				else
				{
					$store = array();
				}

				if(!empty($category_data) || !empty($model_no_data) || !empty($product_data)){
					$this->response([
							'status' => TRUE,
							'category_imagepath' => CATEGORY_IMAGE_URL,
							'dimension_imagepath' => DIMENSIONS_IMAGE_URL,
							'product_imagepath' => PRODUCT_IMAGE_URL,
							'category_list' => $category_list,
							'model_no_list' => $model_no_list,
							'product_list' => $store,
							'message' => 'Searching results'
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'data' => NULL,
							'message' => 'No Record found'
						], REST_Controller::HTTP_OK);

				}
			}
			else
			{
				//category details key invalid
				$this->response([
						'status' => FALSE,
						'data' => 'null',
						'message' => 'Please enter search value.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secret key invalid or null.'
				], REST_Controller::HTTP_OK);
		}

	}

	//search api for product name,model no,profile no
	public function searchProduct_post()
	{
		$key         = $this->post('secretkey');
		$keyword     = $this->post('search_keyword');
		$customer_id = $this->post('customer_id');

		//Secret key
		if($key == SECRETKEY){
			$category_details = $this->APiModel->searchproduct($keyword);

			if(!empty($category_details)){

				$k     = 0;
				//$store1 = array();
				$store = [];

				foreach($category_details as $value){
					$cteid         = explode(',',$value['category']);
					$store_categoy = array();
					foreach($cteid as $val)
					{
						# code...
						$ci['category_id'] = $val;
						$resu = $this->Master_m->where('catalog_category',$ci);
						$store_categoy[] = $resu[0]['category_name'];
					}
					$catgdetails = @implode(',', $store_categoy);

					//Get customer price list
					$where2['customer_id'] = $customer_id;
					$pricelist_details = $this->Master_m->where('customer_price_list',$where2);
					$check_ids         = array();
					foreach($pricelist_details as $row1){
						$check_ids[] = $row1['model_no_id'];
					}

					//check in customer price
					if(in_array($value['model_no_id'], $check_ids)){
						//Get model no price
						$where3['customer_id'] = $customer_id;
						$where3['model_no_id'] = $value['model_no_id'];
						$price_details      = $this->Master_m->where('customer_price_list',$where3);
						$model_no_price     = $price_details[0]['price'];
						$model_no_old_price = $price_details[0]['old_price'];

						//Get model no price
						$m_id['model_no_id'] = $value['model_no_id'];
						$model_no_result   = $this->Master_m->where('model_no',$m_id);
						$customer_price    = $model_no_result[0]['customer_price'];
						$sales_price       = $model_no_result[0]['sales_price'];
						$distributor_price = $model_no_result[0]['distributor_price'];
						$customer_new_price= $model_no_price;
						$in_price_list     = TRUE;
					}
					else
					{
						//Get model no price
						$m_id['model_no_id'] = $value['model_no_id'];
						$model_no_result   = $this->Master_m->where('model_no',$m_id);
						$customer_price    = $model_no_result[0]['customer_price'];
						$sales_price       = $model_no_result[0]['sales_price'];
						$distributor_price = $model_no_result[0]['distributor_price'];
						$customer_new_price= '';
						$in_price_list     = FALSE;
					}

					$store[$k]['id'] = $value['product_id'];
					$store[$k]['product_name'] = $value['product_name'];
					$store[$k]['profile_No'] = $value['profile_no'];

					$store[$k]['model_no'] = @$value['model_no'];
					$store[$k]['dimension_id'] = @$value['size'];
					$store[$k]['category'] = @$catgdetails;
					$store[$k]['Future_Product'] = @$value['Future_Product'];
					$store[$k]['New_Product'] = @$value['New_Product'];
					$store[$k]['Best_Seller'] = @$value['Best_Seller'];
					$store[$k]['Customerprice'] = $customer_price;
					$store[$k]['Distributorprice'] = $distributor_price;
					$store[$k]['Salesmanprice'] = $sales_price;
					$store[$k]['Customernewprice'] = $customer_new_price;
					$store[$k]['in_price_list'] = $in_price_list;
					$store[$k]['dimension_id'] = @$value['size'];
					//$store[$k]['imagepath'] = base_url('upload / Image / Product / ');
					$store[$k]['image'] = explode ("|", @$value['image']);
					//$store[$k]['color'] = explode (",", @$value['color']);
					$store[$k]['is_status'] = $value['is_status'];
					$k++;
				}
				$this->response([
						'status' => TRUE,
						'imagepath' => base_url('upload/Image/Product/'),
						'data' => $store,
						'message' => ' Product Found .'
					], REST_Controller::HTTP_OK);
				// $this->response([
				// 	'status' => true,
				// 	'data' => $category_details,
				// 	'message' => 'product Found.'
				// ], REST_Controller::HTTP_OK);

			}
			else
			{
				//category details key invalid
				$this->response([
						'status' => FALSE,
						'imagepath' => '',
						'data' => 'null',
						'message' => 'Product not Found.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secret key invalid or null.'
				], REST_Controller::HTTP_OK);
		}

	}

	public function searchaccessories_post()
	{
		$key     = $this->post('secretkey');
		$keyword = $this->post('search_keyword');

		//Secret key
		if($key == SECRETKEY){
			$category_details = $this->APiModel->searchaccessories($keyword);

			if(!empty($category_details)){
				$this->response([
						'status' => true,
						'data' => $category_details,
						'imagepath'=>base_url('upload/Image/Product/'),
						'message' => 'Accessories Found.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				//category details key invalid
				$this->response([
						'status' => FALSE,
						'data' => 'null',
						'message' => 'Accessories not Found.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secret key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}

	// function to add product in cart
	public function addToCart_post()
	{	
		
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$data['product_id'] 			= $this->post('product_id');
			$data['quantity']  				= $this->post('quantity');
			$data['customer_id'] 			= $this->post('customer_id');
			
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

			$result = delete('customer_cart',$condition);
			if($result->status == "success"){
				$this->response([
					'status' => TRUE,
					'message' => 'Removed from Cart'
				], REST_Controller::HTTP_OK);
			}else{
				$this->response([
					'status' => FALSE,
					'message' => 'Something Went Wrong, Try Again Later,'
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
						'message' => 'No Cart Items found'
					], REST_Controller::HTTP_OK);
				}
			}else{
				$this->response([
					'status' => FALSE,
					'message' => 'customer id is not empty / null or 0 '
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
	public function addOrder_post_xx()
	{
		$key = $this->post('secretkey');
		//Secret key
		if($key == SECRETKEY){

			$product_id					= $this->input->post('product_id');
			$product_arr				= array();
			if(!empty($product_id)){
				$product_arr = explode(',',$product_id);
			}
			$customer_id 				= $this->input->post('customer_id');
			// $where['customer_id'] 		= $customer_id;
			// $cart_items 				= $this->Master_m->where('customer_cart',$where);	
			$cart_items 				= $this->Master_m->getSelectedCartItemDetail($customer_id,$product_arr);	
			
			if(!empty($cart_items)){
				$total_Qty = 0;
				$total_amt = 0;
				foreach($cart_items  as $item){
					$total_Qty = $total_Qty + $item['quantity'];
					$total_amt = $total_amt + $item['total_amt'];
				}
				
				//$item_data 						= $this->Master_m->getTotalcartItem($customer_id);				
				$order_number 						= $this->Master_m->getLatestOrderNumber();
				$insertdata['order_number'] 		= "ORD-".$order_number;
				$insertdata['customer_id'] 			= $customer_id;
				// $insertdata['total_quantity'] 	= $item_data[0]['totalQty'];
				// $insertdata['total_amount'] 		= $item_data[0]['totalamount'];
				$insertdata['total_quantity'] 		= $total_Qty;
				$insertdata['total_amount'] 		= $total_amt;
				$insertdata['order_date'] 			= date('Y-m-d');				
				
				$insert_result = insert('orders',$insertdata,'');
				
				logThis($insert_result->query, date('Y-m-d'),'Order');
				$order_id = $insert_result->id;

				foreach($cart_items as $row){

					$insertOrder['order_id'] 		= $order_id;
					$insertOrder['product_id'] 		= $row['product_id'];
					$insertOrder['quantity'] 		= $row['quantity'];
					$insertOrder['net_price'] 		= $row['net_price'];
					$insertOrder['total_amt'] 		= $row['total_amt'];
					$insertOrder['discount'] 		= $row['discount'];

					$insert_order 	= insert('order_details',$insertOrder,'');
					logThis($insert_order->query, date('Y-m-d'),'Order Detail');
				}
				if($insert_result->status = 'success')
				{
					$this->response([
						'status' => TRUE,
						'message' => 'Order Placed'
					], REST_Controller::HTTP_OK);

				}else{

					$this->response([
						'status' => FALSE,				
						'message' => 'Try Again !!'
					], REST_Controller::HTTP_OK);
				}
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
				$OrderList   			= $this->Master_m->getCustomerOrderList($customer_id);
				$this->response([
					'status' 		=> TRUE,
					'data' 			=> $orderdata,
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
					'data' => 'null',
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/*** order detail from order Id */
	public function orderDetail_post(){
		
		$key = $this->post('secretkey');
		if($key == SECRETKEY){

			$order_id 				= $this->input->post('order_id');
			$OrderList   			= $this->Master_m->getCustomerOrderList($order_id);
			if(!empty($OrderList)){	
				$this->response([
					'status' 		=> TRUE,
					'data' 			=> $OrderList,
					'image_url' 	=> base_url().PRODUCT_IMAGE_PATH,
					'message' 		=> 'order history data.'
				], REST_Controller::HTTP_OK);

			}else{
				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> '',
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}


	public function getOrderInvoice_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY){
			$where['order_id'] 			= $this->input->post('order_id');
			$result 					= $this->Master_m->where('invoice_details',$where);
			
			if(!empty($result)){
				$this->response([
					'status' 	=> TRUE,
					'data' 		=> $result,
					'filepath'	=> '',
					'message' 	=> 'invoice Data.'
				], REST_Controller::HTTP_OK);
			}
			else{
				$this->response([
					'status' 	=> FALSE,
					'data' 		=> "",
					'message' 	=> 'No Invoice Found For This Order !'
				], REST_Controller::HTTP_OK);
			}			
		}
		else
		{	
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
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

			$category_id 				= $this->input->post('category_id');
			$result   					= $this->Master_m->getAllCategoryByoffer($category_id);
			
			if(!empty($result)){	
				$this->response([
					'status' 		=> TRUE,
					'data' 			=> $result,
					'message' 		=> 'offer data.'
				], REST_Controller::HTTP_OK);

			}else{
				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> '',
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/***** PRODUCT FILTER COLOR LIST  */
	public function getProductFilterColor_post(){
		$key = $this->post('secretkey');

		if($key == SECRETKEY){
			$short_code 				= $this->post('cat_short_code');
			$result   					= $this->Master_m->allProductFilterColorAPI($short_code);
			
			if(!empty($result)){	
				$this->response([
					'status' 		=> TRUE,
					'data' 			=> $result,
					'message' 		=> 'color list.'
				], REST_Controller::HTTP_OK);

			}else{
				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> '',
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}

	/***** TOP BRAND : TRENDING BRANDS  */
	public function getTrendingBrands_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){
			$short_code 				= $this->post('cat_short_code');
			$result   					= $this->Master_m->getBrandTrendingslist($short_code);			
			if(!empty($result)){	
				$this->response([
					'status' 		=> TRUE,
					'data' 			=> $result,
					'message' 		=> 'Brand Trending'
				], REST_Controller::HTTP_OK);

			}else{				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> '',
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}
	
	/***** PRODUCT LIST BY ATTRIBUTE ID, CATEGORY  */
	public  function getProductByAttributeAndCategory_post(){
		$key = $this->post('secretkey');
		if($key == SECRETKEY){
			$short_code 				= $this->post('cat_short_code');
			$attribute_id 				= $this->post('attribute_id');
			$result   					= $this->Master_m->getProductByAttributeAndCategory($short_code,$attribute_id);			
			if(!empty($result)){	
				$this->response([
					'status' 		=> TRUE,
					'data' 			=> $result,
					'message' 		=> 'Product List'
				], REST_Controller::HTTP_OK);

			}else{				
				$this->response([
					'status' 		=> FALSE,
					'data' 			=> '',
					'message' 		=> 'No Item Found !!'
				], REST_Controller::HTTP_OK);

			}			
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => SECRETKEY_MESSAGE
				], REST_Controller::HTTP_OK);

		}
	}








/******************************* NOT IN USED  *************************************************************** */
	
	// send Notification to a specific User
	public function sendMsgNotification($sender_name,$receiver_id,$msg,$data = array())
	{
		$content = array(
			"en"=> $msg
		);
		$heading = array(
			"en"=>	$sender_name
		);

		$hashes_array = array();
		array_push($hashes_array, array(
				"id"  => "like-button",
				"text"=> "Like",
				"icon"=> "http://i.imgur.com/N8SN8ZS.png",
				"url" => "https://yoursite.com"
			));
		array_push($hashes_array, array(
				"id"  => "like-button-2",
				"text"=> "Like2",
				"icon"=> "http://i.imgur.com/N8SN8ZS.png",
				"url" => "https://yoursite.com"
			));
		//	print_r();die;
		$fields = array(
			'app_id'                   => "37cabe91-f449-48f2-86ad-445ae883ad77",
			/* 'included_segments' => array(
			'All'
			),*/
			'include_external_user_ids' =>array($receiver_id),
			'data'                     => $data,
			'contents'                 => $content,
			/*'buttons' 					=> $hashes_array,
			*/	'headings'=> $heading
		);
		$fields = json_encode($fields);


		$ch     = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json; charset=utf-8',
				'Authorization: Basic Njc0Mzk2NzctMWY1NS00ZGVlLTg4NGUtNDNhOTg0ZTM5YzI1'
			));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
		curl_close($ch);
		//echo json_encode($response);
		//echo $httpcode;
		//echo $httpcode == 200; die();
		if($httpcode == 200)
		{
			return true;
			//$json['status'] = "success";
			// json_encode($json);
		}
	}
	// send Notification to a specific Users

	public function orderTracking_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY){
			$id['order_id'] = $this->input->post('orderdetail_id');

			$res = $this->APiModel->where('order_details',$id);

			if(!empty($res)){
				$trackid      = $res[0]['order_details_key'];

				$trackdetails = $this->APiModel->ordertracking_data($trackid);

				$date         = date_create($res[0]['ord_add_date']);
				$dt           = date_format($date,"Y/m/d H:i A");
				//Secret key invalid
				$data         = array(
					'1'=>array('message'=> 'Order Confirmation','time'   =>$dt),
					'2'=>array('message'=> 'Order confirmation emails can offer insight on tracking and return processes.','time'   =>$dt)
				);

				$finalmerge = array_merge($data,$trackdetails);
				$this->response([
						'status' => TRUE,
						'data' => $finalmerge,
						'message' => 'Tracking data.'
					], REST_Controller::HTTP_OK);
			}
			else
			{
				//Secret key invalid
				$this->response([
						'status' => FALSE,
						'data' => 'null',
						'message' => 'data null.'
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//Secret key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secret key in valid or null.'
				], REST_Controller::HTTP_OK);
		}
	}


	//customer complaint list
	public function customerComplaintList_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			if($customer_id != NULL || $customer_id != '')
			{
				$complaintData = $this->APiModel->getCustomerComplaint($customer_id);
		
				$this->response([
						'status' => TRUE,
						'message' => 'Customer Complaint list',
						'complaintList' => $complaintData
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Customer id is null. Please enter customer id',
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secret key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}
	
	//customer complaint list
	public function customerComplaintDetails_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$complaint_id = $this->input->post('complaint_id');
			
			if($complaint_id == NULL || $complaint_id == '')
			{
				$this->response([
					'status' => FALSE,
					'message' => 'complaint id is null.'
				], REST_Controller::HTTP_OK);
			}
			else
			{	
				$complaintDetails = $this->Master_m->customerComplaintDetails($complaint_id);
				$complaintProductDetails = $this->Master_m->customerComplaintProductDetails($complaint_id);
			
				$this->response([
						'status' => TRUE,
						'message' => 'Customer Complaint details',
						'complaint_photo_url' => base_url().COMPLAINT_PHOTO_PATH,
						'complaint_video_url' => base_url().COMPLAINT_VIDEO_PATH,
						'complaintDetails' => $complaintDetails,
						'complaintProductDetails' => $complaintProductDetails,
					], REST_Controller::HTTP_OK);
			}
			
			
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secret key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}
	
	//Customer Invoice List
	public function customerInvoiceList_post()
	{
		$key = $this->post('secretkey');
		//secreat key
		if($key == SECRETKEY){
			$customer_id = $this->input->post('customer_id');
			$result      = $this->Master_m->customerInvoiceList($customer_id);

			if(!empty($result)){
				$this->response([
						'status' => TRUE,
						'message' => 'Customer invoice list',
						'invoiceUrl' => base_url().DISPATCH_PDF_PATH,
						'customerInvoice' => $result,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Data Not Found or null.',
						'customerInvoice' => $result,
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//secreat key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secreat key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}

	//Customer Invoice Product List
	public function customerInvoiceProductList_post()
	{
		$key = $this->post('secretkey');
		//secreat key
		if($key == SECRETKEY){
			//$customer_id = $this->input->post('customer_id');
			$invoice_id = $this->input->post('invoice_id');
			$result     = $this->Master_m->customerInvoiceProductList($invoice_id);

			/*print_r($this->db->last_query());
			die;*/

			if(!empty($result)){
				$this->response([
						'status' => TRUE,
						'message' => 'Customer invoice Product list',
						'invoiceProducts' => $result,
					], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'message' => 'Data Not Found or null.',
						'invoiceProducts' => $result,
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//secreat key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secreat key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}

	//Submit Customer Complaint
	public function submitCustomerComplaint_post()
	{
		$key = $this->post('secretkey');
		//secreat key
		if($key == SECRETKEY){
			$customer_id = $this->input->post('customer_id');
			$invoice_id  = $this->input->post('invoice_id');
			$description = $this->input->post('description');

			$where['dispatch_invoice_id'] = $invoice_id;
			$inv_result = $this->Master_m->where('dispatch_invoice_details',$where);
			//$order_id   = $inv_result[0]['order_id'];
			//Upload photo
			if($_FILES['complaint_photo']['name']){
				$complaint_photo = file_upload("complaint_photo",COMPLAINT_PHOTO_PATH);
			}
			else
			{
				$complaint_photo = '';
			}

			//Upload video
			if($_FILES['complaint_video']['name']){
				$complaint_video = file_upload("complaint_video",COMPLAINT_VIDEO_PATH);
			}
			else
			{
				$complaint_video = '';
			}

			$insertdata['customer_id'] = $customer_id;
			$insertdata['dispatch_invoice_id'] = $invoice_id;
			$insertdata['description'] = $description;
			$insertdata['photo'] = $complaint_photo;
			$insertdata['video'] = $complaint_video;
			$insertdata['complaint_date'] = date('Y-m-d');

			$customer_complaint_id = $this->APiModel->insert('customer_complaint',$insertdata);
			
			$orderdetails_list        = $this->input->post('orderdetails_list');
			$orderdetailsArray = json_decode($orderdetails_list, true);
			
			if($orderdetailsArray)
			{
				foreach($orderdetailsArray as $row)
				{
					$insertdata1['customer_complaint_id'] = $customer_complaint_id;
					$insertdata1['order_id'] = $row['order_id'];
					$insertdata1['orderdetail_id'] = $row['orderdetail_id'];
					$insertdata1['product_id'] = $row['product_id'];
					$insertdata1['created'] = date('Y-m-d H:i:s');

					$this->APiModel->insert('customer_complaint_details',$insertdata1);
				}
			}

			$this->response([
					'status' => TRUE,
					'message' => 'Complaint submit successfully',
				], REST_Controller::HTTP_OK);
		}
		else
		{
			//secreat key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secreat key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}

	
	//customer Return Material list
	public function customerReturnMaterialList_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			$returnData = $this->APiModel->getCustomerReturnMaterial($customer_id);
		
			$this->response([
					'status' => TRUE,
					'message' => 'Customer Return Material list',
					'returnMaterialList' => $returnData
				], REST_Controller::HTTP_OK);
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secret key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}
	
	//customer Return Material details
	public function customerReturnMaterialDetails_post()
	{
		$key = $this->post('secretkey');
		if($key == SECRETKEY)
		{
			$return_material_id = $this->input->post('return_material_id');
			
			if($return_material_id == NULL || $return_material_id == '')
			{
				$this->response([
					'status' => FALSE,
					'message' => 'Return material id is null.'
				], REST_Controller::HTTP_OK);
			}
			else
			{	
				$returnMaterialDetails = $this->APiModel->customerReturnMaterialDetails($return_material_id);
				$returnProductDetails = $this->APiModel->customerReturnMaterialProductDetails($return_material_id);
			
				$this->response([
						'status' => TRUE,
						'message' => 'Customer Return material details',
						'returnMaterialDetails' => $returnMaterialDetails,
						'returnMaterialProductDetails' => $returnProductDetails,
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secret key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}
	
	//Submit Customer Return material
	public function submitReturnMaterial_post()
	{
		$key = $this->post('secretkey');
		//secreat key
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			$invoice_id  = $this->input->post('invoice_id');
			$description = $this->input->post('description');
			/*
			//Upload photo
			/*if($_FILES['material_photo']['name']){
				$material_photo = file_upload("material_photo",COMPLAINT_PHOTO_PATH);
			}
			else
			{
				$material_photo = '';
			}*/

			$insertdata['customer_id'] = $customer_id;
			$insertdata['dispatch_invoice_id'] = $invoice_id;
			$insertdata['description'] = $description;
			//$insertdata['material_photo'] = $complaint_photo;
			$insertdata['return_date'] = date('Y-m-d');

			$return_material_id = $this->APiModel->insert('return_material',$insertdata);
			
			$orderdetails_list        = $this->input->post('orderdetails_list');
			$orderdetailsArray = json_decode($orderdetails_list, true);
			
			if($orderdetailsArray)
			{
				foreach($orderdetailsArray as $row)
				{
					$insertdata1['return_material_id'] = $return_material_id;
					$insertdata1['order_id'] = $row['order_id'];
					$insertdata1['orderdetail_id'] = $row['orderdetail_id'];
					$insertdata1['product_id'] = $row['product_id'];
					$insertdata1['return_qty'] = $row['return_qty'];
					$insertdata1['created'] = date('Y-m-d H:i:s');

					$this->APiModel->insert('return_material_details',$insertdata1);
				}
			}

			$this->response([
					'status' => TRUE,
					'message' => 'Return material submit successfully',
				], REST_Controller::HTTP_OK);
		}
		else
		{
			//secreat key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secreat key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}

		//Customer Notification List
	public function customerNotificationList_post()
	{
		$key = $this->post('secretkey');
		//secreat key
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			if(!empty($customer_id)){

				$where['user_id'] = $customer_id;
				$result = $this->Master_m->where('notification_alluser',$where);

				if(!empty($result))
				{
					$this->response([
							'status' => TRUE,
							'message' => 'Customer Notification list',
							'customerNotification' => $result,
						], REST_Controller::HTTP_OK);
				}
				else
				{
					$this->response([
							'status' => FALSE,
							'message' => 'Data Not Found or null.',
							'customerNotification' => $result,
						], REST_Controller::HTTP_OK);
				}
			}
			else
			{
				$this->response([
						'status' => FALSE,
						'message' => 'custome id null.',
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//secreat key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secreat key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}

	//clear Customer Notification List
	public function clearCustomerNotification_post()
	{
		$key = $this->post('secretkey');
		//secreat key
		if($key == SECRETKEY)
		{
			$customer_id = $this->input->post('customer_id');
			if(!empty($customer_id)){
				$where['user_id'] = $customer_id;
				$this->APiModel->deleterecord('notification_alluser',$where);

				$this->response([
						'status' => TRUE,
						'message' => 'Customer Notification clear successfully',
					], REST_Controller::HTTP_OK);

			}
			else
			{
				$this->response([
						'status' => FALSE,
						'message' => 'custome id null.',
					], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//secreat key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secreat key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}


	//Test admin notification	
	public function sendAdminNotification_post()
	{
		$key = $this->post('secretkey');
		//secreat key
		if($key == SECRETKEY){
			//Send Notification to admin
			$admin_id         = '1';
			$admin_msg         = 'Test Notification for all admin user';
			$notification_title = "Admin notification";
			$notificationData['id'] = $admin_id;
			$notificationData['name'] = $admin_msg;

			$data = sendAdminNotification($notification_title,$admin_id,$admin_msg,$notificationData);
		
			if($data == TRUE)
			{
				$this->response([
					'status' => TRUE,
					'message' => 'Notification send'
				], REST_Controller::HTTP_OK);	
			}
			else
			{
				$this->response([
					'status' => FALSE,
					'message' => 'Notification not send'
				], REST_Controller::HTTP_OK);
			}
		}
		else
		{
			//secreat key invalid
			$this->response([
					'status' => FALSE,
					'data' => 'null',
					'message' => 'Secreat key invalid or null.'
				], REST_Controller::HTTP_OK);
		}
	}

	/******************************* NOT IN USE END  ******************************************************************* */

}