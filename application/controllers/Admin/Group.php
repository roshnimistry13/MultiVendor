<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller
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
		$headdata['title'] = "Product Group | ".ADMIN_THEME;
		$jsdata['pagejs'] = array('application/Group.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Group/Group_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//Function is used for featch ProductGroup information points data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         = "product_group";
			$select_column = array("group_id","group_name","is_active");
			$join_column = "";
			$order_column= array(NULL,"group_name","is_active",NULL);
			$search_column = array("group_name","is_active");
			$group_by = "";
			$order_by = "group_id  DESC";
			$where    = array("is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->group_id;
				
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateGroup('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateGroup('.$id.',1)">
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

				$viewBtnURL = base_url().'view-group/'.$id;
				$editBtnURL = base_url().'edit-group/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateGroup('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				$viewBtn   = '<li><a class="view" href="'.$viewBtnURL.'">'.EYE_ICON.'</li>';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$viewBtn.$editBtn.$deleteBtn.'
							</ul>';
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';;
				$sub_array[] = '<div class="userDatatable-content">'.$row->group_name.'</div>';;
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

	//add Product Group form
	public function addProductGroup()
	{
		$headdata['title'] = 'Add Product Group | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Group.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/ProductGroup/AddProductGroup_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Product Group 
	public function editProductGroup()
	{
		$id['group_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('product_group',$id);
		
		$headdata['title'] = 'Edit Product Group | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Group.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/ProductGroup/AddProductGroup_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitProductGroup()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$group_name = trim($this->input->post('text_product_group'));

		if(!empty($this->input->post('text_group_id')))
		{
			$id = $this->input->post('text_group_id');
			
			$updatedata['group_name'] = $group_name;
			$updatedata['modified_by'] = $user_id;
			$updatedata['modified'] = date('Y-m-d H:i:s');
			$is_active = $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['group_id'] = $id;
			$update_result = update('product_group',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'ProductGroup');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('product-group');
		}
		
		$insertdata['group_name'] = $group_name;
		$insertdata['created_by'] = $user_id;
		$insertdata['created'] = date('Y-m-d H:i:s');
		
		$insert_result = insert('product_group',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'ProductGroup');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('product-group');
	}

	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      = $this->input->post('id');
		$updatedata['modified_by'] = $user_id;
		$updatedata['modified'] = date('Y-m-d H:i:s');
		$updatedata['is_active'] = $this->input->post('status');
		
		$where['group_id'] = $id;
		$update_result = update('product_group',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'ProducGroup');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
