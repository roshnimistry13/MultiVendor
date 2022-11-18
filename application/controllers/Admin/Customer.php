<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller
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
		$headdata['title'] 	= "Customer | ".ADMIN_THEME;
		$headdata['page'] 	= "customer";
		$jsdata['pagejs'] 	= array('application/Customer.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Customer/Customer_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//Function is used for featch Brand for datatable
	public function bindDataTable()
	{
		try
		{
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			
			if(strtolower($user_type) != "admin"){
				$user_id 				= $this->session->userdata[ADMIN_SESSION]['user_id'];
				$table         			= "orders o";
				$select_column 			= array("c.customer_id","c.customer_name","c.mobile","c.email","c.is_active");
				$join_column['table'] 	= array("order_details od","customer_detail c");
				$join_column['join_on'] = array("od.order_id = o.order_id","c.customer_id = o.customer_id");
				$order_column			= array(NULL,"customer_name","mobile","email",NULL);
				$search_column 			= array("customer_name","mobile","email");
				$group_by 				= "o.customer_id";
				$order_by 				= "";
				$where    				= array("od.vendor_id = $user_id");
				$fetch_data 			= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
			}
			else{
				$table         	= "customer_detail";
				$select_column 	= array("customer_id","customer_name","mobile","email","is_active");
				$join_column 	= "";
				$order_column	= array(NULL,"customer_name","mobile","email",NULL);
				$search_column 	= array("customer_name","mobile","email");
				$group_by 		= "";
				$order_by 		= "customer_id  DESC";
				$where    		= array("is_active != 2");
				$fetch_data 	= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
			}
			
			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 		= $row->customer_id;
				$viewBtnURL = base_url().'view-customer/'.$id;
				
				$viewBtn   = '<li><a class="edit" href="'.$viewBtnURL.'">'.EYE_ICON.'</a></li>';				
				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$viewBtn.'
							</ul>';;				
				
				if($row->is_active == 1){
					$status = '<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
								Enable
							</span>';
				}
				else
				{
					$status = '<span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">
								Disable
							</span>';
				}
				
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->customer_name.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->mobile.'</div>';
				$sub_array[] = '<div class="userDatatable-content text-lowercase">'.$row->email.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$status.'</div>';
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

}
