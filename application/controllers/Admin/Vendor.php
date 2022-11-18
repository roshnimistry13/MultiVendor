<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller
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
		$headdata['title'] 	= "Vendor | ".ADMIN_THEME;
		$headdata['page'] 	= "vendor";
		$data['pagejs'] 	= array('application/Vendor.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Vendor/Vendor_v', $data);
		$this->load->view('Admin/Common/Footer');
	}

	//Function is used for featch Vendor data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         			= "vendor";
			$select_column 			= array("vendor_id","name","email","phone","company","category","is_active");
			$join_column 			= "";
			//$join_column['table'] 	= array("role r");
			//$join_column['join_on'] = array("r.role_id = u.role_id",);
			$order_column			= array(NULL,"name","email","phone","company","is_active",NULL);
			$search_column 			= array("name","email","phone","company");
			$group_by 				= "";
			$order_by 				= "vendor_id  DESC";
			$where    				= array("is_active != 2");
			$fetch_data 			= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->vendor_id;
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateVendor('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateVendor('.$id.',1)">
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

				$editBtnURL = base_url().'edit-vendor/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateBrand('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				//$viewBtn   = '<li><a class="view" href="'.$viewBtnURL.'">'.EYE_ICON.'</li>';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.'
							</ul>';
				
				$sub_array 		= array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.ucwords($row->name).'</div>';
				$sub_array[] = '<div class="userDatatable-content text-lowercase">'.$row->email.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->phone.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.ucwords($row->company).'</div>';
				$sub_array[] 	= $status;
				$sub_array[] 	= $action;
				$data[] 		= $sub_array;
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

	//add Vendor form
	public function addVendor()
	{
		$headdata['title'] 	= 'Add Vendor | '.ADMIN_THEME;
		$headdata['page'] 	= "add-vendor";
		$data['pagejs'] 	= array('application/Vendor.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Vendor/AddVendor_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Submenu 
	public function editVendor()
	{
		$id['vendor_id'] 		= $this->uri->segment(2);
		$data['result'] 		= $this->Master_m->where('vendor',$id);
		$headdata['title'] 		= 'Edit Vendor | '.ADMIN_THEME;
		$data['pagejs'] 		= array('application/Vendor.js');
		$headdata['page'] 		= "add-vendor";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Vendor/AddVendor_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitVendor()
	{		
		if(!empty($this->input->post('text_vendor_id')))
		{
			$id 		= $this->input->post('text_vendor_id');
			$password 	= $this->input->post('text_password');
			if(!empty($password) || $password != "" || $password != null){
				$updatedata['password'] 			= md5($this->input->post('text_password'));;
			}
				
			$updatedata['name'] 				= $this->input->post('text_name');			
			$updatedata['phone'] 				= $this->input->post('text_contact_no');
			$updatedata['email'] 				= $this->input->post('text_email');;
			$updatedata['company'] 				= $this->input->post('text_company');;
			$updatedata['gstin_no'] 			= $this->input->post('text_gstin_no');;
			$updatedata['pan_no'] 				= $this->input->post('text_pan_no');;
			//$updatedata['category'] 			= $this->input->post('text_user_name');;
			$updatedata['address'] 				= $this->input->post('text_street');;
			$updatedata['city'] 				= $this->input->post('text_city');;
			$updatedata['state'] 				= $this->input->post('text_state');;
			$updatedata['pin_code'] 			= $this->input->post('text_pincode');;
			$updatedata['country'] 				= $this->input->post('text_country');;	
			$updatedata['bank_name'] 			= $this->input->post('text_bank_name');;
			$updatedata['branch_code'] 			= $this->input->post('text_branch_code');;
			$updatedata['ifsc_code'] 			= $this->input->post('text_ifsc_code');;
			$updatedata['accountno'] 			= $this->input->post('text_accountno');;		
			$updatedata['acc_holder_name'] 		= $this->input->post('text_card_holdername');;		
			$updatedata['modified'] 			= date('Y-m-d H:i:s');
			$is_active 							= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['vendor_id'] 	= $id;
			$update_result 		= update('vendor',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Vendor');
			if($update_result->status == "success"){
				$this->session->set_flashdata('success', 'Successfully Update Record.');	
			}
			else{
				$this->session->set_flashdata('error', $update_result->message);	
			}
			redirect('vendor');
		}
		
			$unique_code = 'VN'.rand_number();	

			$insertdata['unique_code'] 			= $unique_code;			
			$insertdata['name'] 				= $this->input->post('text_name');			
			$insertdata['phone'] 				= $this->input->post('text_contact_no');
			$insertdata['email'] 				= $this->input->post('text_email');;
			$insertdata['company'] 				= $this->input->post('text_company');;
			$insertdata['gstin_no'] 			= $this->input->post('text_gstin_no');;
			$insertdata['pan_no'] 				= $this->input->post('text_pan_no');;
			$insertdata['password'] 			= md5($this->input->post('text_password'));;
			$insertdata['address'] 				= $this->input->post('text_street');;
			$insertdata['city'] 				= $this->input->post('text_city');;
			$insertdata['state'] 				= $this->input->post('text_state');;
			$insertdata['pin_code'] 			= $this->input->post('text_pincode');;
			$insertdata['country'] 				= $this->input->post('text_country');;
			$insertdata['bank_name'] 			= $this->input->post('text_bank_name');;
			$insertdata['branch_code'] 			= $this->input->post('text_branch_code');;
			$insertdata['ifsc_code'] 			= $this->input->post('text_ifsc_code');;
			$insertdata['accountno'] 			= $this->input->post('text_accountno');;
			$insertdata['acc_holder_name'] 		= $this->input->post('text_card_holdername');;		
			$insertdata['is_active'] 			= 1;
			$insertdata['created'] 				= date('Y-m-d H:i:s');
		
		$insert_result = insert('vendor',$insertdata,'');
		$id = $insert_result->id;
		logThis($insert_result->query, date('Y-m-d'),'Vendor');
		if($insert_result->status == "success"){
			$this->session->set_flashdata('success', 'Successfully Insert Record.');	
		}
		else{
			$this->session->set_flashdata('error', $insert_result->message);	
		}
		redirect('vendor');
	}

	public function updateStatus()
	{		
		$id      					= $this->input->post('id');
		$updatedata['modified'] 	= date('Y-m-d H:i:s');
		$updatedata['is_active'] 	= $this->input->post('status');
		
		$where['vendor_id'] 	= $id;
		$update_result 		= update('vendor',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Vendor');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
