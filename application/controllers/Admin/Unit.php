<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller
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
		$headdata['title'] = "Unit | ".ADMIN_THEME;
		$jsdata['pagejs'] = array('application/Unit.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Unit/Unit_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//Function is used for featch Unit data for datatable
	public function bindDataTable()
	{
		try
		{
			// $role_id = $this->session->userdata[ADMIN_SESSION]['role_id'];
			// if($role_id != 1){
			// 	$where    = array("is_active != 2","created_by = $role_id");
			// }else{
			// 	$where    = array("is_active != 2");
			// }
			$table         = "unit";
			$select_column = array("unit_id","unit_in","unit","is_active");
			$join_column = "";
			$order_column= array(NULL,"unit_in","unit","is_active",NULL);
			$search_column = array("unit_in","unit","is_active");
			$group_by = "";
			$order_by = "unit_id  DESC";
			$where    = array("is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->unit_id;
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateUnit('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateUnit('.$id.',1)">
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

				$viewBtnURL = base_url().'view-unit/'.$id;
				$editBtnURL = base_url().'edit-unit/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateUnit('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				$viewBtn   = '<li><a class="view" href="'.$viewBtnURL.'">'.EYE_ICON.'</li>';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.'
							</ul>';
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->unit_in.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->unit.'</div>';
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

	//add Unit form
	public function addUnit()
	{
		$headdata['title'] = 'Add Unit | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Unit.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Unit/AddUnit_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Unit 
	public function editUnit()
	{
		$id['unit_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('unit',$id);
		
		$headdata['title'] = 'Edit Unit | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Unit.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Unit/AddUnit_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitUnit()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$unit_in = trim($this->input->post('text_unit_in'));
		$unit = trim($this->input->post('text_unit'));
		
		if(!empty($this->input->post('text_unit_id')))
		{
			$id = $this->input->post('text_unit_id');
			
			$updatedata['unit_in'] = $unit_in;
			$updatedata['unit'] = $unit;
			$updatedata['modified_by'] = $user_id;
			$updatedata['modified'] = date('Y-m-d H:i:s');
			$is_active = $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['unit_id'] = $id;
			$update_result = update('unit',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Unit');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('unit');
		}
		
		$insertdata['unit_in'] = $unit_in;
		$insertdata['unit'] = $unit;
		$insertdata['created_by'] = $user_id;
		$insertdata['created'] = date('Y-m-d H:i:s');
		
		$insert_result = insert('unit',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'Unit');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('unit');
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
