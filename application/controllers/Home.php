<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// Show Home page
	public function index()
	{
		
		//Meta Data
		$meta_data['meta_title']			= "Home | ".UI_THEME;
		$meta_data['meta_description']		= "Home | ".UI_THEME;
		$meta_data['meta_keyword']			= "Home | ".UI_THEME;
		$meta_data['active_menu']			= "Home";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/Index_v');
		$this->load->view('UI/Common/Footer');
	}

	public function aboutUs()
	{
		//Meta Data
		$meta_data['meta_title']			= "About Us | ".UI_THEME;
		$meta_data['meta_description']		= "About Us | ".UI_THEME;
		$meta_data['meta_keyword']			= "About Us | ".UI_THEME;
		$meta_data['active_menu']			= "About Us";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/About_v');
		$this->load->view('UI/Common/Footer');
	}

	/*** CONTCAT US */
	public function contactUs()
	{
		//Meta Data
		$meta_data['meta_title']			= "Contact Us | ".UI_THEME;
		$meta_data['meta_description']		= "Contact Us | ".UI_THEME;
		$meta_data['meta_keyword']			= "Contact Us | ".UI_THEME;
		$meta_data['active_menu']			= "Contact Us";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/Contact_v');
		$this->load->view('UI/Common/Footer');
	}

	/*** SHOP / PRODUCT LIST */
	public function product()
	{
		//Meta Data
		$meta_data['meta_title']			= "Shop | ".UI_THEME;
		$meta_data['meta_description']		= "Shop | ".UI_THEME;
		$meta_data['meta_keyword']			= "Shop | ".UI_THEME;
		$meta_data['active_menu']			= "Shop";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/Product_v');
		$this->load->view('UI/Common/Footer');
	}

	/*** PRODUCT DETAIL PAGE */
	public function productDetail()
	{
		//Meta Data
		$meta_data['meta_title']				= "Shop | ".UI_THEME;
		$meta_data['meta_description']			= "Shop | ".UI_THEME;
		$meta_data['meta_keyword']				= "Shop | ".UI_THEME;
		$meta_data['active_menu']				= "Shop";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/ProductDetails_v');
		$this->load->view('UI/Common/Footer');
	}

	/*** CART PAGE */
	public function cart()
	{
		//Meta Data
		$meta_data['meta_title']			= "Cart | ".UI_THEME;
		$meta_data['meta_description']		= "Cart | ".UI_THEME;
		$meta_data['meta_keyword']			= "Cart | ".UI_THEME;
		$meta_data['active_menu']			= "Cart";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/Cart_v');
		$this->load->view('UI/Common/Footer');
	}

	/*** CHECKOUT PAGE */
	public function checkout()
	{
		//Meta Data
		$meta_data['meta_title']			= "Checkout | ".UI_THEME;
		$meta_data['meta_description']		= "Checkout | ".UI_THEME;
		$meta_data['meta_keyword']			= "Checkout | ".UI_THEME;
		$meta_data['active_menu']			= "Checkout";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/Checkout_v');
		$this->load->view('UI/Common/Footer');
	}

	/*** BLOG PAGE */
	public function blog()
	{
		//Meta Data
		$meta_data['meta_title']			= "Blog | ".UI_THEME;
		$meta_data['meta_description']		= "Blog | ".UI_THEME;
		$meta_data['meta_keyword']			= "Blog | ".UI_THEME;
		$meta_data['active_menu']			= "Blog";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/Blog_v');
		$this->load->view('UI/Common/Footer');
	}

	/*** NEW CUSTOMER REGISTRATION FORM / UPDATE ACCOUNT DETAIL  */
	public function registerCustomer(){
		$json = array();
		if($this->input->is_ajax_request()){
			if(empty($this->session->userdata[CUSTOMER_SESSION])){
				$name 			= $this->input->post('name');
				$email 			= $this->input->post('email');
				$password 		= md5(trim($this->input->post('password')));
				$contact_no 	= $this->input->post('contact_no');
				$gender 		= $this->input->post('gender');

				$insertData['customer_name'] 		= $name;
				$insertData['gender'] 				= $gender;
				$insertData['mobile'] 				= $contact_no;
				$insertData['email'] 				= $email;
				$insertData['password'] 			= $password;
				$insertData['created'] 				= date('Y-m-d H:i:s');
				$insertData['is_active'] 			= 1;

				$insert_result = insert('customer_detail',$insertData,'');
				
				logThis($insert_result->query, date('Y-m-d'),'Customer Detail');
				if($insert_result->status == "success"){
					$json['success']	=	"success";
				}
				else{
					$json['error']	=	"error";
				}
			}else{
				$customer_id 	= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
				$name 			= $this->input->post('name');
				$email 			= $this->input->post('email');
				$contact_no 	= $this->input->post('contact_no');
				$gender 		= $this->input->post('gender');

				$updateData['customer_name'] 		= $name;
				$updateData['gender'] 				= $gender;
				$updateData['mobile'] 				= $contact_no;
				$updateData['email'] 				= $email;
				$updateData['modified'] 			= date('Y-m-d H:i:s');

				$where['customer_id'] 		= $customer_id;
				$update_result 				= update('customer_detail',$updateData,$where);
				logThis($update_result->query, date('Y-m-d'),'Customer Detail');
				if($update_result->status == "success"){
					$session_data = array(
						'customer_id'   => $customer_id,
						'customer_name' => $name,
						'gender' 		=> $gender,
						'mobile' 		=> $contact_no,
						'email' 		=> $email,
					);
	
					$this->session->set_userdata(CUSTOMER_SESSION, $session_data);
					$json['success']	=	"success";
					$json['redirect'] 	= base_url('/');
				}
				else{
					$json['error']	=	"error";
				}
			}
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/*** LOGIN */
	public function customerLogin(){
		$json = array();
		
		if($this->input->is_ajax_request()){

			$result = $this->Master_m->checkLogin();
			if(!empty($result)){

				$session_data = array(
					'customer_id'   => $result[0]['customer_id'],
					'customer_name' => $result[0]['customer_name'],
					'gender' 		=> $result[0]['gender'],
					'mobile' 		=> $result[0]['mobile'],
					'email' 		=> $result[0]['email'],
				);

				$this->session->set_userdata(CUSTOMER_SESSION, $session_data);
				$json['success'] 	= "Login succesfully";
				$json['redirect'] 	= base_url('/');
			}else{
				$json['error'] = "Email/Phone or Password is incorrect";
			}
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/*** CHNAGE PASSWORD */
	public function changePassword(){
		$json = array();
		$customer_id 	= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
		if($this->input->is_ajax_request()){
			$current_pswd 		= $this->input->post('current_password');
			$new_password 		= $this->input->post('new_password');
			$confrim_password 	= $this->input->post('confrim_password');

			$where['password'] 	= md5($current_pswd);
			$result 			= $this->Master_m->where('customer_detail',$where);
			if(!empty($result)){
				$updateData['password'] 	= md5($new_password);
				$cust['customer_id'] 		= $customer_id;
				$update_result 				= update('customer_detail',$updateData,$cust);
				logThis($update_result->query, date('Y-m-d'),'Customer Detail');

				$json['success'] 	= "Update succesfully";
				$json['redirect'] 	= base_url('/');
			}else{
				$json['error'] = "Enter Correct Current Password";
			}			
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/*** LOGOUT */
	public function logout(){
		$this->session->unset_userdata(CUSTOMER_SESSION);
		redirect('/');
	}

	public function subscribeNewsletter(){
		$json = array();
		$customer_id 	= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
		if($this->input->is_ajax_request()){

		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}
		
}
