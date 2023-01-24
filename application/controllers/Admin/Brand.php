<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller
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
		$headdata['title'] 	= "Brand | ".ADMIN_THEME;
		$headdata['page'] 	= "brand";
		$jsdata['pagejs'] 	= array('application/Brand.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Brand/Brand_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//Function is used for featch Brand for datatable
	public function bindDataTable()
	{
		try
		{
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			// if(strtolower($user_type) != "admin"){
			// 	$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
			// 	$where    	= array("is_active != 2","created_by = $user_id");
			// }else{
			// 	$where    = array("is_active != 2");
			// }
			$table         	= "brand";
			$select_column 	= array("brand_id","brand_name","is_active","created_by");
			$join_column 	= "";
			$order_column	= array(NULL,"brand_name","is_active",NULL);
			$search_column 	= array("brand_name","is_active");
			$group_by 		= "";
			$order_by 		= "brand_id  DESC";
			$where    		= array("is_active != 2");
			$fetch_data 	= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 		= $row->brand_id;
				$created_by = $row->created_by;
				$action 	= "";
				$disabled 	= "";

				$viewBtnURL = base_url().'view-brand/'.$id;
				$editBtnURL = base_url().'edit-brand/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{					
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateBrand('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}

				if(strtolower($user_type) != "admin"){
					$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
					if($created_by == $user_id){
						$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
										'.$editBtn.$deleteBtn.'
									</ul>';
					}else{
						$disabled 	= "disabled";
					}
				}else{
					$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
									'.$editBtn.$deleteBtn.'
								</ul>';
				}

				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateBrand('.$id.',0)" class="'.$disabled.'">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block" class="'.$disabled.'">
										<a href="javascript:void(0)"  onclick="updateBrand('.$id.',1)">
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
				$sub_array[] = '<div class="userDatatable-content">'.$row->brand_name.'</div>';
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

	//add Brand form
	public function addBrand()
	{
		$headdata['title'] 		= 'Add Brand | '.ADMIN_THEME;
		$data['pagejs'] 		= array('application/Brand.js');
		$headdata['page'] 		= "add-brand";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Brand/AddBrand_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Brand 
	public function editBrand()
	{
		$id['brand_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('brand',$id);
		
		$headdata['title'] 	= 'Edit Brand | '.ADMIN_THEME;
		$headdata['page'] 	= "brand";
		$data['pagejs'] = array('application/Brand.js');		
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Brand/AddBrand_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitBrand()
	{
		$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$role_id 	= $this->session->userdata[ADMIN_SESSION]['role_id'];		
		$brand_name = trim($this->input->post('text_brand_name'));
		
		$short_code 	= generateShortcode(strtolower($brand_name));
		$is_brand 		= $this->Master_m->ischeckBrand($brand_name); 
		$last_page_url 	= $_SERVER['HTTP_REFERER'];
		
		
		$last_char = substr($short_code, -1);
		if($last_char == '-'){
			$short_code = rtrim($short_code, "-");;
		}else{
			$short_code = $short_code;
		}
		
		$brand_logo = $this->input->post('old_brand_logo');
		if($_FILES['brand_logo']['name'])
		{
			if(!is_dir(BRAND_LOGO_PATH)){
				mkdir(BRAND_LOGO_PATH,0777,true);
			}
			$brand_logo = file_upload("brand_logo",BRAND_LOGO_PATH);
		}

		if(!empty($this->input->post('text_brand_id')))
		{
			$id = $this->input->post('text_brand_id');
			
			$updatedata['brand_name'] = $brand_name;
			$updatedata['short_code'] = $short_code;
			$updatedata['brand_logo'] = $brand_logo;
			$updatedata['modified_by'] = $user_id;
			$updatedata['modified'] = date('Y-m-d H:i:s');
			$is_active = $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}

			if(!empty($is_brand)){ 
				if($role_id == 1){
					$where['brand_id'] = $id;
					$update_result = update('brand',$updatedata,$where);
					logThis($update_result->query, date('Y-m-d'),'Brand');
					$this->session->set_flashdata('success','Successfully Update Record.');
					redirect('brand');
				}else{
					if($user_id == $is_brand[0]['created_by']){
						$where['brand_id'] = $id;
						$update_result = update('brand',$updatedata,$where);
						logThis($update_result->query, date('Y-m-d'),'Brand');
						$this->session->set_flashdata('success','Successfully Update Record.');
						redirect('brand');
					}
					else{
						$this->session->set_flashdata('error', 'Brand Already Exsist !!');
						redirect($last_page_url);
					}
				}
				
			}
			
		}
		
		if(empty($is_brand)){
			$insertdata['brand_name'] = $brand_name;
			$insertdata['short_code'] = $short_code;
			$insertdata['brand_logo'] = $brand_logo;
			$insertdata['created_by'] = $user_id;
			$insertdata['created'] = date('Y-m-d H:i:s');
			
			$insert_result = insert('brand',$insertdata,'');
			logThis($insert_result->query, date('Y-m-d'),'Brand');
			$this->session->set_flashdata('success', 'Successfully Insert Record.');
			redirect('brand');
		}else{
			$this->session->set_flashdata('error', 'Brand Already Exsist !!');
			redirect($last_page_url);
		}
		
	}

	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      = $this->input->post('id');
		$updatedata['modified_by'] = $user_id;
		$updatedata['modified'] = date('Y-m-d H:i:s');
		$updatedata['is_active'] = $this->input->post('status');
		
		$where['brand_id'] = $id;
		$update_result = update('brand',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Brand');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
