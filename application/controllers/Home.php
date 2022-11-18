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
		$this->session->unset_userdata('filter_sess');
		$short_code 			= $this->input->get('category'); 
		$category_id 			= ''; 
		$data['breadcrumbs'] 	= '';

		if(!empty($short_code) && $short_code != ""){
			$cat_cond['short_code'] 		= $short_code;
        	$cat_result 					= $this->Master_m->where('category',$cat_cond);
			if(!empty($cat_result)){
				$category_id 					= $cat_id 	= $cat_result[0]['category_id'];	
				$session_data['category'] 		= $cat_id;
				$session_data['brand'] 			= "";
				$session_data['color'] 			= "";
				$session_data['sortby'] 		= "";
				$session_data['start_price'] 	= "";
				$session_data['end_price'] 		= 10000;
				$this->session->set_userdata('filter_sess', $session_data);

				$cat_hierarchy 					= $this->Master_m->getCategoryhierarchy($cat_id);
				$count 							= count($cat_hierarchy);
				if(!empty($cat_hierarchy)){

					$breadcrumbs			= '<i class="facl facl-angle-right"></i>';
					$i 						= 1;
					foreach($cat_hierarchy as $row){
						if($count == $i){
							$breadcrumbs .= $row;
						}else{
							$breadcrumbs .= '<a href="'.base_url('shop?category=').strtolower($row).'">'.$row.'</a><i class="facl facl-angle-right"></i>';
						}					
						$i++;
					}
					$data['breadcrumbs'] = $breadcrumbs;
				}
			}
		}
		$data['color_list']				= $this->Master_m->allProductFilterColor($category_id);
		$totalCate						= $this->Master_m->getTotalCategoryCount($category_id);
		$totalBrand						= $this->Master_m->getTotalBrandCount($category_id);
		
		// CATEGORY COUNT
		$cat_arr						= array();
		if(!empty($totalCate)){
			foreach($totalCate as $key=>$val){
				$cat_arr[$key] = count($val);
			}
		}
		$data['category_total_product'] = $cat_arr;
		
		// BRAND COUNT
		$brand_arr						= array();
		if(!empty($totalBrand)){
			foreach($totalBrand as $key1=>$val1){
				$brand_arr[$key1] = count($val1);
			}
		}
		$data['brnad_total_product'] = $brand_arr;
		$data['category_id'] = $category_id;
		
		//Meta Data
		$meta_data['meta_title']			= "Shop | ".UI_THEME;
		$meta_data['meta_description']		= "Shop | ".UI_THEME;
		$meta_data['meta_keyword']			= "Shop | ".UI_THEME;
		$meta_data['active_menu']			= "Shop";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/Product_v',$data);
		$this->load->view('UI/Common/Footer');
	}

	/*** PRODUCT DETAIL PAGE */
	public function productDetail()
	{
		$short_code 				= $this->uri->segment('2');
		$product_detail 			= $this->Master_m->getAllProductDetails(null,$short_code);
		$variant_code 				= $product_detail[0]['variant_code'];
		$product_id 				= $product_detail[0]['product_id'];
		
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
					$is_selected 			= "";
					$enable 				= "";

					$elearr[$element_id][$attr_name]['element_id'] 		= $element_id;
					$elearr[$element_id][$attr_name]['attr_id'] 		= $attributes_id;
					
					$elearr[$element_id][$attr_name]['p_id'][] 			= $pid;	
					if(in_array($product_id,$elearr[$element_id][$attr_name]['p_id'])){					
						$is_selected 		= "is-selected";
					}				
					$elearr[$element_id][$attr_name]['is_selected'] 		= $is_selected;
				}
			}
		}else{

			$elearr 	= $this->Master_m->getProductElemetsAttributes($product_id);			
		}
		
		$data = array();
		$data['breadcrumbs'] 		= "";
		$data['wish_list_class'] 	= "";
		if(!empty($product_detail)){
			
			$product_id					= $product_detail[0]['product_id'];
			$child_category 			= $product_detail[0]['child_category'];
			$result 					= $this->Master_m->getCategoryhierarchy($child_category);
			$count 						= count($result);
			
			if(!empty($result)){

				$breadcrumbs			= '<a href="'.base_url('home').'">Home</a><i class="facl facl-angle-right"></i>';
				$i 						= 1;
				foreach($result as $row){
					if($count == $i){
						$breadcrumbs .= $row;
					}else{
						$breadcrumbs .= '<a href="'.base_url('shop?category=').strtolower($row).'">'.$row.'</a><i class="facl facl-angle-right"></i>';
					}					
					$i++;
				}
				$data['breadcrumbs'] = $breadcrumbs;
			}
			if(!empty($this->session->userdata[CUSTOMER_SESSION])){

				$customer_id 			= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
				$wh['product_id'] 		= $product_id;
				$wh['customer_id'] 		= $customer_id;
				$result 				= $this->Master_m->where('whish_list',$wh);
				if(!empty($result)){
					$data['wish_list_class'] = "wis_added";
				}

				$addToRecent = $this->Master_m->addToRecentView($customer_id,$product_id);
			}
			
			//$data['product_element'] 	= $this->Master_m->getProductElemetsAttributes($product_id);			
			$data['product_detail'] 	= $product_detail[0];
			$data['elearr'] 		= $elearr;
			$data['variant_code'] 	= $variant_code;
			
			//Meta Data
			$meta_data['meta_title']				= "Shop | ".UI_THEME;
			$meta_data['meta_description']			= "Shop | ".UI_THEME;
			$meta_data['meta_keyword']				= "Shop | ".UI_THEME;
			$meta_data['active_menu']				= "Shop";
			// print_r($data);
			$this->load->view('UI/Common/Header',$meta_data);
			$this->load->view('UI/Common/Menubar');
			$this->load->view('UI/ProductDetails_v',$data);
			$this->load->view('UI/Common/Footer');
		}
	}

	/*** CART PAGE */
	public function cart()
	{
		if(!empty($this->session->userdata[CUSTOMER_SESSION])){
			$customer_id 						= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$data['cart'] 						= $this->Master_m->getCustomerCartItems($customer_id);
			//Meta Data
			$meta_data['meta_title']			= "Cart | ".UI_THEME;
			$meta_data['meta_description']		= "Cart | ".UI_THEME;
			$meta_data['meta_keyword']			= "Cart | ".UI_THEME;
			$meta_data['active_menu']			= "Cart";
			
			$this->load->view('UI/Common/Header',$meta_data);
			$this->load->view('UI/Common/Menubar');
			$this->load->view('UI/Cart_v',$data);
			$this->load->view('UI/Common/Footer');
		}
		else{
			redirect('404-error');
		}
	}

	/*** WHISHLIST PAGE */
	public function whishlist()
	{
		$data = array();
		if(!empty($this->session->userdata[CUSTOMER_SESSION])){
			$customer_id 				= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$data['whishlist'] 			= $this->Master_m->getWishListItem($customer_id);
		}
		//Meta Data
		$meta_data['meta_title']			= "Cart | ".UI_THEME;
		$meta_data['meta_description']		= "Cart | ".UI_THEME;
		$meta_data['meta_keyword']			= "Cart | ".UI_THEME;
		$meta_data['active_menu']			= "Cart";
		
		$this->load->view('UI/Common/Header',$meta_data);
		$this->load->view('UI/Common/Menubar');
		$this->load->view('UI/WhishList_v',$data);
		$this->load->view('UI/Common/Footer');
	}

	/*** CHECKOUT PAGE */
	public function checkout()
	{
		$data = array();
		if(!empty($this->session->userdata[CUSTOMER_SESSION])){
			$whr['customer_id'] 		= $customer_id 				= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$whr['set_default'] 		= 1;
			$data['cart'] 				= $this->Master_m->getCustomerCartItems($customer_id);
			$address 					= $this->Master_m->where('customer_address',$whr);
			if(!empty($address)){
				$data['address'] = $address;
			}
			else{
				$whr1['customer_id'] = $customer_id;
				$data['address']  = $this->Master_m->where('customer_address',$whr1);
			}
		
			//Meta Data
			$meta_data['meta_title']			= "Checkout | ".UI_THEME;
			$meta_data['meta_description']		= "Checkout | ".UI_THEME;
			$meta_data['meta_keyword']			= "Checkout | ".UI_THEME;
			$meta_data['active_menu']			= "Checkout";
			
			$this->load->view('UI/Common/Header',$meta_data);
			$this->load->view('UI/Common/Menubar');
			$this->load->view('UI/Checkout_v',$data);
			$this->load->view('UI/Common/Footer');
		}else{
			redirect('home');
		}
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
					$json['message']	=	"Register Succesfull !";
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
					$json['message']	=	"Profile update Successfully !";
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
		
	public function loadProducts($rowno){
		
		if($rowno != 0){  
			$rowno = ($rowno-1) * ROW_PER_PAGE;  
		  }  

		  if(empty($this->session->userdata('filter_sess'))){
			  $filter['category'] 		= '';
			  $filter['color'] 			= '';
			  $filter['brand'] 			= '';
			  $filter['sortby']			= '';
			  $filter['start_price'] 	= 0;
			  $filter['end_price'] 		= 100000;
		  }
		  else{
			  $filter['category'] 			= $this->session->userdata['filter_sess']['category'];
			  $filter['color'] 				= $this->session->userdata['filter_sess']['color'];
			  $filter['brand'] 				= $this->session->userdata['filter_sess']['brand'];
			  $filter['start_price'] 		= $this->session->userdata['filter_sess']['start_price'];
			  $filter['end_price'] 			= $this->session->userdata['filter_sess']['end_price'];
			  $filter['sortby'] 			= $this->session->userdata['filter_sess']['sortby'];
		  }
		
		  $per_page 			= '';
		  $rNo 					= '';
		  $products_result 		= $this->Master_m->getFilterData($filter,$per_page,$rNo);
		  $allcount 			= count(array_filter($products_result));  
		  $products 			= $this->Master_m->getFilterData($filter,ROW_PER_PAGE,$rowno);
		  $elearr[] 			= array();
		  $i=0;
		
		  foreach($products as $product){
			$attr_arr 					= array();
			$variant_code 				= $product['variant_code']; 
			
			if($variant_code != "" && $variant_code !=null && !empty($variant_code)){
				$variant_list 				= $this->Master_m->getVariationListByCode($variant_code,null);
			}
			else{
				$variant_list 				= $this->Master_m->getVariationListByCode(null,$product['product_id']);
			}
				//print_r($variant_list);
			if(!empty($variant_list)){
				array_multisort(array_column($variant_list, 'attributes_id'), SORT_ASC, $variant_list);
				foreach($variant_list as $item)
				{
					$pid 					= $item['product_id']; 
					$element_id 			= $item['element_id']; 
					$ele_name 				= getElementNameByID($element_id);
					$attributes_id 			= $item['attributes_id']; 
					$attr_name				= getAttributeNameByID($attributes_id);
					$attr_arr[$ele_name][$attr_name]		= $attr_name;		
				}
				
				$varients_arr = array();
				foreach($attr_arr as $ekey=>$evalue)
				{
					$varients_arr[$ekey]		= implode(', ',$evalue);;				
				}
				$elearr[$i] 				=  $product;
				$elearr[$i]['variants'] 	=  $varients_arr;	
			}
			$i++;
		}
		
		  $whish_product 		= array();
		// print_r($products_result);
		  if(!empty($this->session->userdata[CUSTOMER_SESSION])){
			$customer_id 				= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
				$wh['customer_id'] 		= $customer_id;
				$result 				= $this->Master_m->where('whish_list',$wh);
				if(!empty($result)){
					foreach($result as $row){
						$whish_product[] = $row['product_id'];
					}
				}
		}
 
		  $config['base_url'] 				= base_url().'Home/loadProductRecord';  
		  $config['use_page_numbers'] 		= TRUE;  
		  $config['total_rows'] 			= $allcount;  
		  $config['per_page'] 				= ROW_PER_PAGE;  
	 
		  $config['full_tag_open']    		= '<div class="products-footer tc mt__40"><nav class="nt-pagination w__100 tc paginate_ajax"><ul class="pagination-page page-numbers">';  
		  $config['full_tag_close']   		= '</ul></nav></div>';  
		  $config['num_tag_open']     		= '<li><a class="page-numbers" href="#">';  
		  $config['num_tag_close']    		= '</a></li>';  
		  $config['cur_tag_open']     		= '<li><span class="page-numbers current">';  
		  $config['cur_tag_close']    		= '</span></li>';
		  $config['next_tag_open']    		= '<li><a class="next page-numbers" href="#">';  
		  $config['next_tag_close']  		= '</a></li>';  
		  $config['prev_tag_open']    		= '<li><a class="next page-numbers" href="#">';  
		  $config['prev_tag_close']  		= '</a></li>';  
		 // $config['prev_link'] 				= FALSE;
		 
		 
		  $config['first_tag_open']   		= '<li><a class="next page-numbers" href="#">';  
		  $config['first_tag_close'] 		= '</a></li>';  
		  $config['last_tag_open']    		= '<li><a class="next page-numbers" href="#">';  
		  $config['last_tag_close']  		= '</a></li>';  
	 
		  $this->pagination->initialize($config);  
	 
		  $data['pagination'] 		= $this->pagination->create_links();  
		  $data['whish_product'] 	= $whish_product;  
		  $data['result'] 			= $elearr;  
		  $data['row'] 				= $rowno; 
		 
		  echo json_encode($data); 
	}

	/*** ADD TO CART ITEM */
	public function addtocart(){
		
		$json = array();
		if($this->input->is_ajax_request()){
			if(!empty($this->session->userdata[CUSTOMER_SESSION])){
				$data['product_id'] 	= $this->input->post('product_id');
				$data['quantity'] 		= $this->input->post('quantity');
				$customer_id 			= $data['customer_id'] 	= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
				$elemets 				= $this->input->post('eleArray');
				if(!empty($elemets)){
					$data['elements_attributes'] = json_encode($elemets);
				}
				
				$cart 					= $this->Master_m->addTocart($data);
				if($cart){
					$totalCart   			= $this->Master_m->getTotalCountCartProdut($customer_id);
					$message 				= $cart['message'];
					$json['success'] 		= 'success';
					$json['message'] 		= $message;
					$json['totalCart'] 		= $totalCart;
				}else{
					$json['error'] = 'error';
				}
							
			}else{
				$json['error'] = 'error';
			}
		}		
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/**** FILTER PRODUCT  */
	public function applyFilter($rowno=0)
    {
       
        $category_id 		= $this->input->post("category");
        $color_id 			= $this->input->post("color");
        $brand_id 			= $this->input->post("brand");
        $min_price 			= $this->input->post("min_price");
        $max_price 			= $this->input->post("max_price");
        $sortby 			= $this->input->post("sortby");
		$whish_product 		= array();
       
		//CATEGORY NAME
        if(!empty($category_id))
        {
        	$cat_cond['category_id'] 		= $category_id;
        	$category_result 				= $this->Master_m->where('category',$cat_cond);
			$data['category_name'] 			= $category_result[0]['category_name'];
		}
		else{
			$data['category_name'] = '';  
		}

		//COLOR NAME
        if(!empty($color_id))
        {
			$data['color_name'] 			= getAttributeNameByID($color_id);;
		}
		else{
			$data['color_name'] = '';  
		}

		//BRAND  NAME
        if(!empty($brand_id))
        {
			$data['brand_name'] 			= getBrandNameByID($brand_id);;
		}
		else{
			$data['brand_name'] = '';  
		}
        
        $session_data['category'] 			= $category_id;        
        $session_data['color'] 				= $color_id;        
        $session_data['brand'] 				= $brand_id;        
        $session_data['sortby'] 			= $sortby;        
        $session_data['start_price'] 		= $min_price;
        $session_data['end_price'] 			= $max_price;
		$this->session->set_userdata('filter_sess', $session_data);
        
       	
        $filter['category'] 			= $this->session->userdata['filter_sess']['category'];
        $filter['color'] 				= $this->session->userdata['filter_sess']['color'];
        $filter['brand'] 				= $this->session->userdata['filter_sess']['brand'];
        $filter['start_price'] 			= $this->session->userdata['filter_sess']['start_price'];
        $filter['end_price'] 			= $this->session->userdata['filter_sess']['end_price'];
        $filter['sortby'] 				= $this->session->userdata['filter_sess']['sortby'];
        
        if($rowno != 0){  
          $rowno = ($rowno-1) * ROW_PER_PAGE;  
        }  
		
		$per_page 		= '';
		$rNo 			= '';
		$result 		= $this->Master_m->getFilterData($filter,$per_page,$rNo);
        $allcount 		= count(array_filter($result));  
        $products 		= $this->Master_m->getFilterData($filter,ROW_PER_PAGE,$rowno);
		
		
		$elearr 		= array(); 
		$i=0;
		foreach($products as $product){
			$attr_arr 					= array();
			$variant_code 				= $product['variant_code']; 
			if($variant_code != "" && $variant_code !=null && !empty($variant_code)){
				$variant_list 				= $this->Master_m->getVariationListByCode($variant_code,null);
			}
			else{
				$variant_list 				= $this->Master_m->getVariationListByCode(null,$product['product_id']);
			}
				//print_r($variant_list);
				if(!empty($variant_list)){
					array_multisort(array_column($variant_list, 'attributes_id'), SORT_ASC, $variant_list);
					foreach($variant_list as $item)
					{
						$pid 					= $item['product_id']; 
						$element_id 			= $item['element_id']; 
						$ele_name 				= getElementNameByID($element_id);
						$attributes_id 			= $item['attributes_id']; 
						$attr_name				= getAttributeNameByID($attributes_id);
						$attr_arr[$ele_name][$attr_name]		= $attr_name;		
					}
					
					$varients_arr = array();
					foreach($attr_arr as $ekey=>$evalue)
					{
						$varients_arr[$ekey]		= implode(', ',$evalue);;				
					}
					$elearr[$i] 				=  $product;
					$elearr[$i]['variants'] 	=  $varients_arr;	
				}
			$i++;
		}

		if(!empty($this->session->userdata[CUSTOMER_SESSION])){
			$customer_id 				= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
				$wh['customer_id'] 		= $customer_id;
				$result 				= $this->Master_m->where('whish_list',$wh);
				if(!empty($result)){
					foreach($result as $row){
						$whish_product[] = $row['product_id'];
					}
				}
		}
     	 
        $config['base_url'] 				= base_url().'Home/loadProductRecord';  
		  $config['use_page_numbers'] 		= TRUE;  
		  $config['total_rows'] 			= $allcount;  
		  $config['per_page'] 				= ROW_PER_PAGE;  
	 
		  $config['full_tag_open']    		= '<div class="products-footer tc mt__40"><nav class="nt-pagination w__100 tc paginate_ajax"><ul class="pagination-page page-numbers">';  
		  $config['full_tag_close']   		= '</ul></nav></div>';  
		  $config['num_tag_open']     		= '<li><a class="page-numbers" href="#">';  
		  $config['num_tag_close']    		= '</a></li>';  
		  $config['cur_tag_open']     		= '<li><span class="page-numbers current">';  
		  $config['cur_tag_close']    		= '</span></li>';
		  $config['next_tag_open']    		= '<li><a class="next page-numbers" href="#">';  
		  $config['next_tag_close']  		= '</a></li>';  
		  $config['prev_tag_open']    		= '<li><a class="next page-numbers" href="#">';  
		  $config['prev_tag_close']  		= '</a></li>';  
		 // $config['prev_link'] 				= FALSE;
		 
		 
		  $config['first_tag_open']   		= '<li><a class="next page-numbers" href="#">';  
		  $config['first_tag_close'] 		= '</a></li>';  
		  $config['last_tag_open']    		= '<li><a class="next page-numbers" href="#">';  
		  $config['last_tag_close']  		= '</a></li>';  
	 
		  $this->pagination->initialize($config);  
	 
		$data['pagination'] 		= $this->pagination->create_links();  
        $data['result'] 			= $elearr;  
        $data['row'] 				= $rowno;  
		$data['whish_product'] 		= $whish_product;  
        echo json_encode($data); 
    } 

	/*** ADD TO WHISH LIST PRODUCT */

	public function addtowhisList(){
		$json = array();
		if($this->input->is_ajax_request()){
			if(!empty($this->session->userdata[CUSTOMER_SESSION])){
				$product_id				= $this->input->post('product_id');
				$customer_id 			= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];

				$where['product_id'] 	= $product_id;
				$where['customer_id'] 	= $customer_id;
				$result 				= $this->Master_m->where('whish_list',$where);
				
				if(empty($result)){
					$insertdata['customer_id'] 		= $customer_id;
					$insertdata['product_id'] 		= $product_id;

					$insert_result = insert('whish_list',$insertdata,'');
					logThis($insert_result->query, date('Y-m-d'),'Customer WhishList');

					$totalWishList   			= $this->Master_m->getTotalWhishList($customer_id);
					$json['success'] 			= 'success';
					$json['message'] 			= "Item is added to WhisListed";
					$json['totalWishList'] 		= $totalWishList;
				}
				else{
					$json['error'] 				= 'error';
					$json['message'] 			= "Item is already added to WhisListed";
				}

				
			}else{
				$json['warning'] 			= 'warning';
				$json['message'] 			= "Please Login / Sign up for shopping!!";
			}
		}		
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	public function removeFromCart(){
		$json = array();
		if($this->input->is_ajax_request()){
			$del['product_id']					= $this->input->post('product_id');
			$del['customer_id'] = $customer_id	= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$result							= delete('customer_cart',$del);
			logThis($result->query, date('Y-m-d'),'Customer Cart');
			
			$cart_detail = $this->Master_m->getCustomerCartItems($customer_id);
			
			// print_r($cart_detail);die;
			$json['success'] 			= 'success';
			$json['message'] 			= 'item removed ';
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	public function removeFromWishList(){
		
		$json = array();
		if($this->input->is_ajax_request()){
			$customer_id					= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$del['product_id']				= $this->input->post('product_id');
			$del['customer_id'] 			= $customer_id;
			$result							= delete('whish_list',$del);
			logThis($result->query, date('Y-m-d'),'Customer WishList');
			$totalWishList   			= $this->Master_m->getTotalWhishList($customer_id);
			$json['success'] 			= 'success';
			$json['message'] 			= 'item removed from whishlist';
			$json['totalWishList'] 		= $totalWishList;
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/***UPDATE CART ITEM QUANITYT */
	public function updateItemQuantity(){
		
		$json = array();
		if($this->input->is_ajax_request()){
			$product_id 		= $this->input->post('product_id');
			$quantity 			= $this->input->post('quantity');
			$customer_id 		= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];

			$where['product_id'] 	= $product_id;
			$product_data			= $this->Master_m->where('product_details',$where);
			$net_price 				= $product_data[0]['net_price'];
			$mrp_price 				= $product_data[0]['mrp_price'];
			$total_amt				= $net_price * $quantity;

			$whr['customer_id'] 			= $customer_id;
			$whr['product_id'] 				= $product_id; 
			$updateData['quantity'] 		= $quantity;
			$update_result 					= update('customer_cart',$updateData,$whr);
			logThis($update_result->query, date('Y-m-d'),'Customer Cart');			
			$json['success'] 			= 'success';
			$json['net_price'] 			= $net_price;
			$json['total_amt'] 			= $total_amt;
			$json['mrp'] 				= $mrp_price * $quantity;
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}	

	public function submitCustomerAddress(){
		$json = array();
		if($this->input->is_ajax_request()){
			$customer_id 		= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];


			$addressid 		= $this->input->post('txtaddressid');
			$fname 			= $this->input->post('fname');
			$lname 			= $this->input->post('lname');
			$mobile_no 		= $this->input->post('mobile_no');
			$email 			= $this->input->post('email');
			$address 		= $this->input->post('txtaddress');
			$city 			= $this->input->post('txtcity');
			$state 			= $this->input->post('txtstate');
			$country 		= $this->input->post('txtcountry');
			$pincode 		= $this->input->post('pincode');
			$addressType	= $this->input->post('txtaddressTyperadio');
			$setdefault 	= $this->input->post('txtdefaultaddress');

			$whr['customer_id'] 		= $customer_id;
			$update1['set_default'] 	= 0;
			$update_result 				= update('customer_address',$update1,$whr);
			logThis($update_result->query, date('Y-m-d'),'Customer Address');
			
			if(!empty($addressid) && $addressid != "" && $addressid != null && $addressid != 0){

				$updatedata['customer_id'] 		 	= $customer_id;
				$updatedata['first_name']  			= $fname;
				$updatedata['last_name']  			= $lname;
				$updatedata['email']  				= $email;
				$updatedata['mobile']  				= $mobile_no;
				$updatedata['address']  			= $address;
				$updatedata['city']  				= $city;
				$updatedata['state']  				= $state;
				$updatedata['pincode']  			= $pincode;
				$updatedata['country']  			= $country;
				$updatedata['address_type']  		= $addressType;
				$updatedata['set_default']  		= $setdefault;
				$updatedata['modified']  			= date('Y_m-d');				

				$where['address_id'] 	= $addressid;
				$where['customer_id'] 	= $customer_id;
				$update_result 			= update('customer_address',$updatedata,$where);			
				logThis($update_result->query, date('Y-m-d'),'Customer Address');
				$json['success'] 			= 'success';
				$json['message'] 			= 'address update succesfully !';
	
			}
			else {

				$insertdata['customer_id'] 		 	= $customer_id;
				$insertdata['first_name']  			= $fname;
				$insertdata['last_name']  			= $lname;
				$insertdata['email']  				= $email;
				$insertdata['mobile']  				= $mobile_no;
				$insertdata['address']  			= $address;
				$insertdata['city']  				= $city;
				$insertdata['state']  				= $state;
				$insertdata['pincode']  			= $pincode;
				$insertdata['country']  			= $country;
				$insertdata['address_type']  		= $addressType;
				$insertdata['set_default']  		= $setdefault;
				$insertdata['created_by']  			= $customer_id;
				$insertdata['created']  			= date('Y_m-d');
				$insertdata['is_active']  			= 1;
	
				$insert_result = insert('customer_address',$insertdata,'');					
				logThis($insert_result->query, date('Y-m-d'),'Customer Address');
				$json['success'] 			= 'success';
				$json['message'] 			= 'address insert succesfully !';
			}
			
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));

	}

	/*** get customer delivery address list */
	public function getCustomerDeliveryAddress(){
		$json = array();
		if($this->input->is_ajax_request()){
			$where['customer_id'] = $customer_id 		= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$result = $this->Master_m->where('customer_address',$where);
			$address_list = '';
			if(!empty($result)){
				$address_list .= '<ul class="payment_methods">';
				foreach($result as $row){
					$checked            = "";
					$default 			= '';
					$name 			= $row['first_name'].' '.$row['last_name'];
					$mobile 		= $row['mobile'];
					$address 		= $row['address'];
					$pincode 		= $row['pincode'];
					$city_state 	= $row['city'].' , '.$row['state'].' , '.$row['country'].' - '.$pincode;
					
					$address_type 		= $row['address_type'];
					$address_id 		= $row['address_id'];
					$set_default 		= $row['set_default'];
					
					if($set_default == 1){
						$checked = "checked";
						$default = '(Default)';
					}else{
						$checked            = "";
					}

					$address_list .= '<li class="payment_method">
											<input id="txtDeliveryAddress_'.$address_id.'" type="radio" class="input-radio"
												name="delivery_address" value="'.$address_id.'" '.$checked.'>
											<label for="txtDeliveryAddress_'.$address_id.'">'.$name.' '.$default.'<span class="badge badge-pill badge-info ml__5">'.$address_type.'</span></label>
											<div class="payment_box payment_method_bacs">
												<p>'.$address.'</p>
												<p>'.$city_state.'</p>
												<p>Contact No : '.$mobile.'</p>
											</div>
										</li>';	
									
				}
				$address_list .= '</ul>';	
				$json['address_list'] 	= $address_list;
				$json['success'] 		= 'success';
			}else{
				$json['error'] 			= 'Address Not Found !!';
			}	

		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/*** get customer all address list for profile*/
	public function getCustomerAllAddress(){
		$json = array();
		if($this->input->is_ajax_request()){
			$where['customer_id'] = $customer_id 		= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$result = $this->Master_m->where('customer_address',$where);
			$address_list = '';
			if(!empty($result)){
				$address_list .= '<ul class="payment_methods">';
				foreach($result as $row){
					$checked            = "";
					$default 			= '';
					$name 			= $row['first_name'].' '.$row['last_name'];
					$mobile 		= $row['mobile'];
					$address 		= $row['address'];
					$pincode 		= $row['pincode'];
					$city_state 	= $row['city'].' , '.$row['state'].' , '.$row['country'].' - '.$pincode;
					
					$address_type 		= $row['address_type'];
					$address_id 		= $row['address_id'];
					$set_default 		= $row['set_default'];
					
					if($set_default == 1){
						$checked = "checked";
						$default = '(Default)';
					}else{
						$checked            = "";
					}

					$address_list .= '<li class="payment_method">											
										<div class="action ml-2 mr-2">
											<label for="txtDeliveryAddress_'.$address_id.'">'.$name.' '.$default.'<span class="badge badge-pill badge-info ml__5">'.$address_type.'</span></label>
											<div>	
												<a href="javascript:void(0)" class="btneditaddress text-success" data-id="'.$address_id.'"><i class="iccl iccl-edit"></i></a> | <a class="btremoveaddress text-danger" href="javascript:void(0)" data-id="'.$address_id.'"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
											</div>
										</div>
											<div class="payment_box payment_method_bacs mb-2">
												<p>'.$address.'</p>
												<p>'.$city_state.'</p>
												<p>Contact No : '.$mobile.'</p>
											</div>											
										</li>';	
									
				}
				$address_list .= '</ul>';	
				$json['address_list'] 	= $address_list;
				$json['success'] 		= 'success';
			}else{
				$json['error'] 			= 'Address Not Found !!';
			}	

		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/** FETCH ADDRESS DETAIL FROM ADDRESS ID */
	public function getAddressData(){
		$json = array();
		if($this->input->is_ajax_request()){
			$address_id = $this->input->post('address_id');
			
			$where['customer_id'] 	= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$where['address_id']	= $address_id;
			$result					= $this->Master_m->where('customer_address',$where);
			if(!empty($result)){
				$json['success']	= 'success';
				$json['result']		= $result;
			}else{
				$json['error']		= 'error';
			}
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/*** UPDATE DELIVERY STATUS AT CHECKOUT */
	public function changeDeliveryAddress(){
		$json = array();
		
		if($this->input->is_ajax_request()){
			$customer_id 			= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$deliverd_address_id 	= $this->input->post('delivery_address');

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
					$json['success'] 		= 'success';
				}
			//}
			else{
				$json['error'] 			= 'Plese Try Again after sometime !!';
			}

		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

		// PLACE ORDER
	public function placeOrder(){
		$json = array();
		if($this->input->is_ajax_request()){
			$checkitemStock      = $this->Master_m->checkCartItemStock(); // 0 :instock , <0 :outofstock
			if($checkitemStock == 0){
				$payment_type 				= $this->input->post('payment_type');
				$customer_id 				= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
				$whr['customer_id'] 		= $customer_id;
				$result 					= $this->Master_m->addOrder($customer_id);
				if($result){
					$this->Master_m->generateInvoice($result);
					$json['success'] 	= "success";
					$json['msg'] 		= "Order Placed Successfully !!";
					$json['redirect'] 	= base_url('order-history');
	
				}else{
					$json['error'] 		= "error";
					$json['msg'] 		= "There was a problem placing order , please try after sometimes!!";
					$json['redirect'] 	= base_url('cart');
				}
			}else{
					$json['error'] 			= "error";
					$json['msg'] 			= "Please Check Item Stock Before Place Order!!!!";
					$json['redirect'] 		= base_url('cart');
			}
			
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
		
	}

	// GET STATE BY COUNTRY
	public function getStateByCountry(){
		$json = array();
		
		if($this->input->is_ajax_request()){
			$countrycode 				= $this->input->post('countrycode');
			$allState					= getStateByCountry($countrycode);
			$option = '<option value="">Select State</option>';
			if(!empty($allState)){
				foreach($allState as $row){
					$option .= '<option value="'.$row->name.'">'.$row->name.'</option>';
				}
				$json['success'] = 'success';	
				$json['option'] = $option;	
			}else{
				$json['error'] = 'please try in sometimes';	
			}		
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	// MY ACCOUNT PAGE
	public function myAccount(){
		if(!empty($this->session->userdata[CUSTOMER_SESSION])){
			$customer_id 						= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
		
			//Meta Data
			$meta_data['meta_title']			= "My Account | ".UI_THEME;
			$meta_data['meta_description']		= "My Account | ".UI_THEME;
			$meta_data['meta_keyword']			= "My Account | ".UI_THEME;
			$meta_data['active_menu']			= "My Account";
			
			$this->load->view('UI/Common/Header',$meta_data);
			$this->load->view('UI/Common/Menubar');
			$this->load->view('UI/MyAccount_v');
			$this->load->view('UI/Common/Footer');
		}else{
			redirect('home');
		}
	}

	// DELETE ADDRESS 
	public function deleteAddress(){
		$json = array();
		
		if($this->input->is_ajax_request()){
			$customer_id 			= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$address_id 			= $this->input->post('address_id');

			$whr1['address_id'] 		= $address_id;
			$whr1['customer_id'] 		= $customer_id;
			$result						= delete('customer_address',$whr1);
			$json['success']			= 'success';	
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/* BIND ALL ORDERS**/
	public function myOrders(){
		if(!empty($this->session->userdata[CUSTOMER_SESSION])){
			$data['orderHtml'] = "";
			$customer_id 		= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$allorder 			= $this->Master_m->getAllOrderList($customer_id);
			if(!empty($allorder)){
				$data['orderHtml']			= $this->Master_m->displayOrderHistory($allorder);
			}
			
			
			//Meta Data
			$meta_data['meta_title']			= "My Orders | ".UI_THEME;
			$meta_data['meta_description']		= "My Orders | ".UI_THEME;
			$meta_data['meta_keyword']			= "My Orders | ".UI_THEME;
			$meta_data['active_menu']			= "My Orders";

			$this->load->view('UI/Common/Header',$meta_data);
			$this->load->view('UI/Common/Menubar');
			$this->load->view('UI/MyOrders_v',$data);
			$this->load->view('UI/Common/Footer');
		}else{
			redirect('home');
		}
	}

	/*** ORDER DETAIL PAGE */
	public function orderDetail(){
		if(!empty($this->session->userdata[CUSTOMER_SESSION])){

			$customer_id 				= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
			$order_id 					= $this->input->get('id');
			$data['orderDetail'] 		= $this->Master_m->getCustomerOrderList($order_id);
			
			//Meta Data
			$meta_data['meta_title']			= "My Orders | ".UI_THEME;
			$meta_data['meta_description']		= "My Orders | ".UI_THEME;
			$meta_data['meta_keyword']			= "My Orders | ".UI_THEME;
			$meta_data['active_menu']			= "My Orders";

			$this->load->view('UI/Common/Header',$meta_data);
			$this->load->view('UI/Common/Menubar');
			$this->load->view('UI/OrderDetails_v',$data);
			$this->load->view('UI/Common/Footer');
		}else{
			redirect('home');
		}
	}

	/*** FILTER ORDER BY YEAR */
	public function getFilterOrderByYear(){
		$json = array();
		
		if($this->input->is_ajax_request()){
			if(!empty($this->session->userdata[CUSTOMER_SESSION])){
				$customer_id 	= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
				$filterYear 	= $this->input->post('filterYear');
				$allorder 		= $this->Master_m->getAllOrderList($customer_id,$filterYear);
				if(!empty($allorder)){
					$json['orderHtml']			= $this->Master_m->displayOrderHistory($allorder);
					$json['success'] 	= "success";
				}else{
					$json['error'] 		= "error";
				}				
			}
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/**** FETCH PRODUCT DETAIL FROM ORDER TABLE  */
	public function getOrderedProductDetail(){
		$json = array();		
		if($this->input->is_ajax_request()){
			$order_id 	= $this->input->post('orderid');
			$productid 	= $this->input->post('productid');
			$result = $this->Master_m->getOrderedProductDetail($order_id,$productid);
			if(!empty($result)){
				$json['result'] = $result;
				$json['success'] = 'success';
			}else{
				$json['error'] = "error";
			}
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/**** SUBMIT REQUEST FORM */

	public function submitReturn(){
		$json = array();		
		if($this->input->is_ajax_request()){
			if(!empty($this->session->userdata[CUSTOMER_SESSION])){				
				$result = $this->Master_m->saveReturn();
				if($result){
					$json['success'] = "success";
					$json['msg'] 	 = "Return Request sent successfully !!";
				}else{
					$json['error'] = "Request Not Sent , Please Try Again After Sometimes !!";
				}
			}
			else{
				$json['error'] = "Please Login";
			}		
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/**** SUBMIT REQUEST FORM */
	public function submitReplace(){
		$json = array();		
		if($this->input->is_ajax_request()){
			if(!empty($this->session->userdata[CUSTOMER_SESSION])){				
				$result = $this->Master_m->saveReplace();
				if($result){
					$json['success'] = "success";
					$json['msg'] 	 = "Replace Request sent successfully !!";
				}else{
					$json['error'] = "Request Not Sent , Please Try Again After Sometimes !!";
				}
			}
			else{
				$json['error'] = "Please Login";
			}		
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	public function errorPage(){
		$this->load->view('UI/Error_404_v');
	}

	/**** SHOW VARIENT PRODUCT  */
	public function getDataFromVarientCode(){	
		
		$json = array();		
		if($this->input->is_ajax_request()){
			$selectedElementsArr 		= $this->input->post('selectedElements');			
			$res 						= $this->Master_m->getvariantproductBYeleattr();	
			
			$redirect_url 				= '';
			if(!empty($res))
			{
				foreach($res as $row)
				{
					$p_id 				= $row['product_id'];
					foreach($selectedElementsArr as $ele=>$attr){
						$item_ele 		= $ele;
						$item_attr 		= $attr;
						$res1 			= $this->Master_m->getvariantproductBYSelectedeleattr($p_id,$item_ele,$item_attr);
										
						if(!empty($res1)) {
							$redirect_url = base_url().'product-detail/'.$res1->short_code.'?pid='.$res1->product_id;
						}else{
							$redirect_url = base_url().'product-detail/'.$res[0]['short_code'].'?pid='.$res[0]['product_id'];
						}						
					}					
				}
			}
			else
			{
				$redirect_url = base_url().'product-detail/'.$res[0]['short_code'].'?pid='.$res[0]['product_id'];
			}			
			$json['redirect_url'] = $redirect_url;
			$json['success'] = "success";
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}
}