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
		$this->db->select('customer_id, customer_name, gender, email, mobile');
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

	//Category list
	public function categoryList()
	{
		$this->db->select('category_id, category_name, description, category_image');
		$this->db->from('category');
		$this->db->where('parent_category_id',0);
		$this->db->where('is_active',1);
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	//Child Category list
	public function childCategoryList($category_id)
	{
		$this->db->select('category_id, category_name, description, category_image');
		$this->db->from('category');
		$this->db->where('parent_category_id',$category_id);
		$this->db->where('is_active',1);
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
   			$this->db->where("p.category_id", $category_id);
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
		//$this->db->join('group_unit gu','gu.group_unit_id = p.group_unit_id');
		// $this->db->join('stock s','s.product_id = p.product_id');
		//$this->db->where('p.product_id',$product_id);
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	
	
	
	/*Api function End*/




	//Menu list with menu posssition by asc order
	function getRoleWiseMenu($role_id)
	{
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
	
	//get latest product 
	public function getLatestProduct(){
		$this->db->select('p.product_id, p.product_name, p.short_code, p.image, gu.unit, p.net_price');
		$this->db->from('product_details p');
		$this->db->join('group_unit gu','gu.group_unit_id = p.group_unit_id');
		$this->db->where('p.is_active',1);
		$this->db->order_by('p.product_id','desc');
		$this->db->limit('6');
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	//get related product 
	public function getRelatedProduct($brand_id,$product_id){
		$this->db->select('p.product_id, p.product_name, p.short_code, p.image, gu.unit, p.net_price');
		$this->db->from('product_details p');
		$this->db->join('group_unit gu','gu.group_unit_id = p.group_unit_id');
		$this->db->where('p.brand_id',$brand_id);
		//$this->db->where("p.product_id != $product_id");
		$this->db->where('p.is_active',1);
		$this->db->order_by('p.product_id','desc');
		$this->db->limit('4');
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	//product details get 
	public function getProductDetails($product_short_code){
		$this->db->select('p.product_id, p.product_name, p.product_code, p.short_code, p.short_description, p.description, c.category_name, p.brand_id, b.brand_name, gu.unit, p.reach_in, p.mrp_price, p.discount, p.net_price, p.tax, p.image, p.meta_title, p.meta_description, p.meta_keyword, s.stock_id, s.onhand_quantity');
		$this->db->from('product_details p');
		$this->db->join('category c','c.category_id = p.category_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->join('group_unit gu','gu.group_unit_id = p.group_unit_id');
		$this->db->join('stock s','s.product_id = p.product_id');
		$this->db->where('p.short_code',$product_short_code);
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	//get all product 
	public function getAllProduct($category_id){
		$this->db->select('p.product_id, p.product_name, p.short_code, p.image, gu.unit, p.net_price');
		$this->db->from('product_details p');
		$this->db->join('group_unit gu','gu.group_unit_id = p.group_unit_id');
		
		if(isset($category_id) && strlen(trim($category_id))>0)
		{
   			$this->db->where("p.category_id", $category_id);
   		}
		
		$this->db->where('p.is_active',1);
		$this->db->order_by('p.product_id','desc');
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	//get cart details  
	public function getCartDetails(){
		$this->db->select('c.cart_id, p.product_id, p.product_name, p.image, p.quantity, p.net_price');
		$this->db->from('customer_cart p');
		$this->db->from('product_details p');
		$this->db->join('group_unit gu','gu.group_unit_id = p.group_unit_id');
		$this->db->where('p.is_active',1);
		$this->db->order_by('p.product_id','desc');
		$this->db->limit('6');
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
		$this->db->select('o.*, o.bill_id,s.delivery_status,ca.*,c.customer_name as cust_name,c.mobile as cust_phone,c.email as cust_email');
		$this->db->from('orders o');
		$this->db->join('customer_detail c','c.customer_id = o.customer_id');
		$this->db->join('customer_address ca','ca.customer_id = o.customer_id');
		$this->db->join('delivery_status s','s.delivery_status_id = o.delivery_status_id');
		$this->db->where("o.order_id",$order_id);
		$this->db->where("ca.set_default",1);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	
	//function for get Order product details
	public function getOrderProductDetails($order_id)
	{
		$this->db->select('o.product_id, p.product_name, p.short_description, o.quantity, o.net_price, p.image');
		$this->db->from('order_details o');
		$this->db->join('product_details p', 'p.product_id = o.product_id');
		$this->db->where("o.order_id",$order_id);
		$query = $this->db->get();
		return $query->result_array();
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
	
	//Brand name wise product count
	public function getBrandTotalProduct($brand_id=null,$collection_id=null){
		if(!empty($brand_id) && $brand_id != null){
			$this->db->where('p.brand_id',$brand_id);
		}
		if(!empty($collection_id) && $collection_id != null){
			$this->db->where('p.collection_id',$collection_id);
		}
		$this->db->select('count(p.product_id) as brand_total_product, p.brand_id, b.brand_name');
		$this->db->from('product_details p');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		$this->db->where('p.is_active', 1);
		$this->db->where('b.is_active', 1);
		$this->db->order_by('b.brand_name','ASC');
		$this->db->group_by('p.brand_id');
		$query=$this->db->get()->result_array();
		return $query;
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
		$this->db->select('od.*,p.cover_img,o.shipping_address,o.order_number');
		$this->db->from('order_details od');
		$this->db->join('orders o','o.order_id=od.order_id','left');
		$this->db->join('product_details p','p.product_id=od.product_id');
		$this->db->where('od.order_id',$order_id);
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
		
		$result = $this->db->get()->result_array();
		return $result;
	}

	
	//get Product filter data
	public function getFilterData($filter,$rowperpage, $rowno){
		$this->db->select('p.product_id, p.product_name, p.short_code, p.short_description, p.net_price, p.cover_img,p.mrp_price,p.discount');
		$this->db->from('product_details p');
		$this->db->where('p.is_active', 1);
		
		//For category
		if(isset($filter['category']) && strlen(trim($filter['category']))>0)
		{
   			$this->db->where("p.category_id", $filter['category']);
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
   		
		$this->db->order_by('p.product_id desc');
		
		
   		if(strlen(trim($rowperpage))>0 && strlen(trim($rowno))>0)
		{
			$this->db->limit($rowperpage, $rowno);
   		}
		$query=$this->db->get()->result_array();
	
		return $query;
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
				$cat_name[$i] 				= $res[0]['category_name'];	
				$i++;		
			}
			$data = $cat_name;
		}
		return $data;
	}

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
				$attributes_id 				= explode(',', $row['attributes_id']);
				$attr_arr = array();
				
				if(!empty($attributes_id)){
					
					foreach($attributes_id as $attr){
						$whr['attributes_id'] 	= $attr;
						$attr_res 				= $this->where('attributes',$whr);
						$attr_name = $attr_res[0]['attributes_name'];
						$attr_arr[] = $attr_name;	
					}
				}
				
				$elements[$element_name] 	= implode(',',$attr_arr);
			}
		}
		return $elements;
	}
	

	public function addTocart_xx($data){

		{
			$product_id 			= $data['product_id'];
			$quantity   			= $data['quantity'];
			$where['product_id'] 	= $product_id;
			$result   				= $this->where('product_details',$where);
			$product_name   		= $result[0]['product_name'];
			$net_price   			= $result[0]['net_price'];
			$mrp_price   			= $result[0]['mrp_price'];
			$discount    			= $result[0]['discount'];
			$discount_amt    		= $result[0]['discount_amt'];
			$gst   					= $result[0]['tax'];
			$gst_amt   				= $result[0]['gst_amt'];
			$cover_img   			= $result[0]['cover_img'];
			
			if($quantity == NULL || $quantity == "")
			{
				$quantity = 1;
			}

			$final_amount 				= $net_price * $quantity;
			$customer_id 				= $data['customer_id'];
			$item['customer_id'] 		= $customer_id;
			$item['product_id'] 		= $product_id;
			$res 						= $this->where('customer_cart',$item);
			
			if(!empty($res)){
				
				$old_qty   			= $res[0]['quantity'];
				$final_qty 			= $quantity + $old_qty;
				$id['cart_id'] 		= $res[0]['cart_id'];
				$final_amount 		= $net_price * $final_qty;
				$update = array(
					'quantity'=>$final_qty,
					'total_amt'=>$final_amount
				);

				$update_query = update('customer_cart',$update,$id);	
				logThis($update_query->query, date('Y-m-d'),'Customer Cart');
				if($update_query->status == "success")
				{	
					$response['success'] = "suceess";
					$response['message'] = "You have this item in your cart and we have increased the quantity by 1";
					return $response;
				}else{
					return false;
				}					
			}
			else
			{
				
				$insertdata['customer_id'] 		= $customer_id;
				$insertdata['product_id'] 		= $product_id;
				$insertdata['product_name'] 	= $product_name;
				$insertdata['quantity'] 		= $quantity;
				$insertdata['net_price'] 		= $net_price;
				$insertdata['total_amt'] 		= $final_amount;
				$insertdata['mrp'] 				= $mrp_price;
				$insertdata['discount'] 		= $discount;
				$insertdata['discount_amt'] 	= $discount_amt;
				$insertdata['gst'] 				= $gst;
				$insertdata['gst_amt'] 			= $gst_amt;
				$insertdata['image'] 		= $cover_img;

				$insert_result = insert('customer_cart',$insertdata,'');
				logThis($insert_result->query, date('Y-m-d'),'Customer Cart');
				
				if($insert_result->status = 'success'){
					$response['success'] = "suceess";
					$response['message'] = "Added to cart";
					return $response;
				}else{
					return false;
				}			
				
			}
		}


	}

	public function addTocart($data){

		$product_id 			= $data['product_id'];
		$quantity   			= $data['quantity'];
		$customer_id 			= $data['customer_id'];
		if($quantity == NULL || $quantity == "")
		{
			$quantity = 1;
		}
					
		$item['customer_id'] 		= $customer_id;
		$item['product_id'] 		= $product_id;
		$res 						= $this->where('customer_cart',$item);
		
		if(!empty($res)){
			
			$old_qty   			= $res[0]['quantity'];
			$final_qty 			= $quantity + $old_qty;
			$id['cart_id'] 		= $res[0]['cart_id'];
			$update = array(
				'quantity'=>$final_qty,
			);

			$update_query = update('customer_cart',$update,$id);	
			logThis($update_query->query, date('Y-m-d'),'Customer Cart');
			if($update_query->status == "success")
			{	
				$response['success'] = "suceess";
				$response['message'] = "You have this item in your cart and we have increased the quantity by 1";
				return $response;
			}else{
				return false;
			}					
		}
		else
		{
			
			$insertdata['customer_id'] 		= $customer_id;
			$insertdata['product_id'] 		= $product_id;
			$insertdata['quantity'] 		= $quantity;			

			$insert_result = insert('customer_cart',$insertdata,'');
			logThis($insert_result->query, date('Y-m-d'),'Customer Cart');
			
			if($insert_result->status = 'success'){
				$response['success'] = "suceess";
				$response['message'] = "Added to cart";
				return $response;
			}else{
				return false;
			}			
			
		}
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
		$this->db->select('*');
		$this->db->from('customer_cart');
		$this->db->where('customer_id',$customer_id);
		if(!empty($product_arr)){
			$this->db->where_in('product_id',$product_arr);
		}		
		$query = $this->db->get()->result_array();
		return $query;
	}

	/***get whishlist product detail */
	public function getWishListItem($customer_id){
		$this->db->select('w.*,p.product_name,short_code,p.net_price,p.mrp_price,p.discount,p.cover_img');
		$this->db->from('whish_list w');
		$this->db->join('product_details p','p.product_id = w.product_id');
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function getCustomerCartItems($customer_id){
		$this->db->select('c.*,p.*');
		$this->db->from('customer_cart c');
		$this->db->join('product_details p','p.product_id = c.product_id');
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function addOrder($customer_id){
		$cart_data			= $this->getCustomerCartItems($customer_id);
		$payment_type 		= $this->input->post('payment_type');
		
		if(!empty($cart_data)){
			
			$whr['customer_id'] 	= $customer_id;
			$whr['set_default'] 	= 1;
			$address_res 			= $this->Master_m->where('customer_address',$whr);
			$shipping_address       = "";
			if(!empty($address_res)){
				$name 			= $address_res[0]['first_name'].' '.$address_res[0]['last_name'];
				$mobile 		= $address_res[0]['mobile'];
				$address 		= $address_res[0]['address'].' ,<br>'.$address_res[0]['city'].' , '.$address_res[0]['state'].' ,<br>'.$address_res[0]['country'].' - '.$address_res[0]['pincode'];
				$shipping_address 	= '<strong>'.$name.'</strong><br>'.$address.'<br>Phone no : '.$mobile; 
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
			$random_number 		= rand_number();
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

			$insert_result = insert('orders',$order_data,'');				
			logThis($insert_result->query, date('Y-m-d'),'Order');
			$order_id = $insert_result->id;
			
			if($insert_result->status = 'success') {
				foreach($cart_data as $row){
					$quantity	= $row['quantity'];
					$net_price	= $row['net_price'];
					$total		= ($net_price * $quantity);
					
					$order_detail['order_id'] 		= $order_id;
					$order_detail['product_id'] 	= $row['product_id'];
					$order_detail['product_name'] 	= $row['product_name'];
					$order_detail['quantity'] 		= $row['quantity'];
					$order_detail['net_price'] 		= $row['net_price'];
					$order_detail['mrp_price'] 		= $row['mrp_price'];
					$order_detail['total_amt'] 		= $total;
					$order_detail['discount'] 		= $row['discount'];
					$order_detail['return_or_replace'] 		= $row['return_or_replace'];
					$order_detail['discount_amt'] 	= ($row['discount_amt'] * $quantity);
					$order_detail['gst'] 			= $row['tax'];
					$order_detail['gst_amt'] 		= $row['gst_amt'];
	
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
				return $order_id;
			}
			else{
				return false;
			}
			
		}
	}

	public function updateProductStock($product_id,$product_qty){
		$this->db->select('*');
		$this->db->from('stock_details');
		$this->db->where('product_id',$product_id);
		$this->db->order_by('stock_details_id','desc');
		$query = $this->db->get()->result_array();
		if(!empty($query)){
			$old_stock = $current_stock = $query[0]['current_stock'];
			$new_stock = $current_stock - $product_qty;
	
			$insertdata['product_id'] 		= $product_id;
			$insertdata['old_stock'] 		= $old_stock;
			$insertdata['current_stock']	= $new_stock;
			$insertdata['status']			= 0;
	
			$insert_stock = insert('stock_details',$insertdata,'');				
			logThis($insert_stock->query, date('Y-m-d'),'Stock Detail');
	
			$whr['product_id']			= $product_id;
			$update['stock']			= $new_stock;
			$update_result 				= update('product_details',$update,$whr);
			logThis($update_result->query, date('Y-m-d'),'Product');
			return true;
		}	
		return false;
	}

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

	/*** CREATE ORDERLIST HTML  */
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

				$html	.='<div class="col-md-4">
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

	public function generateInvoice($order_id){
		// ORDER DATA
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('order_id',$order_id);
		$orderdata = $this->db->get()->result_array();
		
		$customer_id 	= $orderdata[0]['customer_id'];
		$order_number 	= $orderdata[0]['order_number'];
		$file_path 		= INVOICE_PDF_PATH.'/'.$customer_id.'/';
		$file_name 		= $order_number.'.pdf';

		// ORDER PRODUCT DETAIL
		$this->db->select('*');
		$this->db->from('order_details');
		$this->db->where('order_id',$order_id);
		$orderproductDetail = $this->db->get()->result_array();

		$data['orderdata'] 	= $orderdata;
		$data['productdata'] = $orderproductDetail;
		$html1  = $this->load->view('UI/Invoice_v',$data);
		$html = $this->output->get_output($html1);
		// $html1 = $this->load->view('UI/Invoice_v');
		// $html = $this->output->get_output($html1);
		createPdf($file_path,$file_name,$html);
		return true;
	}
}	