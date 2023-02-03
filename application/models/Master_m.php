<?php

class Master_m extends CI_Model{

	public function insert($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	public function get($table,$id){
		$this->db->order_by($id, 'DESC');
		$query=$this->db->get($table)->result_array();
		return $query;
	}

	public function singleGet($table,$field,$parent_category_id){
		$this->db->where($field,$parent_category_id);
		$query=$this->db->get($table)->row();
		return $query;
	}

	public function allget($table,$id,$status){
		$this->db->where($status,1);
		$this->db->order_by($id, 'DESC');
		$query=$this->db->get($table)->result_array();
		return $query;
	}

	public function where($table,$data){
		$this->db->where($data);
		$query=$this->db->get($table)->result_array();
		return $query;
	}

	public function whereAdvance($table,$data,$order_by,$limit){
		$this->db->where($data);
		$this->db->order_by($order_by['order_by']);
		if($limit['limit'] != '' || $limit['limit'] != NULL){
			$this->db->limit($limit['limit']);	
		}
		
		$query=$this->db->get($table)->result_array();
		return $query;
	}
	public function where1($table,$data){
		$this->db->like($data);
		$query=$this->db->get($table)->result_array();
		return $query;
	}

	public function updateRecord($table,$id,$updatedata){
		$this->db->where($id);
		$query = $this->db->update($table,$updatedata);
		return $query;
	}

	public function deleteRecord($table,$id){
		$this->db->where($id);
		$query=$this->db->delete($table);
		return $query;
	}
	
		
	/*Api function Start*/	
	
	//Customer profile details
	public function customerProfile($customer_id)
	{
		$this->db->select('customer_id, customer_name, gender, email, mobile,alternate_mobile,birth_date');
		$this->db->from('customer_detail');
		$this->db->where('customer_id',$customer_id);
		$this->db->where('is_active',1);
		$query = $this->db->get()->result_array();
		return $query;
	}

	//Slider list
	public function sliderList()
	{
		$this->db->select('slider_id, slider_image, slider_title, short_description, position');
		$this->db->from('slider');
		$this->db->where('is_active',1);
	 	$this->db->order_by('position asc');
		$query = $this->db->get()->result_array();
		return $query;
	}

	//Prent Category list
	public function categoryList()
	{
		$this->db->select('category_id, category_name, description, category_image');
		$this->db->from('category');
		$this->db->where('parent_category_id',0);
		$this->db->where('is_active',1);
		$query = $this->db->get()->result_array();
		return $query;
	}

	// All child Category list : parent_category_id !=0
	public function AllChildCategoryList()
	{
		$this->db->select('c.category_id, c.category_name,p.category_id as parent_id');
		$this->db->from('product_details p');
		$this->db->join('category c','c.category_id=p.child_category');		
		$this->db->where('c.is_active',1);
		$this->db->group_by('p.child_category');
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	//Child Category list by parent category id
	public function childCategoryList($category_id)
	{
		$this->db->select('category_id, category_name, description, category_image');
		$this->db->from('category');
		$this->db->where('parent_category_id',$category_id);
		$this->db->where('is_active',1);
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function getCateforyNameByID($category_id)
	{
		$this->db->select('category_name,child_category');
		$this->db->from('category');
		$this->db->where('category_id',$category_id);
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	//brand list
	public function brandList()
	{
		$this->db->select('brand_id, brand_name, brand_logo');
		$this->db->from('brand');
		$this->db->where('is_active',1);
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	//Get product list
	public function getProductsList($category_id = '', $brand_id = '', $new_product='', $best_seller='')
	{
		$this->db->select('p.product_id, p.product_name, p.product_code, p.short_description, v.name, p.vendor_id, v.company, p.brand_id, b.brand_name, p.category_id, c.category_name, p.mrp_price, p.discount, p.net_price, p.image, p.is_new_product, p.is_popular_product, p.is_feature_product,p.cover_img');
		$this->db->from('product_details p');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->join('category c','c.category_id = p.category_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		
		
		//For category
		if(isset($category_id) && strlen(trim($category_id))>0)
		{
			$this->db->group_start();
			$this->db->where("p.category_id", $category_id);
			$this->db->or_where("p.child_category", $category_id);
			$this->db->group_end();
   		}
   		
   		//for brand
   		if(isset($brand_id) && strlen(trim($brand_id))>0)
		{
			$this->db->where("p.brand_id", $brand_id);
   		}
   		
   		//for new product
   		if(isset($new_product) && strlen(trim($new_product))>0)
		{
			$this->db->where("p.is_new_product", $new_product);
   		}
   		
   		//for best seller
   		if(isset($best_seller) && strlen(trim($best_seller))>0)
		{
			$this->db->where("p.is_popular_product", $best_seller);
   		}
   		
		
		//$this->db->where("p.category_id",$category_id);
		$this->db->where('p.is_active',1);
		$this->db->order_by('p.product_id desc');
		$query = $this->db->get()->result_array();
		
		return $query;
	}
	
	//Get product all details form product
	public function getAllProductDetails($product_id = NULL , $short_code = NULL){
		if($product_id != null && $product_id != ""){
			$this->db->where('p.product_id',$product_id);
		}
		if($short_code != null && $short_code != ""){
			$this->db->where('p.short_code',$short_code);
		}
		$this->db->select('p.*, v.name as vendor_name, c.category_id, c.category_name, b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->join('category c','c.category_id = p.category_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	/*Api function End*/

	//Menu list with menu posssition by asc order
	function getRoleWiseMenu($role_id)
	{	
		$rid = $this->config->item('user_login')['rid'];
		if($role_id != $rid){
			
		}
		if($role_id == $rid){
			$this->db->group_by('rd.menu_id');
		}
		$this->db->select("rd.role_details_id, rd.role_id, rd.menu_id, m.menu_position, m.menu_name, m.menu_link, m.menu_icon, rd.submenu_id, rd.is_active");
		$this->db->from("role_details rd");
	 	$this->db->join('menu_details m','m.menu_id = rd.menu_id');
	 	$this->db->where('m.menu_status', 1);
		$this->db->where('rd.role_id', $role_id);	 	
	 	$this->db->order_by('m.menu_position asc');		
		$query = $this->db->get()->result_array();		
		return $query;
	}
	
	
	//get brand wise product category
	public function getBrandWiseProductCategory($brand_id){
		$this->db->select('p.category_id, c.category_name, c.short_code');
		$this->db->from('product_details p');
		$this->db->join('category c','c.category_id = p.category_id');
		$this->db->where('p.brand_id',$brand_id);
		$this->db->where('c.is_active',1);
		$this->db->group_by('p.category_id');
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	//function for get last added order number
	public function getOrderNumber()
	{
		$this->db->select('order_id, order_number');
		$this->db->from('orders');
		$this->db->order_by('order_id','DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->row_array();
		Return $data;
	}
	
	
	//function for get last insert Invoice Data
	public function getLastInsertInvoiceData()
	{
		$this->db->select('invoice_id, invoice_no');
		$this->db->from('invoice_details');
		$this->db->order_by('invoice_id', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	
		//function for get Order data
	public function getOrderSummary($order_id)
	{
		$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];	
		if(strtolower($user_type) != "admin"){
			$this->db->where("od.vendor_id",$user_id);
		}
		$this->db->select('o.order_number,o.ship_amount,o.order_date,o.shipping_address,s.delivery_status,ca.*,c.customer_name as cust_name,c.mobile as cust_phone,c.email as cust_email,sum(od.quantity) as total_quantity, sum(od.mrp_price) as total_mrp,sum(od.discount_amt) as discount_amt,sum(od.gst_amt) as gst_amount,sum(od.total_amt) as total_amount');
		$this->db->from('orders o');
		$this->db->join('customer_detail c','c.customer_id = o.customer_id');
		$this->db->join('customer_address ca','ca.customer_id = o.customer_id');
		$this->db->join('delivery_status s','s.delivery_status_id = o.delivery_status_id');
		$this->db->join('order_details od','od.order_id = o.order_id');
		$this->db->where("o.order_id",$order_id);
		$this->db->where("ca.set_default",1);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	
	//function for get Order product details
	public function getVendOrderDeatail($order_id)
	{
		$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];	
		if(strtolower($user_type) != "admin"){
			$this->db->where("o.vendor_id",$user_id);
		}
		$this->db->select('sum(o.total_amt) as total');
		$this->db->from('order_details o');
		$this->db->where("o.order_id",$order_id);
		$query = $this->db->get()->result_array();
		return $query[0]['total'];
	}	
	
	
	//parent Category get 
	public function parentCategory($table){
		$this->db->select('category_id,category_name,category_url_name');
		$this->db->from('catalog_category');
		$this->db->where('parent_category_id','');
		$this->db->where('is_active',1);
		$this->db->order_by('menu_pos');
		$query=$this->db->get()->result_array();
		return $query;
	}

	//parent Category get 
	public function getSubCategory($table,$id){
		$this->db->select('category_id,category_name,category_url_name');
		$this->db->from('catalog_category');
		$this->db->where('parent_category_id',$id);
		$this->db->order_by('menu_pos');
		$query=$this->db->get()->result_array();
		return $query;
	}

	//product list get 
	public function getProducts($category,$brand,$color,$rowperpage, $rowno)
	{
		$this->db->select('product_id, product_name, product_code, short_code, short_description, price, product_image');
		$this->db->from('product_details');
		$this->db->where('is_active',1);
		
		//For category
		if(isset($category) && strlen(trim($category))>0)
		{
   			$this->db->where("category_id", $category);
   		}
   		
   		//for brand
   		if(isset($brand) && strlen(trim($brand))>0)
		{
			$this->db->where("brand_id", $brand);
   		}
   		
   		//For color
   		if(isset($color) && strlen(trim($color))>0)
		{
			$this->db->where("color_id", $color);
   		}
   		
   		//for start price
   		if(isset($filter['start_price']) && strlen(trim($filter['start_price']))>0)
		{
			$start_price = $filter['start_price'];
   			$this->db->where("p.price >= $start_price");
   		}
   		
   		//for end price
		if(isset($filter['end_price']) && strlen(trim($filter['end_price']))>0)
		{
			$end_price = $filter['end_price'];
   			$this->db->where("p.price <= $end_price");
   		}
   		
		$this->db->order_by('product_id desc');
		
		//For color
   		if(strlen(trim($rowperpage))>0 && strlen(trim($rowno))>0)
		{
			$this->db->limit($rowperpage, $rowno);
   		}
		
		//$this->db->limit($rowperpage, $rowno);  
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	//Category name wise product count
	public function getCategoryTotalProduct(){
		$this->db->select('count(p.product_id) as category_total_product, p.category_id, c.category_name');
		$this->db->from('product_details p');
		$this->db->join('category c','c.category_id = p.category_id');
		$this->db->where('p.is_active', 1);
		$this->db->where('c.is_active', 1);
		$this->db->order_by('c.category_name','ASC');
		$this->db->group_by('p.category_id');
		$query=$this->db->get()->result_array();
		return $query;
		
		
	}

	public function getTotalCategoryCount($category_id = null){
		$child = array();
		$category_id;
		if($category_id != "" || $category_id != null){

			$cat_cond['category_id'] 	= $category_id;		
			$catresult					= $this->where('category',$cat_cond);
			$parent_cat 				= $catresult[0]['parent_category_id'];
			if($catresult[0]['child_category'] != null || $catresult[0]['child_category'] != "")
			$child 						= explode(',',$catresult[0]['child_category']);

			if(!empty($child) && $parent_cat > 0){
				$this->db->where_in("p.child_category", $child);
			}else{
				$this->db->group_start();
				$this->db->where("p.category_id", $category_id);
				$this->db->or_where("p.child_category", $category_id);
				$this->db->group_end();
			}			
		}
		$this->db->select('p.product_id,p.category_id,p.variant_code, c.category_name');
		$this->db->from('product_details p');
		$this->db->join('category c','c.category_id = p.category_id');
		$this->db->where('p.is_active', 1);
		$this->db->where('c.is_active', 1);
		$this->db->order_by('c.category_name','ASC');
		$query=$this->db->get()->result_array();
		
		$cat_arr = array();
		$varient_arr = array();
		$i = 1;
		$j = 1;
		if(!empty($query)){
			foreach($query as $row){
				
				$product_id 		= $row['product_id'];
				$cat_id 			= $row['category_id'];
				$category_name 		= $row['category_name'];
				$variant_code 		= $row['variant_code'];		
				
				if(!empty($varient_arr) && !empty($varient_arr[$cat_id]) && $variant_code !=""){
					if(in_array($variant_code,$varient_arr[$cat_id])){
					
					}else{
						$varient_arr[$cat_id][] = $variant_code;
					}
				}
				else{
					$varient_arr[$cat_id][] = $variant_code;
				}			
				
			}
		}
		
		return $varient_arr;
	}
	public function getTotalSubCategoryCount($category_id = null){
		if($category_id != "" || $category_id != null){
			
   			$this->db->or_where("p.child_category", $category_id);
			
		}
		$this->db->select('p.product_id,p.category_id,p.child_category,p.variant_code, c.category_name');
		$this->db->from('product_details p');
		$this->db->join('category c','c.category_id = p.child_category');
		$this->db->where('p.is_active', 1);
		$this->db->where('c.is_active', 1);
		$this->db->order_by('c.category_name','ASC');
		$query=$this->db->get()->result_array();
		
		$cat_arr = array();
		$varient_arr = array();
		$i = 1;
		$j = 1;
		if(!empty($query)){
			foreach($query as $row){
				
				$product_id 		= $row['product_id'];
				$cat_id 			= $row['child_category'];
				$category_name 		= $row['category_name'];
				$variant_code 		= $row['variant_code'];		
				
				if(!empty($varient_arr) && !empty($varient_arr[$cat_id]) && $variant_code !=""){
					if(in_array($variant_code,$varient_arr[$cat_id])){
					
					}else{
						$varient_arr[$cat_id][] = $variant_code;
					}
				}
				else{
					$varient_arr[$cat_id][] = $variant_code;
				}			
				
			}
		}
		
		return $varient_arr;
	}
	
	//Brand name wise product count
	public function getTotalBrandCount($category_id = null){
		if($category_id != "" || $category_id != null){
			$this->db->group_start();
			$this->db->where("p.category_id", $category_id);
   			$this->db->or_where("p.child_category", $category_id);
			$this->db->group_end();
		}
		$this->db->select('p.product_id,p.brand_id,p.variant_code, b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('p.is_active', 1);
		$this->db->where('b.is_active', 1);
		$this->db->order_by('b.brand_name','ASC');
		$query=$this->db->get()->result_array();
		
		$cat_arr = array();
		$varient_arr = array();
		
		if(!empty($query)){
			foreach($query as $row){
				
				$product_id 		= $row['product_id'];
				$brand_id 			= $row['brand_id'];
				$brand_name 		= $row['brand_name'];
				$variant_code 		= $row['variant_code'];		
				
				if(!empty($varient_arr) && !empty($varient_arr[$brand_id]) && $variant_code !=""){
					if(in_array($variant_code,$varient_arr[$brand_id])){
					
					}else{
						$varient_arr[$brand_id][] = $variant_code;
					}
				}
				else{
					$varient_arr[$brand_id][] = $variant_code;
				}			
				
			}
		}
		
		return $varient_arr;
	}
	
	public function getAllBrandlist(){
		$this->db->where('is_active',1);
		$query=$this->db->get('brand')->result_array();
		return $query;
	}

	////////////////////////////////////////

	public function getMenuList()
	{
		$this->db->select('menu_id, menu_name, menu_link, menu_icon, submenu_id, menu_status');
		$this->db->from('menu_details');
		$this->db->where('menu_status',1);
		$query = $this->db->get();
		return $query->result_array();
	}

	//Get active Submenu details
	public function getSubmenuList()
	{
		$this->db->select('submenu_id, submenu_name, submenu_link, submenu_icon, is_active');
		$this->db->from('submenu_details');
		$this->db->where('is_active',1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getSubmenudetail($submenu_id){
		$this->db->select('*');
		$this->db->from('submenu_details');
		$this->db->where('is_active',1);
		$this->db->where('submenu_id',$submenu_id);
		$this->db->order_by('submenu_position','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	/*** customer login  */

	public function checkLogin(){

		$email_phone 	= $this->input->post('txt_cust_email_phone');
		$password 		= md5(trim($this->input->post('txt_cust_password')));

		$this->db->select('*');
		$this->db->from('customer_detail');
		$this->db->where('is_active',1);
		$this->db->where('password',$password);
		$this->db->group_start();
		$this->db->or_where('email', $email_phone);
		$this->db->or_where('mobile', $email_phone);
		$this->db->group_end();
		$query = $this->db->get();
		
		return $query->result_array();

	}

	/*** get total cart item and total amount */

	public function getTotalcartItem($customer_id){
		$this->db->select('sum(quantity) as totalQty, sum(total_amt) as totalamount');
		$this->db->from('customer_cart');
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get();
		return $query->result_array();
	}

	/*** FETCH CART ITEM DETAIL SET IN COOKIES*/
	public function getCookieItemDetail($product_id){
		$this->db->select('p.*,ca.return_or_replace,ca.return_replace_validity,v.name as vendor_name');
		$this->db->from('product_details p');
		$this->db->join('category ca','ca.category_id = p.category_id');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->where('p.product_id',$product_id);
		$query = $this->db->get()->result_array();
		return $query;
	}
	/*** generate New Order number */
	public function getLatestOrderNumber(){
		$this->db->select('max(order_id) as orderid');
		$this->db->from('orders');
		$result = $this->db->get()->result_array();
		if(!empty($result)){
			$ord_ID = $result[0]['orderid'];
			$ord_no = $ord_ID + 1;
		}else{
			$ord_no = 1;
		}
		return $ord_no;
		
	}

	/** item order detail from order id*/
	public function getCustomerOrderList($order_id){
		if(!empty($this->session->userdata[ADMIN_SESSION]))
		{
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];
			if(strtolower($user_type) != "admin"){
				$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
				$this->db->where('od.vendor_id',$user_id);
			}
		}
		$this->db->select('od.*,p.cover_img,o.shipping_address,o.order_number,o.order_date,v.name as vendor_name');
		$this->db->from('order_details od');
		$this->db->join('orders o','o.order_id=od.order_id','left');
		$this->db->join('product_details p','p.product_id=od.product_id');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->where('od.order_id',$order_id);
		$this->db->order_by('o.order_id','desc');
		$result = $this->db->get()->result_array();
		return $result;
	}
	/** item order detail from order id */
	public function getCustomerOrderProductDetails($order_id,$product_id){
		
		$this->db->select('od.order_id,od.product_id,p.variant_code,od.deliver_date,od.product_name,od.quantity,od.mrp_price,od.net_price,od.total_amt,od.discount_amt,od.elements_attributes,od.return_replace_validity,p.cover_img,o.shipping_address,o.delivery_address,o.order_number,o.order_date,v.name as vendor_name,b.brand_name,o.customer_id');
		$this->db->from('order_details od');
		$this->db->join('orders o','o.order_id=od.order_id','left');
		$this->db->join('product_details p','p.product_id=od.product_id');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('od.order_id',$order_id);
		$this->db->where('od.product_id',$product_id);		
		$result = $this->db->get()->result_array();
		return $result;
	}

	/*** GET PRODUCT REVIEWS RATING BY CUSTOMER */
	public function getCustomerProductReview($customer_id){
		$this->db->select('product_id,star_rate');
		$this->db->from('product_review');
		$this->db->where('customer_id',$customer_id);
		$result = $this->db->get()->result_array();
		return $result;
	}
	
	/** CUSTOMER ORDER LIST by year*/
	public function getAllOrderList($customer_id,$filetr_year = null){
		if($filetr_year == null){
			$filetr_year = date('Y');
		}
		$this->db->select('o.*');
		$this->db->from('orders o');
		$this->db->where('o.customer_id',$customer_id);
		$this->db->where("Year(o.order_date)", $filetr_year);
		$this->db->order_by('o.order_date','desc');
		$result = $this->db->get()->result_array();
		return $result;
	}

	
	//get Product filter data
	public function getFilterData($filter,$rowperpage, $rowno){
		$child = array();
		if(isset($filter['category']) && strlen(trim($filter['category']))>0)
		{
   			$cat_cond['category_id'] 	= $filter['category'];		
			$catresult					= $this->where('category',$cat_cond);
			$parent_cat 				= $catresult[0]['parent_category_id'];
			if($catresult[0]['child_category'] != null || $catresult[0]['child_category'] != "")
			$child 						= explode(',',$catresult[0]['child_category']);
		}

		$sort_by = "ORDER BY net_price ASC";
		/***** 	QUERY : #1 */
		
		$this->db->select('DISTINCT(p.product_id) as product_id, p.product_name as product_name, p.short_code, p.short_description, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,pe.product_id');
		$this->db->from('product_details p');
		$this->db->join('product_elements_attributes pe','pe.product_id=p.product_id');
		//for color
   		if(isset($filter['color']) && strlen(trim($filter['color']))>0)
		{
			
			$this->db->where("pe.attributes_id", $filter['color']);
   		}

		//For category
		if(isset($filter['category']) && strlen(trim($filter['category']))>0)
		{
			if(!empty($child) && $parent_cat > 0){
				$this->db->where_in("p.child_category", $child);
			}else{
				$this->db->group_start();
				$this->db->where("p.category_id", $filter['category']);
				$this->db->or_where("p.child_category", $filter['category']);
				$this->db->group_end();
			}
			
   		}
   		
   		//for brand
   		if(isset($filter['brand']) && strlen(trim($filter['brand']))>0)
		{
			$this->db->where("p.brand_id", $filter['brand']);
   		}
   		
   		//for start price
   		if(isset($filter['start_price']) && strlen(trim($filter['start_price']))>0)
		{
			$start_price = $filter['start_price'];
   			$this->db->where("p.net_price >= $start_price");
   		}
   		
   		//for end price
		if(isset($filter['end_price']) && strlen(trim($filter['end_price']))>0)
		{
			$end_price = $filter['end_price'];
   			$this->db->where("p.net_price <= $end_price");
   		}

   		//FILTER SORY BY
		if(isset($filter['sortby']) && strlen(trim($filter['sortby']))>0)
		{
			$filter_sort = $filter['sortby'];
			if($filter_sort == "featured"){
				$this->db->where("p.is_feature_product", 1);
			}
			else if($filter_sort == "bestselling"){
				$this->db->where("p.is_popular_product", 1);
			}
			else if($filter_sort == "atoz"){
				$sort_by = "ORDER BY product_name ASC";
			}
			else if($filter_sort == "ztoa"){
				$sort_by = "ORDER BY product_name DESC";
			}
			else if($filter_sort == "lowtohigh"){
				$sort_by = "ORDER BY net_price ASC";
			}
			else if($filter_sort == "hightolow"){
				$sort_by = "ORDER BY net_price DESC";
			}
   		}


		$this->db->where('p.is_active', 1);
   		$this->db->where('p.variant_code IS NOT NULL'); 
		$this->db->group_by('p.variant_code'); 
		
		
		$query1	= $this->db->get_compiled_select();

		/***** 	QUERY : #2 */

		$this->db->select('DISTINCT(p1.product_id) as product_id, p1.product_name as product_name, p1.short_code, p1.short_description, p1.net_price as net_price, p1.cover_img,p1.mrp_price,p1.discount,p1.variant_code,pe1.product_id');
		$this->db->from('product_details p1');
		$this->db->join('product_elements_attributes pe1','pe1.product_id=p1.product_id');
		
		//for color
		if(isset($filter['color']) && strlen(trim($filter['color']))>0)
		{
			
			$this->db->where("pe1.attributes_id", $filter['color']);
   		}
		
		//For category
		if(isset($filter['category']) && strlen(trim($filter['category']))>0)
		{
   			
			if(!empty($child) && $parent_cat > 0){
				$this->db->where_in("p1.child_category", $child);
			}else{
				$this->db->group_start();
				$this->db->where("p1.category_id", $filter['category']);
				$this->db->or_where("p1.child_category", $filter['category']);
				$this->db->group_end();
			}
   		}
   		
   		//for brand
   		if(isset($filter['brand']) && strlen(trim($filter['brand']))>0)
		{
			$this->db->where("p1.brand_id", $filter['brand']);
   		}
   		
   		//for start price
   		if(isset($filter['start_price']) && strlen(trim($filter['start_price']))>0)
		{
			$start_price = $filter['start_price'];
   			$this->db->where("p1.net_price >= $start_price");
   		}
   		
   		//for end price
		if(isset($filter['end_price']) && strlen(trim($filter['end_price']))>0)
		{
			$end_price = $filter['end_price'];
   			$this->db->where("p1.net_price <= $end_price");
   		}

		//FILTER SORY BY
		if(isset($filter['sortby']) && strlen(trim($filter['sortby']))>0)
		{
			$filter_sort = $filter['sortby'];
			if($filter_sort == "featured"){
				$this->db->where("p1.is_feature_product", 1);
			}
			else if($filter_sort == "bestselling"){
				$this->db->where("p1.is_popular_product", 1);
			}
			else if($filter_sort == "atoz"){
				$sort_by = "ORDER BY product_name ASC";
			}
			else if($filter_sort == "ztoa"){
				$sort_by = "ORDER BY product_name DESC";
			}
			else if($filter_sort == "lowtohigh"){
				$sort_by = "ORDER BY net_price ASC";
			}
			else if($filter_sort == "hightolow"){
				$sort_by = "ORDER BY net_price DESC";
			}
   		}
   		$this->db->where('p1.is_active', 1);
		$this->db->where('p1.variant_code IS NULL'); 
		$query2=$this->db->get_compiled_select();

		
		if(strlen(trim($rowperpage))>0 && strlen(trim($rowno))>0)
		{
			$query = $this->db->query($query1 . ' UNION ALL ' . $query2 .' '. $sort_by.'  LIMIT ' . $rowno . ',' . $rowperpage);
   		}else{
			$query = $this->db->query($query1 . ' UNION ALL ' . $query2 .' '. $sort_by );
		}		  
		
		$result = $query->result_array();
		// echo $this->db->last_query();die;	
		
		return $result;
	}

	public function getCategoryhierarchy($category_id){
		//$data 						= array();
		$cat_cond['category_id'] 	= $category_id;		
		$result						= $this->where('category',$cat_cond);	
		$hierarchy					= $result[0]['hierarchy'];
		if(!empty($hierarchy && $hierarchy != null && $hierarchy != "")){
			$child_hierarchy			= explode(',',$hierarchy);
			$i = 0;
			foreach($child_hierarchy as $row){
				$cat['category_id'] 	= $row;
				$res 					= $this->Master_m->where('category',$cat);
				$cat_name[$i]['name'] 				= $res[0]['category_name'];	
				$cat_name[$i]['shortcode'] 			= $res[0]['short_code'];	
				$i++;		
			}
			$data = $cat_name;
		}
		return $data;
	}

	/*** GET CHILD CATEGORY FROM PARENT CATEGORY : clothing*/
	public function getChildCategory($short_code = null,$category_id = null){
		$data = array();
		if($short_code != null || $short_code != ""){
			$cat_cond['short_code'] 	= $short_code;		
		}

		if($category_id != null || $category_id != ""){
			$cat_cond['category_id'] 	= $category_id;				
		}
		
		
		$result						= $this->where('category',$cat_cond);	
		$child_category				= $result[0]['child_category'];
		if(!empty($child_category && $child_category != null && $child_category != "")){
			$child					= explode(',',$child_category);
			$i = 0;
			$cat_name = array();
			foreach($child as $row){
				$cat['category_id'] 	= $row;
				$res 					= $this->Master_m->where('category',$cat);
				$cat_name[$i]['category_name'] 		= $res[0]['category_name'];	
				$cat_name[$i]['short_code']			= $res[0]['short_code'];	
				$cat_name[$i]['category_id']		= $res[0]['category_id'];	
				$cat_name[$i]['category_image']		= $res[0]['category_image'];	
				$i++;		
			}
			$data = $cat_name;
		}
		return $data;
	}

	/*** FETCH PRODUCT VARIANT DETAIL BY PRODUCT ID */
	public function getProductElemetsAttributes($product_id){

		$this->db->select('pea.element_id,pea.attributes_id,pe.element_name,pe.element_id');
		$this->db->from('product_elements_attributes pea');
		$this->db->join('product_elements pe','pe.element_id = pea.element_id');
		$this->db->where('pea.product_id', $product_id);
		$query		= $this->db->get()->result_array();
		
		$elements = array();
		
		if(!empty($query)){
			
			foreach($query as $row){
				
				$element_name 				= $row['element_name'];
				$element_id 				= $row['element_id'];
				$attributes_id 				= explode(',', $row['attributes_id']);
				$attr_arr = array();
				
				if(!empty($attributes_id)){
					
					foreach($attributes_id as $attr){
						$whr['attributes_id'] 	= $attr;
						$attr_res 				= $this->where('attributes',$whr);
						$attr_name 				= $attr_res[0]['attributes_name'];
						$attr_code 				= $attr_res[0]['attribute_code']; 
						// $attr_arr[] 			= $attr_name;	
						
						$attr_arr[$attr_name]['element_id'] 		= $element_id;
						$attr_arr[$attr_name]['attr_id'] 			= $attr;				
						$attr_arr[$attr_name]['attr_code'] 			= $attr_code;				
						$attr_arr[$attr_name]['p_id'][] 			= $product_id;
						$attr_arr[$attr_name]['enable'] 			= 'enable'; 
						$attr_arr[$attr_name]['is_selected'] 		= 'active';															
					}					
				}
				
				$elements[$element_id] 	= $attr_arr;//implode(',',$attr_arr);
			}
		}
		
		return $elements;
	}

	/**** GET ELEMENT ATTRIBUTE OF SINGLE PRODUCT IN JSON STRING FORMATE*/
	public function getElememtAttributeForSingleProduct($product_id){
		$this->db->select('pea.element_id,pea.attributes_id');
		$this->db->from('product_elements_attributes pea');
		$this->db->where('pea.product_id', $product_id);
		$query		= $this->db->get()->result_array();
		$eleattr 	= array();
		if(!empty($query)){
			foreach($query as $row){
				$element_id 			= $row['element_id'];
				$attributes_id 			= $row['attributes_id'];
				$eleattr[$element_id] 	= $attributes_id;
			}
		}
		return json_encode($eleattr,true);
	}
	
	public function getProductVariants($product_id){

		$this->db->select('pea.element_id,pea.attributes_id,pe.element_name,pe.element_id');
		$this->db->from('product_elements_attributes pea');
		$this->db->join('product_elements pe','pe.element_id = pea.element_id');
		$this->db->where('pea.product_id', $product_id);
		$query		= $this->db->get()->result_array();
		
		$elements = array();
		
		if(!empty($query)){
			
			foreach($query as $row){
				$element_id 				= $row['element_id'];
				$element_name 				= $row['element_name'];
				$attributes_id 				= explode(',', $row['attributes_id']);
				$attr_arr = array();
				
				if(!empty($attributes_id)){
					
					foreach($attributes_id as $attr){
						
						$whr['attributes_id'] 	= $attr;
						$attr_res 				= $this->where('attributes',$whr);
						$attr_name = $attr_res[0]['attributes_name'];
						$attr_arr[$attr] = $attr_name;	
					}
				}
				
				$elements['product_id'] 	= $product_id;
				//$elements[$element_id]	= $attr_arr;//implode(',',$attr_arr);
				$elements[$element_id][$element_name] 	= implode(',',$attr_arr);				
			}
		}		
		return $elements;
	}
	
	/*** UI : ADD TO CART ITEM*/
	public function addTocart($data){

		$product_id 			= $data['product_id'];
		$quantity   			= $data['quantity'];
		$customer_id 			= $data['customer_id'];
		$elements_attributes 	= $data['elements_attributes'];
		if($quantity == NULL || $quantity == "")
		{
			$quantity = 1;
		}
					
		$item['customer_id'] 		= $customer_id;
		$item['product_id'] 		= $product_id;
		$res 						= $this->where('customer_cart',$item);
		$result_array 				= '';	
		if(!empty($elements_attributes)){
			if(!empty($res)){
				$res_ele = $res[0]['elements_attributes'];

				$item_1 = json_decode($res_ele, TRUE);
				$item_2 = json_decode($elements_attributes, TRUE);
				$result_array = ($item_1 === $item_2);
			}
		}
		// if(!empty($res) && !empty($result_array)){ // temporay comment for App  : elements_attributes no set by App side
		if(!empty($res)){
			$old_qty   			= $res[0]['quantity'];
			$final_qty 			= $quantity + $old_qty;
			$id['cart_id'] 		= $res[0]['cart_id'];
			$update = array(
				'quantity'=>$final_qty,
				'elements_attributes'=>$elements_attributes,
			);

			$update_query = update('customer_cart',$update,$id);	
			logThis($update_query->query, date('Y-m-d'),'Customer Cart');
			if($update_query->status == "success")
			{	
				$response['success'] = "suceess";
				$response['message'] = "You have this item in your bag and we have increased the quantity by 1";
				return $response;
			}else{
				return false;
			}					
		}		
		else {
			
			$insertdata['customer_id'] 				= $customer_id;
			$insertdata['product_id'] 				= $product_id;
			$insertdata['quantity'] 				= $quantity;			
			$insertdata['elements_attributes'] 		= $elements_attributes;			

			$insert_result = insert('customer_cart',$insertdata,'');
			logThis($insert_result->query, date('Y-m-d'),'Customer Cart');
			
			if($insert_result->status = 'success'){
				$response['success'] = "suceess";
				$response['message'] = "item added to bag";
				return $response;
			}else{
				return false;
			}			
			
		}
	}
	/*** UI : ADD TO WISHLIST ITEM*/
	public function addToWishlist($data){

		$product_id 			= $data['product_id'];		
		$customer_id 			= $data['customer_id'];

		$product_arr				= array();
		if(!empty($product_id)){
			$product_arr = explode(',',$product_id);
		}

		// $this->db->select('*');
		// $this->db->from('whish_list');
		// $this->db->where_in('product_id',$product_arr);
		// $this->db->where('customer_id',$customer_id);				
		// $result = $this->db->get()->result_array();	
		$json 					= array();		
		// if(empty($result)){
			if(!empty($product_arr)){
				foreach($product_arr as $row){
					$insertdata['customer_id'] 		= $customer_id;
					$insertdata['product_id'] 		= $row;
					
					$this->db->select('*');
					$this->db->from('whish_list');
					$this->db->where('product_id',$row);
					$this->db->where('customer_id',$customer_id);	
					$result = $this->db->get()->result_array();	
					if(empty($result)){
						$insert_result = insert('whish_list',$insertdata,'');
						logThis($insert_result->query, date('Y-m-d'),'Customer WhishList');	
					}			
				}
				
			}
			$totalWishList   			= $this->Master_m->getTotalWhishList($customer_id);
			$json['success'] 			= 'success';
			$json['message'] 			= "item added to wishlist";
			$json['totalWishList'] 		= $totalWishList;
		// }
		return $json;
	}

	/*** UI : MOVE TO WISHLIST FORM CART ITEM*/
	public function moveToWishlist($data){

		$product_id 			= $data['product_id'];		
		$customer_id 			= $data['customer_id'];

		$product_arr				= array();
		if(!empty($product_id)){
			$product_arr = explode(',',$product_id);
		}

		$json 					= array();		
		// if(empty($result)){
			if(!empty($product_arr)){
				foreach($product_arr as $row){
					$insertdata['customer_id'] 		= $customer_id;
					$insertdata['product_id'] 		= $row;
					
					$this->db->select('*');
					$this->db->from('whish_list');
					$this->db->where('product_id',$row);
					$this->db->where('customer_id',$customer_id);	
					$result = $this->db->get()->result_array();	
					
					if(empty($result)){
						$insert_result = insert('whish_list',$insertdata,'');
						logThis($insert_result->query, date('Y-m-d'),'Customer WhishList');					
					}	

					$whr['product_id'] = $row;
					$whr['customer_id'] = $customer_id;
					$cart_res = $this->where('customer_cart',$whr);	
					if(!empty($cart_res)){
						$del_result							= delete('customer_cart',$whr);
						logThis($del_result->query, date('Y-m-d'),'Customer Cart');
					}
				}
				$json['success'] 			= 'success';
				$json['message'] 			= "item moved to wishlist";
			}			
		// }
		return $json;
	}

	/*** get total cart item  */
	public function getTotalCountCartProdut($customer_id){
		$this->db->select('COUNT(cart_id) as totalCart');
		$this->db->from('customer_cart');
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get()->result_array();
		return $query[0]['totalCart'];
	}
	
	/*** get total  whishlist item */
	public function getTotalWhishList($customer_id){
		$this->db->select('COUNT(whish_list_id) as totalwhishlist');
		$this->db->from('whish_list');
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get()->result_array();
		return $query[0]['totalwhishlist'];
	}

	/**** get and move selected cart item from cart */
	public function getSelectedCartItemDetail($customer_id,$product_arr = array()){
		$this->db->select('c.*,p.*,ca.return_or_replace,ca.return_replace_validity,v.name as vendor_name');
		$this->db->from('customer_cart c');
		$this->db->join('product_details p','p.product_id = c.product_id');
		$this->db->join('category ca','ca.category_id = p.category_id');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->where('c.customer_id',$customer_id);
		if(!empty($product_arr)){
			$this->db->where_in('c.product_id',$product_arr);
		}		
		$query = $this->db->get()->result_array();
		return $query;
	}

	/***get whishlist product detail list */
	public function getWishListItem($customer_id,$rowperpage, $rowno,$cat_short_code=null){
		if($cat_short_code != null || $cat_short_code != ""){
			$cat_cond['short_code'] 	= $cat_short_code;
			$result1					= $this->where('category',$cat_cond);
			$parent_cat_id				= $result1[0]['category_id'];
			$this->db->where('p.category_id',$parent_cat_id);				
		}	

		$this->db->select('w.*,p.product_name,p.short_code,p.net_price,p.mrp_price,p.discount,p.cover_img,p.variant_code,b.brand_name');
		$this->db->from('whish_list w');
		$this->db->join('product_details p','p.product_id = w.product_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('w.customer_id',$customer_id);
		if(strlen(trim($rowperpage))>0 && strlen(trim($rowno))>0)
		{
			$this->db->limit($rowperpage,$rowno);
		}
		$query = $this->db->get()->result_array();
		
		return $query;
	}

	/*** FETCH CART ITEM DETAIL */
	public function getCustomerCartItems($customer_id){
		$this->db->select('c.*,p.*,ca.return_or_replace,ca.return_replace_validity,v.name as vendor_name');
		$this->db->from('customer_cart c');
		$this->db->join('product_details p','p.product_id = c.product_id');
		$this->db->join('category ca','ca.category_id = p.category_id');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	// /*** FETCH CART ITEM DETAIL SET IN COOKIES*/
	// public function getCookieItemDetail($product_id){
	// 	$this->db->select('p.*,ca.return_or_replace,ca.return_replace_validity,v.name as vendor_name');
	// 	$this->db->from('product_details p');
	// 	$this->db->join('category ca','ca.category_id = p.category_id');
	// 	$this->db->join('vendor v','v.vendor_id = p.vendor_id');
	// 	$this->db->where('p.product_id',$product_id);
	// 	$query = $this->db->get()->result_array();
	// 	return $query;
	// }

	/*** UI : PLACE ORDER */
	public function addOrder($customer_id){
		$cart_data			= $this->getCustomerCartItems($customer_id);
		$payment_type 		= $this->input->post('payment_type');
		
		if(!empty($cart_data)){

			$checkitemStock      = $this->Master_m->checkCartItemStock($customer_id); // 0 :instock , <0 :outofstock
			$whr['customer_id'] 	= $customer_id;
			$whr['set_default'] 	= 1;
			$address_res 			= $this->Master_m->where('customer_address',$whr);
			$shipping_address       = "";
			if(!empty($address_res)){
				$name 							= $address_res[0]['first_name'].' '.$address_res[0]['last_name'];
				$mobile 						= $address_res[0]['mobile'];
				$address 						= $address_res[0]['address'].' ,<br>'.$address_res[0]['city'].' , '.$address_res[0]['state'].' ,<br>'.$address_res[0]['country'].' - '.$address_res[0]['pincode'];
				$shipping_address 				= '<strong>'.ucwords($name).'</strong><br>'.$address.'<br>Phone no : '.$mobile; 
				$address_arr       				= array();
				$address_arr['name'] 			= $name;
				$address_arr['mobile'] 			= $mobile;
				$address_arr['address'] 		= $address;
				$address_arr['city'] 			= $address_res[0]['city'];
				$address_arr['state'] 			= $address_res[0]['state'];
				$address_arr['country'] 		= $address_res[0]['country'];
				$address_arr['pincode'] 		= $address_res[0]['pincode'];
				$delivery_address 				= json_encode($address_arr,true);
				
			}
			
			
			$total_item  		= count($cart_data);
			$total_amt 			= 0;
			$total_gst 			= 0;
			$total_discount 	= 0;
			$total_quantity		= 0;
			$total_mrp			= 0;
			foreach($cart_data as $item){
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
			$current_fy 		= getFY();
			
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
					foreach($cart_data as $row){
						$ele_arr = array();
						$ele_attr 				= "";
						$quantity				= $row['quantity'];
						$net_price				= $row['net_price'];
						$elements_attributes	= json_decode($row['elements_attributes'],true);
						
						foreach($elements_attributes as $key=>$val){
							$ele_name 				= getElementNameByID($key);
							$value 					= getAttributeNameByID($val);
							$ele_arr[$ele_name] 	= $value;
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
						$update_stock = $this->updateProductStock($row['product_id'],$quantity);				
		
					}

					$payment['payment_mode']		= $payment_type;
					$payment['order_id'] 			= $order_id;
					$payment['customer_id'] 		= $customer_id;
					$payment['total_pay_amount']	= $total_amt;
					$payment['payment_date']		= date('Y-m-d');
					$payment['pay_status']			= 1;

					$insert_payment = insert('payment_details',$payment,'');				
					logThis($insert_payment->query, date('Y-m-d'),'Payment Detail');

					$condition['customer_id'] 		= $customer_id;
					$result 						= delete('customer_cart',$condition);

					//SEND ORDER CONFRIMATION EMAIL
					$email 							= $this->Master_m->sendConfirmationEmail($order_id);
					return $order_id;
				}
				else{
					return false;
				}
			}else{
				return false;
			}			
		}
	}

	/*** CHECK CART ITEMS IN STOCK OR NOT 
	 * return : 0 => instock
	 * return : < 0 => out of stock	 * 
	 * 
	*/
	public function checkCartItemStock($customer_id){
		//$customer_id = $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
		$result = $this->getCustomerCartItems($customer_id);
		$err_count = 0;  // 0 : instock 
		if(!empty($result)){
			foreach($result as $row){
				$quantity			= intval($row['quantity']);
				$stock				= intval($row['stock']);
				if($quantity > $stock){
					$err_count++; // increment by 1 : out of stock
				}
			}
		}
		return $err_count;
	}

	/*** UPDATE PRODUCT STOCK */
	public function updateProductStock($product_id,$product_qty){
		
		$this->db->select('stock');
		$this->db->from('product_details');
		$this->db->where('product_id',$product_id);
		$query = $this->db->get()->result_array();
		//if(!empty($query)){
			$old_stock = $current_stock = intval($query[0]['stock']);
			if($old_stock != 0 && $old_stock > 0){
				$new_stock = $current_stock - $product_qty;
	
				$insertdata['product_id'] 		= $product_id;
				$insertdata['old_stock'] 		= $old_stock;
				//$insertdata['ordered_qty'] 		= $product_qty;
				$insertdata['stock_out'] 		= $product_qty;
				$insertdata['current_stock']	= $new_stock;
				$insertdata['status']			= 2;
		
				$insert_stock = insert('stock_details',$insertdata,'');				
				logThis($insert_stock->query, date('Y-m-d'),'Stock Detail');
		
				$whr['product_id']			= $product_id;
				$update['stock']			= $new_stock;
				$update_result 				= update('product_details',$update,$whr);
				logThis($update_result->query, date('Y-m-d'),'Product');
				return true;
			}			
		//}	
		//return false;
		return true;
	}

	/**** FETCH ALL DELIVERY STATUS */
	public function allDeliveryStatus(){
		$this->db->select('*');
		$this->db->from('delivery_status');
		$this->db->where('is_active',1);
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function getCustomerOrderpayment($order_id){
		$this->db->select('*');
		$this->db->from('payment_details');
		$this->db->where('order_id',$order_id);
		$query = $this->db->get()->result_array();
		return $query;
	}

	/*** UI : CREATE ORDERLIST HTML  */
	public function displayOrderHistory($data){
		if(!empty($data)){
			$html 	= '';
			$html	.= '<div class="lt-block-reviews">
							<div class="r--desktop r--tablet w__100">
								<div id="r--masonry-theme" class="r--show-part-preview">
									<div class="r--masonry-theme">
										<div class="r--grid row m-0">';
			foreach($data as $order){
				$order_id 		= $order['order_id'];
				$order_number 	= $order['order_number'];
				$total_amount 	= $order['total_amount'];
				$order_date 	= $order['order_date'];
				$delivery_date 	= $order['delivery_date'];

				$html	.='<div class="col-12 col-md-6 col-lg-4">
						<a href="'.base_url('order-detail?id=').$order_id.'">
							<div class="r--grid-item mb-5">
								<div class="r--author r--text-limit">
									<div class="r--avatar-default text-center text-white">O</div>
									<span class="r--author-review">ORDER # '.$order_number.'</span>
								</div>
								<div class="r--item-body">';
								if($delivery_date != "" && $delivery_date != null && !empty($delivery_date))
								{
									$html	.='<span class="r--total-view text-success">Delivered on Apr 15</span>';
								}
								$html	.='<p class="">Order Placed : '.date('d-M-Y',strtotime($order_date)).'</p>
									<p class="r--title-review r--body-item m-0">Total : <i
											class="fa fa-inr"></i> '.$total_amount.'</p>
								</div>
							</div>
						</a>
					</div>';  
			}                                  
			$html	.='</div>
						</div>
					</div>
				</div>
			</div>';
			return $html;
		}
	}
	
	/**** GENERATE INVOICE PDF AFTER ORDER OLACE*/
	public function generateInvoice($order_id,$product_id){
		// ORDER DATA
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('order_id',$order_id);
		$orderdata = $this->db->get()->result_array();
		
		$customer_id 	= $orderdata[0]['customer_id'];
		$order_number 	= $orderdata[0]['order_number'];
		$file_path 		= INVOICE_PDF_PATH.$customer_id.'/'.$order_number.'/';
		$file_name 		= $order_number.'-'.$product_id.'.pdf';

		// ORDER PRODUCT DETAIL
		$this->db->select('*');
		$this->db->from('order_details');
		$this->db->where('order_id',$order_id);
		$this->db->where('product_id',$product_id);
		$orderproductDetail = $this->db->get()->result_array();

		$data['orderdata'] 	= $orderdata;
		$data['productdata'] = $orderproductDetail;
		$html1  = $this->getInvoiceHtml($data);
		//$html = $this->output->get_output($html1);
		// $html1 = $this->load->view('UI/Invoice_v');
		// $html = $this->output->get_output($html1);
		
		createPdf($file_path,$file_name,$html1);
		return $file_path.$file_name;
	}

	public function getInvoiceHtml($data){
		$orderdata = $data['orderdata'] ;
		$productdata = $data['productdata'] ;
        $logo_path = UI_ASSETS.'images/mv-logo.png';
	    $logo_type = pathinfo($logo_path, PATHINFO_EXTENSION);
		$logo_data = file_get_contents($logo_path);
		$logo_base64 = 'data:image/' . $logo_type . ';base64,' . base64_encode($logo_data);
        $html = '';
		$html .='<!DOCTYPE html
				PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">

				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<title>
					'.$orderdata[0]['order_number'].'
					</title>
				</head>

				<body style="margin:0;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<img src="'.$logo_base64.'" width="150" />
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;" align="right">
								Tax Invoice/Bill of Supply Cash Memo <br>
								<span style="font-weight:300; font-size:13px;">
									(Original For Recipient)
								</span>
							</td>
						</tr>

						<tr>
							<td colspan="2">
								&nbsp;
							</td>
						</tr>
						<!--<tr>
								<td colspan="2">
									&nbsp;
								</td>
							</tr>-->
						<tr>
							<td width="49%">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td>
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td
														style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px;">
														Sold By:
													</td>
												</tr>
												<tr>
													<td
														style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px;">
														Appario Retail Private Ltd
													</td>
												</tr>
												<tr>
													<td
														style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px;">
														Building No. 5, BGR Warehousing Complex,
													</td>
												</tr>
												<tr>
													<td
														style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px;">
														Near Shiv Sagar Hotel, Village Vahuli, Bhiwandi, <br>Thane BHIWANDI,
														MAHARASHTRA, 421302
													</td>
												</tr>
												<tr>
													<td>
														&nbsp;
													</td>
												</tr>
												<!--<tr>
														<td>
															&nbsp;
														</td>
													</tr>-->
												<tr>
													<td
														style="font-family:Verdana, Geneva, sans-serif;font-weight:600; font-size:15px;">
														PAN No.:
														<span style="font-weight:300; font-size:11px;">
															AALCA0171E
														</span>
													</td>
												</tr>
												<tr>
													<td
														style="font-family:Verdana, Geneva, sans-serif;font-weight:600; font-size:15px;">
														GST Registration No.:
														<span style="font-weight:300; font-size:11px;">
															27AALCA0171E1ZZ
														</span>
													</td>
												</tr>
												<tr>
													<td>
														&nbsp;
													</td>
												</tr>                                
												<tr>
													<td
														style="font-family:Verdana, Geneva, sans-serif;font-weight:600; font-size:15px;">
														Order Number:
														<span style="font-weight:300; font-size:11px;">
															'.$orderdata[0]['order_number'].'
														</span>
													</td>
												</tr>
												<tr>
													<td
														style="font-family:Verdana, Geneva, sans-serif;font-weight:600; font-size:15px;">
														Order Date:
														<span style="font-weight:300; font-size:11px;">
															'.date('d-m-Y',strtotime($orderdata[0]['order_date'])).'
														</span>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
							<td width="51%" valign="top">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px;"
											align="right">
											Billing Address:
										</td>
									</tr>
									<tr>
										<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:12px;"
											align="right">
											'.$orderdata[0]['shipping_address'].'
										</td>
									</tr>                    
									<tr>
										<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
											align="right">
											&nbsp;
										</td>
									</tr>                    
									<tr>
										<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px;"
											align="right">
											Shipping Address:
										</td>
									</tr>
									<tr>
										<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:12px;"
											align="right">
											'.$orderdata[0]['shipping_address'].'
										</td>
									</tr>                    
									<tr>
										<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
											align="right">
											&nbsp;
										</td>
									</tr>
									<tr>
										<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
											align="right">
											Invoice Number:
											<span style="font-weight:300; font-size:11px;">
												DOB734-346593
											</span>
										</td>
									</tr>									
									<tr>
										<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
											align="right">
											Invoice Date:
											<span style="font-weight:300; font-size:11px;">
												'.date('d-m-Y',strtotime($orderdata[0]['order_date'])).'
											</span>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								&nbsp;
							</td>
						</tr>
						<tr>
							<td colspan="2">

							</td>
						</tr>       
					
					</table>

					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
						<tr>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="5%" height="32" align="center">
								Sr/No.
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="30%" height="32" align="center">
								Products
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="10%" align="center">
								Unit Price
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="10%" align="center">
								Net Amount
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="5%" align="center">
								Qty
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="10%" align="center">
								Discount
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="10%" align="center">
								Tax Rate
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="10%" align="center">
								Tax Amount
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								width="10%" align="center">
								Total Amount
							</td>
						</tr>';
						
							$i = 1;
							foreach($productdata as $row){
						$html .='<tr>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$i++.'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$row['product_name'].'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$row['mrp_price'].'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$row['net_price'].'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$row['quantity'].'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$row['discount_amt'].'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$row['gst'].'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$row['gst_amt'].'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;"
								align="center">
								'.$row['total_amt'].'
							</td>
						</tr>';
						} 
						$html .='<tr>
							<td colspan="7"
								style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;"
								height="20" align="center">
							</td>

							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								align="center">
								'.$orderdata[0]['gst_amount'].'
							</td>
							<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
								align="center">
								'.$orderdata[0]['total_amount'].'
							</td>
						</tr>
						<tr>
							<td colspan="9"
								style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:11px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;"
								height="20" align="left">
								Amount in Words:
								<span style="font-weight:300; font-size:11px;">
								'.convertToIndianCurrency($orderdata[0]['total_amount']).'
								</span>
							</td>
						</tr>
						<tr>
							<td colspan="9"
								style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333; padding-right: 15px;"
								height="32" align="right">
								<img src="'.$logo_base64.'" width="150" />
							</td>
						</tr>
						<tr>
							<td colspan="9"
								style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333; padding-right: 15px;"
								height="20" align="right">
								Authorised Signatory
							</td>
						</tr>
						</tbody>
						<tfoot>
						<tr>
							<td colspan="9">
								&nbsp;
							</td>
						</tr>
							<tr>
								<td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" colspan="9"
									align="center">
									(This is computer generated receipt and does not require physical signature.)
								</td>
							</tr>
						</tfoot>
					</table>
				</body>

				</html>';
				return $html;
	}

	/*** SEND ORDER CONFIRMATION MAIL TO CUNSTOMER*/
	public function sendConfirmationEmail($orderid){
		// ORDER DATA
		$this->db->select('o.*,c.customer_name');
		$this->db->from('orders o');
		$this->db->join('customer_detail c','c.customer_id=o.customer_id');
		$this->db->where('o.order_id',$orderid);
		$orderdata = $this->db->get()->result_array();

		// ORDER PRODUCT DETAIL
		$this->db->select('*');
		$this->db->from('order_details');
		$this->db->where('order_id',$orderid);		
		$orderproductDetail = $this->db->get()->result_array();
		
		$data['orderdata'] 	= $orderdata;
		$data['productdata'] = $orderproductDetail;
		$html1  = $this->load->view('UI/OrderConfirmEmail_v',$data);
		$html = $this->output->get_output($html1);

		$order_number       			= $orderdata[0]['order_number'];
		$mailData['subject'] 			= "Order Confirmation - Your Order with Multivendor.com [".$order_number."] has been successfully placed!
			";
		$mailData['attachFile'] 		= "";
		$mailData['fromID'] 			= 'devloperproactii@gmail.com';
		$mailData['toID'] 				= 'devloperproactii@gmail.com';
		
		$mailData['message'] = $html;
		
		$send = send_email($mailData);		
		return true;
	}

	/****  GET CTAEGORY WITH OFFER*/
	public function getAllCategoryByoffer($short_code=null){
		$parent_cat_id = "";
		if($short_code != null || $short_code != ""){
			$cat_cond['short_code'] 	= $short_code;
			$result1					= $this->where('category',$cat_cond);
			$parent_cat_id				= $result1[0]['category_id'];				
		}	
		
		$date1 = date('Y-m-d'); // today;
		$this->db->select('*');
		$this->db->from('offer');
		$this->db->where('is_active',1);
		$this->db->where('to_date >=',$date1);
		$result 			= $this->db->get()->result_array(); 
		$p_array 			= array();	
			
		if(!empty($result)){			
			$i = 0;
			foreach($result as $row){
				$cat_array 				= array();
				$title 					= $row['title'];
				$keywords 				= $row['keywords'];
				$offer_id 				= $row['offer_id'];
				$offer_on_element 		= $row['offer_on_element'];
				$offer_value 			= $row['offer_value'];
				$category_id 			= $row['category_id'];
				$symbol 				= $row['symbol'];
				$j = 0;
				if($category_id !="" || $category_id != null){ 
					$category_ids = explode(',',$category_id);
					
					foreach($category_ids as $row1){					
						$cat_cond1['category_id'] 	= $row1; 
						$cat_res 					= $this->where('category',$cat_cond1);	
						
						$cat_hierarchy 				= explode(',',$cat_res[0]['hierarchy']);
						$cat_parent					= $cat_hierarchy[0];
						$cat_img					= $cat_res[0]['category_image'];
						if($cat_parent == $parent_cat_id){
							$cat_array[$j]['name'] = getCateforyNameByID($row1);
							$cat_array[$j]['id'] 	= $row1;
							$cat_array[$j]['image'] = base_url().CATEGORY_IMAGE_PATH.$cat_img;
							$j++;
						}
						
					} 					
				}
				if(!empty($cat_array)){				
					$p_array[$i]['offer_id'] 			= $offer_id;
					$p_array[$i]['keywords'] 			= ucwords($keywords);
					$p_array[$i]['offer_value'] 		= $offer_value;
					$p_array[$i]['offer_element'] 		= $offer_on_element;
					$p_array[$i]['symbol'] 				= $symbol;
					$p_array[$i]['category_list'] 		= $cat_array;
					$i++;	
				}		
			}
		}
		
		return $p_array;
	}

	/***** GET OFFER PRODUCTLIST BY CATEGORY */
	public function getProductsByOffer($offer_id,$category_id){
		$this->db->select('keywords,offer_on_element,offer_value');
		$this->db->from('offer');
		$this->db->where('offer_id',$offer_id);
		$offer_res = $this->db->get()->result_array();
		$result = array();
		if(!empty($offer_res)){
			$keywords 				= $offer_res[0]['keywords'];
			$offer_on_element 		= $offer_res[0]['offer_on_element'];
			$offer_value 			= $offer_res[0]['offer_value'];

			if(strtolower($keywords) == "under"){
				$this->db->where("p.net_price <= $offer_value");
			}
			else if(strtolower($keywords) == "upto"){
				if(strtolower($offer_on_element) == "discount"){
					$this->db->where("p.discount <= $offer_value");
				}				
			}
			else if(strtolower($keywords) == "flat"){
				if(strtolower($offer_on_element) == "discount"){
					$this->db->where('p.discount',$offer_value);
				}else if(strtolower($offer_on_element) == "price"){
					$this->db->where('p.discount_amt',$offer_value);
				}
			}
			else if(strtolower($keywords) == "from"){
				if(strtolower($offer_on_element) == "discount"){
					$this->db->where('p.discount >=',$offer_value);
				}else if(strtolower($offer_on_element) == "price"){
					$this->db->where('p.net_price >=',$offer_value);
				}
			}
			else if(strtolower($keywords) == "min"){

			}
			else if(strtolower($keywords) == "starting at"){

			}
			$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
			$this->db->from('product_details p');	
			$this->db->join('brand b','b.brand_id = p.brand_id');	
			$this->db->where("p.child_category", $category_id);		
			$this->db->order_by('p.net_price','asc');		
			$this->db->group_by('p.variant_code');
			$result = $this->db->get()->result_array();		
		}
		return $result;
	}
	

	/*** ORDERED PRODUCT DETAIL FROM ORDERID , PRODUCT ID */
	public function getOrderedProductDetail($order_id,$productid){
		$this->db->select('od.product_name,od.total_amt,o.shipping_address,o.order_number');
		$this->db->from('order_details od');
		$this->db->join('orders o','o.order_id = od.order_id');
		$this->db->where('od.order_id',$order_id);
		$this->db->where('od.product_id',$productid);
		$result = $this->db->get()->result_array();
		return $result;
	}

	/**** GET ALL PRODUCT COLOR FOR FILTER */
	public function allProductFilterColor($category_id = null){
		$product_arr = array();
		if($category_id != "" || $category_id != null){
			$this->db->select('product_id');
			$this->db->from('product_details');
			$this->db->where("is_active",1);
			$this->db->group_start();
			$this->db->where("category_id", $category_id);
   			$this->db->or_where("child_category", $category_id);
			$this->db->group_end();
			$product_res  = $this->db->get()->result_array();
			if(!empty($product_res)){				
				foreach($product_res as $key=>$val){
					$product_arr[] = $val['product_id'];
				}
			}
			
		}

		$this->db->select('element_id');
		$this->db->from('product_elements');
		$this->db->like('element_name',"color");
		$result = $this->db->get()->row();
		$color_arr 		= array();
		$color_arr1 		= array();
		if(!empty($result)){
			$color_id = $result->element_id;

			$this->db->select('attributes_id,product_id');
			$this->db->from('product_elements_attributes');
			$this->db->where('element_id',$color_id);
			$color_res 		= $this->db->get()->result_array();
			
			$i = 0;
			if(!empty($color_res)){
				foreach($color_res as $row){
					$attributes_id 				= $row['attributes_id'];					
					$product_id 				= $row['product_id'];
					if(!empty($product_arr)){
						if (in_array($product_id, $product_arr)){
							$whr['attributes_id'] 	= $attributes_id;
							$attr_res 				= $this->Master_m->where('attributes',$whr); 
							//$color_name 				= getAttributeNameByID($attributes_id);;
							$color_name 				= $attr_res[0]['attributes_name'];
							$color_code 				= $attr_res[0]['attribute_code'];
							$color_arr[$attributes_id]['name'] 	= $color_name;
							$color_arr[$attributes_id]['code'] 	= $color_code;
						}
					}else{
						$whr['attributes_id'] 	= $attributes_id;
						$attr_res 				= $this->Master_m->where('attributes',$whr); 
						// $color_name 				= getAttributeNameByID($attributes_id);;
						$color_name 				= $attr_res[0]['attributes_name'];
						$color_code 				= $attr_res[0]['attribute_code'];
						$color_arr[$attributes_id]['name'] 	= $color_name;
						$color_arr[$attributes_id]['code'] 	= $color_code;
					}					
														
				}
			}
		}
		return $color_arr;
	}

	/*** SAVE REQUEST  : RETURN, REPLACE */
	public function saveReturn(){
		$customer_id 		= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
		$txt_reason 		= $this->input->post('txt_reason');
		$txtcoment 			= $this->input->post('txtcoment');
		$txt_ifsc 			= $this->input->post('txt_ifsc');
		$txt_acc_no 		= $this->input->post('txt_acc_no');
		$txt_account_name 	= $this->input->post('txt_account_name');
		$txt_phone_no 		= $this->input->post('txt_phone_no');
		$product_id 		= $this->input->post('txt_product_id');
		$order_id 			= $this->input->post('txt_order_id');
		$request_type 		= $this->input->post('request_type');

		$cond['order_id'] 		= $order_id;
		$cond['product_id'] 	= $product_id;
		$cond['customer_id'] 	= $customer_id;
		$cond['is_completed'] 	= 0;
		$res1 					= $this->where('return_request',$cond);
		if(empty($res1)){

			$whr['order_id'] 		= $order_id;
			$res 					= $this->where('orders',$whr);
			$order_no 				= $res[0]['order_number'];
			$order_date 			= $res[0]['order_date'];
			$shipping_address 		= $res[0]['shipping_address'];
			$total_quantity 		= $res[0]['total_quantity'];

			$bank_dtail = array();
			$bank_dtail['ifsc_code'] 	= $txt_ifsc;
			$bank_dtail['account_no'] 	= $txt_acc_no;
			$bank_dtail['account_name'] = $txt_account_name;
			$bank_dtail['phone_no'] 	= $txt_phone_no;

			$insertdata['request_type'] 		= $request_type;
			$insertdata['customer_id'] 			= $customer_id;
			$insertdata['order_id']				= $order_id;
			$insertdata['order_no']				= $order_no;
			$insertdata['product_id']			= $product_id;
			$insertdata['order_date']			= $order_date;
			$insertdata['return_request_date']	= date('Y-m-d');
			$insertdata['return_reason']		= $txt_reason;
			$insertdata['status']				= 'Return Request Sent';
			$insertdata['comments']				= $txtcoment;
			$insertdata['pickup_address']		= $shipping_address;
			$insertdata['bank_detail']			= json_encode($bank_dtail);

			$insert_request 				= insert('return_request',$insertdata,'');	
			logThis($insert_request->query, date('Y-m-d'),'Request Detail');
			
			if($insert_request->status = 'success') {

				$retun_item['product_id'] 	= $product_id;
				$retun_item['quantity'] 	= $total_quantity;
				$retun_item['date']			= date('Y-m-d');

				$return_request 			= insert('return_list',$retun_item,'');	
				logThis($return_request->query, date('Y-m-d'),'Return Item List');
				return true;
			}else{
				return false;
			}
		}
		else{
			return false;
		}
	}
	/*** SAVE REQUEST  :  REPLACE */
	public function saveReplace(){
		$customer_id 		= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
		$txt_reason 		= $this->input->post('txt_reason');
		$txtcoment 			= $this->input->post('txtcoment');
		$product_id 		= $this->input->post('txt_product_id');
		$order_id 			= $this->input->post('txt_order_id');
		$request_type 		= $this->input->post('request_type');

		$cond['order_id'] 		= $order_id;
		$cond['product_id'] 	= $product_id;
		$cond['customer_id'] 	= $customer_id;
		$cond['is_completed'] 	= 0;
		$res1 					= $this->where('return_request',$cond);
		if(empty($res1)){

			$whr['order_id'] 		= $order_id;
			$res 					= $this->where('orders',$whr);
			$order_no 				= $res[0]['order_number'];
			$order_date 			= $res[0]['order_date'];
			$shipping_address 		= $res[0]['shipping_address'];

			$insertdata['request_type'] 		= $request_type;
			$insertdata['customer_id'] 			= $customer_id;
			$insertdata['order_id']				= $order_id;
			$insertdata['order_no']				= $order_no;
			$insertdata['product_id']			= $product_id;
			$insertdata['order_date']			= $order_date;
			$insertdata['return_request_date']	= date('Y-m-d');
			$insertdata['return_reason']		= $txt_reason;
			$insertdata['status']				= 'Replace Request Sent';
			$insertdata['comments']				= $txtcoment;
			$insertdata['pickup_address']		= $shipping_address;

			$insert_request 				= insert('return_request',$insertdata,'');	
			logThis($insert_request->query, date('Y-m-d'),'Request Detail');
			
			if($insert_request->status = 'success') {
				return true;
			}else{
				return false;
			}
		}
		else{
			return false;
		}
	}

	/****** GET REQUEST DETAIL */
	public function getRequestData($request_id){
		$this->db->select('r.*,c.customer_name,c.mobile,c.email');
		$this->db->from('return_request r');
		$this->db->join('customer_detail c','c.customer_id = r.customer_id');
		$this->db->where('r.return_request_id',$request_id);		
		$query = $this->db->get()->result_array();
		return $query;
	}

	/**** get vendor name by id */
	public function getVendorName($vendor_id){
		$this->db->select('name');
		$this->db->from('vendor');
		$this->db->where('vendor_id',$vendor_id);
		$query = $this->db->get()->row_array();
		return  $query['name'];
	}

	/**** ADD TO RECENT SEARCH */
	public function addToRecentView($customer_id,$product_id){
		$whr['customer_id'] = $customer_id;
		$total_views 		= count($this->where('recent_view',$whr));

		if($total_views < RECENT_VIEW){
			$whr['product_id'] 	= $product_id;
			$check_produt = $this->Where('recent_view',$whr);
			
			if(empty($check_produt)){
				
				$insertdata['customer_id'] 		= $customer_id;
				$insertdata['product_id'] 		= $product_id;
				$insert_records 				= insert('recent_view',$insertdata,'');	
				logThis($insert_records->query, date('Y-m-d'),'Recent View Products');
			}
		}
		else{
			
			$this->db->where('customer_id',$customer_id);
			$this->db->order_by('recent_view_id','asc');
			$this->db->limit(1);
			$this->db->delete('recent_view');

			$whr['product_id'] 	= $product_id;
			$check_produt = $this->Where('recent_view',$whr);
			if(empty($check_produt)){
				
				$insertdata['customer_id'] 		= $customer_id;
				$insertdata['product_id'] 		= $product_id;
				$insert_records 				= insert('recent_view',$insertdata,'');	
				logThis($insert_records->query, date('Y-m-d'),'Recent View Products');
			}
		}

	}

	/***** FETCH ALL RECENTLY VIEW PRODUCT */
	public function getRecentViewProduct($customer_id){
		$this->db->select('r.product_id,p.variant_code,p.product_name,p.short_code,p.product_id,p.mrp_price,p.net_price,p.cover_img');
		$this->db->from('recent_view r');
		$this->db->join('product_details p','p.product_id = r.product_id');
		$this->db->where('r.customer_id',$customer_id);
		$query =  $this->db->get()->result_array();
		return $query;
	}


	/********************************   DASHBOARD FUNCTION  **************************************************** */

	/*** TOTAL PRODUCTS COUNT */
	public function totalProductsCount(){
		$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
		if(strtolower($user_type) != "admin"){
			$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
			$this->db->where('vendor_id',$user_id);
		}
		$this->db->select('count(product_id) as totalproduct');
		$this->db->from('product_details');
		$query = $this->db->get()->row();
		return $query->totalproduct;
	}

	/*** TOTAL VENDOR COUNT */
	public function totalVendorCount(){
		$this->db->select('count(vendor_id) as totalvendor');
		$this->db->from('vendor');
		$query = $this->db->get()->row();
		return $query->totalvendor;
	}


	/*** TOTAL ORDER COUNT */
	public function totalOrderCount(){
		$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
		if(strtolower($user_type) != "admin"){
			$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
			$this->db->where('vendor_id',$user_id);
		}
		$this->db->select('count(order_id) as totalorder');
		$this->db->from('order_details');
		$query = $this->db->get()->row();
		return $query->totalorder;
	}

	/*** TOTAL CUSTOMER COUNT */
	public function totalCustomerCount(){
		$this->db->select('count(customer_id) as totalcustomer');
		$this->db->from('customer_detail');
		$query = $this->db->get()->row();
		return $query->totalcustomer;
	}

	/****UPDATTE MENU : REMOVE DISABLE SUBMRNU ID  */
	public function updateDisableSubmenuForMenu($id){
		$this->db->select('menu_id,submenu_id');
		$this->db->from('menu_details');
		$this->db->like('submenu_id',$id);
		$query = $this->db->get()->result_array();
		if(!empty($query)){
			foreach($query as $row){
				$menu_id 			= $row['menu_id'];
				$submenu_id 		= explode(',',$row['submenu_id']);
				if (($key = array_search($id, $submenu_id)) !== false) {
					unset($submenu_id[$key]);
				}
				$submenu = "";
				if(!empty($submenu_id)){
					$submenu = implode(',',$submenu_id);
				}
				$update['submenu_id'] = $submenu;				
				$cond['menu_id'] = $menu_id;
				$update_menu = update('menu_details',$update,$cond);
				logThis($update_menu->query, date('Y-m-d'),'Menu Detail');
			}
		}
	}

	/****UPDATTE MENU : REMOVE DISABLE SUBMRNU ID  */
	public function updateDisableSubmenuForRole($id){
		$this->db->select('role_details_id,submenu_id');
		$this->db->from('role_details');
		$this->db->like('submenu_id',$id);
		$query = $this->db->get()->result_array();
		if(!empty($query)){
			foreach($query as $row){
				$role_details_id 			= $row['role_details_id'];
				$submenu_id 		= explode(',',$row['submenu_id']);
				if (($key = array_search($id, $submenu_id)) !== false) {
					unset($submenu_id[$key]);
				}	
				$submenu = "";
				if(!empty($submenu_id)){
					$submenu = implode(',',$submenu_id);
				}
				$update['submenu_id'] = $submenu;
				$cond['role_details_id'] = $role_details_id;
				$update_role = update('role_details',$update,$cond);
				logThis($update_role->query, date('Y-m-d'),'Role Detail');
			}
		}
	}

	/****GET ELEMENT NAME BY ELEMENT ID  */
	public function getElementNameByID($element_id){
		$this->db->select('element_name');
		$this->db->from('product_elements');
		$this->db->where('element_id',$element_id);
		$query = $this->db->get()->row();
		return $query->element_name;
	}

	public function getNonvariantProductList(){
		$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];		
		if(strtolower($user_type) != "admin"){
			$user_id 				= $this->session->userdata[ADMIN_SESSION]['user_id'];
			$this->db->where('vendor_id',$user_id);
		}
		$this->db->select('product_id,product_name');
		$this->db->from('product_details');
		$this->db->where('variant_code IS NULL');
		$this->db->where('parent_product_id IS NULL');
		$this->db->where('is_active',1);
		$query = $this->db->get()->result_array();
		return $query;
	}

	/*** GET VARIANT PRODUCT LIST FROM PARENT PRODUCT */
	public function getVarientProductByParentProduct($parent_product_id){
		$this->db->select('product_id,product_name');
		$this->db->from('product_details');
		$this->db->where('parent_product_id',$parent_product_id);
		$query 				= $this->db->get()->result_array();
		$table 				= '';
		$user_type 			= $this->session->userdata[ADMIN_SESSION]['user_type'];
		
		if(!empty($query)){
			$i = 1;
			$table .= '<table class="table mb-0 table-borderless" id="variantProductListDatatable">
						<thead>
							<tr class="userDatatable-header">
								<th>
									<span class="userDatatable-title">
										#
									</span>
								</th>
								<th>
									<span class="userDatatable-title">
										Product Name
									</span>
								</th>
								<th>
									<span
										class="userDatatable-title float-right">
										Action
									</span>
								</th>
							</tr>
						</thead>
						<tbody>';
						foreach($query as $row){
							$product_id 				= $row['product_id'];
							$productname 				= $row['product_name'];
							$whr['product_id'] 			= $product_id;
							$eleattr 					= $this->Master_m->where('product_elements_attributes',$whr);
							$eleattrarr 				= array();
							$elediv 					= '';
							
							foreach($eleattr as $ele){
								$ele_id 			= $ele['element_id'];
								$ele_name 			= $this->Master_m->getElementNameByID($ele_id);
								$arrt_id 			= $ele['attributes_id'];
								$arrt_name 			= getAttributeNameByID($arrt_id);
								$elediv .='<span class="sub-title text-primary"><small>'.$ele_name.' : '.$arrt_name.'</small></span>&nbsp;';
							}

							$table .='<tr>
										<td><div class="userDatatable-content py-1">'.$i.'</div></td>
										<td><div class="userDatatable-content">'.$productname.' ( '.$elediv.')</div></td>';
										if(strtolower($user_type) != "admin"){	
											$table .= '<td><ul class="orderDatatable_actions mb-0 d-flex flex-wrap"><li><a href="#" class="remove" onclick="removeVarientProduct('.$product_id.')">'.REMOVE_ICON.'</a></li></ul></td>';
										}
										
										
							$table .= '</tr>';
							$i++; 
						}
			$table .= '</tbody></table>';
		}
		return $table;
		
	}

	public function getvariantproductBYeleattr()
	{
		$attrid 			= $this->input->post('attrid');
		$eleid 				= $this->input->post('eleid');
		$variant_code 		= $this->input->post('variant_code');

		$this->db->select('pe.product_id, p.short_code,pe.element_id,pe.attributes_id');
		$this->db->from('product_elements_attributes pe');
		$this->db->join('product_details p','p.product_id = pe.product_id');
		$this->db->where('pe.attributes_id',$attrid);
		$this->db->where('pe.element_id',$eleid);
		$this->db->where('pe.variant_code',$variant_code);
		$this->db->where('p.is_active',1);
		$this->db->order_by('pe.product_id','asc');
		$query = $this->db->get()->result_array();
		return $query;
	}

	/***GET SHOW 1ST PRODUCT FROM VARIANT LIST  */
	public function getvariantproductBYSelectedeleattr($product_id,$item_ele,$item_attr)
	{ 
		$variant_code 		= $this->input->post('variant_code');

		$this->db->select('pe.product_id, p.short_code,pe.element_id,pe.attributes_id');
		$this->db->from('product_elements_attributes pe');
		$this->db->join('product_details p','p.product_id = pe.product_id');
		$this->db->where('pe.product_id',$product_id);
		$this->db->where('pe.attributes_id',$item_attr);
		//$this->db->where('pe.element_id',$item_ele);
		$this->db->where('pe.variant_code',$variant_code);
		$this->db->where('p.is_active',1);
		$this->db->order_by('pe.product_id','asc');
		$query = $this->db->get()->row();
		return $query;
	}

	/*** GET VARIAION LIST FROM VARIENT CODE   */
	public function getVariationListByCode($variant_code = null,$product_id = null){
		if($variant_code != null){
			$this->db->where('pe.variant_code',$variant_code);
		}else if($product_id != null){
			$this->db->where('pe.product_id',$product_id);
		}
		$this->db->select('pe.*');
		$this->db->from('product_elements_attributes pe');
		$this->db->join('product_details p','p.product_id = pe.product_id');
		
		$this->db->where('p.is_active',1);
		$query = $this->db->get()->result_array();
		return $query;
	}

	/**** SUBMIR PRODUCT RATING REVIEWS */
	public function submitRatingReviews($data){
		$product_id 				= $data['product_id'];
		$rate 						= $data['rate'];
		$review_title				= $data['review_title'];
		$review_content 			= $data['review_content'];
		$customer_id 				= $data['customer_id'];
		$customer_name 				= $data['customer_name'];
		$email 						= $data['email'];

		$insertdata['product_id'] 				= $product_id;
		$insertdata['star_rate'] 				= $rate;
		$insertdata['review_title'] 			= $review_title;
		$insertdata['review_content'] 			= $review_content;
		$insertdata['customer_id'] 				= $customer_id;
		$insertdata['customer_name'] 			= $customer_name;
		$insertdata['customer_email'] 			= $email;
		$insertdata['review_date'] 				= date('Y-m-d');

		$insert_result = insert('product_review',$insertdata,'');
		
		logThis($insert_result->query, date('Y-m-d'),'Product Rating Reviews');
		
		if($insert_result->status = 'success'){
			$response['success'] = "suceess";
			$response['message'] = "Review Added Successfull";
			return $response;
		}else{
			return false;
		}		
	}

	/*** ALL REVIWES BY PRODUCT ID */
	public function getProductAllReviews($product_id){
		$this->db->select('product_review_id,customer_name,star_rate,review_title,review_content,review_date');
		$this->db->from('product_review');
		$this->db->where('product_id',$product_id);
		$result = $this->db->get()->result_array();
		return $result;
	}

	/***** GET SIMILER PRODUCTS FROM CATEGORY */
	public function getSimilerProducts($child_category_id,$product_id){
		$sort_by = "ORDER BY net_price ASC";
		/***** 	QUERY : #1 */
		
		$this->db->select('DISTINCT(p.product_id) as product_id, p.product_name as product_name,p.child_category, p.short_code, p.short_description, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('p.is_active', 1);
   		$this->db->where('p.variant_code IS NOT NULL'); 
   		$this->db->where('p.child_category',$child_category_id); 
   		$this->db->where('p.product_id !=',$product_id); 
		$this->db->group_by('p.variant_code');	
		
		$query1	= $this->db->get_compiled_select();

		/***** 	QUERY : #2 */

		$this->db->select('DISTINCT(p1.product_id) as product_id, p1.product_name as product_name,p1.child_category, p1.short_code, p1.short_description, p1.net_price as net_price, p1.cover_img,p1.mrp_price,p1.discount,p1.variant_code,b.brand_name');
		$this->db->from('product_details p1');		
		$this->db->join('brand b','b.brand_id = p1.brand_id');
   		$this->db->where('p1.is_active', 1);
		$this->db->where('p1.variant_code IS NULL'); 
		$this->db->where('p1.child_category',$child_category_id); 
		$this->db->where('p1.product_id !=',$product_id); 
		$query2=$this->db->get_compiled_select();
				
		$query = $this->db->query($query1 . ' UNION ALL ' . $query2 .' '. $sort_by );
		$result = $query->result_array();
		$product_data = $this->createVarientList($result);
		
		return $result;
	}

	/*** GET VARIENT LIST OF PRODUCT*/
	public function createVarientList($products){
		$elearr 			= array();$i=0;
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
		return $elearr;
	}

	/*** BEST SELLING PRODUCTS : TOP 10 */
	public function getBestSellingProducts(){
		$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,count(o.product_id) as total');
		$this->db->from('product_details p');
		$this->db->join('order_details o','o.product_id=p.product_id');
		$this->db->order_by('total','desc');
		$this->db->group_by('o.product_id');
		$this->db->limit(10);	
		$result = $this->db->get()->result_array();
		$product_data = array();
		if(!empty($result)){
			$product_data = $this->createVarientList($result);
		}
		return $product_data;
	}

	/*** RECENT VIEWED PRODUCTS OF CUSTOMER */
	public function getRecentviewedProducts($customer_id){
		$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code');
		$this->db->from('recent_view r');
		$this->db->join('product_details p','p.product_id=r.product_id');
		$this->db->where('r.customer_id',$customer_id);
		$result = $this->db->get()->result_array();
		
		return $result;
	}

	/*** GET TOTAL VIEWS COUNT OF PRODUCTS */
	public function getProductTotalViewsCount($product_id){
		$this->db->select('view_count');
		$this->db->from('product_details');
		$this->db->where('product_id',$product_id);
		$result = $this->db->get()->row();		
		return $result->view_count;
	}

	/***** UPDATE VIEWS COUNT OF PRODUCT  */
	public function  updateProductViews($product_id){
		$current_views 	= $this->getProductTotalViewsCount($product_id);
		$update_count 	= (int)$current_views + 1;

		$updatedata['view_count'] 	= $update_count;
		$where['product_id'] 		= $product_id;
		$update_query = update('product_details',$updatedata,$where);	
		logThis($update_query->query, date('Y-m-d'),'Product Details');
		return true;
	}

	/***** FREQUENT/TOP SEARCH/VIEWED PRODUCTS LIST */
	public function getFrequentViewProduct($customer_id=null){
		if($customer_id != "" || $customer_id != null){
			$this->db->join('recent_view r','r.product_id = p.product_id','left');	
			$this->db->where('r.customer_id',$customer_id);
		}
		$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');		
		$this->db->where('p.view_count >',0);
		$this->db->order_by('p.view_count','desc');
		$this->db->limit(20);
		$result = $this->db->get()->result_array();		
		return $result;
	}

	/**** IS CHECK BRAND IS EXIST OR NOT */
	public function ischeckBrand($brand_name){
		$this->db->select('brand_id,created_by');
		$this->db->from('brand');
		$this->db->where('brand_name',$brand_name);
		$query = $this->db->get()->result_array();
		return $query;
	}

	


/*********************************** API FUNCTION *************************************************** */
	function getAllProductInGrid($category_id){
		$sort_by = "ORDER BY net_price ASC";
		/***** 	QUERY : #1 */
		
		$this->db->select('DISTINCT(p.product_id) as product_id, p.product_name as product_name, p.short_code, p.short_description, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,pe.product_id,v.name,b.brand_name,p.is_new_product');
		$this->db->from('product_details p');
		$this->db->join('product_elements_attributes pe','pe.product_id=p.product_id');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		// $this->db->join('category c','c.category_id = p.category_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('p.is_active', 1);
   		$this->db->where('p.variant_code IS NOT NULL'); 
		$this->db->where("p.child_category", $category_id);
		$this->db->group_by('p.variant_code');		
		$query1	= $this->db->get_compiled_select();

		/***** 	QUERY : #2 */

		$this->db->select('DISTINCT(p1.product_id) as product_id, p1.product_name as product_name, p1.short_code, p1.short_description, p1.net_price as net_price, p1.cover_img,p1.mrp_price,p1.discount,p1.variant_code,pe1.product_id,v1.name,b1.brand_name,p1.is_new_product');
		$this->db->from('product_details p1');
		$this->db->join('product_elements_attributes pe1','pe1.product_id=p1.product_id');
		$this->db->join('vendor v1','v1.vendor_id = p1.vendor_id');
		// $this->db->join('category c1','c1.category_id = p1.category_id');
		$this->db->join('brand b1','b1.brand_id = p1.brand_id');		
   		$this->db->where('p1.is_active', 1);
		$this->db->where('p1.variant_code IS NULL');
		$this->db->where("p1.child_category", $category_id); 
		$query2=$this->db->get_compiled_select();

		$query = $this->db->query($query1 . ' UNION ALL ' . $query2 .' '. $sort_by );
		$result = $query->result_array();	
		
		return $result;
	}

	/*** TOP BRANDS : TRENDINGS */
	public function getBrandTrendingslist($short_code){
		if($short_code != null || $short_code != ""){
			$cat_cond['short_code'] 	= $short_code;
			$result						= $this->where('category',$cat_cond);
			$category_id				= $result[0]['category_id'];
			$this->db->where('p.category_id',$category_id);		
		}

		$this->db->select('p.brand_id,b.brand_name,b.short_code,b.brand_logo,SUM(o.quantity) as qtyCnt');
		$this->db->from('order_details o');
		$this->db->join('product_details p','p.product_id=o.product_id');
		$this->db->join('brand b','b.brand_id=p.brand_id');		
		$this->db->order_by('qtyCnt','desc');
		$this->db->group_by('p.brand_id');
		$this->db->limit(20);	
		$result = $this->db->get()->result_array();		
		//return $result;

		if(count($result) < 4){
			$this->db->select('p.brand_id,b.brand_name,b.short_code,b.brand_logo');
			$this->db->from('product_details p');
			$this->db->join('brand b','b.brand_id=p.brand_id');	
			$this->db->where('p.is_active',1);
			$this->db->where('p.category_id',$category_id);
			$this->db->order_by('p.product_id','desc');
			$this->db->group_by('p.brand_id');	
			
			$result = $this->db->get()->result_array();
		}
		return $result;
	}

	/*** GET CHILD CATEGORY FROM PARENT CATEGORY : clothing*/
	public function getChildCategoryAPI($short_code = null,$category_id = null){
		$data = array();
		if($short_code != null || $short_code != ""){
			$cat_cond['short_code'] 	= $short_code;		
		}

		if($category_id != null || $category_id != ""){
			$cat_cond['category_id'] 	= $category_id;				
		}	
		
		$result						= $this->where('category',$cat_cond);
		$category_id				= $result[0]['category_id'];

		$this->db->select('c.category_name,c.category_id,category_image');
		$this->db->from('product_details p');
		$this->db->join('category c','c.category_id=p.child_category');
		$this->db->where('p.category_id',$category_id);
		$this->db->group_by('p.child_category');
		$child = $this->db->get()->result_array();
		
		return $child;
	}

	/*** BEST SELLING PRODUCTS : TOP 10 */
	public function getBestSellingProductsForCategory($short_code){
		
		if($short_code != null || $short_code != ""){
			$cat_cond['short_code'] 	= $short_code;
			$result						= $this->where('category',$cat_cond);
			$category_id				= $result[0]['category_id'];	
			$this->db->where('p.category_id',$category_id);	
		}		
		
		$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,count(o.product_id) as total,b.brand_name,ROUND(AVG(COALESCE(pr.star_rate,0))) as totalstar');
		$this->db->from('product_details p');
		$this->db->join('order_details o','o.product_id=p.product_id');	
		$this->db->join('brand b','b.brand_id=p.brand_id');	
		$this->db->join('product_review pr','pr.product_id = p.product_id','left');	
		$this->db->order_by('total','desc');
		$this->db->group_by('o.product_id');
		$this->db->limit(10);	
		$result = $this->db->get()->result_array();

		if(empty($result)){
			$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name,ROUND(AVG(COALESCE(pr.star_rate,0))) as totalstar');
			$this->db->from('product_details p');	
			$this->db->join('brand b','b.brand_id=p.brand_id');		
			$this->db->join('product_review pr','pr.product_id = p.product_id','left');
			$this->db->where('p.is_active',1);
			$this->db->where('p.category_id',$category_id);	
			$this->db->order_by('p.product_id','desc');
			$this->db->group_by('p.variant_code');	
			$result = $this->db->get()->result_array();
		}

		$product_data = array();
		if(!empty($result)){
			$product_data = $this->createVarientList($result);
		}
		return $product_data;
	}

	/**** GET ALL PRODUCT COLOR FOR FILTER */
	public function allProductAttributesByElementAPI($data){

		$short_code 				= $data['short_code'];		
		$element_type 				= $data['element_type'];		

		if($short_code != null || $short_code != ""){
			$cat_cond['short_code'] 	= $short_code;
			$result						= $this->where('category',$cat_cond);
			$category_id				= $result[0]['category_id'];				
		}

		$product_arr = array();
		if($category_id != "" || $category_id != null){
			$this->db->select('product_id');
			$this->db->from('product_details');			
			$this->db->where("category_id", $category_id);   			
			$product_res  = $this->db->get()->result_array();
			if(!empty($product_res)){				
				foreach($product_res as $key=>$val){
					$product_arr[] = $val['product_id'];
				}
			}
			
		}
		$this->db->select('element_id');
		$this->db->from('product_elements');
		$this->db->where('element_name',$element_type);
		$result = $this->db->get()->row();

		$color_arr 			= array();
		$color_arr1 		= array();
		if(!empty($result)){
			$color_id = $result->element_id;

			$this->db->select('attributes_id,product_id');
			$this->db->from('product_elements_attributes');
			$this->db->where('element_id',$color_id);
			$this->db->order_by('attributes_id','asc');		
			//$this->db->group_by('attributes_id');
			$color_res 		= $this->db->get()->result_array();
			
			$i = 0;
			if(!empty($color_res)){
				foreach($color_res as $row){
					$attributes_id 				= $row['attributes_id'];					
					$product_id 				= $row['product_id'];
					if(!empty($product_arr)){
						if (in_array($product_id, $product_arr)){
							$whr['attributes_id'] 	= $attributes_id;
							$attr_res 				= $this->Master_m->where('attributes',$whr); 
							//$color_name 				= getAttributeNameByID($attributes_id);;
							$color_name 				= $attr_res[0]['attributes_name'];
							$color_code 				= $attr_res[0]['attribute_code'];
							if (array_search($color_name, array_column($color_arr, 'name')) === FALSE) {								
								$color_arr[$i]['name'] 	= $color_name;
								$color_arr[$i]['code'] 	= trim(ltrim($color_code, '#'));
								$color_arr[$i]['id'] 	= $attributes_id;
								$i++;
							}						
						}
					}	
														
				}
			}
		}
		return $color_arr;
	}

	/**** GET PRODUCTS LIST BY CATEGORY AND ATTRIBUTES ID */
	public function getProductByAttributeAndCategory($short_code,$attribute_id){
		
		if($short_code != null || $short_code != ""){
			$cat_cond['short_code'] 	= $short_code;
			$result						= $this->where('category',$cat_cond);
			$category_id				= $result[0]['category_id'];	
		}

		$sort_by = "ORDER BY product_id DESC";

		/**** QUERY : 1 */
		$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('product_elements_attributes pe','pe.product_id=p.product_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('pe.attributes_id',$attribute_id);	
		if($short_code != null || $short_code != ""){
			$this->db->where('p.category_id',$category_id);	
		}
		$this->db->where('p.variant_code IS NOT NULL'); 
		$this->db->where('p.is_active', 1);	
		$this->db->group_by('p.variant_code');
		$query1	= $this->db->get_compiled_select();	
		
		/**** QUERY : 2 */
		$this->db->select('p1.product_id,p1.product_name, p1.short_code, p1.net_price as net_price, p1.cover_img,p1.mrp_price,p1.discount,p1.variant_code,b.brand_name');
		$this->db->from('product_details p1');
		$this->db->join('product_elements_attributes pe','pe.product_id=p1.product_id');
		$this->db->join('brand b','b.brand_id = p1.brand_id');
		$this->db->where('pe.attributes_id',$attribute_id);	
		if($short_code != null || $short_code != ""){
			$this->db->where('p1.category_id',$category_id);	
		}
		$this->db->where('p1.variant_code IS NULL'); 
		$this->db->where('p1.is_active', 1);	
		$query2	= $this->db->get_compiled_select();
		
		$query = $this->db->query($query1 . ' UNION ALL ' . $query2 .' '. $sort_by );
		$result = $query->result_array();
		return $result;		
	}

	/**** GET NEW LAUNCH PRODUCTS LIST */
	public function getNewLaunchelist($short_code){
		
		if($short_code != null || $short_code != ""){
			$cat_cond['short_code'] 	= $short_code;
			$result						= $this->where('category',$cat_cond);
			$category_id				= $result[0]['category_id'];	
			$this->db->where('p.category_id',$category_id);	
		}
		
		$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->order_by('p.product_id','desc');		
		$this->db->group_by('p.variant_code');
		$this->db->LIMIT('10');
		$result = $this->db->get()->result_array();
		return $result;		
	}
	/**** GET BRAND PRODUCTS LIST */
	public function getBrandProduct($data){

		$brand_id 			= $data['brand_id']; 
		$cat_short_code 	= $data['cat_short_code']; 

		if($cat_short_code != null || $cat_short_code != ""){
			$cat_cond['short_code'] 	= $cat_short_code;
			$result						= $this->where('category',$cat_cond);
			$category_id				= $result[0]['category_id'];	
		}
		
		$sort_by = "ORDER BY product_id DESC";
		/**** QUERY : 1 */
		$this->db->select('DISTINCT(p.product_id) as product_id,p.product_name as product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('p.brand_id',$brand_id);	
		if($cat_short_code != null || $cat_short_code != ""){
			$this->db->where('p.category_id',$category_id);	
		}
		$this->db->where('p.variant_code IS NOT NULL'); 
		$this->db->where('p.is_active', 1);	
		$this->db->group_by('p.variant_code');
		$query1	= $this->db->get_compiled_select();
		
		/**** QUERY : 2 */
		$this->db->select('DISTINCT(p1.product_id) as product_id,p1.product_name as product_name, p1.short_code, p1.net_price as net_price, p1.cover_img,p1.mrp_price,p1.discount,p1.variant_code,b.brand_name');
		$this->db->from('product_details p1');
		$this->db->join('brand b','b.brand_id = p1.brand_id');
		$this->db->where('p1.brand_id',$brand_id);
		if($cat_short_code != null || $cat_short_code != ""){
			$this->db->where('p1.category_id',$category_id);	
		}	
		$this->db->where('p1.variant_code IS NULL'); 
		$this->db->where('p1.is_active', 1);	
		$query2	= $this->db->get_compiled_select();
		
		$query = $this->db->query($query1 . ' UNION ALL ' . $query2 .' '. $sort_by );
		$result = $query->result_array();
		
		return $result;		
	}
	/**** GET CATEGORY PRODUCTS LIST */
	public function getCategoryProduct($category_id){
		$sort_by = "ORDER BY product_id DESC";
		
		// $this->db->select('DISTINCT(p.product_id) as product_id,p.product_name as product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name,ROUND(AVG(star_rate)) as totalstar');
		$this->db->select('DISTINCT(p.product_id) as product_id,p.product_name as product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		//$this->db->join('product_review pr','pr.product_id = p.product_id','left');
		$this->db->group_start();
		$this->db->where("p.category_id", $category_id);
		$this->db->or_where("p.child_category", $category_id);
		$this->db->group_end();	
		$this->db->where('p.variant_code IS NOT NULL'); 	
		$this->db->group_by('p.variant_code');
		$query1	= $this->db->get_compiled_select();
		
		// $this->db->select('DISTINCT(p1.product_id) as product_id,p1.product_name as product_name, p1.short_code, p1.net_price as net_price, p1.cover_img,p1.mrp_price,p1.discount,p1.variant_code,b.brand_name,ROUND(AVG(star_rate)) as totalstar');
		$this->db->select('DISTINCT(p1.product_id) as product_id,p1.product_name as product_name, p1.short_code, p1.net_price as net_price, p1.cover_img,p1.mrp_price,p1.discount,p1.variant_code,b.brand_name');
		$this->db->from('product_details p1');
		$this->db->join('brand b','b.brand_id = p1.brand_id');
		//$this->db->join('product_review pr','pr.product_id = p1.product_id','left');
		$this->db->group_start();
		$this->db->where("p1.category_id", $category_id);
		$this->db->or_where("p1.child_category", $category_id);
		$this->db->group_end();	
		$this->db->where('p1.variant_code IS NULL'); 
		$query2	= $this->db->get_compiled_select();

		$query = $this->db->query($query1 . ' UNION ALL ' . $query2 .' '. $sort_by );
		$result = $query->result_array();
		//echo $this->db->last_query();
		return $result;		
	}
	
	/****GET ALL BRANDS GROUP WITH ALPHABETATS ORDER*/
	public function getAllBrand(){
		$this->db->select('b.brand_name,b.brand_id');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->order_by('b.brand_name','asc');	
		$this->db->group_by('p.brand_id');
		$result = $this->db->get()->result_array();
		$brand_arr = array();
		foreach($result as $row){
			$letter 				= substr($row['brand_name'],0,1);
			$brand_arr[$letter][] 	= $row;
		}
		$brand_list = array();
		$i = 0;
		if(!empty($brand_arr)){
			foreach($brand_arr as $key=>$val){
				$brand_list[$i]['letter'] = $key;
				$brand_list[$i]['value'] = $val;
				$i++;
			}
		}
		return $brand_list;
	}

	/*** FETCH PRODUCT VARIANT DETAIL BY PRODUCT ID */
	public function getProductElemetsAttributesApi($product_id){

		$this->db->select('pea.element_id,pea.attributes_id,pe.element_name,pe.element_id');
		$this->db->from('product_elements_attributes pea');
		$this->db->join('product_elements pe','pe.element_id = pea.element_id');
		$this->db->where('pea.product_id', $product_id);
		$query		= $this->db->get()->result_array();
		
		$elements = array();
		
		if(!empty($query)){
			
			foreach($query as $row){
				
				$element_name 				= $row['element_name'];
				$element_id 				= $row['element_id'];
				$attributes_id 				= explode(',', $row['attributes_id']);
				$attr_arr = array();
				
				if(!empty($attributes_id)){
					
					foreach($attributes_id as $attr){
						$whr['attributes_id'] 	= $attr;
						$attr_res 				= $this->where('attributes',$whr);
						$attr_name 				= $attr_res[0]['attributes_name'];
						$attribute_code 		= $attr_res[0]['attribute_code'];
						
						$attr_arr[$attr_name]['element_id'] 		= $element_id;
						$attr_arr[$attr_name]['attribute_code'] 	= trim(ltrim($attribute_code, '#'));		
						$attr_arr[$attr_name]['attr_id'] 			= $attr;				
						$attr_arr[$attr_name]['p_id'][] 			= $product_id;
						$attr_arr[$attr_name]['enable'] 			= 'enable'; 
						$attr_arr[$attr_name]['is_selected'] 		= true;	
					}					
				}
				
				$elements[$element_name] 	= $attr_arr;//implode(',',$attr_arr);
			}
		}
		
		return $elements;
	}

	public function getAllCustomerAddress($customer_id){
		$this->db->select('*');
		$this->db->from('customer_address');
		$this->db->where('customer_id',$customer_id);
		$this->db->where('is_active',1);
		$this->db->order_by('set_default','desc');	
		$result = $this->db->get()->result_array();
		return $result;
	}

	/** item order detail from order id*/
	public function getCustomerOrderListApi($customer_id,$search_keyword = null ,$filter=array()){

		if($search_keyword != "" || $search_keyword != null){
			$this->db->group_start();
			$this->db->like('od.product_name',$search_keyword);
			$this->db->or_like('b.brand_name',$search_keyword);
			$this->db->group_end();
		}

		if(!empty($filter)){
			if(isset($filter['status']) && $filter['status'] != ""){
				if(strtolower($filter['status']) == "processing"){
					$this->db->where('od.deliver_date',null);
				}
				else if(strtolower($filter['status']) == "delivered"){
					$this->db->where('od.deliver_date !=',null);
				}
				else if(strtolower($filter['status']) == "returned"){
					$this->db->join('return_request r','r.order_id=od.order_id');
					$this->db->where('r.customer_id',$customer_id);
					$this->db->where('r.is_completed',1);
				}

			}
			if(isset($filter['time']) && $filter['time'] != ""){
				$today = date('Y-m-d');
				if(strtolower($filter['time']) == "last30days"){
					$this->db->where('o.order_date BETWEEN NOW() - INTERVAL 30 DAY AND NOW()', "", false);
				}
				else if(strtolower($filter['time']) == "last6months"){
					$this->db->where('o.order_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 6 MONTH)  AND CURDATE()', "", false);
				}
				else if(strtolower($filter['time']) == "lastyear"){
					$this->db->where('o.order_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 YEAR)  AND CURDATE()',"", false);
				}
			}
		}

		$this->db->select('o.order_id,od.product_id,od.deliver_date,o.order_date,od.product_name,p.cover_img,o.order_number,od.return_replace_validity,v.name as vendor_name,b.brand_name');
		$this->db->from('order_details od');
		$this->db->join('orders o','o.order_id=od.order_id');
		$this->db->join('product_details p','p.product_id=od.product_id');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('o.customer_id',$customer_id);
		$this->db->order_by('od.order_date','desc');
		$result = $this->db->get()->result_array();
		
		return $result;
	}

	/**** DELETE SELECTED PRODUCT FROM CART */
	public function removeSelectedCartItem($customer_id,$product_arr=array()){
		$this->db->where('customer_id',$customer_id);
		$this->db->where_in('product_id',$product_arr);
		$query=$this->db->delete('customer_cart');
		return true;
	}

	// /**** GET ELEMENT ATTRIBUTE OF SINGLE PRODUCT IN JSON STRING FORMATE*/
	// public function getElememtAttributeForSingleProduct($product_id){
	// 	$this->db->select('pea.element_id,pea.attributes_id');
	// 	$this->db->from('product_elements_attributes pea');
	// 	$this->db->where('pea.product_id', $product_id);
	// 	$query		= $this->db->get()->result_array();
	// 	$eleattr 	= array();
	// 	if(!empty($query)){
	// 		foreach($query as $row){
	// 			$element_id 			= $row['element_id'];
	// 			$attributes_id 			= $row['attributes_id'];
	// 			$eleattr[$element_id] 	= $attributes_id;
	// 		}
	// 	}
	// 	return json_encode($eleattr,true);
	// }

	public function getvariantproductBYeleattrApi($data)
	{
		$attrid 			= $data['current_attribute'];
		$variant_code 		= $data['variant_code'];

		$this->db->select('pe.product_id, p.short_code,pe.element_id,pe.attributes_id');
		$this->db->from('product_elements_attributes pe');
		$this->db->join('product_details p','p.product_id = pe.product_id');
		$this->db->where('pe.attributes_id',$attrid);
		//$this->db->where('pe.element_id',$eleid);
		$this->db->where('pe.variant_code',$variant_code);
		$this->db->where('p.is_active',1);
		$this->db->order_by('pe.product_id','asc');
		$query = $this->db->get()->result_array();
		return $query;
	}

	/****GET SINGLE PRODUCT REVIEW */
	public function getSingleProductReviewaApi($customer_id,$product_id){
		$this->db->select('star_rate');
		$this->db->from('product_review');
		$this->db->where('customer_id',$customer_id);
		$this->db->where('product_id',$product_id);
		$result = $this->db->get()->result_array();
		return $result;
	}

	/***** CHECK PRODUCT IN WISHLIST OR NOT */
	public function checkisinWishlist($customer_id,$productArr = array()){
		$whish_product 		= array(); 
		$products 		= array(); 
		if($customer_id != "" || $customer_id != null){	
			$wh['customer_id'] 		= $customer_id;
			$wishlist 				= $this->Master_m->where('whish_list',$wh);
			if(!empty($wishlist)){
				foreach($wishlist as $row){
					$whish_product[] = $row['product_id'];
				}
			}
		}
		
		foreach($productArr as $row1){					
			$product_id 		= $row1['product_id'];
			$row1['wishlist'] 	= false;
			if(!empty($whish_product)){
				if(in_array($product_id,$whish_product)){
					$row1['wishlist'] = true;
				}
			}					
			$products[] = $row1;
		}
		return $products;
	}

	/***** SEARCH BY KEYWORDS */
	public function searchBykeywords($search_keyword,$category=null){

		if($category != null || $category != ""){
			$cat_cond['short_code'] 	= $category;
			$result						= $this->where('category',$cat_cond);
			$category_id				= $result[0]['category_id'];	
			$this->db->where('p.category_id',$category_id);	
		}
		if($search_keyword != "" || $search_keyword != null){
			// $this->db->group_start();
			$this->db->like('p.tag',$search_keyword);
			// $this->db->group_end();
			//$this->db->where('FIND_IN_SET("'.$search_keyword.'",p.tag) <>','0');
		}
		
		$this->db->select('DISTINCT(p.product_id) as product_id,p.product_name as product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name,c.category_name, p.tag,ROUND(AVG(COALESCE(pr.star_rate,0))) as totalstar');
		//$this->db->select('DISTINCT(p.product_id) as product_id,p.tag');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id','left');
		$this->db->join('category c','c.category_id=p.child_category','left');		
		$this->db->join('product_review pr','pr.product_id = p.product_id','left');	
		$this->db->where('p.variant_code IS NOT NULL'); 	
		$this->db->group_by('p.variant_code');		
		$result = $this->db->get()->result_array();
		//echo $this->db->last_query();
		return $result;	
	}

	/**** INSERT SEARCH KEYWORDS  */
	public function getRecentsearchkeywords($customer_id=NULL,$category=NULL){
		if($category != null || $category != ""){
			$cat_cond['short_code'] 	= $category;
			$result						= $this->where('category',$cat_cond);
			$category_id				= $result[0]['category_id'];	
			$this->db->where('category',$category);	
		}
		if($customer_id != null || $customer_id != ""){
			$this->db->where('customer_id',$customer_id);	
		}
		$this->db->select('*');
		$this->db->from('recent_search');
		$result = $this->db->get()->result_array();
		$search_res 		= array();		
		if(!empty($result)){
			$search1 			= array();			
				
			$i = 0;
			foreach($result as $row){
				$keyword = $row['keyword'];
				$search_id = $row['recent_search_id'];
				if($category != null || $category != ""){
					$this->db->where('category_id',$category_id);
				}
				$this->db->select('product_id,cover_img');
				$this->db->from('product_details');
				$this->db->like('tag',$keyword);
				$this->db->limit(1);
				$q = $this->db->get()->result_array();
				
				$search2[$keyword] = $q;
				$search2[$keyword]['recent_search_id'] = $search_id;
				$i++;
			}
			if(!empty($search2)){
				$j = 0;
				foreach($search2 as $key=>$val){
					
					$search_keyword 			= $key;
					$cat_img 					= $val[0]['cover_img'];
					$product_id 				= $val[0]['product_id'];
					$recent_search_id 			= $val['recent_search_id'];
					$search_res[$j]['keyword'] 			= $search_keyword;					
					$search_res[$j]['image'] 			= $cat_img;
					$search_res[$j]['search_id'] 		= $recent_search_id;
					$search_res[$j]['product_id'] 		= $product_id;
					$j++;
				}
			}
		}
		return $search_res;	
	}

	/*** GET SUGGESTION BY KEYWORDS */
	public function getSuggestionByKeywords($keyword,$category_id){
		if($category_id != null || $category_id != "" || $category_id > 0){
			$this->db->like('hierarchy',$category_id);
		}

		$search = explode(' ', $keyword);
		if(!empty($search)){
			$like_statements = array();
			foreach($search as $word){
				$like_statements[] = "c.category_name LIKE '%" . $word . "%'";
				$like_statements[] = "p.product_name LIKE '%" . $word . "%'";
				
			}
			$like_string = "(" . implode(' OR ', $like_statements) . ")";
			$this->db->where($like_string);
		}
		$this->db->select('c.category_id,c.category_name');
		$this->db->from('category c');
		$this->db->join('product_details p','p.child_category=c.category_id','left');
		// $this->db->group_start();	
		// $this->db->like('c.category_name',$keyword);
		// $this->db->or_like('p.product_name',$keyword);
		// $this->db->group_end();
		
		$this->db->group_by('c.category_id');
		$query = $this->db->get()->result_array();
		// echo $this->db->last_query();
		return $query;
	}

	/***** REMOVE RECENT SEARCH */
	public function removeRecentSearch($data){
		$customer_id 			= $data['customer_id']; 
		$search_id 				= $data['search_id'];

		$whr['customer_id'] 		= $customer_id;
		$whr['recent_search_id'] 	= $search_id;

		$del_result					= delete('recent_search',$whr);
		logThis($del_result->query, date('Y-m-d'),'Recent Search');
		return true;
	}

	/**** GET FREQUENT SEARCH */
	public function getFrequentSearch($customer_id = null,$cat_short_code = null){

		if($cat_short_code != null || $cat_short_code != ""){
			$cat_cond['short_code'] 	= $cat_short_code;
			$result1					= $this->where('category',$cat_cond);
			$parent_cat_id				= $result1[0]['category_id'];
			$this->db->where('category',strtolower($cat_short_code));				
		}	
		if($customer_id != "" || $customer_id != null){
			$this->db->where('customer_id',$customer_id);
		}
		$this->db->select('keyword,count(*)');
		$this->db->from('recent_search');
		$this->db->group_by('keyword');
		$res1 = $this->db->get()->result_array();
		$result_arr = array();

		$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');	
		if($cat_short_code != null || $cat_short_code != ""){
			$this->db->where('p.category_id',$parent_cat_id);	
		}
		$this->db->order_by('p.product_id','desc');		
		$this->db->group_by('p.variant_code');
		$this->db->LIMIT('20');
		$default_res = $this->db->get()->result_array();
		
		if(!empty($res1)){
			foreach($res1 as $row){
				$keyword = $row['keyword'];
				$this->db->select('p.product_id,p.product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
				$this->db->from('product_details p');
				$this->db->join('brand b','b.brand_id = p.brand_id');		
				$this->db->like('p.tag',$keyword);	
				$this->db->where('p.variant_code IS NOT NULL'); 	
				$this->db->group_by('p.variant_code');			
				$result_arr[] = $this->db->get()->result_array();
			}	
			
			if(empty($result_arr)){
				$result_arr[] = $default_res;
			}		
		}else{				
				$result_arr[] = $default_res;
		}
		
		return $result_arr;
	}

	/**** GET PRODUCT ALL FILTER OPTION  BY CATEGORY */
	public function getAllProductfilteroption($data)
	{
		$category_id 					= $data['category_id'];
		$brand_id						= $data['brand_id'];
		$cat_short_code					= $data['cat_short_code'];
		$gender							= $data['gender'];
		//$attributes_id				= $data['attributes_id'];
		$g_child_category 				= array(); 
		
		if($cat_short_code == "kids"){
			if($gender !="" || $gender != null){
				$cond['category_name'] 		= $gender;
				$result2					= $this->where('category',$cond);
				$gender_id					= $result2[0]['category_id'];		
				$gender_child_category		= $result2[0]['child_category'];	
				
				if(!empty($gender_child_category) || $gender_child_category != ""){
					$g_child_category = explode(',',$gender_child_category);
				}
			}
			
		}
		if($cat_short_code != null || $cat_short_code != ""){
			$cat_cond['short_code'] 	= $cat_short_code;
			$result1					= $this->where('category',$cat_cond);
			$parent_cat_id				= $result1[0]['category_id'];			
			$this->db->where("p.category_id", $parent_cat_id);
		}
		
		if($category_id != "" || $category_id != null){
			$this->db->group_start();
			// $this->db->where("p.category_id", $category_id);
			$this->db->where("p.child_category", $category_id);
			$this->db->group_end();
		}

		if(!empty($g_child_category)){
			$this->db->where_in("p.child_category", $g_child_category);
		}
		

		if($brand_id != "" || $brand_id != null){
			$this->db->where("p.brand_id", $brand_id);
		}

		$this->db->select('pe.product_id,pe.element_id,pe.attributes_id,e.element_name,a.attributes_name,a.attribute_code,b.brand_name,b.brand_id');
		$this->db->from('product_elements_attributes pe');
		$this->db->join('product_details p','p.product_id = pe.product_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->join('product_elements e','e.element_id = pe.element_id');
		$this->db->join('attributes a','a.attributes_id = pe.attributes_id');
		$this->db->order_by('a.attributes_id','asc');
		
		$query = $this->db->get()->result_array();
		
		$elearr 					= array();
		$elearr_arra 				= array();
		$brand_arra 				= array();
		$finalresult_arra 			= array();
		$j							= 0;
		$i							= 0;

		if(!empty($query)){
			foreach($query as $row){
				$element_id 				= $row['element_id'];
				$attributes_id 				= $row['attributes_id'];
				$element_name 				= $row['element_name'];
				$attributes_name 			= $row['attributes_name'];
				$attribute_code 			= $row['attribute_code'];
				$brand_name 				= $row['brand_name'];
				$brand_id 					= $row['brand_id'];
				
				$elearr[$element_name][$attributes_name]['element_id'] 			= $element_id;
				$elearr[$element_name][$attributes_name]['attribute_code'] 		= trim(ltrim($attribute_code, '#'));
				$elearr[$element_name][$attributes_name]['attr_id'] 			= $attributes_id;

				$elearr['Brand'][$brand_id]['brand_name'] 						= $brand_name;
				$elearr['Brand'][$brand_id]['brand_id'] 						= $brand_id;
				$brand_arra[$brand_id] 											= $brand_name;
				$i++;
			}
			
			if(!empty($elearr)){
				
				foreach($elearr as $key1=>$val1){					
					$attr_arr 		= array();
					$k 				=0;
					$elearr_arra[$j]['element'] = $key1;
					foreach($val1 as $key2=>$val2){						
						// old
						// $attr_arr[$k]['element_name'] = (string) $key1;
						// $attr_arr[$k]['element_value'] = $val2;


						$attr_arr[$k]['element_name'] 						= (is_string($key2)) ? (string) $key2 : (isset($val2['brand_name']) ? $val2['brand_name'] : (string) $key2) ;;//(string) $key1;
						$attr_arr[$k]['element_value']['element_id'] 		= isset($val2['element_id']) ? $val2['element_id'] : $val2['brand_name'];
						$attr_arr[$k]['element_value']['attr_id'] 			= isset($val2['attr_id']) ? $val2['attr_id'] : $val2['brand_id'];
						$attr_arr[$k]['element_value']['attribute_code'] 	= isset($val2['attribute_code']) ? $val2['attribute_code'] : "";
						//$attr_arr[$k]['brand_name'] 						= isset($val2['brand_name']) ? $val2['brand_name'] : null;
						$k++;
					}
					$elearr_arra[$j]['value'] 	= $attr_arr;
					$j++;
				}
			}
		}
		return $elearr_arra;
	}
	

	/*** PRODUCT FILTER WITH FILTER OPRION AND SORT BY OPTION*/
	public function productSortByWithFilter($data){
		
		$category_id 		= $data['category_id'];
		$cat_short_code 	= $data['cat_short_code'];
		$brands 			= $data['brands'];
		$tag 				= $data['tag'];
		//$filter_sort 		= str_replace(' ', '', $data['sort_by']);

		
		if($cat_short_code != null || $cat_short_code != ""){
			$cat_cond['short_code'] 	= $cat_short_code;
			$result1					= $this->where('category',$cat_cond);
			$parent_cat_id				= $result1[0]['category_id'];			
		}

		if($brands != null){
			$this->db->where_in("p.brand_id", $brands);
		}
		if($tag != null || $tag != ""){
			$this->db->like("p.tag", $tag);
		}

		/**** QUERY : 1 */
		$this->db->select('DISTINCT(p.product_id) as product_id,pe.element_id,pe.attributes_id');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');	
		$this->db->join('product_elements_attributes pe','pe.product_id=p.product_id');	
		
		if($category_id != null || $category_id != ""){
			$this->db->where('p.child_category',$category_id);	
		}
		if($cat_short_code != null || $cat_short_code != ""){
			$this->db->where('p.category_id',$parent_cat_id);	
		}
		$this->db->order_by('p.product_id','desc');
		
		$result = $this->db->get()->result_array();		
		$this->db->last_query();
		return $result;
	}

	/***** GET FINAL PRODUCT DETAIL FROM FILTER  */
	public function getProductdetailfromFilter($data){
		$productsid 		= $data['product_id'];
		$filter_sort 		= $data['sort_by'];
		$min_price			= $data['min_price'];
		$max_price 			= $data['max_price'];
		
		$sort_by = "ORDER BY product_id DESC";
		
		/*** SORT BY FILTER OPION  */
		if(isset($filter_sort) && ($filter_sort != "" || $filter_sort != null)){
			if($filter_sort == "price-low-to-high"){
				$sort_by = "ORDER BY net_price ASC";
			}
			else if($filter_sort == "price-high-to-low"){
				$sort_by = "ORDER BY net_price DESC";
			}
			elseif($filter_sort == "discount"){
				$this->db->where('discount !=',0); 	
				$sort_by = "ORDER BY discount DESC";
			}
			elseif($filter_sort == "what-s-new"){	
				$sort_by = "ORDER BY product_id DESC";
			}
		}

		/**** PRICE RANFE FILTER  */
		if(isset($min_price) && strlen(trim($min_price)>0))
		{
   			$this->db->where("net_price >= $min_price");
   		}

		if(isset($max_price) && strlen(trim($max_price)>0))
		{
			$this->db->where("net_price <= $max_price");
   		}
   		
		/**** QUERY : 1 */
		$this->db->select('DISTINCT(p.product_id) as product_id, p.product_name as product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount as discount,p.variant_code,b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');	
		$this->db->join('product_elements_attributes pe','pe.product_id=p.product_id');	
		$this->db->where('p.variant_code IS NOT NULL'); 	
		$this->db->where_in('p.product_id',$productsid); 	
		$this->db->group_by('p.variant_code');	
		$query1	= $this->db->get_compiled_select();	

		/**** QUERY : 2 */
		$this->db->select('DISTINCT(p1.product_id) as product_id, p1.product_name as product_name, p1.short_code, p1.net_price as net_price, p1.cover_img,p1.mrp_price,p1.discount as discount,p1.variant_code,b.brand_name');
		$this->db->from('product_details p1');
		$this->db->join('brand b','b.brand_id = p1.brand_id');	
		$this->db->join('product_elements_attributes pe','pe.product_id=p1.product_id');	
		$this->db->where('p1.variant_code IS NULL'); 	
		$this->db->where_in('p1.product_id',$productsid); 	
		
		$query2	= $this->db->get_compiled_select();
		
		$query = $this->db->query($query1 . ' UNION ALL ' . $query2 .' '. $sort_by );
		$result = $query->result_array();
		//$result = $this->db->get()->result_array();		
		//echo $this->db->last_query();
		return $result;
	}

	/*** POPULER CATEGORY : TOP 10 */
	public function popularProductByCategory($data){
		$category_id		= $data['category_id'];
		$cat_short_code 	= $data['cat_short_code'];
		$brands 			= $data['brands'];
		if($cat_short_code != null || $cat_short_code != ""){
			$cat_cond['short_code'] 	= $cat_short_code;
			$result1					= $this->where('category',$cat_cond);
			$parent_cat_id				= $result1[0]['category_id'];
			$this->db->where('p.category_id',$parent_cat_id);			
		}
		
		if($brands != null){
			$this->db->where_in("p.brand_id", $brands);
		}
		$this->db->select('DISTINCT(p.product_id) as product_id, p.product_name as product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name,count(o.product_id) as total');
		$this->db->from('product_details p');
		$this->db->join('order_details o','o.product_id=p.product_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');	
		$this->db->join('product_elements_attributes pe','pe.product_id=p1.product_id');	
		$this->db->where('p.child_category',$category_id);
		$this->db->order_by('total','desc');
		$this->db->group_by('o.product_id');	
		$result = $this->db->get()->result_array();
		
		if(empty($result)){
			$this->db->select('DISTINCT(p.product_id) as product_id, p.product_name as product_name, p.short_code, p.net_price as net_price, p.cover_img,p.mrp_price,p.discount,p.variant_code,b.brand_name');
			$this->db->from('product_details p');
			$this->db->join('brand b','b.brand_id = p.brand_id');		
			$this->db->where('p.child_category',$category_id);
			$this->db->where('p.is_active',1);
			$this->db->order_by('p.product_id','desc');
			$this->db->group_by('p.child_category');	
			$result = $this->db->get()->result_array();
		}
		return $result;
	}

	/***** VERIFY CUSTOMER MOBILE */
	public function check_mobile($data){
		$mobile 					= $data['mobile'];
		$customer_id				= $data['customer_id'];
		$this->db->select('*');
		$this->db->from('customer_detail');
		$this->db->where('customer_id !=',$customer_id);
		$this->db->where('mobile',$mobile);
		$res = $this->db->get()->result_array();
		return $res;
	}

	/***** VERIFY CUSTOMER EMAIL */
	public function check_email($data){
		$email 						= $data['email'];
		$customer_id 				= $data['customer_id'];
		$this->db->select('*');
		$this->db->from('customer_detail');
		$this->db->where('customer_id !=',$customer_id);
		$this->db->where('email',$email);
		$res = $this->db->get()->result_array();
		return $res;
	}

	public function shopByAge($data){
		$cat_short_code 	= $data['cat_short_code'];		
	}
}