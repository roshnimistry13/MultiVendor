<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
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
		$headdata['title'] = "Category | ".ADMIN_THEME;
		$headdata['page'] 		= "category";
		$jsdata['pagejs'] = array('application/Category.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Category/Category_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//Function is used for featch Category data for datatable
	public function bindDataTable()
	{
		try
		{
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			if(strtolower($user_type) != "admin"){
				$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
				$where    	= array("is_active != 2","created_by = $user_id");
			}else{
				$where    = array("is_active != 2");
			}
			$table         = "category";
			$select_column = array("category_id","category_name","is_active","parent_category_id");
			$join_column = "";
			$order_column= array(NULL,"category_name","parent_category_id","is_active",NULL);
			$search_column = array("category_name");
			$group_by = "";
			$order_by = "category_id  asc";
			// $where    = array("is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 				= $row->category_id;
				$parent_category 	= "";
				$parent_cat_id 		= $row->parent_category_id;
				if($parent_cat_id > 0 && ($parent_cat_id != "" || $parent_cat_id != null || !empty($parent_cat_id))){
					$whr1['category_id'] 	= $parent_cat_id;
					$result 				= $this->Master_m->where('category',$whr1);
					$parent_category 		= $result[0]['category_name'];
				}
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateCategory('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateCategory('.$id.',1)">
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

				$viewBtnURL = base_url().'view-category/'.$id;
				$editBtnURL = base_url().'edit-category/'.$id;
				
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateCategory('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				$viewBtn   = '<li><a class="view" href="'.$viewBtnURL.'">'.EYE_ICON.'</li>';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.'
							</ul>';
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->category_name.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$parent_category.'</div>';
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
		/*catch(myException $e)
		{
		toJson(['error' => ['msg' => $e->error(),'code'=> $e->code()]],true);
		}*/
		catch(Exception $e)
		{
			$json['status'] = 'error';
			/*$json['msbBox']['msg'] = 'Something Went Wrong!!!';
			logThis($e,now('Ymd-H'),'NOCReport/generateReport');

			toJson($json,true);*/
		}
	}

	//add Category form
	public function addCategory()
	{
		$headdata['title'] 		= 'Add Category | '.ADMIN_THEME;
		$headdata['page'] 		= "add-category";
		$data['pagejs'] 		= array('application/Category.js');
		
		$where['is_active'] 	= "1";
		$data['category']	 	= $this->Master_m->where('category',$where);
		//$data['brand'] 			= $this->Master_m->where('brand',$where);
		$data['elements'] 		= $this->Master_m->where('product_elements',$where);
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Category/AddCategory_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Category 
	public function editCategory()
	{
		$id['category_id'] 		= $this->uri->segment(2);
		$data['result'] 		= $this->Master_m->where('category',$id);
		
		$headdata['title'] 		= 'Edit Category | '.ADMIN_THEME;
		$headdata['page'] 		= "add-category";
		$data['pagejs'] 		= array('application/Category.js');
		
		$where['is_active'] 	= "1";
		$data['category'] 		= $this->Master_m->where('category',$where);
		//$data['brand'] 			= $this->Master_m->where('brand',$where);
		$data['elements'] 		= $this->Master_m->where('product_elements',$where);
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Category/AddCategory_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitCategory()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$category_name 			= trim($this->input->post('text_category_name'));
		$parent_category_id 	= $this->input->post('text_parent_category');		
		$p_cond['category_id'] 	= $parent_category_id;
		$p_result 				= $this->Master_m->where('category',$p_cond);
		$p_cat_name 			= ''; 
		$hierarchy = '';
		$child = '';
		
		if(!empty($p_result) && ($p_result[0]['hierarchy'] != NULL || $p_result[0]['child_category'] != '')){
			$hierarchy 				= $p_result[0]['hierarchy'];
			$child 					= $p_result[0]['child_category'];
			$p_cat_name 			= $p_result[0]['category_name'].'-'; 
		}	
		$short_code 		= strtolower($p_cat_name.$category_name);
		$rep_char 			= array(" ",",","/","[","]","(",")","--","---","&","--");
		$short_code 		= str_replace($rep_char,"-",$short_code);
		$rep_char1 			= array("--","---","----","----","--");
		$short_code 		= str_replace($rep_char1,"-",$short_code);
		
		$last_char = substr($short_code, -1);
		if($last_char == '-'){
			$short_code = rtrim($short_code, "-");;
		}else{
			$short_code = $short_code;
		}
		
		$category_image = $this->input->post('old_category_image');
		if($_FILES['category_image']['name'])
		{
			if(!is_dir(CATEGORY_IMAGE_PATH)){
				mkdir(CATEGORY_IMAGE_PATH,0777,true);
			}
			$category_image = file_upload("category_image",CATEGORY_IMAGE_PATH);
		}

		// $brand 			= $this->input->post('txt_brand_id');
		// if($brand != NULL || $brand != '')
		// 	$brand_id = implode(',', $brand);
		// else
		// 	$brand_id = '';

		// Elements	
		$elements 			= $this->input->post('txt_elements');
		if($elements != NULL || $elements != '')
			$elements_id = implode(',', $elements);
		else
			$elements_id = '';

		$services =  $this->input->post('check_services');
		if(!empty($services)){
			$services = implode(',',$services);
		}else{
			$services = "";
		}
		
		if(!empty($this->input->post('text_categroy_id')))
		{
			$id = $this->input->post('text_categroy_id');
			
			if($hierarchy != NULL ||$hierarchy != ''){
				$hierarchy = $hierarchy.",".$id;
			}
			else{
				$hierarchy = $id;
			}

			// FETCH CHILD CATEGORY FROM OLD PARENT ID
			$old_cond['category_id'] 			= $id;
			$old_p_result1 						= $this->Master_m->where('category',$old_cond);			
			$old_parent_cat 					= $old_p_result1[0]['parent_category_id'];			
			
			$old_child = array();
			$cat_arr = array();

			if($old_parent_cat > 0){
				$cond1['category_id'] 			= $old_parent_cat;
				$p_result1 						= $this->Master_m->where('category',$cond1);			
				$old_child_cat 					= $p_result1[0]['child_category'];			
				$cat_arr 						= explode(',',$old_child_cat);
			}
			// else{
			// 	$cat_arr 						= explode(',',$child);
			// 	$old_parent_cat					= $parent_category_id;
			// }
		
			
			// REMOVE OLD PARENT ID FORM CHILD ARRAY 
			if (($key = array_search($id, $cat_arr)) !== false) {
				unset($cat_arr[$key]);
			}
			
			// UPDATE CHILD CATEGORY FOR OLD PARENT CATEGORY ID
			$p_cat_new_child 						= implode(',',$cat_arr);
			$update_new_child['child_category'] 	= $p_cat_new_child;
			$cond2['category_id'] 					= $old_parent_cat;
			$update_cat_res 						= update('category',$update_new_child,$cond2);
			logThis($update_cat_res->query, date('Y-m-d'),'Category');

			$updatedata['category_name'] 					= $category_name;
			$updatedata['short_code'] 						= $short_code;
			$updatedata['parent_category_id'] 				= $parent_category_id;
			$updatedata['hierarchy'] 						= $hierarchy;
			//$updatedata['brand_id'] 						= $brand_id;
			$updatedata['element_id'] 						= $elements_id;
			$updatedata['description'] 						= $this->input->post('text_description');
			$updatedata['category_image'] 					= $category_image;
			$updatedata['modified_by'] 						= $user_id;
			$updatedata['modified'] 						= date('Y-m-d H:i:s');
			$updatedata['return_or_replace'] 				= $services;
			$updatedata['return_replace_validity'] 			= $this->input->post('txt_return_replace_validity');
			$updatedata['policy_covers'] 					= $this->input->post('txt_policy_covers');
			$updatedata['return_policy'] 					= $this->input->post('txt_policy_description');
			$is_active 										= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['category_id'] 		= $id;
			$update_result 				= update('category',$updatedata,$where);
			
			logThis($update_result->query, date('Y-m-d'),'Category');

			$p_result_2					= $this->Master_m->where('category',$p_cond);
			if(!empty($p_result_2)){
				$child_2 					= $p_result_2[0]['child_category'];
				if($child_2 != NULL ||$child_2 != ''){
					$child_2 = $child_2.",".$id;
				}
			}			
			else{
				$child_2 = $id;
			}
			
			// UPDATE CHILD CATEGORY FOR CURRENT PARENT	
			$updatedata2['child_category'] 			= $child_2;
			$cond2['category_id'] 					= $parent_category_id;
			$update_result2 						= update('category',$updatedata2,$cond2);
			logThis($update_result2->query, date('Y-m-d'),'Category');

			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('category');
		}
		
		$insertdata['category_name'] 					= $category_name;
		$insertdata['short_code'] 						= $short_code;
		$insertdata['parent_category_id'] 				= $parent_category_id;
		//$insertdata['brand_id'] 						= $brand_id;
		$insertdata['element_id'] 						= $elements_id;
		$insertdata['description'] 						= $this->input->post('text_description');
		$insertdata['category_image'] 					= $category_image;
		$insertdata['created_by'] 						= $user_id;
		$insertdata['return_or_replace'] 				= $services;
		$insertdata['return_replace_validity'] 			= $this->input->post('txt_return_replace_validity');
		$insertdata['policy_covers'] 					= $this->input->post('txt_policy_covers');
		$insertdata['return_policy'] 					= $this->input->post('txt_policy_description');
		$insertdata['created'] 				= date('Y-m-d H:i:s');
		
		$insert_result = insert('category',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'Category');

		// LAST INSERT CATEGORY ID
		$cat_id 		= $insert_result->id;


		if($hierarchy != NULL ||$hierarchy != ''){
			$hierarchy 	= $hierarchy.",".$cat_id;
		}
		else{
			$hierarchy 	= $cat_id;
		}
		
		if($child != NULL ||$child != ''){
			$child 		= $child.",".$cat_id;
		}
		else{
			$child = $cat_id;
		}

		// UPDATE hierarchy FROM CATEGORY ID

		$update_hierarchy['hierarchy'] 		= $hierarchy;
		$hierarchy_cond['category_id'] 		= $cat_id;
		$hierarchy_result 					= update('category',$update_hierarchy,$hierarchy_cond);
		
		logThis($hierarchy_result->query, date('Y-m-d'),'Category');

		//	UPDATE CHILD CATEGORY FROM PARENT CATEGOTY 

		$updatechild['child_category'] 	= $child;
		$child_cnd['category_id'] 		= $parent_category_id;
		$child_result 					= update('category',$updatechild,$child_cnd);
		logThis($child_result->query, date('Y-m-d'),'Category');

		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('category');
	}

	public function updateStatus()
	{
		$user_id 					= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$id      					= $this->input->post('id');
		$updatedata['modified_by'] 	= $user_id;
		$updatedata['modified'] 	= date('Y-m-d H:i:s');
		$updatedata['is_active'] 	= $this->input->post('status');		
		$where['category_id'] 		= $id;
		$update_result 				= update('category',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Category');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
