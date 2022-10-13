<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
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
		$headdata['title'] 	= "Menu | ".ADMIN_THEME;
		$headdata['page'] 	= "menu";
		$data['pagejs'] = array('application/Menu.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Menu/Menu_v', $data);
		$this->load->view('Admin/Common/Footer');
	}

	//Function is used for featch Submenu data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         	= "menu_details";
			$select_column 	= array("menu_id","menu_name","submenu_id","menu_status");
			$join_column 	= "";
			$order_column	= array(NULL,"menu_name","submenu_id","menu_status",NULL);
			$search_column 	= array("menu_name","menu_status");
			$group_by 		= "";
			$order_by 		= "menu_id  DESC";
			$where    		= array("menu_status != 2");
			$fetch_data 	= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->menu_id;
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateMenu('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateMenu('.$id.',1)">
											<span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">
												Disable
											</span>
										</a>
									</div>';
				
				if($row->menu_status == 1){
					$status = $active_status;
				}
				else
				{
					$status = $deactive_status;
				}

				$editBtnURL = base_url().'edit-menu/'.$id;
				
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
				
				$submenu_ids 	= $row->submenu_id;
				$submenu 		= '';
				if($submenu_ids != NULL || $submenu_ids != '')
				{
					$id_arr = explode(',',$submenu_ids);
					$sub_menu = array();
					for($j=0; $j<count($id_arr); $j++)
					{
						$submenu_id['submenu_id'] = $id_arr[$j];
						$sub_result = $this->Master_m->where('submenu_details',$submenu_id);	
						$submenu_name = $sub_result[0]['submenu_name'];
						$sub_menu[]= $submenu_name;
					}	
					$submenu = implode(',',$sub_menu);
				}
				else{
					$submenu = '';	
				}
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.ucwords($row->menu_name).'</div>';
				$sub_array[] = '<div class="userDatatable-content word-break">'.$submenu.'</div>';
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
	public function addMenu()
	{
		$where['is_active'] 		= 1;
		$data['submenu'] 			= $this->Master_m->where('submenu_details',$where);
		$headdata['title'] 			= 'Add Menu | '.ADMIN_THEME;
		$headdata['page'] 			= "menu";
		$data['pagejs'] = array('application/Menu.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Menu/AddMenu_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Submenu 
	public function editMenu()
	{
		$id['menu_id'] 			= $this->uri->segment(2);
		$data['result'] 		= $this->Master_m->where('menu_details',$id);
		$where['is_active'] 	= 1;
		$data['submenu'] 		= $this->Master_m->where('submenu_details',$where);
		$headdata['title'] 		= 'Edit Menu | '.ADMIN_THEME;
		$headdata['page'] 		= "menu";
		$data['pagejs'] = array('application/Menu.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Menu/AddMenu_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitMenu()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		$s_menu = $this->input->post('submenu');
		$submenu = "";
		if(!empty($s_menu)){
			$submenu = implode(',',$this->input->post('submenu'));
		}
		
		
		if(!empty($this->input->post('text_menu_id')))
		{
			$id = $this->input->post('text_menu_id');
			
			$updatedata['menu_name'] 				= $this->input->post('text_menu_name');			
			$updatedata['menu_link'] 				= $this->input->post('text_menu_link');			
			$updatedata['menu_icon'] 				= $this->input->post('text_menu_icon');			
			$updatedata['menu_position'] 			= $this->input->post('text_menu_position');			
			$updatedata['submenu_id'] 				= $submenu;
			$updatedata['menu_update_by'] 			= $user_id;
			$updatedata['menu_update_date'] 		= date('Y-m-d H:i:s');
			$is_active 								= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['menu_status'] = 1;
			}
			else{
				$updatedata['menu_status'] = 0;
			}
			
			$where['menu_id'] 	= $id;
			$update_result 		= update('menu_details',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Menu');
			if($update_result->status == "success"){
				$this->session->set_flashdata('success', 'Successfully Update Record.');	
			}
			else{
				$this->session->set_flashdata('error', $update_result->message);	
			}
			redirect('menu');
		}
		
		$insertdata['menu_name'] 				= $this->input->post('text_menu_name');			
		$insertdata['menu_link'] 				= $this->input->post('text_menu_link');			
		$insertdata['menu_icon'] 				= $this->input->post('text_menu_icon');			
		$insertdata['menu_position'] 			= $this->input->post('text_menu_position');			
		$insertdata['submenu_id'] 				= $submenu;
		$insertdata['menu_add_by'] 				= $user_id;
		$insertdata['menu_add_date'] 			= date('Y-m-d H:i:s');
		$insertdata['menu_status'] 				= 1;;
		
		$insert_result = insert('menu_details',$insertdata,'');
		
		logThis($insert_result->query, date('Y-m-d'),'Menu');
		if($insert_result->status == "success"){
			$this->session->set_flashdata('success', 'Successfully Insert Record.');	
		}
		else{
			$this->session->set_flashdata('error', $insert_result->message);	
		}
		redirect('menu');
	}

	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      							= $this->input->post('id');
		$updatedata['menu_update_by'] 		= $user_id;
		$updatedata['menu_update_date'] 	= date('Y-m-d H:i:s');
		$updatedata['menu_status'] 			= $this->input->post('status');
		
		$where['menu_id'] 	= $id;
		$update_result 		= update('menu_details',$updatedata,$where);
		
		logThis($update_result->query, date('Y-m-d'),'Menu');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
