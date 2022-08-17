<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller
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
		$headdata['title'] = "Testimonial | ".ADMIN_THEME;
		$data['pagejs'] = array('application/Testimonial.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Testimonial/Testimonial_v', $data);
		$this->load->view('Admin/Common/Footer');
	}
	
	//Function is used for featch Testimonial information data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         = "testimonial";
			$select_column = array("testimonial_id","customer_name","testimonial_date","is_active");
			$join_column = "";
			$order_column= array(NULL,"customer_name","testimonial_date","is_active",NULL);
			$search_column = array("customer_name","testimonial_date","is_active");
			$group_by = "";
			$order_by = "testimonial_id  DESC";
			$where    = array("is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
		
			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->testimonial_id;
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateTestimonial('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateTestimonial('.$id.',1)">
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

				$viewBtnURL = base_url().'view-testimonial/'.$id;
				$editBtnURL = base_url().'edit-testimonial/'.$id;
				
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
								'.$viewBtn.$editBtn.$deleteBtn.'
							</ul>';
				
				$sub_array = array();
				$sub_array[] = '<div class="userDatatable-content">'.$i++.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.$row->customer_name.'</div>';
				$sub_array[] = '<div class="userDatatable-content">'.date('d-M-Y', strtotime($row->testimonial_date)).'</div>';
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

	
	//add Testimonial View
	public function addTestimonial()
	{
		$headdata['title'] = 'Add Testimonials | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Testimonial.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Testimonial/AddTestimonial_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Testimonial view
	public function editTestimonial()
	{
		$id['testimonial_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('testimonial',$id);
		
		$headdata['title'] = 'Edit Testimonial | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Testimonial.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Testimonial/AddTestimonial_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//Submit add and edit form
	public function submitTestimonial()
	{	
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$customer_image = $this->input->post('old_customer_image');
		if($_FILES['customer_image']['name'])
		{
			$customer_image = file_upload("customer_image",TESTIMONIAL_IMAGE_PATH);
		}
		
		if(!empty($this->input->post('text_testimonial_id')))
		{
			$id = $this->input->post('text_testimonial_id');

			$updatedata['customer_name'] = $this->input->post('text_customer_name');
			$updatedata['company_name'] = $this->input->post('text_company_name');
			$updatedata['designation'] = $this->input->post('text_designation');
			$updatedata['customer_review'] = $this->input->post('text_review');
			$updatedata['customer_image'] = $customer_image;
			$updatedata['modified_by'] = $user_id;
			$updatedata['modified'] = date('Y-m-d H:i:s');		
			
			if($this->input->post('text_is_active') == 1)
				$updatedata['is_active'] = 1;
			else
				$updatedata['is_active'] = 0;
			
			$where['testimonial_id'] = $id;
			$update_result = update('testimonial',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Testimonial');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('testimonial');
		}
		
		$insertdata['customer_name'] = $this->input->post('text_customer_name');
		$insertdata['company_name'] = $this->input->post('text_company_name');
		$insertdata['designation'] = $this->input->post('text_designation');
		$insertdata['customer_review'] = $this->input->post('text_review');
		$insertdata['customer_image'] = $customer_image;
		$insertdata['testimonial_date'] = date('Y-m-d');
		$insertdata['created_by'] = $user_id;
		$insertdata['created'] = date('Y-m-d H:i:s');
		
		$insert_result = insert('testimonial',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'Testimonial');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('testimonial');
	}



	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      = $this->input->post('id');
		$updatedata['modified_by'] = $user_id;
		$updatedata['modified'] = date('Y-m-d H:i:s');
		$updatedata['is_active'] = $this->input->post('status');
		
		$where['testimonial_id'] = $id;
		$update_result = update('testimonial',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Testimonial');
		$json['status'] = "success";
		echo json_encode($json);
	}
}
