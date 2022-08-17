<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller
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
		$headdata['title'] 		= "Submenu | ".ADMIN_THEME;
		$headdata['page'] 		= "submenu";
		$jsdata['pagejs'] 		= array('application/submenu.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Submenu/Submenu_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//Function is used for featch Submenu data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         = "submenu_details";
			$select_column = array("submenu_id","submenu_name","submenu_link","submenu_position","is_active");
			$join_column = "";
			$order_column= array(NULL,"submenu_name","submenu_link","is_active",NULL);
			$search_column = array("submenu_name","submenu_link","submenu_position","is_active");
			$group_by = "";
			$order_by = "submenu_id  DESC";
			$where    = array("is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->submenu_id;
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateSubmenu('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateSubmenu('.$id.',1)">
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

				$viewBtnURL = base_url().'view-submenu/'.$id;
				$editBtnURL = base_url().'edit-submenu/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateSubmenu('.$id.',2)">'.REMOVE_ICON.'</a></li>';
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
				$sub_array[] = '<div class="userDatatable-content">'.ucwords($row->submenu_name).'</div>';
				$sub_array[] = '<div class="userDatatable-content text-lowercase">'.$row->submenu_link.'</div>';
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

	//add Submenu form
	public function addSubmenu()
	{
		$headdata['title'] 		= 'Add Submenu | '.ADMIN_THEME;
		$headdata['page'] 		= "submenu";
		$jsdata['pagejs'] 		= array('application/Submenu.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Submenu/AddSubmenu_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//edit Submenu 
	public function editSubmenu()
	{
		$id['submenu_id'] 		= $this->uri->segment(2);
		$data['result'] 		= $this->Master_m->where('submenu_details',$id);		
		$headdata['title'] 		= 'Edit Submenu | '.ADMIN_THEME;
		$headdata['page'] 		= "submenu";
		$jsdata['pagejs'] 		= array('application/Submenu.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Submenu/AddSubmenu_v',$data);
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	public function submitSubmenu()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		if(!empty($this->input->post('text_submenu_id')))
		{
			$id = $this->input->post('text_submenu_id');
			
			$updatedata['submenu_name'] = $this->input->post('text_submenu_name');
			$updatedata['submenu_link'] = $this->input->post('text_submenu_link');
			$updatedata['submenu_position'] = $this->input->post('text_submenu_position');
			$updatedata['modified_by'] = $user_id;
			$updatedata['modified'] = date('Y-m-d H:i:s');
			$is_active = $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['submenu_id'] = $id;
			$update_result = update('submenu_details',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Submenu');
			if($update_result->status == "success"){
				$this->session->set_flashdata('success', 'Successfully Update Record.');	
			}
			else{
				$this->session->set_flashdata('error', $update_result->message);	
			}
			redirect('submenu');
		}
		
		$insertdata['submenu_name'] = $this->input->post('text_submenu_name');
		$insertdata['submenu_link'] = $this->input->post('text_submenu_link');
		$insertdata['submenu_position'] = $this->input->post('text_submenu_position');
		$insertdata['created_by'] = $user_id;
		$insertdata['created'] = date('Y-m-d H:i:s');
		
		$insert_result = insert('submenu_details',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'Submenu');
		if($insert_result->status == "success"){
			$this->session->set_flashdata('success', 'Successfully Insert Record.');	
		}
		else{
			$this->session->set_flashdata('error', $insert_result->message);	
		}
		redirect('submenu');
	}

	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      = $this->input->post('id');
		$updatedata['modified_by'] = $user_id;
		$updatedata['modified'] = date('Y-m-d H:i:s');
		$updatedata['is_active'] = $this->input->post('status');
		
		$where['submenu_id'] = $id;
		$update_result = update('submenu_details',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Submenu');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
