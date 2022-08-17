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
		$this->db->select('p.product_id, p.product_name, p.product_code, p.short_description, v.name, p.vendor_id, v.company, p.brand_id, b.brand_name, p.category_id, c.category_name, p.mrp_price, p.discount, p.net_price, p.image, p.is_new_product, p.is_popular_product, p.is_feature_product');
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
	
	//Get product all details
	public function getAllProductDetails($product_id){
		$this->db->select('p.product_id, p.product_name, p.product_code, p.short_code, p.short_description, p.description, p.vendor_id, v.company, c.category_id, c.category_name, p.brand_id, b.brand_name, p.mrp_price, p.discount, p.net_price, p.tax, p.image, s.stock_id, s.onhand_quantity, p.is_new_product, p.is_popular_product,p.is_feature_product');
		$this->db->from('product_details p');
		$this->db->join('vendor v','v.vendor_id = p.vendor_id');
		$this->db->join('category c','c.category_id = p.category_id');
		$this->db->join('brand b','b.brand_id = p.brand_id');
		//$this->db->join('group_unit gu','gu.group_unit_id = p.group_unit_id');
		$this->db->join('stock s','s.product_id = p.product_id');
		$this->db->where('p.product_id',$product_id);
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
	public function getOrderData($order_id)
	{
		$this->db->select('o.order_id, o.bill_id, b.first_name as b_first_name, b.last_name as b_last_name, b.email as b_email, b.mobile as b_mobile, b.address as b_address, b.city as b_city, b.state as b_state, b.pincode as b_pincode, b.country as b_country, o.customer_id, c.first_name as c_first_name, c.last_name as c_last_name, c.email, o.order_number, o.total_quantity, o.total_amount, o.ship_amount, o.gst_amount, o.grand_total, o.order_date, o.delivery_status_id, s.delivery_status, i.invoice_number, i.invoice_date, i.invoice_file');
		$this->db->from('orders o');
		$this->db->join('customer_detail c','c.customer_id = o.customer_id');
		$this->db->join('bill_address b','b.bill_id = o.bill_id');
		$this->db->join('delivery_status s','s.delivery_status_id = o.delivery_status_id');
		$this->db->join('invoice_details i','i.order_id = o.order_id');
		$this->db->where("o.order_id",$order_id);
		$query = $this->db->get();
		return $query->row_array();
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
		$this->db->select('od.*,p.product_name');
		$this->db->from('order_details od');
		$this->db->join('product_details p','p.product_id=od.product_id');
		$this->db->where('od.order_id',$order_id);
		$result = $this->db->get()->result_array();
		return $result;
	}

	/*** ordercheckout*/
	
}	