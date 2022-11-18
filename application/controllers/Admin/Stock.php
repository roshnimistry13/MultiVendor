<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller
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
		$headdata['title'] 	= "Stock | ".ADMIN_THEME;
		$headdata['page'] 	= "stock";
		$data['pagejs'] = array('application/Stock.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Stock/Stock_v', $data);
		$this->load->view('Admin/Common/Footer');
	}

	//Function is used for featch Unit information points data for datatable
	public function bindDataTable()
	{
		try
		{
			$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			if(strtolower($user_type) != "admin"){
				$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
				$where    = array("p.is_active != 2","p.vendor_id = $user_id");
			}else{
				$where    = array("p.is_active != 2");
			}

			$table         					= "product_details p";
			$select_column 					= array("p.product_id","p.product_name","p.stock","p.vendor_id","p.created_by","p.is_active","v.name as vendor_name");
			$join_column['table'] 			= array("vendor v");
			$join_column['join_on']			= array('v.vendor_id = p.vendor_id');
			$order_column					= array(NULL,"p.product_name","p.stock",NULL);
			$search_column 					= array("p.product_name","p.stock");
			$group_by 						= "";
			$order_by 						= "p.stock  asc";
			//$where    					= array("is_active != 2");
			$fetch_data 					= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id 			= $row->product_id;
				$product_name 	= "'$row->product_name'";
				$editBtnURL 	= base_url().'edit-stock/'.$id;				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateStockStatus('.$id.',2)">'.REMOVE_ICON.'</a></li>';
					$viewBtn   = '<li><a class="view"  onclick="viewStockDetail('.$id.', '.$product_name.')">'.EYE_ICON.'</li>';
				}
				else
				{
					redirect('admin');
				}
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

				//print_r($eleattrarr);
				$available_stock = $row->stock;
				if($available_stock <= 15){
					$stock_badges = '<span class="badge badge-round badge-danger badge-md">'.$row->stock.'</span>';
				}
				else if($available_stock <= 25){
					$stock_badges = '<span class="badge badge-round badge-warning badge-md">'.$row->stock.'</span>';
				}
				else if($available_stock <= 50){
					$stock_badges = '<span class="badge badge-round badge-info badge-md">'.$row->stock.'</span>';
				}
				else{
					$stock_badges = '<span class="badge badge-round badge-success badge-md">'.$row->stock.'</span>';
				}
				

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$viewBtn.$editBtn.'
							</ul>';
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content word-break py-1">'.$row->product_name.'<br>'.$elediv.'</div>';
				$sub_array[] = '<div class="userDatatable-content word-break">'.$row->vendor_name.'</div>';
				$sub_array[] = '<div class="userDatatable-content text-center">'.$stock_badges.'</div>';
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
	public function bindStockDetailDataTable()
	{
		try
		{
			$product_id 		= $this->input->get('product_id');
			$user_type 			= $this->session->userdata[ADMIN_SESSION]['user_type'];			
			$table         			= "stock_details";
			$select_column 			= array("stock_details_id","stock_out","stock_in","old_stock","current_stock","created");
			$join_column 			= "";
			$order_column			= array(NULL,"old_stock","current_stock");
			$search_column 			= array();
			$group_by 				= "";
			$order_by 				= "created  DESC";
			$where    				= array("product_id = $product_id");
			$fetch_data 			= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content text-center py-1">'.date('d-M-Y' , strtotime($row->created)).'</div>';
				$sub_array[] = '<div class="userDatatable-content text-center">'.$row->stock_in.'</div>';
				$sub_array[] = '<div class="userDatatable-content text-center">'.$row->stock_out.'</div>';
				$sub_array[] = '<div class="userDatatable-content text-center">'.$row->old_stock.'</div>';
				$sub_array[] = '<div class="userDatatable-content text-center">'.$row->current_stock.'</div>';
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

	//edit Stock 
	public function editStock()
	{
		$id['product_id'] 			= $this->uri->segment(2);
		$data['result'] 			= $this->Master_m->where('product_details',$id);		
		$headdata['title'] 			= 'Edit Stock | '.ADMIN_THEME;
		$headdata['page'] 			= "stock";
		$data['pagejs'] 			= array('application/Stock.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Stock/AddStock_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitStock()
	{
		$user_id 				= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$product_id 			= $this->input->post('text_product_id');
		$stock 					= $this->input->post('text_product_stock');
		$stock_in 				= $this->input->post('text_stock_in');

		$id['product_id'] 			= $product_id;
		$result						= $this->Master_m->where('product_details',$id);	
		$old_stock 					= $result[0]['stock'];

		$new_stock 					= $old_stock + $stock_in;

		$updatedata['stock'] 			= $new_stock;
		$updatedata['modified_by'] 		= $user_id;
		$updatedata['modified'] 		= date('Y-m-d H:i:s');

		$where['product_id'] 			= $product_id;
		$update_result 					= update('product_details',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Stock');

		$insertdata['product_id'] 		= $product_id;
		$insertdata['status'] 			= 1;
		$insertdata['old_stock'] 		= $old_stock;
		$insertdata['stock_in'] 		= $stock_in;
		$insertdata['current_stock'] 	= $new_stock;
		$insertdata['created'] 			= date('Y-m-d H:i:s');;		
		$insert_result 					= insert('stock_details',$insertdata,'');
		
		logThis($insert_result->query, date('Y-m-d'),'Stock Details');

		$this->session->set_flashdata('success','Successfully Update Record.');
		redirect('stock');
	}

	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      = $this->input->post('id');
		$updatedata['modified_by'] = $user_id;
		$updatedata['modified'] = date('Y-m-d H:i:s');
		$updatedata['is_active'] = $this->input->post('status');
		
		$where['unit_id'] = $id;
		$update_result = update('unit',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Unit');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
