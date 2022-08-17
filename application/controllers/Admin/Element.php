<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Element extends CI_Controller
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
		$headdata['title'] = "Element | ".ADMIN_THEME;
		$headdata['page'] 		= "elements";
		$data['pagejs'] = array('application/Element.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Element/Elements_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//Function is used for featch ProductGroup information points data for datatable
	public function bindDataTable()
	{
		try
		{
			
			$table         		= "product_elements";
			$select_column 		= array("element_id","element_name","attributes","is_active");
			$join_column 		= "";
			$order_column		= array(NULL,"element_name","is_active",NULL);
			$search_column 		= array("element_name","is_active");
			$group_by 			= "";
			$order_by 			= "element_id  DESC";
			$where    			= array("is_active != 2");
			$fetch_data 		= $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       		= array();
			$i 					= 1;
			foreach($fetch_data as $row)
			{
				$id 			 		= $row->element_id;	
				$attributes_ids 		= $row->attributes;	
				$attributes				= '';	
				
				if($attributes_ids != "" || $attributes_ids != null || !empty($attributes_ids)){
					
					$id_arr 			= explode(',',$attributes_ids);
					$attribute 			= array();
					
					for($j=0; $j<count($id_arr); $j++)
					{
						$attr_id['attributes_id'] 		= $id_arr[$j];
						$attr_result 					= $this->Master_m->where('attributes',$attr_id);	
						$attributes_name 				= $attr_result[0]['attributes_name'];
						$attribute[]						= $attributes_name;
					}	
					$attribute = implode(',',$attribute);
				}

				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateElementStatus('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateElementStatus('.$id.',1)">
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

				//$viewBtnURL = base_url().'view-product-group/'.$id;
				$editBtnURL = base_url().'edit-elements/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateElementStatus('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}
				//$viewBtn   = '<a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_green icon" href="'.$viewBtnURL.'"> <i class="fa fa-eye"></i> </a> ';

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.'
							</ul>';
				
				$sub_array 			= array();
				$sub_array[] 		= '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] 		= '<div class="userDatatable-content">'.$row->element_name.'</div>';
				$sub_array[] 		= '<div class="userDatatable-content word-break">'.strtolower($attribute).'</div>';
				$sub_array[] 		= $status;
				$sub_array[] 		= $action;
				$data[] 			= $sub_array;
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
	public function addElement()
	{
		$headdata['title'] 		= 'Add Element | '.ADMIN_THEME;
		$headdata['page'] 		= "add-elements";
		$data['pagejs'] 		= array('application/Element.js');
		$where['is_active'] 	= 1;
		$data['attributes'] 	= $this->Master_m->where('attributes',$where);
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Element/AddElement_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Product Group 
	public function editElement()
	{
		$id['element_id'] 		= $this->uri->segment(2);
		$data['result'] 		= $this->Master_m->where('product_elements',$id);
		
		$headdata['title'] 			= 'Edit Element | Nutreasy';
		$headdata['page'] 			= "add-elements";
		$data['pagejs'] 			= array('application/Element.js');
		$where['is_active'] 		= 1;
		$data['attributes'] 		= $this->Master_m->where('attributes',$where);
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Element/AddElement_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitElement()
	{
		$user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];		
		$element_name 	= trim($this->input->post('text_element'));
		$display_name 	= trim($this->input->post('text_display_name'));
		$attributes 	= $this->input->post('txt_attributes');

		if($attributes != NULL || $attributes != '')
			$attributes_id = implode(',', $attributes);
		else
			$attributes_id = '';

		if(!empty($this->input->post('text_element_id')))
		{
			$id = $this->input->post('text_element_id');
			
			$updatedata['element_name'] 		= $element_name;
			$updatedata['display_name'] 		= $display_name;
			$updatedata['attributes'] 			= $attributes_id;
			$updatedata['modified_by'] 			= $user_id;
			$updatedata['modified'] 			= date('Y-m-d H:i:s');
			$is_active 							= $this->input->post('text_is_active');
			if($is_active == 1){
				$updatedata['is_active'] = 1;
			}
			else{
				$updatedata['is_active'] = 0;
			}
			
			$where['element_id'] = $id;
			$update_result = update('product_elements',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'ProductElement');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('elements');
		}
		
		$insertdata['element_name'] 		= $element_name;
		$insertdata['display_name'] 		= $display_name;
		$insertdata['attributes'] 			= $attributes_id;
		$insertdata['created_by'] 			= $user_id;
		$insertdata['created'] 				= date('Y-m-d H:i:s');
		
		$insert_result = insert('product_elements',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'ProductElement');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('elements');
	}

	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      					= $this->input->post('id');
		$updatedata['modified_by'] 	= $user_id;
		$updatedata['modified'] 	= date('Y-m-d H:i:s');
		$updatedata['is_active'] 	= $this->input->post('status');
		
		$where['element_id'] 	= $id;
		$update_result 			= update('product_elements',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'ProductElement');
		$json['status'] 	= "success";
		echo json_encode($json);
	}

}
