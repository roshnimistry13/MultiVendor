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
		$headdata['title'] 		= "Order | ".ADMIN_THEME;
		$headdata['page'] 		= "order";
		$data['pagejs'] 		= array('application/Order.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Order/Order_v', $data);
		$this->load->view('Admin/Common/Footer');
	}
	
	//Function is used for featch Order data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         				= "orders o";
			$select_column 				= array("o.order_id","o.order_number","o.customer_id","o.total_quantity","o.total_amount","o.order_date","o.delivery_status_id","c.customer_name","o.is_active");
			$join_column['table'] 		= array("customer_detail c");
			$join_column['join_on'] 	= array("c.customer_id = o.customer_id");
			$order_column				= array(NULL,"o.order_date","o.order_number","c.customer_name","o.total_quantity","o.total_amount",NULL);
			$search_column 				= array("o.order_number");
			$group_by 					= "";
			$order_by 					= "o.order_id  DESC";
			$where    					= array("o.is_active != 2");
			$fetch_data 				= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;

			foreach($fetch_data as $row)
			{
				$id 		= $row->order_id;
				$action 	= "";
				$disabled 	= "";

				$viewBtnURL = base_url().'view-order/'.$id;
				$editBtnURL = base_url().'edit-order/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{					
					$editBtn   		= '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$viewBtn 		= '<li><a class="edit" href="'.$viewBtnURL.'">'.EYE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}

				
				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
									'.$editBtn.$viewBtn.'
								</ul>';
				$status = "";
				
				$sub_array 		= array();
				$sub_array[] 	= '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.date('d-M-Y',strtotime($row->order_date)).'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->order_number.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->customer_name.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->total_quantity.'</div>';
				$sub_array[] 	= '<div class="userDatatable-content">'.$row->total_amount.'</div>';
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

	public function ViewOrder(){
		$headdata['title'] 		= "View Order | ".ADMIN_THEME;
		$headdata['page'] 		= "order";
		$data['pagejs'] 		= array('application/Order.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Order/View_order_v', $data);
		$this->load->view('Admin/Common/Footer');
	}
}
