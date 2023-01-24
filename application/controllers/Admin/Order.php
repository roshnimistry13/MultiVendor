<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller
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
		$all_delivery_status	 = $this->Master_m->allDeliveryStatus();
		$headdata['title'] 		= "Order | ".ADMIN_THEME;
		$headdata['page'] 		= "order";
		$data['pagejs'] 		= array('application/Order.js');
		$data['delivery_status'] 		= $all_delivery_status;
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Order/Order_v', $data);
		$this->load->view('Admin/Common/Footer');
	}

	/**** REPLACE REQUEST LIST PAGE */
	public function replaceOrder()
	{		
		$headdata['title'] 		= "Order | ".ADMIN_THEME;
		$headdata['page'] 		= "order";
		$data['pagejs'] 		= array('application/Order.js');
		$data['pagtitle'] 		= "Replace Request";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Order/ReplaceReturn_Order_v', $data);
		$this->load->view('Admin/Common/Footer');
	}
	public function returnOrder()
	{		
		$headdata['title'] 		= "Order | ".ADMIN_THEME;
		$headdata['page'] 		= "order";
		$data['pagejs'] 		= array('application/Order.js');
		$data['pagtitle'] 		= "Return Request";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Order/ReplaceReturn_Order_v', $data);
		$this->load->view('Admin/Common/Footer');
	}
	
	//Function is used for featch Order data for datatable
	public function bindDataTable()
	{
		try
		{
			$status_id					= $this->input->get('status_id');
			$user_type 					= $this->session->userdata[ADMIN_SESSION]['user_type'];	
			// IF VENDOR LOGIN		
			if(strtolower($user_type) != "admin"){
				$user_id 				= $this->session->userdata[ADMIN_SESSION]['user_id'];
				if($status_id != "" && $status_id != null && $status_id > 0){
					$where    					= array("o.is_active != 2","o.delivery_status_id = $status_id","od.vendor_id = $user_id");
				}else{
					$where    					= array("o.is_active != 2","od.vendor_id = $user_id");
				}
			}else{
				// ADMIN LOGIN
				if($status_id != "" && $status_id != null && $status_id > 0){
					$where    					= array("o.is_active != 2","o.delivery_status_id = $status_id");
				}else{
					$where    					= array("o.is_active != 2");
				}
			}	
			
			
			$table         				= "orders o";
			$select_column 				= array("o.order_id","o.order_number","o.customer_id","o.total_quantity","o.total_amount","o.order_date","o.delivery_status_id","c.customer_name","o.is_active","d.delivery_status");
			$join_column['table'] 		= array("customer_detail c","delivery_status d","order_details od");
			$join_column['join_on'] 	= array("c.customer_id = o.customer_id","d.delivery_status_id = o.delivery_status_id","od.order_id = o.order_id");
			$order_column				= array(NULL,"o.order_date","o.order_number","c.customer_name","o.total_amount",NULL);
			$search_column 				= array("o.order_number","d.delivery_status","c.customer_name");
			$group_by 					= "o.order_id";
			$order_by 					= "o.order_id  DESC";
			
			$fetch_data 				= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
			// echo $this->db->last_query();
			//print_r($fetch_data );die;
			$data       = array();
			$i = 1;
			$all_delivery_status = $this->Master_m->allDeliveryStatus();
			foreach($fetch_data as $row)
			{
				$id 					= $row->order_id;
				$delivery_status 		= $row->delivery_status;
				$delivery_status_id 	= $row->delivery_status_id;
				$action 				= "";
				$disabled 				= "";
				$toal_amount 			= $row->total_amount;
				$viewBtnURL 			= base_url().'view-order/'.$id;
				$editBtnURL 			= base_url().'edit-order/'.$id;

				$vendor_total =$this->Master_m->getVendOrderDeatail($id);
				
				if($this->session->userdata[ADMIN_SESSION])
				{					
					// $editBtn   		= '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$editBtn = '';
					$editBtn   		.= '<div class="dropdown">
					<button type="button" class="btn dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						'.EDIT_ICON.'
					</button>
					
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
					foreach($all_delivery_status as $row1){
						
						$editBtn .='<li><a class="delivery-status dropdown-item" href="javascript:void(0)" data-orderid='.$id.' data-statusid='.$row1['delivery_status_id'].'>'.$row1['delivery_status'].'</a></li>';
					}
					$editBtn .='</div>
				</div>';
					$viewBtn 		= '<li><a class="edit" href="'.$viewBtnURL.'">'.EYE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}

				
				$status = '';
				$status .= '<div class="dropdown dropdown-click">
								<div class="btn-group dropcenter">
									<button class="btn btn-outline-lighten btn-sm">'.$delivery_status.'</button>
									<button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										'.DOWNARROW_ICON.'
									</button>
									<div class="dropdown-default dropdown-menu">';
						foreach($all_delivery_status as $row2){
							$active = '';
							if($delivery_status_id == $row2['delivery_status_id']){ $active = 'active';}
							$status .='<a class="dropdown-item delivery-status '.$active.'" href="javascript:void(0)" data-orderid='.$id.' data-statusid='.$row2['delivery_status_id'].'>'.$row2['delivery_status'].'</a>';
						}
				$status .= '</div></div></div>';
				
				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
									'.$viewBtn.'
								</ul>';
				
				
				$sub_array 		= array();
				$sub_array[] 	= '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.date('d-M-Y',strtotime($row->order_date)).'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->order_number.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->customer_name.'</div>';
				// $sub_array[] 	= '<div class="userDatatable-content">'.$row->total_quantity.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.moneyFormatIndia_admin($vendor_total).'</div>';
				// $sub_array[] 	= '<div class="userDatatable-content"><span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">'.$delivery_status.'</span></div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$status.'</div>';
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


	/******* REPLACE REQUEST DATA TABLE*/
	public function bindReplaceDataTable()
	{
		try
		{
			$user_type 					= $this->session->userdata[ADMIN_SESSION]['user_type'];	
			// IF VENDOR LOGIN		
			if(strtolower($user_type) != "admin"){
				$user_id 					= $this->session->userdata[ADMIN_SESSION]['user_id'];	
				$where    					= array('r.request_type = "replace"',"p.vendor_id = $user_id");			
			}else{
				$where 						= array('r.request_type = "replace"');
			}				
			
			$table         				= "return_request r";
			$select_column 				= array("r.return_request_id","r.request_type","r.order_no","r.return_request_date","r.status","r.is_completed","r.order_id","c.customer_name","r.product_id");
			$join_column['table'] 		= array("customer_detail c","product_details p");
			$join_column['join_on'] 	= array("c.customer_id = r.customer_id","p.product_id = r.product_id");
			$order_column				= array(NULL,"r.return_request_date","r.order_no","c.customer_name",null,NULL);
			$search_column 				= array("r.order_no","c.customer_name");			
			$order_by 					= "r.return_request_id  DESC";
			$group_by 					= '';
			$fetch_data 				= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
			
			$data       = array();
			$i = 1;
			$all_delivery_status = $this->Master_m->allDeliveryStatus();
			foreach($fetch_data as $row)
			{
				$request_id 			= $row->return_request_id;				
				$order_id 				= $row->order_id;				
				$product_id 			= $row->product_id;				
				$action 				= "";			
				$viewBtnURL 			= base_url().'view-request/'.$request_id;
				
				$whr['product_id'] 	= $product_id;
				$whr['order_id'] 	=  $order_id;
				$order_data 		= $this->Master_m->where('order_details',$whr);
				$price 				= $order_data[0]['total_amt']; 
				$quantity 			= $order_data[0]['quantity']; 

				if($this->session->userdata[ADMIN_SESSION])
				{					
					$viewBtn 		= '<li><a class="edit" href="'.$viewBtnURL.'">'.EYE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				
				$action = 	'<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$viewBtn.'
							</ul>';				
				
				$sub_array 		= array();
				$sub_array[] 	= '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.date('d-M-Y',strtotime($row->return_request_date)).'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->order_no.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->customer_name.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.moneyFormatIndia_admin($price).'</div>';
				$sub_array[] 	= '<div class="userDatatable-content text-info">'.$row->status.'</div>';
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

	/******* REPLACE REQUEST DATA TABLE*/
	public function bindReturnDataTable()
	{
		try
		{
			$user_type 					= $this->session->userdata[ADMIN_SESSION]['user_type'];	
			// IF VENDOR LOGIN		
			if(strtolower($user_type) != "admin"){
				$user_id 					= $this->session->userdata[ADMIN_SESSION]['user_id'];	
				$where    					= array('r.request_type = "return"',"p.vendor_id = $user_id");			
			}else{
				$where 						= array('r.request_type = "return"');
			}				
			
			$table         				= "return_request r";
			$select_column 				= array("r.return_request_id","r.request_type","r.order_no","r.return_request_date","r.status","r.is_completed","r.order_id","c.customer_name","r.product_id");
			$join_column['table'] 		= array("customer_detail c","product_details p");
			$join_column['join_on'] 	= array("c.customer_id = r.customer_id","p.product_id = r.product_id");
			$order_column				= array(NULL,"r.return_request_date","r.order_no","c.customer_name",null,NULL);
			$search_column 				= array("r.order_no","c.customer_name");			
			$order_by 					= "r.return_request_id  DESC";
			$group_by 					= '';
			$fetch_data 				= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
			
			$data       = array();
			$i = 1;
			$all_delivery_status = $this->Master_m->allDeliveryStatus();
			foreach($fetch_data as $row)
			{
				$request_id 			= $row->return_request_id;				
				$order_id 				= $row->order_id;				
				$product_id 			= $row->product_id;				
				$action 				= "";			
				$viewBtnURL 			= base_url().'view-request/'.$request_id;
				
				$whr['product_id'] 	= $product_id;
				$whr['order_id'] 	=  $order_id;
				$order_data 		= $this->Master_m->where('order_details',$whr);
				$price 				= $order_data[0]['total_amt']; 
				$quantity 			= $order_data[0]['quantity']; 

				if($this->session->userdata[ADMIN_SESSION])
				{					
					$viewBtn 		= '<li><a class="edit" href="'.$viewBtnURL.'">'.EYE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				
				$action = 	'<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$viewBtn.'
							</ul>';				
				
				$sub_array 		= array();
				$sub_array[] 	= '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.date('d-M-Y',strtotime($row->return_request_date)).'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->order_no.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->customer_name.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.moneyFormatIndia_admin($price).'</div>';
				$sub_array[] 	= '<div class="userDatatable-content text-info">'.$row->status.'</div>';
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

	/*** VIEW ORDER DETAIL */
	public function ViewOrder(){
		$order_id 				= $this->uri->segment('2');
		$orderSummary 			= $this->Master_m->getOrderSummary($order_id);
		$order_product_detail	= $this->Master_m->getCustomerOrderList($order_id);
		$order_payment_detail	= $this->Master_m->getCustomerOrderpayment($order_id);
		$data['orderSummary'] 	= $orderSummary;
		$data['productdata'] 	= $order_product_detail;
		$data['paymentdata'] 	= $order_payment_detail;
		// print_r($orderSummary);die;
		$headdata['title'] 		= "View Order | ".ADMIN_THEME;
		$headdata['page'] 		= "order";
		$data['pagejs'] 		= array('application/Order.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Order/View_order_v', $data);
		$this->load->view('Admin/Common/Footer');
	}

	/*** VIEW REQUEST DETAIL */
	public function ViewRequest(){
		$request_id 			= $this->uri->segment('2');
		$reqest_data 			= $this->Master_m->getRequestData($request_id);
		
		if(!empty($reqest_data)){
			$product_id 			= $reqest_data[0]['product_id'];
			$whr['product_id']		= $product_id;
			$product 				= $this->Master_m->where('order_details',$whr); 

			$data['reqest_data'] 	= $reqest_data;
			$data['product'] 		= $product;
		
			$headdata['title'] 		= "View Order | ".ADMIN_THEME;
			$headdata['page'] 		= "order";
			$data['pagejs'] 		= array('application/Order.js');
			
			$this->load->view('Admin/Common/Header',$headdata);
			$this->load->view('Admin/Common/Topbar');
			$this->load->view('Admin/Common/Sidebar');
			$this->load->view('Admin/Order/View_request_v', $data);
			$this->load->view('Admin/Common/Footer');
		}else{
			redirect('error-page');
		}
		
	}

	public function updateDeliveryStatus(){
		$json = array(); 
		
        if($this->input->is_ajax_request())
        { 
			$orderid  	= $this->input->post('orderid');
			$statusid  	= $this->input->post('statusid');

			$updatedata['delivery_status_id'] 	= $statusid;
			$where['order_id'] 					= $orderid;
			$update_result 						= update('orders',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Orders');
			// update delivery date in order detail for products 

			$updatedata1['deliver_date'] 		= date('Y-m-d');
			$where1['order_id'] 				= $orderid;
			$update_result1						= update('order_details',$updatedata1,$where1);
			logThis($update_result1->query, date('Y-m-d'),'order_details');
			
			if($update_result->status == "success")
			{
				$json['success']	= 'success';
			}else{
				$json['error']	= 'error';
			}

		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}
}