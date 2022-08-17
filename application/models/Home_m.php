<?php
class Home_m extends CI_Model
{

	public function where($table,$data){
		$this->db->where($data);
		$query=$this->db->get($table)->result_array();
		return $query;
	}
	
	//function for getting Product
	public function getProductsDetail($product_sku)
	{
		$this->db->select('p.product_id, p.product_sku, p.product_name, p.short_description, p.description, p.why_product, p.more_info, p.tag, p.mrp_price, p.discount, p.net_rate, p.group_id, p.group_unit_id, i.p_image');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i','i.product_id = p.product_id');
		$this->db->where('p.product_sku',$product_sku);
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	//function for getting new Product list Data for homepage (8 product)
	public function getNewProductsDetails()
	{
		$this->db->select('p.product_id, p.product_sku, p.product_name, p.short_description, i.p_image, u.unit');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i', 'i.product_id = p.product_id');
		$this->db->join('kf_group_unit u', 'u.group_unit_id = p.group_unit_id');
		$this->db->where("p.new_product",1);
		$this->db->where("p.product_status",1);
		$this->db->where("i.p_image_status",1);
		$this->db->group_by("p.product_id");
		//$this->db->order_by('p.product_id',"DESC");
		$this->db->limit(RECORD_PER_PAGE);
		$query = $this->db->get();
		return $query->result_array();
	}

	//function for getting new Product list Data for homepage (8 product)
	/*public function getNewProductsDetails()
	{
		$this->db->select('p.product_id, p.product_name,p.short_description, p.description,p.category_id, p.mrp_price, p.net_rate, p.new_product, p.product_status, i.p_image');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i', 'i.product_id = p.product_id');
		//$this->db->join('hm_product_review r', 'r.product_id = p.product_id','left');
		$this->db->where("p.new_product",1);
		$this->db->where("p.product_status",1);
		$this->db->where("i.p_image_status",1);
		$this->db->group_by("p.product_id");
		$this->db->order_by('p.product_id',"DESC");
		$this->db->limit(RECORD_PER_PAGE);
		$query = $this->db->get();
		return $query->result_array();
	}*/
	
	//Function for delete cart items
	public function deleteCartRecord($table,$product_id,$customer_id)
	{
		$this->db->where('product_id',$product_id);
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->delete($table);
		return $query;
	}

	//function for get product Data in details
	public function getProductDetails($product_id)
	{
		$this->db->select('p.product_id, p.product_sku, p.product_name, p.description, p.short_description, p.tag, p.mrp_price, p.discount_a, p.discount_unit_a, p.net_rate, p.sub_code, p.priority, p.type, p.height, p.width, p.guage, p.thickness, p.size, p.kg, p.tax_category, p.order_taking, p.meta_title, p.meta_keyword, p.meta_description, p.new_product, p.featured_product, p.product_status, st.stock_onhand_quantity, i.p_image_id, i.p_image, i.image_alter_text, c.category_name, count(r.review_point) as total_rating, avg(r.review_point) as avg_rating');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i', 'i.product_id = p.product_id');
		//$this->db->join('fp_product_brand b', 'b.brand_id = p.brand_id');
		$this->db->join('kf_product_category c', 'c.category_id = p.category_id');
		//$this->db->join('fp_subcategory s', 's.subcategory_id = p.subcategory_id');
		$this->db->join('hm_stock_details st', 'st.product_id = p.product_id');
		$this->db->join('hm_product_review r', 'r.product_id = p.product_id','left');
		$this->db->where("p.product_id",$product_id);
		//$this->db->where("p.product_status",1);
		$this->db->where("i.p_image_status",1);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	
	//function for get Category details by category id
	public function getCategoryDetail($category_id)
	{
		$this->db->select('*');
		$this->db->from('kf_product_category');
		$this->db->where("category_id",$category_id);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	//function to get all Categories
	public function getAllCategories()
	{
		$this->db->select('category_id,category_name,short_description,description,category_icon,category_image,new_category,featured_category,category_status');
		$this->db->from('kf_product_category');
		$this->db->where("category_status",1);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	//function to get all Bank Details
	public function getAllBankDetails()
	{
		$this->db->select('*');
		$this->db->from('hm_bank_details');
		$this->db->where("is_active",1);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	//function to get all active blog
	public function getAllBlog()
	{
		$this->db->select('*');
		$this->db->from('kf_blog');
		$this->db->where("is_active",1);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	//function to get all active Testimonial
	public function getAllTestimonial()
	{
		$this->db->select('*');
		$this->db->from('kf_testimonial');
		$this->db->where("is_active",1);
		$this->db->limit(8);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	//function to get blog details
	public function getBlogDetails($blog_title)
	{
		$this->db->select('*');
		$this->db->from('kf_blog');
		//$this->db->where("blog_id",$id);
		$this->db->where("blog_title",$blog_title);
		$this->db->where("is_active",1);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	//function to get all active blog
	public function getLikeBlogDetails($blog_title)
	{
		$this->db->select('*');
		$this->db->from('kf_blog');
		//$this->db->where("blog_id !=",$id);
		$this->db->where("blog_title !=",$blog_title);
		$this->db->where("is_active",1);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	//function to get blog comments
	public function getBlogComments($blog_id)
	{
		$this->db->select('blog_comment_id, customer_name, blog_comment_point, blog_comment_description, blog_comment_add_date');
		$this->db->from('kf_blog_comment');
			$this->db->where("blog_id",$blog_id);
		$this->db->where("blog_comment_status",1);
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	//function to get all products list data of a same category
	public function getCategorisedProducts($category_id, $start)
	{
		$this->db->select('p.product_id, p.product_name, p.mrp_price, p.net_rate, p.new_product, p.product_status, i.p_image');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i', 'i.product_id = p.product_id');
		//$this->db->join('hm_product_review r', 'r.product_id = p.product_id','left');
		$this->db->where('p.category_id',$category_id);
		$this->db->where("p.product_status",1);
		//$this->db->where("i.p_image_status",1);
		$this->db->group_by("p.product_id");
		$this->db->order_by('p.product_id',"DESC");
		$this->db->limit(RECORD_PER_PAGE,$start);
		$query = $this->db->get();
		return $query;
	}
	//function for get existing Customer record detail 
	public function checkCustomerDetail($condition)
	{
		$this->db->select('customer_id, mobile_no,email_id,customer_code');
		$this->db->from('hm_customer_details');
		$this->db->where('mobile_no',$condition['mobile']);
		$this->db->or_where('email_id',$condition['email']);

		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			$data = $query->row_array();
			Return $data;
		}
		else
		{
			return false;
		}
	}
	
	//Read data using mobile no and password
	public function customerMobileLogin($mobile_email,$password)
	{
		$this->db->select('*');
		$this->db->from('kf_customer_details');
		$this->db->where('mobile_no',$mobile_email);
		$this->db->where('password LIKE binary',$password);
		$this->db->where('customer_status',1);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	
	//Read data using emailId and password
	public function customerEmailLogin($mobile_email,$password)
	{
		$this->db->select('*');
		$this->db->from('kf_customer_details');
		$this->db->where('email_id LIKE binary',$mobile_email);
		$this->db->where('password LIKE binary',$password);
		$this->db->where('customer_status',1);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	
	//Read data using emailId 
	public function customerMobileDetails($mobile_email)
	{
		$this->db->select('*');
		$this->db->from('kf_customer_details');
		$this->db->where('mobile_no',$mobile_email);
		$this->db->where('customer_status',1);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	
	//Read data using emailId 
	public function customerEmailDetails($mobile_email)
	{
		$this->db->select('*');
		$this->db->from('kf_customer_details');
		$this->db->where('email_id LIKE binary',$mobile_email);
		$this->db->where('customer_status',1);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	
	//Read data using emailId 
	public function customerDetails($email)
	{
		$this->db->select('*');
		$this->db->from('kf_customer_details');
		$this->db->where('email_id LIKE binary',$email);
		$this->db->where('customer_status',1);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	//get customer Order details 
	public function customerOrderDetails($customer_id){
		$this->db->select('o.order_id, o.order_number, o.quantity, o.amount, o.order_date, s.delivery_status, i.p_image, inv.invoice_number, inv.invoice_file');
		$this->db->from('kf_order o');
		$this->db->join('kf_order_details od','od.order_id = o.order_id');
		$this->db->join('kf_product_details p','p.product_id = od.product_id');
		$this->db->join('kf_product_images i','i.product_id = p.product_id');
		$this->db->join('kf_invoice_details inv','inv.order_id = o.order_id');
		$this->db->join('kf_delivery_status s','s.delivery_status_id = o.delivery_status_id');
		$this->db->where('o.customer_id',$customer_id);
		$this->db->where('o.status_order',1);
		$this->db->group_by('o.order_id');
		$this->db->order_by('o.order_id desc');
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	
	public function getCustData($emailId)
	{
		$this->db->select('*');
		$this->db->from('hm_customer_details u');
		$this->db->where("email_id",$emailId);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	public function getCartProductDetails($product_id)
	{
		$this->db->select('p.product_id, p.product_sku, p.product_name, p.category_id, p.net_rate, i.p_image_id, i.p_image');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i', 'i.product_id = p.product_id');
		$this->db->where("p.product_id",$product_id);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function getEmailData($title)
	{
		$this->db->select('*');
		$this->db->from('kf_email_details');
		$this->db->where('email_for', $title);
		$query = $this->db->get();
		return $query->row_array();
	}
	//function for get Customer details
	public function getCustomerDetail($customer_id)
	{
		$this->db->select('*');
		$this->db->from('kf_customer_details');
		$this->db->where("customer_id",$customer_id);
		$query = $this->db->get();
		return $query->result();
	}
	public function checkEmailString($string)
	{
		$this->db->select('*');
		$this->db->from('hm_verify_email');
		$this->db->where("link",$string);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	public function checkPhoneOtp($cond)
	{
		$this->db->select('*');
		$this->db->from('hm_verify_phoneno');
		$this->db->where($cond);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	//function for get Customer Address details
	public function getAddrDetail($customer_id)
	{
		$this->db->select('*');
		$this->db->from('hm_address');
		$this->db->where("customer_id",$customer_id);
		$this->db->where("address_status",1);
		//$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
		
		/*if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}*/
	}
	//function for get Customer Address details
	public function getShipAddrDetail($customer_id)
	{
		$this->db->select('*');
		$this->db->from('hm_address');
		$this->db->where("customer_id",$customer_id);
		$this->db->where("address_status",1);
		$this->db->where("address_type","shipping");
		//$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
		
		/*if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}*/
	}
	//function for get Customer Address details
	public function getBillAddrDetail($customer_id)
	{
		$this->db->select('*');
		$this->db->from('hm_address');
		$this->db->where("customer_id",$customer_id);
		$this->db->where("address_status",1);
		$this->db->where("address_type","billing");
		//$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
		
		/*if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}*/
	}
	public function updateCustomerDetails($condition,$set)
	{
		$this->db->set($set);
		$this->db->where($condition);
		$this->db->update("kf_customer_details",$set);
	}
	public function updateAddressDetails($data, $address_id)
	{
		$this->db->set($data);
		$this->db->where("address_id",$address_id);
		$this->db->update("hm_address",$data);
	}
	public function updateCustomerCart($condition,$set)
	{
		$this->db->set($set);
		$this->db->where($condition);
		$this->db->update("kf_customer_cart",$set);
	}
	public function updateOrderDetails($condition,$set)
	{
		$this->db->set($set);
		$this->db->where($condition);
		$this->db->update("hm_order",$set);
	}
	public function deleteEmailString($id)
	{
		$this->db->where('customer_id', $id);
		$this->db->delete('hm_verify_email');
	}
	public function deletePhoneOtp($id)
	{
		$this->db->where('customer_id', $id);
		$this->db->delete('hm_verify_phoneno');
	}
	public function deleteCartItem($condition)
	{
		$this->db->where($condition);
		$this->db->delete('hm_customer_cart');
	}
	public function deleteUserAddrs($condition)
	{
		$this->db->where($condition);
		$this->db->delete('hm_address');
	}
	public function getLastId($col_id,$table)
	{
		$last = $this->db->query("SELECT MAX($col_id) AS id FROM $table;");
		$last_id = $last->result();
		return $last_id[0]->id;

	}
	//function for get customer Order product details
	public function getCustomerOrderList($customer_id)
	{
		$this->db->select('order_id, order_number, customer_id, address_id, total_order_quantity, order_amount,discounted_order_amount, order_date, delivery_status, reason, order_status');
		$this->db->from('hm_order');
		$this->db->where("customer_id",$customer_id);
		$this->db->order_by('order_id',"DESC");
		$query = $this->db->get();
		return $query->result_array();
	}
	//function for get customer Cart details
	public function getCartProducts($condition)
	{
		$this->db->select('*');
		$this->db->from('hm_customer_cart');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result_array();
	}
	//function for get last insert Order details
	public function getOrderDataById($order_id)
	{
		$this->db->select('*');
		$this->db->from('hm_order');
		$this->db->where("order_id",$order_id);
		$query = $this->db->get();
		return $query->row_array();
	}
	//function for get Order product details
	public function getOrderProductData1($order_id)
	{
		//$this->db->select('o.product_id,p.product_id, p.product_sku, p.product_name, p.description, p.short_description, p.tag, p.mrp_price, p.discount_a, p.discount_unit_a, p.net_rate, p.sub_code, p.priority, p.type, p.height, p.width, p.guage, p.thickness, p.size, p.kg, p.tax_category, p.order_taking, p.meta_title, p.meta_keyword, p.meta_description, p.new_product, p.featured_product, p.product_status, o.product_quantity, o.mrp_price, o.net_rate, o.total_amount, o.bill, i.p_image, count(r.review_point) as total_rating, avg(r.review_point) as avg_rating');
		$this->db->select('*');
		$this->db->from('hm_order_details o');
		$this->db->join('kf_product_details p', 'p.product_id = o.product_id');
		$this->db->join('kf_product_images i', 'i.product_id = p.product_id');
		$this->db->join('hm_product_review r', 'r.product_id = p.product_id','left');
		$this->db->where("o.order_id",$order_id);
		$this->db->group_by("p.product_id");
		$this->db->order_by('o.product_id',"DESC");
		$query = $this->db->get();
	//			print_r($this->db->last_query());die;

		return $query->result_array();
	}
	public function getOrderedProductDetails($order_id)
	{
		$this->db->select('*');
		$this->db->from('hm_order_details o');
		$this->db->where("o.order_id",$order_id);
		$this->db->order_by('o.product_id',"DESC");
		$query = $this->db->get();
	//			print_r($this->db->last_query());die;

		return $query->result_array();
	}
	public function getAddressById($address_id)
	{
		$this->db->select('*');
		$this->db->from('hm_address');
		$this->db->where("address_id",$address_id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function getProducts($condition)
	{
		$this->db->select('*');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i', 'i.product_id = p.product_id');
		$this->db->where($condition);
		$this->db->order_by('p.product_id',"DESC");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getDatafromTable($select,$table,$condition)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($condition);
		$query = $this->db->get();

		if ($query->num_rows() >0) {
			return $query->result();
		} else {
			return false;
		}
	}
	public function getAllOfferData()
	{
		$this->db->select('*');
		$this->db->from('hm_offers');
		$this->db->where("offer_status",1);
		$this->db->order_by('offer_id', 'DESC');
		$query = $this->db->get();

		if($query->num_rows() >0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function getCouponById($CouponId)
	{
		$this->db->select('*');
		$this->db->from('hm_offers');
		$this->db->where("offer_id",$CouponId);
		$query = $this->db->get();
		return $query->row_array();
	}
	//function for get Review details
	public function getReviewDetail($product_id)
	{
		$this->db->select('r.*, c.customer_name, p.product_name');
		$this->db->from('hm_product_review r');
		$this->db->join('hm_customer_details c', 'c.customer_id = r.customer_id');
		$this->db->join('kf_product_details p', 'p.product_id = r.product_id');
		$this->db->where("r.product_id",$product_id);
		$query = $this->db->get();

		return $query->result();
	}
	public function getPurchasedProduct($customer_id)
	{
		$this->db->select('product_id');
		$this->db->from('hm_order_details od');
		$this->db->join('hm_order o', 'o.order_id = od.order_id','left');
		$this->db->where("o.customer_id",$customer_id);
		$this->db->group_by("od.product_id");
		$this->db->order_by('od.product_id',"DESC");
		$query = $this->db->get();
		return $query->result_array();
	}
	//function for get On hand product stock data from data base
	public function getOnHandQty($product_sku)
	{
		$this->db->select('*');
		$this->db->from('hm_stock_details s');
		$this->db->where("stock_product_sku",$product_sku);
		$this->db->limit(1);
		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}
	//Function for Update single Stock details
	public function updateStockDetails($data,$stock_id)
	{
		$this->db->set($data);
		$this->db->where("stock_id",$stock_id);
		$this->db->update("hm_stock_details",$data);
		return TRUE;
	}
	
	
	
	
	//is product in wishlist
	public function isWishList($product_id,$customer_id)
	{
		$this->db->select('*');
		$this->db->from('kf_customer_wishlist');
		$this->db->where('product_id',$product_id);
		$this->db->where('customer_id',$customer_id);
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	//customer wishlist
	public function wishlistDetails($customer_id)
	{
		$this->db->select('p.product_id, p.product_sku, p.product_name, p.mrp_price, p.discount, p.net_rate, p.group_id, p.group_unit_id, i.p_image, u.unit');
		$this->db->from('kf_customer_wishlist w');
		$this->db->join('kf_product_details p','p.product_id = w.product_id');
		$this->db->join('kf_product_images i','i.product_id = p.product_id');
		$this->db->join('kf_group_unit u','u.group_unit_id = p.group_unit_id');
		$this->db->where('w.customer_id',$customer_id);
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	//product wise wishlist details
	public function wishlistProductDetails($product_id)
	{
		$this->db->select('p.product_id, p.product_sku, p.product_name, p.mrp_price, p.discount, p.net_rate, p.group_id, p.group_unit_id, i.p_image, u.unit');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i','i.product_id = p.product_id');
		$this->db->join('kf_group_unit u','u.group_unit_id = p.group_unit_id');
		$this->db->where('p.product_id',$product_id);
		$query = $this->db->get()->row();
		return $query;
	}
	
	//Function for delete wish list items
	public function deleteWishListRecord($product_id,$customer_id)
	{
		$this->db->where('product_id',$product_id);
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->delete('kf_customer_wishlist');
		return $query;
	}

	
	//Search Product data
	public function searchProduct($search_val)
	{
		$this->db->select('p.product_id, p.product_sku, p.product_name, p.short_description, p.mrp_price, p.discount, p.net_rate, i.p_image, u.unit');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i','i.product_id = p.product_id');
		$this->db->join('kf_group_unit u','u.group_unit_id = p.group_unit_id');
		$this->db->where('p.product_status',1);
		$this->db->where('p.net_rate >= '.$search_val['first_price']);
		$this->db->where('p.net_rate <= '.$search_val['second_price']);
		
		/*if(!empty($search_val['search_text'])){
			$this->db->like('p.product_name',$search_val['search_text']);
			$this->db->or_like('u.unit',$search_val['search_text']);
		}*/
		
		if(!empty($search_val['category_id'])){
			$this->db->where('p.category_id',$search_val['category_id']);
		}
		
		if(!empty($search_val['search_text'])){
			$this->db->like('p.product_name',$search_val['search_text']);
			$this->db->or_like('u.unit',$search_val['search_text']);
		}
		
		
		//$this->db->where('ps.is_active != "0"');
		//$this->db->group_by('product_name');
		$query=$this->db->get()->result_array();
		return $query;
	}
	
	//Function is used for get Product Group wise unit
	function getProductGroupUnit($group_id)
	{
		$this->db->select("group_unit_id, unit_in, unit");
		$this->db->from('kf_group_unit');
		$this->db->where('group_id',$group_id);
		$this->db->where('group_unit_status',1);
		$query = $this->db->get();
		return $query->result_array();
	}

	
	public function getGroupUnit($group_unit_id)
	{
		$this->db->select('unit');
		$this->db->from('kf_group_unit');
		$this->db->where("group_unit_id",$group_unit_id);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function getProductUnitWise($group_id,$group_unit_id)
	{
		$this->db->select('product_id, product_sku, product_name, short_description, description, mrp_price, discount, net_rate');
		$this->db->from('kf_product_details');
		$this->db->where('group_id',$group_id);
		$this->db->where('group_unit_id',$group_unit_id);
		$query = $this->db->get()->result_array();
		return $query;
	}
	
	
	public function checkCustomerCart($customer_id,$product_id)
	{
		$this->db->select('quantity');
		$this->db->from('kf_customer_cart');
		$this->db->where("customer_id",$customer_id);
		$this->db->where("product_id",$product_id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function customerCartList($customer_id)
	{
		$this->db->select('product_id');
		$this->db->from('kf_customer_cart');
		$this->db->where("customer_id",$customer_id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function checkCustomerWishlist($customer_id,$product_id)
	{
		$this->db->select('wishlist_id');
		$this->db->from('kf_customer_wishlist');
		$this->db->where("customer_id",$customer_id);
		$this->db->where("product_id",$product_id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function productList()
	{
		$this->db->select('p.product_id, p.product_sku, p.product_name, p.short_description, p.description, p.why_product, p.more_info, p.tag, p.mrp_price, p.discount, p.net_rate, p.group_id, p.group_unit_id, i.p_image, u.unit');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_images i','i.product_id = p.product_id');
		$this->db->join('kf_group_unit u','u.group_unit_id = p.group_unit_id');
		$this->db->where('p.product_status',1);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	public function productCategory()
	{
		$this->db->select('p.category_id, c.category_name, count(p.product_id) total_ptoduct');
		$this->db->from('kf_product_details p');
		$this->db->join('kf_product_category c','c.category_id = p.category_id');
		$this->db->where('p.product_status',1);
		$this->db->group_by('p.category_id');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function checkReferral($referral_code)
	{
		$this->db->select('*');
		$this->db->from('kf_customer_details');
		$this->db->where('customer_code',$referral_code);
		$this->db->where('customer_status',1);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getPromoDetails($promo_code)
	{
		$this->db->select('coupon_id, discount_type, coupon_amount, expire_date, minimum_spend, maximum_spend, limit_per_coupon, limit_per_user, products, total_used');
		$this->db->from('kf_coupon');
		$this->db->where('coupon_code like binary',$promo_code);
		$this->db->where('is_active',1);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function getPromoApplyDetails($promo_code,$customer_id)
	{
		$this->db->select('*');
		$this->db->from('kf_order');
		$this->db->where('coupon_code like binary',$promo_code);
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	//Function for Update Coupon details
	public function updatePromoDetails($upData,$coupon_id)
	{
		$this->db->set($upData);
		$this->db->where("coupon_id",$coupon_id);
		$this->db->update("kf_coupon",$upData);
		return TRUE;
	}
	
	
	public function getCustomerWallet($customer_id)
	{
		$this->db->select('coupon_id, discount_type, coupon_amount, expire_date, minimum_spend, maximum_spend, limit_per_coupon, limit_per_user, products, total_used');
		$this->db->from('kf_coupon');
		$this->db->where('coupon_code like binary',$promo_code);
		$this->db->where('is_active',1);
		$query = $this->db->get();
		return $query->row();
	}
	
	//function for get last added order number
	public function getOrderNumber()
	{
		$this->db->select('order_id, order_number');
		$this->db->from('kf_order');
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
		$this->db->from('kf_invoice_details');
		$this->db->order_by('invoice_id', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	//function for get last insert Order details
	public function getLastInsertOrderData($order_id)
	{
		$this->db->select('o.order_number, o.order_date, o.bill_id, o.ship_id, o.quantity, o.amount, o.coupon_code, o.coupon_amount, o.wallet_amount, o.pay_method, s.delivery_status');
		$this->db->from('kf_order o');
		$this->db->join('kf_delivery_status s','s.delivery_status_id = o.delivery_status_id');
		$this->db->where("order_id",$order_id);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	
	
	//function for get Order product details
	public function getOrderProductDetails($order_id)
	{
		$this->db->select('o.product_id, p.product_sku, p.product_name, p.short_description, p.description, p.mrp_price, p.discount, p.net_rate, u.unit, o.quantity, o.amount, o.total_amount, i.p_image');
		$this->db->from('kf_order_details o');
		$this->db->join('kf_product_details p', 'p.product_id = o.product_id');
		$this->db->join('kf_product_images i', 'i.product_id = p.product_id');
		$this->db->join('kf_group_unit u', 'u.group_unit_id = p.group_unit_id');
		$this->db->where("o.order_id",$order_id);
		//$this->db->group_by("p.product_id");
		//$this->db->order_by('o.product_id',"DESC");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//function for get bill address
	public function getBillAddress($bill_id)
	{
		$this->db->select('bill_id, bill_firstname, bill_lastname, bill_company, bill_address1, bill_address2, bill_city, bill_state, bill_zipcode, bill_phone, bill_email');
		$this->db->from('kf_bill_address');
		$this->db->where("bill_id",$bill_id);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	//function for get shp address
	public function getShipAddress($ship_id)
	{
		$this->db->select('ship_id, ship_firstname, ship_lastname, ship_company, ship_address1, ship_address2, ship_city, ship_state, ship_zipcode');
		$this->db->from('kf_ship_address');
		$this->db->where("ship_id",$ship_id);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	//function for get order Email data
	public function getOrderEmailData($title)
	{
		$this->db->select('*');
		$this->db->from('kf_email_details');
		$this->db->where('email_for', $title);
		$query = $this->db->get();
		return $query->row_array();
	}
	
	
	//function for get bill address list
	public function getBillAddressList($customer_id)
	{
		$this->db->select('bill_id, bill_firstname, bill_lastname, bill_company, bill_address1, bill_address2, bill_city, bill_state, bill_zipcode, bill_phone, bill_email');
		$this->db->from('kf_bill_address');
		$this->db->where("customer_id",$customer_id);
		$this->db->where("bill_status",1);
		$this->db->order_by("bill_id desc");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//function for get ship address list
	public function getShipAddressList($customer_id)
	{
		$this->db->select('ship_id, ship_firstname, ship_lastname, ship_company, ship_address1, ship_address2, ship_city, ship_state, ship_zipcode');
		$this->db->from('kf_ship_address');
		$this->db->where("customer_id",$customer_id);
		$this->db->where("ship_status",1);
		$this->db->order_by("ship_id desc");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//Function for Update Bill Address Details
	public function updateBillAddressDetails($data,$bill_id)
	{
		$this->db->set($data);
		$this->db->where("bill_id",$bill_id);
		$this->db->update("kf_bill_address",$data);
		return TRUE;
	}
	
	//Function for Update Ship Address Details
	public function updateShipAddressDetails($data,$ship_id)
	{
		$this->db->set($data);
		$this->db->where("ship_id",$ship_id);
		$this->db->update("kf_ship_address",$data);
		return TRUE;
	}
	
	public function updaterecord($table,$id,$updatedata)
	{
		$this->db->where($id);
		$query=$this->db->update($table,$updatedata);
		return $query;
	}
		
	
	//function for get Order Invoice details
	public function getOrderInvoiceDetails($order_id)
	{
		$this->db->select('invoice_no, invoice_date, invoice_file');
		$this->db->from('kf_invoice_details');
		$this->db->where("order_id",$order_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	//function for get Customer Address List
	public function getCustomerAddressList($customer_id)
	{
		$this->db->select('*');
		$this->db->from('kf_bill_address');
		$this->db->where("customer_id",$customer_id);
		$this->db->order_by("bill_id Desc");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//function for get Customer details
	public function getCustomerAddressDetail($address_id)
	{
		$this->db->select('*');
		$this->db->from('kf_bill_address');
		$this->db->where("bill_id",$address_id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//function for get Customer wallet details
	public function getWalletDetails($customer_id)
	{
		$this->db->select('w.wallet_detail_id, w.customer_id, w.amount, w.type, w.order_id, w.remark, c.first_name, c.last_name');
		$this->db->from('kf_wallet_details w');
		$this->db->join('kf_customer_details c', 'c.customer_id = w.customer_id');
		$this->db->where("w.customer_id",$customer_id);
		$this->db->order_by("w.wallet_detail_id Desc");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//function for get Customer referral details
	public function getReferralDetails($customer_id)
	{
		$this->db->select('w.wallet_detail_id, w.amount, w.type, w.order_id, w.remark, o.customer_id, c.first_name, c.last_name');
		$this->db->from('kf_wallet_details w');
		$this->db->join('kf_order o', 'o.order_id = w.order_id');
		$this->db->join('kf_customer_details c', 'c.customer_id = o.customer_id');
		$this->db->where("w.customer_id",$customer_id);
		$this->db->where("w.type",1);
		$this->db->order_by("w.wallet_detail_id Desc");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
}

?>