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
	public function bindDataTable()
	{
		try
		{		
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			if(strtolower($user_type) != "admin"){
				$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
				$where    = array("p.is_active != 2","p.created_by = $user_id","p.vendor_id = $user_id");
			}else{
				$where    = array("p.is_active != 2");
			}

			$table         				= "product_details p";
			$select_column 				= array("p.product_id","p.product_name","p.product_code","c.category_name","p.is_active","b.brand_name","s.onhand_quantity");
			$join_column['table'] 		= array("category c","brand b","stock s");
			$join_column['join_on'] 	= array("c.category_id = p.category_id","b.brand_id = p.brand_id","s.product_id = p.product_id");
			$order_column				= array(NULL,"p.product_name","b.brand_name","c.category_name","s.onhand_quantity","p.is_active",NULL);
			$search_column 				= array("p.product_name","p.product_code","b.brand_name","c.category_name","s.onhand_quantity");
			$group_by 					= "";
			$order_by 					= "p.product_id  DESC";
			$fetch_data 				= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
			
			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 			 = $row->product_id;
				
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
				}
				else
				{
					redirect('admin');
				}
				$viewBtn   = '<li><a class="view" href="'.$viewBtnURL.'">'.EYE_ICON.'</li>';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.'
							</ul>';
				
				$product_name = '<div class="d-flex">
									<div class="userDatatable-inline-title">
										<a href="javascript:void(0)" class="text-dark fw-500">
											<h6>
												'.$row->product_name.'
											</h6>
										</a>
										<p class="d-block mb-0">
											Total available Stock : '.$row->onhand_quantity.'
										</p>
									</div>
								</div>';
				
				$sub_array 				= array();
				$sub_array[] 			= '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] 			= $product_name;
				$sub_array[] 			= '<div class="userDatatable-content">'.$row->brand_name.'</div>';
				$sub_array[] 			= '<div class="userDatatable-content">'.$row->category_name.'</div>';
				$sub_array[] 			= '<div class="userDatatable-content">'.$row->onhand_quantity.'</div>';
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
	public function addProduct()
	{
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
	public function editProduct()
	{
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
		$stock_result 				= $this->Master_m->where('stock',$id);

		$data['product_stock'] = 0;
		if(!empty($stock_result)){
			$data['product_stock'] = $stock_result[0]['onhand_quantity'];	
		}
		
		$data['stock_result'] = $this->Master_m->where('product_details',$id);
		
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
	public function submitProduct()
	{
		$user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$product_name 	= trim($this->input->post('text_product_name'));
		
		$short_code 	= strtolower($product_name);
		$rep_char 		=  array(" ",",","/","[","]","(",")","--","---");
		$short_code 	= str_replace($rep_char,"-",$short_code);
		$rep_char1 		=  array("--","---","----","----");
		$short_code 	= str_replace($rep_char1,"-",$short_code);		
		$last_char 		= substr($short_code, -1);
		if($last_char == '-'){
			$short_code = rtrim($short_code, "-");;
		}else{
			$short_code = $short_code;
		}
		
		$category_id		 = $this->input->post('text_category_id');
		$subcategory_id 	 = $this->input->post('text_subcategory_id');	
		$element_ids 		 = $this->input->post('txt_element_id');
		
		$element_arr = array();
		foreach($element_ids as $e_id)
		{
			if(!empty($e_id))
			{
				$attribute_ids = $this->input->post('txt_attributes_'.$e_id);		
				if(!empty($attribute_ids))
				{
					$element_arr[$e_id] = $attribute_ids;
				}
			}
		}
		$mrp_price 			= $this->input->post('text_mrp_price');
		$discount 			= $this->input->post('text_discount');
		$discount_amt		= 0;
		$gst_amt			= 0;
		if($discount > 0 && $discount != ''){
			$discount_amt		= (floatval($mrp_price) * floatval($discount))/100;
		}
		
		$net_price 			= $this->input->post('text_net_price');
		$gst 				= $this->input->post('text_tax');
		if($gst > 0){

			$gst_amt 			= (floatval($net_price) * floatval($gst))/100;
		}
		

		if(!empty($this->input->post('text_product_id')))
		{
			
			$id 		= $this->input->post('text_product_id');
			$image 		= $this->input->post('old_image');

			$updatedata['product_name'] 			= $product_name;
			$updatedata['product_code'] 			= $this->input->post('text_product_code');
			$updatedata['short_code'] 				= $short_code;
			$updatedata['short_description'] 		= $this->input->post('text_short_description');
			$updatedata['description'] 				= $this->input->post('text_description');
			$updatedata['brand_id'] 				= $this->input->post('text_brand_id');
			$updatedata['category_id'] 				= $this->input->post('text_category_id');
			$updatedata['child_category'] 			= $subcategory_id;
			$updatedata['vendor_id'] 				= $this->input->post('text_vendor_id');
			$updatedata['mrp_price'] 				= $this->input->post('text_mrp_price');
			$updatedata['discount'] 				= $this->input->post('text_discount');
			$updatedata['net_price'] 				= $this->input->post('text_net_price');
			$updatedata['tax'] 						= $this->input->post('text_tax');
			$updatedata['qty'] 						= $this->input->post('txt_qty');
			$updatedata['gst_amt'] 					= $gst_amt;
			$updatedata['discount_amt'] 			= $discount_amt;
			
			if($this->input->post('text_is_new') == 1){
				$insertdata['is_new_product'] 	= 1;
			}
			else
			{
				$insertdata['is_new_product'] 	= 0;
			}
			
			if($this->input->post('text_popular_product') == 1){
				$insertdata['is_popular_product'] 	= 1;
			}
			else
			{
				$insertdata['is_popular_product'] 	= 0;
			}
			
			if($this->input->post('text_is_feature_product') == 1){
				$insertdata['is_feature_product'] 	= 1;
			}
			else
			{
				$insertdata['is_feature_product'] 	= 0;
			}

			$updatedata['meta_title'] 				= $this->input->post('text_meta_title');
			$updatedata['meta_keyword'] 			= $this->input->post('text_meta_keyword');
			$updatedata['meta_description'] 		= $this->input->post('text_meta_description');
			$updatedata['modified_by'] 				= $user_id;
			$updatedata['modified'] 				= date('Y-m-d H:i:s');
			
			if($this->input->post('text_is_active') == 1)
				$updatedata['is_active'] = 1;
			else
				$updatedata['is_active'] = 0;
			
			$where['product_id'] 	= $id;
			$update_result 			= update('product_details',$updatedata,$where);
			
			logThis($update_result->query, date('Y-m-d'),'Products');
			if(!empty($element_arr))
				{
					$this->db->where('product_id', $id);
					$this->db->delete('product_elements_attributes');
					foreach($element_arr as $e_key=>$e_value)
					{
						if(!empty($e_value))
						{
							$att_id = implode(',',$e_value);
							
							$insertAttribute['product_id'] = $id;
							$insertAttribute['element_id'] = $e_key;
							$insertAttribute['attributes_id'] = $att_id;
							$insertAttribute['created'] = date('Y-m-d H:i:s');
							
							$attr_result = insert('product_elements_attributes',$insertAttribute,'');
							logThis($attr_result->query, date('Y-m-d'),'Product Elements Attributes');
						}
					}
				}
			if($update_result->status == "success")
			{
				$this->uploadProductImages($id,$image);
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
		$insertdata['mrp_price'] 						= $this->input->post('text_mrp_price');
		$insertdata['discount'] 						= $this->input->post('text_discount');
		$insertdata['net_price'] 						= $this->input->post('text_net_price');
		$insertdata['tax'] 								= $this->input->post('text_tax');
		$insertdata['qty'] 								= $this->input->post('txt_qty');
		$insertdata['gst_amt'] 							= $gst_amt;
		$insertdata['discount_amt'] 					= $discount_amt;
		
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
		
		$insert_result 							= insert('product_details',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'Products');
		
		if($insert_result->status == "success")
		{
			$product_id = $insert_result->id;
			$this->uploadProductImages($product_id);
			
			//Stock details
			$stock = $this->input->post('text_stock');

			if($stock == '' || $stock == NULL){
				$product_stock = 0;
			}
			else{

				$product_stock = $stock;
			}
			$stockdata['product_id'] 				= $product_id;
			$stockdata['onhand_quantity'] 			= $product_stock;
			$stockdata['created_by'] 				= $user_id;
			$stockdata['created'] 					= date('Y-m-d H:i:s');
			
			$stock_id 								= $this->Master_m->insert('stock',$stockdata);
			$query 									= $this->db->last_query();
			logThis($query, date('Y-m-d'),'Stock');
			
			$stockdetail['stock_id'] 			= $stock_id;
			$stockdetail['status'] 				= 1;
			$stockdetail['quantity'] 			= $product_stock;
			$stockdetail['created'] 			= date('Y-m-d H:i:s');
			
			$stock_id 							= $this->Master_m->insert('stock_details',$stockdetail);
			$query 								= $this->db->last_query();
			logThis($query, date('Y-m-d'),'Stock');
			
			//Insert product elements attributes details
			if(!empty($element_arr))
			{
				foreach($element_arr as $e_key=>$e_value)
				{
					if(!empty($e_value))
					{
						$att_id = implode(',',$e_value);
						
						$insertAttribute['product_id'] 			= $product_id;
						$insertAttribute['element_id'] 			= $e_key;
						$insertAttribute['attributes_id'] 		= $att_id;
						$insertAttribute['created'] 			= date('Y-m-d H:i:s');
						
						$attr_result 							= insert('product_elements_attributes',$insertAttribute,'');
						logThis($attr_result->query, date('Y-m-d'),'Product Elements Attributes');
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

	public function uploadProductImages($product_id,$image=null)
	{
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

				//$imageName = file_upload("image",PRODUCT_IMAGE_PATH);
				$file_path     = PRODUCT_IMAGE_PATH."$product_id/";
				if(!is_dir($file_path))
					mkdir($file_path,0777,true);
				
				$imageName 		= $_FILES['image']['name'];
				compressImage($_FILES['image']['tmp_name'], $file_path.$imageName,30);
				
				/*$imageName = file_upload("image",$file_path);
				$url = explode('/', URL);
				array_pop($url);
				$project_name = end($url);
				$source = DOCUMENT_ROOT.'/'.$project_name.'/'.$file_path.$imageName;
				$target = DOCUMENT_ROOT.'/'.$project_name.'/'.$file_path;
				
				$re_size = $this->resizeImage($source,$target);*/

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
	
	public function updateStatus()
	{
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
	
	public function uploadImage()
	{
		$fieldname = "file";

		if($_FILES[$fieldname]['name']){
			$upload_name = file_upload("file",PRODUCT_DESC_PATH);
		}
		$response = new \StdClass;
		$response->link = base_url().PRODUCT_DESC_PATH.$upload_name;

		// Send response.
		echo stripslashes(json_encode($response));
	}
	
	
	public function deleteProductImage()
    {
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

	public function getGroupUnit(){
		$json = array(); 
		
        if($this->input->is_ajax_request())
        { 
			$id = $this->input->post('id');
			$option = "";
			$where['group_id'] 	= $id;
			$result 			= $this->Master_m->where('group_unit',$where);
			if(!empty($result)){
				$option = '<option value="">Select Group Unit</option>';
				foreach($result as $row){
					$option .= '<option value='.$row['group_unit_id'].'>'.$row['unit'].'</option>';
				}
				$json['success'] = 'success';
			}else{
				//$json['error'] = 'error';
			}
			$json['option'] = $option;
			
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
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
		
}