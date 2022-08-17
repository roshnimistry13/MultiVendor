<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller
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
		$headdata['title'] = "Slider | ".ADMIN_THEME;
		$jsdata['pagejs'] = array('application/Slider.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Slider/Slider_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	//Function is used for featch Brand for datatable
	public function bindDataTable()
	{
		try
		{
			$table         = "slider";
			$select_column = array("slider_id","slider_image","slider_title","is_active");
			$join_column = "";
			$order_column= array(NULL,"slider_image","is_active",NULL);
			$search_column = array("slider_title");
			$group_by = "";
			$order_by = "slider_id  DESC";
			$where    = array("is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);

			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->slider_id;
				
				$active_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateSlider('.$id.',0)">
											<span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">
												Enable
											</span>
										</a>
									</div>';
									
				$deactive_status   = '<div class="userDatatable-content d-inline-block">
										<a href="javascript:void(0)"  onclick="updateSlider('.$id.',1)">
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

				$editBtnURL = base_url().'edit-slider/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<li><a class="edit" href="'.$editBtnURL.'">'.EDIT_ICON.'</a></li>';
					$deleteBtn = '<li><a class="remove" onclick="updateSlider('.$id.',2)">'.REMOVE_ICON.'</a></li>';
				}
				else
				{
					redirect('admin');
				}

				$action    = '<ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
								'.$editBtn.$deleteBtn.'
							</ul>';
				$slider_img = '<img class="mb-10" width="" height="50" src="'.base_url().SLIDER_IMAGE_PATH.$row->slider_image.'">';
				$sub_array = array();
				$sub_array[] = $i++;
				$sub_array[] = $slider_img;
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

	//add Slider form
	public function addSlider()
	{
		$headdata['title'] = 'Add Slider | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Slider.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Slider/AddSlider_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Brand 
	public function editSlider()
	{
		$id['slider_id'] 	= $this->uri->segment(2);
		$data['result'] 	= $this->Master_m->where('slider',$id);
		
		$headdata['title'] = 'Edit Slider | '.ADMIN_THEME;
		$data['pagejs'] = array('application/Slider.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Slider/AddSlider_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	public function submitSlider()
	{
		$user_id 			= $this->session->userdata[ADMIN_SESSION]['user_id'];
		$slider_title   	= trim($this->input->post('slider_title'));
		$image_position 	= $this->input->post('slider_position');

		$filepath 	= SLIDER_IMAGE_PATH;
        if (!is_dir($filepath)) {
            mkdir($filepath, 0777, true);
        }

		if(!empty($this->input->post('text_slider_id')))
		{
			$id = $this->input->post('text_slider_id');
            if(!empty($_FILES['slider_img']['name'])){
                $image1 		= $_FILES['slider_img']['name'];
                $extension 		= pathinfo($image1, PATHINFO_EXTENSION);
                $slider_image	= 'slider-'.$id.".".$extension;
                $uploadImg1 	= $filepath.$slider_image;
                move_uploaded_file($_FILES['slider_img']['tmp_name'],$uploadImg1);
            }else{
                $slider_image = $this->input->post('old_slider_img');	
            }	
    
            $updatedata['slider_image'] 				= $slider_image;			
            $updatedata['slider_title'] 				= $slider_title;
			$updatedata['position'] 					= $image_position;
			
			if($this->input->post('text_is_active') == 1)
				$updatedata['is_active'] = 1;
			else
				$updatedata['is_active'] = 0;
			
			$where['slider_id'] 	= $id;
			$update_result 			= update('slider',$updatedata,$where);
            
			logThis($update_result->query, date('Y-m-d'),'Slider');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('slider');
		}

		$insertdata['slider_title'] 		= $slider_title;
		$insertdata['is_active'] 			= 1;
		$insertdata['position'] 			= $image_position;
		
		$insert_result = insert('slider',$insertdata,'');
		$id            = $insert_result->id;

        
        if(!empty($_FILES['slider_img']['name'])){
            $image1 		= $_FILES['slider_img']['name'];
            $extension 		= pathinfo($image1, PATHINFO_EXTENSION);
            $slider_image	= 'slider-'.$id.".".$extension;
            $uploadImg1 	= $filepath.$slider_image;
            move_uploaded_file($_FILES['slider_img']['tmp_name'],$uploadImg1);
        }else{
            $slider_image = $this->input->post('old_slider_img');	
        }	

        $updatedata['slider_image'] 		= $slider_image;
        $where['slider_id ']                = $id;
		$update_result = update('slider',$updatedata,$where);

		logThis($insert_result->query, date('Y-m-d'),'Slider');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('slider');

		
		
	}

	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      						= $this->input->post('id');
		$updatedata['is_active'] 		= $this->input->post('status');
		
		$where['slider_id'] 	= $id;
		$update_result 			= update('slider',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Slider');
		$json['status'] = "success";
		echo json_encode($json);
	}

}
