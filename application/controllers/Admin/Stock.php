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
		$headdata['title'] = "Stock | ".ADMIN_THEME;
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
			$table         = "stock s";
			$select_column = array("s.stock_id","p.product_name","s.onhand_quantity","s.is_active");
			$join_column['table'] = array("product_details p");
			$join_column['join_on'] = array("p.product_id = s.product_id");
			$order_column= array(NULL,"p.product_name","s.onhand_quantity",NULL);
			$search_column = array("p.product_name","s.onhand_quantity");
			$group_by = "";
			$order_by = "s.stock_id  DESC";
			$where    = array("s.is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->stock_id;
				
				//$viewBtnURL = base_url().'view-stock/'.$id;
				$editBtnURL = base_url().'edit-stock/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateBrand('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				$viewBtn   = '<li><a class="view" href="'.$viewBtnURL.'">'.EYE_ICON.'</li>';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.'
							</ul>';
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->product_name.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->onhand_quantity.'</div>';
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

	//edit Stock 
	public function editStock()
	{
		$id['stock_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('stock',$id);
		
		$pid['product_id'] = $data['result'][0]['product_id'];
		$pro_result = $this->Master_m->where('product_details',$pid);
		
		$data['productName'] = $pro_result[0]['product_name'];
		
		$headdata['title'] = 'Edit Stock | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Stock.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Stock/AddStock_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitStock()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$stock_id = $this->input->post('text_stock_id');
		$stock = $this->input->post('text_stock');
		$onhand_quantity = $this->input->post('text_onhand_quantity');
		
		$new_quantity = $stock + $onhand_quantity;
		
		$updatedata['onhand_quantity'] = $new_quantity;
		$updatedata['modified_by'] = $user_id;
		$updatedata['modified'] = date('Y-m-d H:i:s');

		$where['stock_id'] = $stock_id;
		$update_result = update('stock',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Stock');
		
		$stockdetail['stock_id'] = $stock_id;
		$stockdetail['status'] = 1;
		$stockdetail['quantity'] = $stock;
		$stockdetail['created'] = date('Y-m-d H:i:s');
		
		$stock_id = $this->Master_m->insert('stock_details',$stockdetail);
		$query = $this->db->last_query();
		logThis($query, date('Y-m-d'),'Stock');
		
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
