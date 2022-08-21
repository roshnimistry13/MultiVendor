<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends CI_Controller
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
		$headdata['title'] 	= "Coupon | ".ADMIN_THEME;
		$headdata['page'] 	= "coupon";
		$jsdata['pagejs'] 	= array('application/Coupon.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Coupon/Coupon_v');
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
			$table         	= "coupon";
			$select_column 	= array("coupon_id","coupon_code","coupon_amount","start_date","expiry_date","is_active","created_by");
			$join_column 	= "";
			$order_column	= array(NULL,"coupon_code","start_date","expiry_date","is_active",NULL);
			$search_column 	= array("coupon_code","start_date","expiry_date","is_active");
			$group_by 		= "";
			$order_by 		= "coupon_id  DESC";
			$where    		= array("is_active != 2");
			$fetch_data 	= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 		= $row->coupon_id;
				$created_by = $row->created_by;
				$action 	= "";
				$disabled 	= "";		
				
				$editBtnURL = base_url().'edit-coupon/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{					
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateCoupon('.$id.',2)">'.REMOVE_ICON.'</a></li>';
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
										<a href="javascript:void(0)"  onclick="updateCoupon('.$id.',0)" class="'.$disabled.'">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block" class="'.$disabled.'">
										<a href="javascript:void(0)"  onclick="updateCoupon('.$id.',1)">
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
				// print_r(date('d-M-Y'));
				$date1 = strtotime(date('d-M-Y'));
				$date2 = strtotime(date('d-M-Y',strtotime($row->expiry_date)));
				
				if($date1 <= $date2){

					$s_date 	= new DateTime(date('d-M-Y'));;
					$e_date 	= new DateTime(date('d-M-Y',strtotime($row->expiry_date)));
					$days_diff 	= $s_date->diff($e_date);
					
					$expire_status = '<div class="userDatatable-content"><span class="color-danger">'.$days_diff->days.' Day</span></div>';

				}else{
					$expire_status = '<div class="userDatatable-content"><span class="color-danger">Expired</span></div>';
				}
				
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->coupon_code.'</div>';
				$sub_array[] = '<div class="userDatatable-content">₹'.$row->coupon_amount.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.date('d-M-Y',strtotime($row->start_date)).'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.date('d-M-Y',strtotime($row->expiry_date)).'</div>';
				$sub_array[] = $expire_status;
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
	public function addCoupon()
	{
		$headdata['title'] 		= 'Add Coupon | '.ADMIN_THEME;
		$data['pagejs'] 		= array('application/Coupon.js');
		$headdata['page'] 		= "add-coupon";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Coupon/AddCoupon_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Brand 
	public function editCopoun()
	{
		$id['coupon_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('coupon',$id);
		
		$headdata['title'] 	= 'Edit Coupon | '.ADMIN_THEME;
		$headdata['page'] 	= "coupon";
		$data['pagejs'] = array('application/Coupon.js');		
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Coupon/AddCoupon_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitCoupon()
	{
		$user_id 			= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$coupon_code 		= trim($this->input->post('text_coupon_code'));
		$coupon_amt 		= trim($this->input->post('text_coupon_amt'));
		$coupon_desc 		= trim($this->input->post('text_coupon_desc'));
		$from_date 			= date('Y-m-d',strtotime($this->input->post('from_date')));
		$to_date 			= date('Y-m-d',strtotime($this->input->post('to_date')));
		
		if(!empty($this->input->post('text_coupon_id')))
		{
			$id = $this->input->post('text_coupon_id');
			
			$updatedata['coupon_code'] 		= $coupon_code;
			$updatedata['coupon_amount'] 	= $coupon_amt;
			$updatedata['description'] 		= $coupon_desc;
			$updatedata['start_date'] 		= $from_date;
			$updatedata['expiry_date'] 		= $to_date;
			$updatedata['updated_by'] 		= $user_id;
			$updatedata['update_at'] 		= date('Y-m-d H:i:s');
			$is_active 						= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['coupon_id'] = $id;
			$update_result = update('coupon',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Coupon');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('coupon');
		}
		
		$insertdata['coupon_code'] 		= $coupon_code;
		$insertdata['coupon_amount'] 	= $coupon_amt;
		$insertdata['description'] 		= $coupon_desc;
		$insertdata['start_date'] 		= $from_date;
		$insertdata['expiry_date'] 		= $to_date;
		$insertdata['created_by'] 		= $user_id;
		$insertdata['create_at'] 			= date('Y-m-d H:i:s');
		
		$insert_result = insert('coupon',$insertdata,'');
		
		logThis($insert_result->query, date('Y-m-d'),'Coupon');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('coupon');
	}

	public function updateStatus()
	{
		$user_id 					= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$id      					= $this->input->post('id');
		$updatedata['updated_by'] 	= $user_id;
		$updatedata['update_at'] 	= date('Y-m-d H:i:s');
		$updatedata['is_active'] 	= $this->input->post('status');
		
		$where['coupon_id'] 		= $id;
		$update_result 				= update('coupon',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Brand');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
