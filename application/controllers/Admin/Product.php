<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		if(empty($this->session->userdata[ADMIN_SESSION]))
		{
			redirect('admin');
		}
	}

	public function index()
	{
		$headdata['title'] = "Product | ".ADMIN_THEME;
		$headdata['page'] 	= "all-product";
		$jsdata['pagejs'] = array('application/Product.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Product/Product_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}
	
	//Function is used for featch Category information points data for datatable
	public function bindDataTable()	{
		try
		{		
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			if(strtolower($user_type) != "admin"){
				$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
				$where    = array("p.is_active != 2","p.vendor_id = $user_id");
			}else{
				$where    = array("p.is_active != 2");
			}

			$table         				= "product_details p";
			$select_column 				= array("p.product_id","p.product_name","p.product_code","c.category_name","p.is_active","b.brand_name","p.stock","v.name");
			$join_column['table'] 		= array("category c","brand b","vendor v");
			$join_column['join_on'] 	= array("c.category_id = p.category_id","b.brand_id = p.brand_id","v.vendor_id = p.vendor_id");
			$order_column				= array("p.product_name","p.product_code","v.name","b.brand_name","c.category_name","p.stock","p.is_active",NULL);
			$search_column 				= array("p.product_name","p.product_code","b.brand_name","c.category_name","p.stock","v.name");
			$group_by 					= "";
			$order_by 					= "p.stock  asc";
			
			$fetch_data 				= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
			
			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 			 = $row->product_id;
				$whr['product_id'] = $id;
				$eleattr = $this->Master_m->where('product_elements_attributes',$whr);
				
				$eleattrarr = array();
				$elediv = '';
				
				foreach($eleattr as $ele){
					$ele_id = $ele['element_id'];
					$ele_name = $this->Master_m->getElementNameByID($ele_id);
					$arrt_id = $ele['attributes_id'];
					$arrt_name = getAttributeNameByID($arrt_id);
					$elediv .='<span class="sub-title text-primary"><small>'.$ele_name.' : '.$arrt_name.'</small></span>&nbsp;';
				}
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateProduct('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateProduct('.$id.',1)">
											<span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">
												Disable
											</span>
										</a>
									</div>';
									
				if($row->is_active == 1){
					$status = $active_status;
				}
				else
				{
					$status = $deactive_status;
				}

				$viewBtnURL = base_url().'view-product/'.$id;
				$editBtnURL = base_url().'edit-product/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateProduct('.$id.',2)">'.REMOVE_ICON.'</a></li>';
					$copyBtn = '<li><a class="edit" onclick="duplicateProduct('.$id.')">'.COPY_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				$viewBtn   = '<li><a class="view" href="'.$viewBtnURL.'">'.EYE_ICON.'</li>';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.$copyBtn.'
							</ul>';

				$available_stock = $row->stock;
				if($available_stock <= 15){
					$stock_badges = 'badge-danger';
				}
				else if($available_stock <= 25){
					$stock_badges = 'badge-warning';
				}
				else if($available_stock <= 50){
					$stock_badges = 'badge-info';
				}
				else{
					$stock_badges = 'badge-success';
				}
				
				$product_name = '<div class="d-flex my-2">
									<div class="userDatatable-inline-title userDatatable-content word-break">
										<a href="javascript:void(0)" class="text-dark fw-500">
											<h6>
												'.$row->product_name.'
											</h6>
										</a>
										'.$elediv.'<br>																				
										<span class="badge badge-round '.$stock_badges.' badge-md">Stock : '.$row->stock.'</span>										
									</div>
								</div>';
				
				
				$sub_array 				= array();
				$sub_array[] 			= $product_name;
				$sub_array[] 			= '<div class="userDatatable-content">'.$row->product_code.'</div>';
				$sub_array[] 			= '<div class="userDatatable-content">'.$row->name.'</div>';
				$sub_array[] 			= '<div class="userDatatable-content">'.$row->brand_name.'</div>';
				$sub_array[] 			= '<div class="userDatatable-content">'.$row->category_name.'</div>';
				$sub_array[] 			= $status;
				$sub_array[] 			= $action;
				$data[] 				= $sub_array;
			}

			$json = array(
				"draw"           =>     intval($_POST["draw"]),
				"recordsTotal"   =>     $this->Common_m->getFilteredData($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by),
				"recordsFiltered"=>     $this->Common_m->getFilteredData($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by),
				"data"           =>     $data
			);

			echo json_encode($json);
		}
		catch(Exception $e)
		{
			$json['status'] = 'error';
		}
	}

	
	//add Product View
	public function addProduct() {
		$headdata['title'] 	= 'Add Product | '.ADMIN_THEME;
		$headdata['page'] 	= "add-product";
		$jsdata['pagejs'] 	= array('application/Product.js');

		$where['is_active'] 		= "1";
		$data['brand'] 				= $this->Master_m->where('brand',$where);
		$cond['is_active'] 			= 1; 
		$cond['parent_category_id'] = ''; 
		$data['category']  			= $this->Master_m->where('category',$cond);
		$data['vendor'] 			= $this->Master_m->where('vendor',$where);
		$data['second_last_child'] 	= '';
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Product/AddProduct_v',$data);
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//edit Product view
	public function editProduct() {
		$user_id 								= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$user_type 								= $this->session->userdata[ADMIN_SESSION]['user_type'];	
		
		$productid = $id['product_id'] 			= $this->uri->segment(2);
		$data['cate_list'] 						= array();
		$data['breadcrumbs'] 					= '';
		$breadcrumbs							= '';
		$data['result'] 						= $this->Master_m->where('product_details',$id);
		$vendor_id 								= $data['result'][0]['vendor_id'];
		$second_last_child 						= '';	
		
		$category_id 							= $data['result'][0]['category_id'];
		$child_category 						= $data['result'][0]['child_category'];
		
		if($child_category != '' && $child_category > 0){

			$cat_cond['category_id'] 	= $child_category;		
			$cild_cat_result			= $this->Master_m->where('category',$cat_cond);	
			$child_hierarchy			= explode(',',$cild_cat_result[0]['hierarchy']);
			$trim_array 				= array_slice($child_hierarchy, -2, 1);
			$second_last_child      	= $trim_array[0];
			$category_list				= bindCategoryByPrentctaegory($second_last_child);
			
			if(!empty($category_list) || $category_list != ''){

				$data['cate_list'] = $category_list;
			}

			// CREATE BREADCRUMB BY CATAGORY
			if(!empty($child_hierarchy)){
				
				foreach($child_hierarchy as $row){
					$cat['category_id'] 	= $row;
					$res 					= $this->Master_m->where('category',$cat);
					$cat_name 				= $res[0]['category_name'];
					$breadcrumbs .= '<li class="atbd-breadcrumb__item"><a href="javascript:void(0)"> '. $cat_name .' </a><span class="breadcrumb__seperator"><span class="la la-angle-right"></span></span></li>';
				}
				$data['breadcrumbs'] = $breadcrumbs;
			}
		}
		
		$data['category_elements'] 	= getAllElementBycategory($category_id,$productid);
		// $stock_result 				= $this->Master_m->where('stock',$id);

		// $data['product_stock'] = 0;
		// if(!empty($stock_result)){
		// 	$data['product_stock'] = $stock_result[0]['onhand_quantity'];	
		// }
		
		// $data['stock_result'] = $this->Master_m->where('product_details',$id);
		
		$headdata['title'] = 'Edit Product | Nutreasy Think Healthy, Be Healthy';
		$data['pagejs'] = array('application/Product.js');
		
		$where['is_active'] 		= "1";
		$data['brand'] 				= $this->Master_m->where('brand',$where);
		$cond['is_active'] 			= 1; 
		$cond['parent_category_id'] = ''; 
		$data['category']  			= $this->Master_m->where('category',$cond);
		$data['vendor'] 			= $this->Master_m->where('vendor',$where);

		$data['attr_result']  	= $this->Master_m->where('product_elements_attributes',$id);
		$data['second_last_child'] = $second_last_child;

		if(strtolower($user_type) != "admin"){
			if($user_id != $vendor_id){
				redirect('error-page');
			}
		}
		$headdata['page'] 	= "add-product";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Product/AddProduct_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//Submit add and edit form
	public function submitProduct(){
		$user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$product_name 	= trim($this->input->post('text_product_name'));
		$cover_image 	= $this->input->post('old_cover_image');	
		$vendor_id 		= $this->input->post('text_vendor_id');	
		$v_code 		= "";
		
		$v_whr['vendor_id'] = $vendor_id;
		$v_res 				= $this->Master_m->where('vendor',$v_whr);
		if(!empty($v_res)){
			$v_code 			=  $v_res[0]['unique_code'];
		}
		
		$product_name 		 = str_replace("'", "", $product_name);
		$category_id		 = $this->input->post('text_category_id');
		$subcategory_id 	 = $this->input->post('text_subcategory_id');	
		$element_ids 		 = $this->input->post('txt_element_id');
		
		$element_arr 			= array();
		$attribute_arr 			= array();
		$attributename_arr 		= array();
		$attributes_value 		= "";
		foreach($element_ids as $e_id)
		{
			if(!empty($e_id))
			{
				$attribute_ids = $this->input->post('txt_attributes_'.$e_id);		
				if(!empty($attribute_ids))
				{
					$element_arr[$e_id] 	= $attribute_ids;
					$attribute_arr[] 		= implode(',',$attribute_ids);
					
				}
			}
		}
		if(!empty($attribute_arr)){

			$attr_arr_new							= array_filter($attribute_arr, 'strlen');
			foreach($attr_arr_new as $attrid){
				$attr_name							= getAttributeNameByID($attrid);
				$attributename_arr[]				= strtolower($attr_name);
			}
			$attributes_value = implode('-',$attributename_arr);
		}

		$short_code 	= generateShortcode(strtolower($product_name.'-'.$attributes_value.'-'.$v_code));
		
		$unit_price 		= $this->input->post('text_unit_price');
		//$mrp_price 			= $this->input->post('text_mrp_price');
		$discount 			= $this->input->post('text_discount');
		$gst 				= $this->input->post('text_tax');
		$discount_amt		= 0;
		$gst_amt			= 0;
		$mrp_price			= 0;
		$selling_price		= 0;

		if($gst > 0){
			
			$gst_amt = (floatval($unit_price) * ($gst)) / 100;
			$mrp_price = round($unit_price + $gst_amt);
			$selling_price  = round($mrp_price);
		}else{
			
			$mrp_price = $unit_price;
			$selling_price = $unit_price;
		}

		if($discount > 0 && $discount != ''){
			
			$discount_amt		= (floatval($mrp_price) * floatval($discount))/100;
			$selling_price 		= round($mrp_price - $discount_amt);
		}

		if(!empty($_FILES['cover_image']['name'])){
			$image1 		= $_FILES['cover_image']['name'];
			$extension 		= pathinfo($image1, PATHINFO_EXTENSION);
			$cover_image	= 'cover_image'.".".$extension;
		}

		if(!empty($this->input->post('text_product_id')))
		{
			
			$id 		= $this->input->post('text_product_id');
			$image 		= $this->input->post('old_image');

			$updatedata['product_name'] 			= $product_name;
			$updatedata['product_code'] 			= $this->input->post('text_product_code');
			$updatedata['short_code'] 				= $short_code.'-'.$id;
			$updatedata['short_description'] 		= $this->input->post('text_short_description');
			$updatedata['description'] 				= $this->input->post('text_description');
			$updatedata['brand_id'] 				= $this->input->post('text_brand_id');
			$updatedata['category_id'] 				= $this->input->post('text_category_id');
			$updatedata['child_category'] 			= $subcategory_id;
			$updatedata['vendor_id'] 				= $this->input->post('text_vendor_id');
			$updatedata['unit_price'] 				= $unit_price;
			$updatedata['mrp_price'] 				= $mrp_price;
			$updatedata['discount'] 				= $this->input->post('text_discount');
			$updatedata['net_price'] 				= $selling_price;
			$updatedata['tax'] 						= $this->input->post('text_tax');
			$updatedata['qty'] 						= $this->input->post('txt_qty');
			$updatedata['gst_amt'] 					= $gst_amt;
			$updatedata['discount_amt'] 			= $discount_amt;
			$updatedata['cover_img'] 				= $cover_image;
			//$updatedata['stock'] 					= $this->input->post('text_stock');
			
			if($this->input->post('text_is_new') == 1){
				$updatedata['is_new_product'] 	= 1;
			}
			else
			{
				$updatedata['is_new_product'] 	= 0;
			}
			
			if($this->input->post('text_popular_product') == 1){
				$updatedata['is_popular_product'] 	= 1;
			}
			else
			{
				$updatedata['is_popular_product'] 	= 0;
			}
			
			if($this->input->post('text_is_feature_product') == 1){
				$updatedata['is_feature_product'] 	= 1;
			}
			else
			{
				$updatedata['is_feature_product'] 	= 0;
			}

			$updatedata['meta_title'] 				= $this->input->post('text_meta_title');
			$updatedata['meta_keyword'] 			= $this->input->post('text_meta_keyword');
			$updatedata['meta_description'] 		= $this->input->post('text_meta_description');
			$updatedata['modified_by'] 				= $user_id;
			$updatedata['modified'] 				= date('Y-m-d H:i:s');

			$updatedata['warranty_title'] 					= $this->input->post('txt_warranty_title');
			$updatedata['warranty_detail'] 					= $this->input->post('text_warranty_description');
			
			if($this->input->post('text_is_active') == 1)
				$updatedata['is_active'] = 1;
			else
				$updatedata['is_active'] = 0;
			
			$where['product_id'] 	= $id;
			$update_result 			= update('product_details',$updatedata,$where);
			
			logThis($update_result->query, date('Y-m-d'),'Products');
			
			$p_whr['product_id'] 	= $id;
			$p_res 					= $this->Master_m->where('product_details',$p_whr);
			$variant_code 			= $p_res[0]['variant_code'];
			$parent_product_id 		= $p_res[0]['parent_product_id'];
			
			if(!empty($element_arr))
				{
					$this->db->where('product_id', $id);
					$this->db->delete('product_elements_attributes');
					foreach($element_arr as $e_key=>$e_value)
					{
						if(!empty($e_value))
						{
							$att_id = implode(',',$e_value);							
							if(!empty($att_id) && $att_id != "" && $att_id != null){
								
								$insertAttribute['product_id'] 			= $id;
								$insertAttribute['element_id'] 			= $e_key;
								$insertAttribute['attributes_id'] 		= $att_id;
								$insertAttribute['variant_code'] 		= $variant_code;
								$insertAttribute['parent_product_id'] 	= $parent_product_id;
								$insertAttribute['created'] 			= date('Y-m-d H:i:s');
								
								$attr_result = insert('product_elements_attributes',$insertAttribute,'');
								logThis($attr_result->query, date('Y-m-d'),'Product Elements Attributes');
							}
						}
					}
				}
			if($update_result->status == "success")
			{
				$this->uploadProductImages($id,$image);

				if(!empty($_FILES['cover_image']['name'])){
					$filepath 	= PRODUCT_IMAGE_PATH.$id;
					if (!is_dir($filepath)) {
						mkdir($filepath, 0777, true);
					}	
					$uploadImg1 	= $filepath.'/'.$cover_image;
					move_uploaded_file($_FILES['cover_image']['tmp_name'],$uploadImg1);
				}
				$this->session->set_flashdata('success','Successfully Update Record.');
			}
			else
			{
				$this->session->set_flashdata('error','Not insert. please try again.');
			}
			redirect('all-product');
		}

		$insertdata['product_name'] 					= $product_name;
		$insertdata['product_code'] 					= $this->input->post('text_product_code');
		$insertdata['short_code'] 						= $short_code;
		$insertdata['short_description'] 				= $this->input->post('text_short_description');
		$insertdata['description'] 						= $this->input->post('text_description');
		$insertdata['brand_id'] 						= $this->input->post('text_brand_id');
		$insertdata['category_id'] 						= $category_id;
		$insertdata['child_category'] 					= $subcategory_id;
		$insertdata['vendor_id'] 						= $this->input->post('text_vendor_id');
		$insertdata['unit_price'] 						= $unit_price;
		$insertdata['mrp_price'] 						= $mrp_price;
		$insertdata['discount'] 						= $this->input->post('text_discount');
		$insertdata['net_price'] 						= $selling_price;
		$insertdata['tax'] 								= $this->input->post('text_tax');
		$insertdata['qty'] 								= $this->input->post('txt_qty');
		$insertdata['gst_amt'] 							= $gst_amt;
		$insertdata['discount_amt'] 					= $discount_amt;
		$insertdata['cover_img'] 						= $cover_image;
		$insertdata['stock'] 							= $this->input->post('text_stock');
		
		if($this->input->post('text_is_new') == 1){
			$insertdata['is_new_product'] = 1;
		}
		else
		{
			$insertdata['is_new_product'] = 0;
		}
		
		if($this->input->post('text_popular_product') == 1){
			$insertdata['is_popular_product'] = 1;
		}
		else
		{
			$insertdata['is_popular_product'] = 0;
		}
		
		if($this->input->post('text_is_feature_product') == 1){
			$insertdata['is_feature_product'] = 1;
		}
		else
		{
			$insertdata['is_feature_product'] = 0;
		}
		
		$insertdata['meta_title'] 				= $this->input->post('text_meta_title');
		$insertdata['meta_description'] 		= $this->input->post('text_meta_description');
		$insertdata['meta_keyword'] 			= $this->input->post('text_meta_keyword');
		$insertdata['created_by'] 				= $user_id;
		$insertdata['created'] 					= date('Y-m-d H:i:s');
		
		$insertdata['warranty_title'] 					= $this->input->post('txt_warranty_title');
		$insertdata['warranty_detail'] 					= $this->input->post('text_warranty_description');
		
		
		$insert_result 							= insert('product_details',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'Products');
		
		if($insert_result->status == "success")
		{
			$product_id = $insert_result->id;
			$this->uploadProductImages($product_id);

			if(!empty($_FILES['cover_image']['name'])){
				$filepath 	= PRODUCT_IMAGE_PATH.$product_id;
				if (!is_dir($filepath)) {
					mkdir($filepath, 0777, true);
				}	
				$uploadImg1 	= $filepath.'/'.$cover_image;
				move_uploaded_file($_FILES['cover_image']['tmp_name'],$uploadImg1);
			}

			//UPDATE SHORT CODE WITH ID AFTER INSERT PRODUCT
			$p_updatedata['short_code'] 	= $short_code.'-'.$product_id;
			$p_where1['product_id'] 		= $product_id;
			$p_update_result 				= update('product_details',$p_updatedata,$p_where1);
			
			logThis($p_update_result->query, date('Y-m-d'),'Products');
			
			//Insert product elements attributes details
			if(!empty($element_arr))
			{
				foreach($element_arr as $e_key=>$e_value)
				{
					if(!empty($e_value))
					{
						$att_id = implode(',',$e_value);
						if(!empty($att_id) && $att_id != "" && $att_id != null){
							$insertAttribute['product_id'] 			= $product_id;
							$insertAttribute['element_id'] 			= $e_key;
							$insertAttribute['attributes_id'] 		= $att_id;
							$insertAttribute['created'] 			= date('Y-m-d H:i:s');						
							$attr_result 							= insert('product_elements_attributes',$insertAttribute,'');
							logThis($attr_result->query, date('Y-m-d'),'Product Elements Attributes');
						}
					}
				}
			}
			
			$this->session->set_flashdata('success','Successfully Insert Record.');
		}
		else
		{
			$this->session->set_flashdata('error','Not insert. please try again.');
		}
		
		redirect('all-product');
	}

	public function uploadProductImages($product_id,$image=null) {
		$images   	= array();
		$files 		= $_FILES;
		$new_image 	= "";
		
		if($_FILES['image']['name'])
		{
			
			$count_image 		= count(array_filter($_FILES['image']['name']));
			for($i = 0; $i < $count_image; $i++)
			{
				$_FILES['image']['name'] 		= $files['image']['name'][$i];
				$_FILES['image']['type'] 		= $files['image']['type'][$i];
				$_FILES['image']['tmp_name'] 	= $files['image']['tmp_name'][$i];
				$_FILES['image']['error'] 		= $files['image']['error'][$i];
				$_FILES['image']['size'] 		= $files['image']['size'][$i];

				$file_path     = PRODUCT_IMAGE_PATH."$product_id/";
				if(!is_dir($file_path))
					mkdir($file_path,0777,true);
				
				$imageName 		= $_FILES['image']['name'];
				//compressImage($_FILES['image']['tmp_name'], $file_path.$_FILES['image']['name'],30);

				$uploadImg1 	= $file_path.'/'.$imageName;
				move_uploaded_file($_FILES['image']['tmp_name'],$uploadImg1);		

				$images[] = $imageName;
			}
			
			if(!empty($images)){
				$new_image = implode('|',$images);
				if($image != null || $image != ""){
					$image = $image.'|'.$new_image;
				}else{
					$image = $new_image;
				}
			}
			
		}
		$updatedata['image'] = $image;
		
		$where['product_id'] 	= $product_id;
		$update_result 			= update('product_details',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Products');
		
		return TRUE;
	}

	/**Resize upload Image  */
	function resizeImage($source,$target) { 
		try{
			
			/*$source = $_SERVER['DOCUMENT_ROOT'] . '/Nutreasy/upload_data/images/Product/19/'.$imageName;
			$target = $_SERVER['DOCUMENT_ROOT'] . '/Nutreasy/upload_data/images/Product/19/';*/
			
			$img_config = array(
				'image_library'   => 'gd2',
				'quality'         => IMAGE_QUALITY,
				'new_image'		=> $target,
				'source_image'		=> $source,
				'maintain_ratio'	=> TRUE,
				//'width'				=> MAX_WIDTH,
				//'height'			=> MAX_HEIGHT
			);
			$this->image_lib->initialize($img_config);
			if (!$this->image_lib->resize()) {
				echo $this->image_lib->display_errors();
			}  
	
			$this->image_lib->clear();

			
			//$this->image_lib->resize(); 
		
			return true;
		}catch(Exception $e){
			return false;
		}
	}
	
	public function updateStatus() {
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      = $this->input->post('id');
		$updatedata['modified_by'] = $user_id;
		$updatedata['modified'] = date('Y-m-d H:i:s');
		$updatedata['is_active'] = $this->input->post('status');
		
		$where['product_id'] = $id;
		$update_result = update('product_details',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Products');
		$json['status'] = "success";
		echo json_encode($json);
	}
	
	public function uploadImage() {
		$fieldname = "file";

		if($_FILES[$fieldname]['name']){
			$upload_name = file_upload("file",PRODUCT_DESC_PATH);
		}
		$response = new \StdClass;
		$response->link = base_url().PRODUCT_DESC_PATH.$upload_name;

		// Send response.
		echo stripslashes(json_encode($response));
	}
	
	
	public function deleteProductImage() {
        $image_name    = $this->input->post("image_name");
        $product_id     = $this->input->post("product_id");
        $product_images     = $this->input->post("product_images");
        
        $photos_arr = array();
        $photos      = str_replace($image_name,"",$product_images);
        $photos_arr      = array_filter(explode("|",$photos));
        $new_product_images = implode("|",$photos_arr);

        $json['new_product_images'] = $new_product_images;
        $json['status'] = "success";
        echo json_encode($json);
    }


	public function getCategoryValue(){
		$json = array(); 
		
        if($this->input->is_ajax_request())
        { 
			$id 						= $this->input->post('id');
			$second_last_child 			= $this->input->post('second_last_child');
			$product_id 				= $this->input->post('product_id');
			$cat_option 				= '';
			$breadcrumbs 				= '';
			$where['category_id'] 		= $id;
			$result 					= $this->Master_m->where('category',$where);
			if(!empty($result))
			{
				//Category
				$child_category 			= $result[0]['child_category'];
				if($child_category != "" || $child_category != null || !empty($child_category)){
					$child_category_ids 		= explode(',',$result[0]['child_category']) ;
					
					if(!empty($child_category_ids))
					{					
						$cat_option 	= '<option value="">Select Category</option>';
						foreach($child_category_ids as $c_row)
						{
							$c_id['category_id'] 		= $c_row; 
							$cat_result 				= $this->Master_m->where('category',$c_id);
							if(!empty($cat_result)){
								$category_id 			= $cat_result[0]['category_id'];
								$category_name 			= $cat_result[0]['category_name'];
								$cat_option .= '<option value='.$category_id.'>'.$category_name.'</option>';
							}
						}
					}			
				}	
				
				// CREATE BREADCRUMB BY CATAGORY
				$hierarchy 				= explode(',',$result[0]['hierarchy']);
				if(!empty($hierarchy)){
					foreach($hierarchy as $row){
						$cat['category_id'] 	= $row;
						$res 					= $this->Master_m->where('category',$cat);
						$cat_name 				= $res[0]['category_name'];
						$breadcrumbs .= '<li class="atbd-breadcrumb__item"><a href="javascript:void(0)">'.$cat_name.'</a><span class="breadcrumb__seperator"><span class="la la-angle-right"></span></span></li>';
					}
					
				}
				
			}
			if(!empty($cat_option)){
				$json['success'] = 'success';
			}else{
				$json['error'] = 'error';
			}
			$json['category_option'] = $cat_option;			
			$json['breadcrumbs'] = $breadcrumbs;			
		}
		
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	public function getElements(){
		$json = array(); 
		
        if($this->input->is_ajax_request())
        { 
			$id 		= $this->input->post('id');
			$product_id = $this->input->post('product_id');
			$elements_html = getAllElementBycategory($id,$product_id);
			if(!empty($elements_html)){
				$json['success'] = 'success';
			}else
			{
			}
			$json['elements_html'] = $elements_html;			
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	public function duplicateRecords(){
		$json = array(); 
		
        if($this->input->is_ajax_request())
        { 
			$PID = $id['product_id'] 		= $this->input->post('id');
			
			$directory = PRODUCT_IMAGE_PATH.$PID;
			$images = glob($directory . "/*");	
			
			$result 				= $this->Master_m->where('product_details',$id);
			if(!empty($result)){
				$user_id 						= $this->session->userdata[ADMIN_SESSION]['user_id'];
				$data['product_name'] 			= $result[0]['product_name'].' - (Duplicate)';
				$data['product_code'] 			= $result[0]['product_code'];
				$data['short_code'] 			= $result[0]['short_code'];
				$data['short_description'] 		= $result[0]['short_description'];
				$data['description'] 			= $result[0]['description'];
				$data['vendor_id'] 				= $result[0]['vendor_id'];
				$data['brand_id'] 				= $result[0]['brand_id'];
				$data['category_id'] 			= $result[0]['category_id'];
				$data['child_category'] 		= $result[0]['child_category'];
				$data['qty'] 					= $result[0]['qty'];
				$data['element_id'] 			= $result[0]['element_id'];
				$data['attributes_id'] 			= $result[0]['attributes_id'];
				$data['unit_price'] 			= $result[0]['unit_price'];
				$data['mrp_price'] 				= $result[0]['mrp_price'];
				$data['discount'] 				= $result[0]['discount'];
				$data['discount_amt'] 			= $result[0]['discount_amt'];
				$data['net_price'] 				= $result[0]['net_price'];
				$data['tax'] 					= $result[0]['tax'];
				$data['tag'] 					= $result[0]['tag'];
				$data['gst_amt'] 				= $result[0]['gst_amt'];
				$data['image'] 					= $result[0]['image'];
				$data['cover_img'] 				= $result[0]['cover_img'];
				$data['is_new_product'] 		= $result[0]['is_new_product'];
				$data['is_popular_product'] 	= $result[0]['is_popular_product'];
				$data['is_feature_product'] 	= $result[0]['is_feature_product'];
				$data['meta_title'] 			= $result[0]['meta_title'];
				$data['meta_description'] 		= $result[0]['meta_description'];
				$data['meta_keyword'] 			= $result[0]['meta_keyword'];
				$data['warranty_title'] 		= $result[0]['warranty_title'];
				$data['warranty_detail'] 		= $result[0]['warranty_detail'];
				$data['created_by'] 			= $user_id;
				$data['created'] 				= date('Y-m-d');
				$data['is_active'] 				= 0;
				$data['stock'] 					= $result[0]['stock'];				
				$insert_result 					= insert('product_details',$data,'');
				logThis($insert_result->query, date('Y-m-d'),'Products');

				$product_id 			= $insert_result->id;
				$product_attr 			= $this->Master_m->where('product_elements_attributes',$id);

				$filepath 	= PRODUCT_IMAGE_PATH.$product_id;
				if (!is_dir($filepath)) {
					mkdir($filepath, 0777, true);
				}

				foreach($images as $img){
					$source = $img;				
					$destination = PRODUCT_IMAGE_PATH.$product_id.'/'.basename($img);
					copy($source, $destination); 				
				}

				if(!empty($product_attr)){
					foreach($product_attr as $attr){
						$insertAttribute['product_id'] 			= $product_id;
						$insertAttribute['element_id'] 			= $attr['element_id'];
						$insertAttribute['attributes_id'] 		= $attr['attributes_id'];						
						$insertAttribute['created'] 			= date('Y-m-d H:i:s');						
						$attr_result 							= insert('product_elements_attributes',$insertAttribute,'');
						logThis($attr_result->query, date('Y-m-d'),'Product Elements Attributes');
					}
					
				}
				$json['status'] = 'success';
			}
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/*** PARENT PRODUCT LIST VIEW */
	public function parentProducts(){
		$headdata['title'] 				= "Product | ".ADMIN_THEME;
		$headdata['page'] 				= "parent-product";
		$jsdata['pagejs'] 				= array('application/Product.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Product/ParentList_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}
	
	/*** ADD PAGE : PARENT PRODUCT   */
	public function addparentProduct(){
		
		$data['product_list'] 			= $this->Master_m->getNonvariantProductList();
		$headdata['title'] 				= "Product | ".ADMIN_THEME;
		$headdata['page'] 				= "parent-product";
		$jsdata['pagejs'] 				= array('application/Product.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Product/AddParent_Product_v',$data);
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	/*** BIND PARENT PRODUCT DATA */
	public function bindparentProductDataTable(){
		try
		{
			$user_type 			= $this->session->userdata[ADMIN_SESSION]['user_type'];	

			if(strtolower($user_type) != "admin"){
				$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
				$where    	= array("p.is_active != 2","p.vendor_id = $user_id");
			}
			else{
				$where    	= array("p.is_active != 2");
			}
			
			$table         					= "parent_product_listing p";
			$select_column 					= array("p.parent_product_listing_id","p.parent_name","p.vendor_id","p.variant_code","v.name","p.is_active");
			$join_column['table'] 			= array("vendor v");
			$join_column['join_on'] 		= array("v.vendor_id = p.vendor_id");
			$order_column					= array(NULL,"p.parent_name","p.variant_code","v.name",null);
			$search_column 					= array("p.parent_name","p.variant_code","v.name");
			$group_by 						= "";
			$order_by 						= "p.parent_product_listing_id  DESC";
			//$where    		= array();
			$fetch_data 					= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       					= array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 		= $row->parent_product_listing_id;
				$action 	= "";
				$disabled 	= "";

				$viewBtnURL = base_url();
				$editBtnURL = base_url('edit-parent-product/').$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{					
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
									'.$editBtn.$deleteBtn.'
								</ul>';

				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="" class="'.$disabled.'">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block" class="'.$disabled.'">
										<a href="javascript:void(0)"  onclick="">
											<span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">
												Disable
											</span>
										</a>
									</div>';
				
				if($row->is_active == 1){
					$status = $active_status;
				}
				else
				{
					$status = $deactive_status;
				}			
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->parent_name.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->name.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->variant_code.'</div>';
				$sub_array[] = $status;
				$sub_array[] = $action;
				$data[] = $sub_array;
			}

			$json = array(
				"draw"           =>     intval($_POST["draw"]),
				"recordsTotal"   =>     $this->Common_m->getFilteredData($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by),
				"recordsFiltered"=>     $this->Common_m->getFilteredData($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by),
				"data"           =>     $data
			);

			echo json_encode($json);
		}
		catch(Exception $e)
		{
			$json['status'] = 'error';
		}
	}
	
	/**** SUBMIT PARENT PRODUCT */
	public function submitParentProduct(){
		$user_type 						= $this->session->userdata[ADMIN_SESSION]['user_type'];	
		
		if(strtolower($user_type) != "admin"){
			$user_id 				= $this->session->userdata[ADMIN_SESSION]['user_id'];
			$insert['vendor_id'] 	= $user_id;
		}
		
		$parent_product_id 			= $this->input->post('text_parent_product_id');

		if(!empty($parent_product_id)){

			$update['parent_name'] 					= $this->input->post('text_parent_product_name');
			$where['parent_product_listing_id'] 	= $parent_product_id;
			$update_result 							= update('parent_product_listing',$update,$where);			
			logThis($update_result->query, date('Y-m-d'),'Parent Products');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('parent-product');
		}
		else{

			$length 				= 6;
			$chars 					= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
			$variant_code 			= substr( str_shuffle( $chars ), 0, $length );
			$insert['parent_name'] 	= $this->input->post('text_parent_product_name');
			$insert['variant_code']	= $variant_code;
			$insert['is_active']	= 1;
	
			$insert_result 			= insert('parent_product_listing',$insert,'');
			$insertId 				= $insert_result->id;
			$redirectUrl 			= 'edit-parent-product/'.$insertId;
			logThis($insert_result->query, date('Y-m-d'),'Parent Products');
			$this->session->set_flashdata('success','Successfully Insert Record.');
			redirect($redirectUrl);
		}
	}

	/*** EDIT PARENT PRODUCT DEATIL  */
	public function editParentProduct(){
		$user_id 								= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$user_type 								= $this->session->userdata[ADMIN_SESSION]['user_type'];			
		$parent_productid = $id['parent_product_listing_id'] 		= $this->uri->segment(2);
		$data['parent_data'] 					= $this->Master_m->where('parent_product_listing',$id);
		$data['product_list'] 					= $this->Master_m->getNonvariantProductList();

		$data['varientlist'] 	= $this->Master_m->getVarientProductByParentProduct($parent_productid);		
		$headdata['title'] 		= "Product | ".ADMIN_THEME;
		$headdata['page'] 		= "parent-product";
		$jsdata['pagejs'] 		= array('application/Product.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Product/AddParent_Product_v',$data);
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	/***CRAETE PRODUCT VARIANT */
	public function addVariantToProduct(){
		$json 		= array();
		if($this->input->is_ajax_request()){

			$parent_product_id  			= $this->input->post('parent_product_id');
			$product_id  					= $this->input->post('product_id');

			$where['parent_product_listing_id'] 	= $parent_product_id;
			$result 								=  $this->Master_m->where('parent_product_listing',$where);
		
			if(!empty($result)){

				$variant_code 							= $result[0]['variant_code'];

				$update_data['variant_code'] 			= $variant_code;
				$update_data['parent_product_id'] 		= $parent_product_id;
				$where1['product_id'] 					= $product_id;
				$update_result 							= update('product_details',$update_data,$where1);			
				logThis($update_result->query, date('Y-m-d'),'Product Detail');
				
				$update_data1['variant_code'] 				= $variant_code;
				$update_data1['parent_product_id'] 			= $parent_product_id;
				$update_result1								= update('product_elements_attributes',$update_data1,$where1);			
				logThis($update_result1->query, date('Y-m-d'),'Product Element Attributes');

				$varientProduct 				= $this->Master_m->getVarientProductByParentProduct($parent_product_id);
				$product_list					= $this->Master_m->getNonvariantProductList();
				$product_option 				= '<option value ="">Select Product</option>';
				
				if(!empty($product_list)){

					foreach($product_list as $option){
						$whr['product_id'] 			= $option['product_id'];
						$eleattr 					= $this->Master_m->where('product_elements_attributes',$whr);
						$elediv 					= '';
						foreach($eleattr as $ele){
							$ele_id 			= $ele['element_id'];
							$ele_name 			= $this->Master_m->getElementNameByID($ele_id);
							$arrt_id 			= $ele['attributes_id'];
							$arrt_name 			= getAttributeNameByID($arrt_id);
							$elediv .='<span class="sub-title text-primary"><small>'.$ele_name.' : '.$arrt_name.'</small></span>&nbsp;';
						}

						$product_option .='<option value="'.$option['product_id'].'">'.$option['product_name'].'('.$elediv.')</option>';
					}
				}else{
					$product_option .='<option value="">No Product Found</option>';
				}
				$json['success']		=	"success";
				$json['varientProduct']	=	$varientProduct;
				$json['product_list']	=	$product_option;
			}
			else{
				$json['error']	=	"error";
			}
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	/** REMOVE PRODUCT FROM VARIANT LIST **/ 
	public function removeVarientProduct(){
		$json = array();
		if($this->input->is_ajax_request()){

			$product_id 					= $this->input->post('product_id');
			$parent_product_id 				= $this->input->post('parent_product_id');
			$where['product_id'] 			= $product_id;

			$update_data['variant_code'] 			= null;
			$update_data['parent_product_id'] 		= null;
			$where1['product_id'] 					= $product_id;
			$update_result 							= update('product_details',$update_data,$where);			
			logThis($update_result->query, date('Y-m-d'),'Product Detail');

			$update_data1['variant_code'] 				= null;
			$update_data1['parent_product_id'] 			= null;
			$update_result1								= update('product_elements_attributes',$update_data1,$where);			
			logThis($update_result1->query, date('Y-m-d'),'Product Element Attributes');
			
			$varientProduct 				= $this->Master_m->getVarientProductByParentProduct($parent_product_id);
			$product_list					= $this->Master_m->getNonvariantProductList();
			$product_option = '<option value ="">Select Product</option>';
			
			if(!empty($product_list)){

				foreach($product_list as $option){
					$whr['product_id'] 			= $option['product_id'];
						$eleattr 					= $this->Master_m->where('product_elements_attributes',$whr);
						$elediv 					= '';
						foreach($eleattr as $ele){
							$ele_id 			= $ele['element_id'];
							$ele_name 			= $this->Master_m->getElementNameByID($ele_id);
							$arrt_id 			= $ele['attributes_id'];
							$arrt_name 			= getAttributeNameByID($arrt_id);
							$elediv .='<span class="sub-title text-primary"><small>'.$ele_name.' : '.$arrt_name.'</small></span>&nbsp;';
						}
					
					$product_option .='<option value="'.$option['product_id'].'">'.$option['product_name'].'('.$elediv.')</option>';
				}
			}else{
				$product_option .='<option value="">No Product Found</option>';
			}
			$json['success']		=	"success";
			$json['varientProduct']	=	$varientProduct;
			$json['product_list']	=	$product_option;
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}
}