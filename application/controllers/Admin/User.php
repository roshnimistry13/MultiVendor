<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
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
		$headdata['title'] = "User | ".ADMIN_THEME;
		$headdata['page'] 	= "user";
		$data['pagejs'] = array('application/User.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/User/User_v', $data);
		$this->load->view('Admin/Common/Footer');
	}

	//Function is used for featch Submenu data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         			= "user u";
			$select_column 			= array("u.user_id","u.name","u.role_id","u.is_active","r.role_name");
			$join_column['table'] 	= array("role r");
			$join_column['join_on'] = array("r.role_id = u.role_id",);
			$order_column			= array(NULL,"u.name","r.role_name","u.is_active",NULL);
			$search_column 			= array("u.name","r.role_name","u.is_active");
			$group_by 				= "";
			$order_by 				= "u.user_id  DESC";
			$where    				= array("u.is_active != 2");
			$fetch_data 			= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->user_id;
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updaterUser('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updaterUser('.$id.',1)">
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

				$editBtnURL = base_url().'edit-user/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateBrand('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				// $viewBtn   = '<li><a class="view" href="'.$viewBtnURL.'">'.EYE_ICON.'</li>';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.'
							</ul>';
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.ucwords($row->name).'</div>';
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
	public function addUser()
	{
		$where['is_active'] = 1;
		$data['role'] 		= $this->Master_m->where('role',$where);
		$headdata['title'] 	= 'Add User | '.ADMIN_THEME;
		$headdata['page'] 	= "user";
		$data['pagejs'] 	= array('application/User.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/User/AddUser_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Submenu 
	public function editUser()
	{
		
		$where['is_active'] = 1;
		$data['role'] 		= $this->Master_m->where('role',$where);
		$id['user_id'] 		= $this->uri->segment(2);
		$data['result'] 	= $this->Master_m->where('user',$id);
		$headdata['title'] 	= 'Edit User | '.ADMIN_THEME;
		$data['pagejs'] 	= array('application/User.js');
		$headdata['page'] 	= "user";
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/User/AddUser_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitUser()
	{
		
		$user_id 	= $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		if(!empty($this->input->post('text_user_id')))
		{
			$id 		= $this->input->post('text_user_id');
			$password 	= $this->input->post('text_password');
			if($password != "" || $password != null || !empty($password)){
				$updatedata['password'] 			= md5($password);
			}
			$updatedata['name'] 				= $this->input->post('text_name');			
			$updatedata['role_id'] 				= $this->input->post('text_role_id');
			$updatedata['email'] 				= $this->input->post('text_email');;
			$updatedata['username'] 			= $this->input->post('text_user_name');;
			
			$updatedata['modified'] 			= date('Y-m-d H:i:s');
			$is_active 							= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['user_id'] 	= $id;
			$update_result 		= update('user',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'User');
			if($update_result->status == "success"){
				$this->session->set_flashdata('success', 'Successfully Update Record.');	
			}
			else{
				$this->session->set_flashdata('error', $update_result->message);	
			}
			redirect('user');
		}
		
			$password 	= $this->input->post('text_password');
			if($password != "" || $password != null || !empty($password)){
				$insertdata['password'] 			= md5($password);
			}
			$insertdata['name'] 				= $this->input->post('text_name');			
			$insertdata['role_id'] 				= $this->input->post('text_role_id');
			$insertdata['email'] 				= $this->input->post('text_email');;
			$insertdata['username'] 			= $this->input->post('text_user_name');;
			$insertdata['is_active'] 			= 1;
			$insertdata['created'] 				= date('Y-m-d H:i:s');
		
		$insert_result = insert('user',$insertdata,'');
		$id = $insert_result->id;
		logThis($insert_result->query, date('Y-m-d'),'User');
		if($insert_result->status == "success"){
			$this->session->set_flashdata('success', 'Successfully Insert Record.');	
		}
		else{
			$this->session->set_flashdata('error', $insert_result->message);	
		}
		redirect('user');
	}

	public function updateStatus()
	{		
		$id      					= $this->input->post('id');
		$updatedata['modified'] 	= date('Y-m-d H:i:s');
		$updatedata['is_active'] 	= $this->input->post('status');
		
		$where['user_id'] 	= $id;
		$update_result 		= update('user',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'User');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
