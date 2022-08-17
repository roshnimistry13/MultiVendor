<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller
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
		$headdata['title'] = "Role | ".ADMIN_THEME;
		$headdata['page'] 	= "role";
		$data['pagejs'] = array('application/Role.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Role/Role_v', $data);
		$this->load->view('Admin/Common/Footer');
	}

	//Function is used for featch Submenu data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         = "role";
			$select_column = array("role_id","role_name","is_active");
			$join_column = "";
			$order_column= array(NULL,"role_name","is_active",NULL);
			$search_column = array("role_name","is_active");
			$group_by = "";
			$order_by = "role_id  DESC";
			$where    = array("is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->role_id;
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateRole('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateRole('.$id.',1)">
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

				$editBtnURL = base_url().'edit-role/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateBrand('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.'
							</ul>';
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.ucwords($row->role_name).'</div>';
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
	public function addRole()
	{
		$data['menu'] = $this->Master_m->getMenuList();
		$data['submenu'] = $this->Master_m->getSubmenuList();
		$headdata['title'] = 'Add Role | '.ADMIN_THEME;
		$headdata['page'] 	= "role";
		$data['pagejs'] = array('application/Role.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Role/AddRole_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Submenu 
	public function editSubmenu()
	{
		$id['role_id'] 		= $this->uri->segment(2);
		$data['result'] 	= $this->Master_m->where('role',$id);
		$data['menu'] 		= $this->Master_m->getMenuList();
		$data['submenu'] 	= $this->Master_m->getSubmenuList();
		$role_result 		= $this->Master_m->where('role_details',$id);
		$menu_id = array();
		if(!empty($role_result))
		{
			foreach($role_result as $r_row)
			{
				$menu_id[] = $r_row['menu_id'];
			}
		}
		
		$data['role_menu_id'] = $menu_id;
		$headdata['title'] = 'Edit Role | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Role.js');
		$headdata['page'] 	= "role";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Role/AddRole_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitRole()
	{
		
		$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$menu 		= $this->input->post('menu');
		if(!empty($this->input->post('text_role_id')))
		{
			$id = $this->input->post('text_role_id');
			
			$updatedata['role_name'] 				= $this->input->post('text_role_name');			
			$updatedata['role_description'] 		= $this->input->post('text_description');
			$updatedata['updated_by'] 				= $user_id;
			$updatedata['update_at'] 				= date('Y-m-d H:i:s');
			$is_active 								= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['role_id'] 	= $id;
			$update_result 		= update('role',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Role');
			if($update_result->status == "success"){
				
				$this->Master_m->deleteRecord('role_details',$where);
				
				foreach($menu as $m_id){
					$submenu = $this->input->post('submenu_'.$m_id);

					if($submenu != NULL || $submenu != ''){
						$submenu_id = implode(',', $submenu);
					}
					else{
						$submenu_id = '';
					}
					
					//save Role details
					$updaterole1['role_id'] 		= $id;
					$updaterole1['menu_id'] 		= $m_id;
					$updaterole1['submenu_id'] 		= $submenu_id;
					$updaterole1['created_by'] 		= $user_id;
					$updaterole1['create_at'] 		= date('Y-m-d H:i:s');
					$updaterole1['is_active'] 		= 1;
					
					$this->Master_m->insert('role_details',$updaterole1);
					$query      = $this->db->last_query();
					logThis($query, date('Y-m-d'),'Role');
				}
				$this->session->set_flashdata('success', 'Successfully Update Record.');	
			}
			else{
				$this->session->set_flashdata('error', $update_result->message);	
			}
			redirect('role');
		}
		
		$insertdata['role_name'] 				= $this->input->post('text_role_name');			
		$insertdata['role_description'] 		= $this->input->post('text_description');
		$insertdata['created_by'] 				= $user_id;
		$insertdata['create_at'] 					= date('Y-m-d H:i:s');
		
		$insert_result = insert('role',$insertdata,'');
		$id = $insert_result->id;
		logThis($insert_result->query, date('Y-m-d'),'Role');
		if($insert_result->status == "success"){

			foreach($menu as $m_id){
				$submenu = $this->input->post('submenu_'.$m_id);

				if($submenu != NULL || $submenu != ''){
					$submenu_id = implode(',', $submenu);
				}
				else{
					$submenu_id = '';
				}
				
				//save Role details
				$updaterole1['role_id'] 		= $id;
				$updaterole1['menu_id'] 		= $m_id;
				$updaterole1['submenu_id'] 		= $submenu_id;
				$updaterole1['created_by'] 		= $user_id;
				$updaterole1['create_at'] 		= date('Y-m-d H:i:s');
				$updaterole1['is_active'] 		= 1;
				
				$this->Master_m->insert('role_details',$updaterole1);
				$query      = $this->db->last_query();
				logThis($query, date('Y-m-d'),'Role');
			}

			$this->session->set_flashdata('success', 'Successfully Insert Record.');	
		}
		else{
			$this->session->set_flashdata('error', $insert_result->message);	
		}
		redirect('role');
	}

	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      					= $this->input->post('id');
		$updatedata['updated_by'] 	= $user_id;
		$updatedata['update_at'] 	= date('Y-m-d H:i:s');
		$updatedata['is_active'] 	= $this->input->post('status');
		
		$where['role_id'] 	= $id;
		$update_result 		= update('role',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Role');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
