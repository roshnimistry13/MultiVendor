<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller
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
		// $a = $this->Master_m->getAllCategoryByoffer();
		// print_r($a);die;
		$headdata['title'] 	= "Offer | ".ADMIN_THEME;
		$headdata['page'] 	= "offer";
		$jsdata['pagejs'] 	= array('application/Offer.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Offer/Offer_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//Function is used for featch Brand for datatable
	public function bindDataTable()
	{
		try
		{
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			
			$table         	= "offer";
			$select_column 	= array("offer_id","title","offer_on_element","offer_value","is_active","created_by","user_type","from_date","to_date");
			$join_column 	= "";
			$order_column	= array(NULL,"title","from_date","to_date","is_active",NULL);
			$search_column 	= array("title","offer_on_element","offer_value","is_active","user_type");
			$group_by 		= "";
			$order_by 		= "offer_id  DESC";
			$where    		= array();
			$fetch_data 	= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 					= $row->offer_id;
				$created_by 			= $row->created_by;
				$offer_on_element 		= $row->offer_on_element;
				$from_date 				= $row->from_date;
				$to_date 				= $row->to_date;
				$action 	= "";
				$disabled 	= "";		
				
				$editBtnURL = base_url().'edit-offer/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{					
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="deleteOffer('.$id.')">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.'
							</ul>';

				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateOffer('.$id.',0)" class="">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';

				$upcomming_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateOffer('.$id.',1)" class="">
											<span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">
												Up Comming
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block" class="">
										<a href="javascript:void(0)"  onclick="updateOffer('.$id.',1)">
											<span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">
												Disable
											</span>
										</a>
									</div>';
				if($row->is_active == 1){
					$status = $active_status;
				}else if($row->is_active == 2){
					$status = $upcomming_status;
				}
				else
				{
					$status = $deactive_status;
				}

				$date1 = strtotime(date('d-M-Y')); // today;
				$date2 = strtotime(date('d-M-Y',strtotime($row->to_date)));

				if($row->is_active != 2){
					if($date1 < $date2){

						$s_date 	= new DateTime(date('d-M-Y'));;
						$e_date 	= new DateTime(date('d-M-Y',strtotime($row->to_date)));
						$days_diff 	= $s_date->diff($e_date);
						
						$expire_status = '<div class="userDatatable-content"><span class="color-success">'.$days_diff->days.' Day</span></div>';
						
	
					}else if($date1 == $date2){
						$expire_status 	= '<div class="userDatatable-content"><span class="color-success">Today</span></div>';
					}
					else{
						$expire_status 		= '<div class="userDatatable-content"><span class="color-danger">Expired</span></div>';
						//$status 			= $deactive_status;
					}
				}else{
					$expire_status = '<div class="userDatatable-content"><span class="color-dark">N/A</span></div>';
				}	
				
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->title.'</div>';		
				$sub_array[] = '<div class="userDatatable-content">'.date('d-M-Y',strtotime($from_date)).'</div>';	
				$sub_array[] = '<div class="userDatatable-content">'.date('d-M-Y',strtotime($to_date)).'</div>';	
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
	public function addOffer()
	{
		$data['category']	= $this->Master_m->AllChildCategoryList();
		$headdata['title'] 		= 'Add Coupon | '.ADMIN_THEME;
		$data['pagejs'] 		= array('application/Offer.js');
		$headdata['page'] 		= "offer";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Offer/AddOffer_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Brand 
	public function editOffer()
	{
		$id['offer_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('offer',$id);
		$data['category']	= $this->Master_m->AllChildCategoryList();
		$headdata['title'] 	= 'Edit Offer | '.ADMIN_THEME;
		$headdata['page'] 	= "offer";
		$data['pagejs'] = array('application/Offer.js');		
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Offer/AddOffer_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitOffer()
	{
		
		$user_id 			= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$user_type 			= $this->session->userdata[ADMIN_SESSION]['user_type'];		
		$offer_element 		= trim($this->input->post('text_offer_element'));
		$offer_category 	= $this->input->post('text_offer_category');
		$offer_amt 			= $this->input->post('text_offer_amt');
		$offer_keyword 		= $this->input->post('text_offer_keyword');
		$from_date 			= date('Y-m-d',strtotime($this->input->post('from_date')));
		$to_date 			= date('Y-m-d',strtotime($this->input->post('to_date')));
		$symbol = "";
		if(strtolower($offer_element) == "discount")
		{
			$symbol = "%";
			$title 				= ucwords($offer_keyword).' '.$offer_amt.'% Off';
		}
		if(strtolower($offer_element) == "price")
		{
			$title 				= ucwords($offer_keyword).' ₹'.moneyFormatIndia_ui($offer_amt);
			$symbol = "₹";
		}
		if(!empty($offer_category)){
			$offer_category = implode(',',$offer_category);
		}
		if(!empty($this->input->post('text_offer_id')))
		{
			$id = $this->input->post('text_offer_id');
			
			$updatedata['title'] 				= "$title";
			$updatedata['keywords'] 			= $offer_keyword;
			$updatedata['symbol'] 				= $symbol;
			$updatedata['offer_on_element'] 	= $offer_element;
			$updatedata['offer_value'] 			= $offer_amt;
			$updatedata['user_type'] 			= $user_type;
			$updatedata['category_id'] 			= $offer_category;
			$updatedata['from_date'] 			= $from_date;
			$updatedata['to_date'] 				= $to_date;
			$updatedata['modified_by'] 			= $user_id;
			$updatedata['modified_at'] 			= date('Y-m-d H:i:s');
			$is_active 							= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else if($is_active == 2){

				$updatedata['is_active'] = 2;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['offer_id'] = $id;
			$update_result = update('offer',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Offer');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('offer');
		}
		
		$insertdata['title'] 				= "$title";
		$insertdata['keywords'] 			= $offer_keyword;
		$insertdata['symbol'] 				= $symbol;
		$insertdata['offer_on_element'] 	= $offer_element;
		$insertdata['offer_value'] 			= $offer_amt;
		$insertdata['user_type'] 			= $user_type;
		$insertdata['category_id'] 			= $offer_category;
		$insertdata['created_by'] 			= $user_id;
		$insertdata['from_date'] 			= $from_date;
		$insertdata['to_date'] 				= $to_date;
		$insertdata['created_at'] 			= date('Y-m-d H:i:s');
		$is_active 							= $this->input->post('text_is_active');
		if($is_active == 1){
			$insertdata['is_active'] = 1;
		}
		else if($is_active == 2){

			$insertdata['is_active'] = 2;
		}
		
		$insert_result = insert('offer',$insertdata,'');
		
		logThis($insert_result->query, date('Y-m-d'),'Offer');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('offer');
	}

	public function updateStatus()
	{
		$user_id 					= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$id      					= $this->input->post('id');
		$updatedata['modified_by'] 	= $user_id;
		$updatedata['modified_at'] 	= date('Y-m-d H:i:s');
		$updatedata['is_active'] 	= $this->input->post('status');
		
		$where['offer_id'] 			= $id;
		$update_result 				= update('offer',$updatedata,$where);
		
		logThis($update_result->query, date('Y-m-d'),'Offer');
		$json['status'] = "success";
		echo json_encode($json);
	}

	public function deleteoffer()
	{
		$user_id 					= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$id      					= $this->input->post('id');		
		$where['offer_id'] 			= $id;
		$result						= delete('offer',$where);
		logThis($result->query, date('Y-m-d'),'Offer');
		$json['status'] 			= "success";
		echo json_encode($json);
	}

	/************************************************************************************************
									SPECIAL OFFER		
	/************************************************************************************************ */

	public function specialoffer()
	{
		$headdata['title'] 	= "Special Offer | ".ADMIN_THEME;
		$headdata['page'] 	= "special-offer";
		$jsdata['pagejs'] 	= array('application/Offer.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Offer/SpecialOffer_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	public function addSpecialOffer()
	{
		$data['category']	= $this->Master_m->AllChildCategoryList();
		$headdata['title'] 		= 'Add Coupon | '.ADMIN_THEME;
		$data['pagejs'] 		= array('application/Offer.js');
		$headdata['page'] 		= "special-offer";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Offer/AddSpecialOffer_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitSpecialOffer()
	{
		
		$user_id 			= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$user_type 			= $this->session->userdata[ADMIN_SESSION]['user_type'];		
		$offer_element 		= trim($this->input->post('text_offer_element'));
		$title 				= trim($this->input->post('txt_offer_title'));
		$description 		= $this->input->post('text_description');
		$offer_category 	= $this->input->post('text_offer_category');
		$offer_amt 			= $this->input->post('text_offer_amt');
		$offer_keyword 		= $this->input->post('text_offer_keyword');
		$ordered_amount 	= $this->input->post('txt_order_value');
		$from_date 			= date('Y-m-d',strtotime($this->input->post('from_date')));
		$to_date 			= date('Y-m-d',strtotime($this->input->post('to_date')));
		$symbol = "";
		
		if(!empty($offer_category)){
			$offer_category = implode(',',$offer_category);
		}
		if(!empty($this->input->post('text_offer_id')))
		{
			$id = $this->input->post('text_offer_id');
			
			$updatedata['title'] 				= $title;
			$updatedata['description'] 			= $description;
			$updatedata['keywords'] 			= $offer_keyword;
			$updatedata['symbol'] 				= $symbol;
			$updatedata['offer_on_element'] 	= $offer_element;
			$updatedata['offer_value'] 			= $offer_amt;
			$updatedata['user_type'] 			= $user_type;
			$updatedata['category_id'] 			= $offer_category;
			$updatedata['from_date'] 			= $from_date;
			$updatedata['to_date'] 				= $to_date;
			$updatedata['ordered_amount'] 		= $ordered_amount;
			$updatedata['modified_by'] 			= $user_id;
			$updatedata['modified_at'] 			= date('Y-m-d H:i:s');
			$is_active 							= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else if($is_active == 2){

				$updatedata['is_active'] = 2;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['offer_id'] = $id;
			$update_result = update('specialoffer',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Offer');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('special-offer');
		}
		
		$insertdata['title'] 				= $title;
		$insertdata['description'] 			= $description;
		$insertdata['keywords'] 			= $offer_keyword;
		$insertdata['symbol'] 				= $symbol;
		$insertdata['offer_on_element'] 	= $offer_element;
		$insertdata['offer_value'] 			= $offer_amt;
		$insertdata['user_type'] 			= $user_type;
		$insertdata['category_id'] 			= $offer_category;
		$insertdata['from_date'] 			= $from_date;
		$insertdata['to_date'] 				= $to_date;
		$insertdata['ordered_amount'] 		= $ordered_amount;
		$insertdata['created_at'] 			= date('Y-m-d H:i:s');
		$is_active 							= $this->input->post('text_is_active');
		if($is_active == 1){
			$insertdata['is_active'] = 1;
		}
		else if($is_active == 2){

			$insertdata['is_active'] = 2;
		}
		
		$insert_result = insert('specialoffer',$insertdata,'');
		
		logThis($insert_result->query, date('Y-m-d'),'Offer');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('special-offer');
	}

	public function bindSpecialOfferDataTable()
	{
		try
		{
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			
			$table         	= "specialoffer";
			$select_column 	= array("offer_id","title","offer_on_element","offer_value","is_active","created_by","user_type","from_date","to_date");
			$join_column 	= "";
			$order_column	= array(NULL,"title","from_date","to_date","is_active",NULL);
			$search_column 	= array("title","offer_on_element","offer_value","is_active","user_type");
			$group_by 		= "";
			$order_by 		= "offer_id  DESC";
			$where    		= array();
			$fetch_data 	= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 					= $row->offer_id;
				$created_by 			= $row->created_by;
				$offer_on_element 		= $row->offer_on_element;
				$from_date 				= $row->from_date;
				$to_date 				= $row->to_date;
				$action 	= "";
				$disabled 	= "";		
				
				$editBtnURL = base_url().'edit-special-offer/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{					
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="deleteSpecialOffer('.$id.')">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.'
							</ul>';

				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateSpecialOffer('.$id.',0)" class="">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';

				$upcomming_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateSpecialOffer('.$id.',1)" class="">
											<span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">
												Up Comming
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block" class="">
										<a href="javascript:void(0)"  onclick="updateSpecialOffer('.$id.',1)">
											<span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">
												Disable
											</span>
										</a>
									</div>';
				if($row->is_active == 1){
					$status = $active_status;
				}else if($row->is_active == 2){
					$status = $upcomming_status;
				}
				else
				{
					$status = $deactive_status;
				}

				$date1 = strtotime(date('d-M-Y')); // today;
				$date2 = strtotime(date('d-M-Y',strtotime($row->to_date)));

				if($row->is_active != 2){
					if($date1 < $date2){

						$s_date 	= new DateTime(date('d-M-Y'));;
						$e_date 	= new DateTime(date('d-M-Y',strtotime($row->to_date)));
						$days_diff 	= $s_date->diff($e_date);
						
						$expire_status = '<div class="userDatatable-content"><span class="color-success">'.$days_diff->days.' Day</span></div>';
						
	
					}else if($date1 == $date2){
						$expire_status 	= '<div class="userDatatable-content"><span class="color-success">Today</span></div>';
					}
					else{
						$expire_status 		= '<div class="userDatatable-content"><span class="color-danger">Expired</span></div>';
						//$status 			= $deactive_status;
					}
				}else{
					$expire_status = '<div class="userDatatable-content"><span class="color-dark">N/A</span></div>';
				}	
				
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->title.'</div>';		
				$sub_array[] = '<div class="userDatatable-content">'.date('d-M-Y',strtotime($from_date)).'</div>';	
				$sub_array[] = '<div class="userDatatable-content">'.date('d-M-Y',strtotime($to_date)).'</div>';	
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

	public function editSpecialOffer()
	{
		$id['offer_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('specialoffer',$id);
		$data['category']	= $this->Master_m->AllChildCategoryList();
		$headdata['title'] 	= 'Edit Offer | '.ADMIN_THEME;
		$headdata['page'] 	= "special-offer";
		$data['pagejs'] = array('application/Offer.js');		
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Offer/AddSpecialOffer_v',$data);
		$this->load->view('Admin/Common/Footer');
	}


}
