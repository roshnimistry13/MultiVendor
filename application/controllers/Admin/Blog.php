<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
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
		$headdata['title'] = "Blog | Nutreasy Think Healthy, Be Healthy";
		$data['pagejs'] = array('application/Blog.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Blog/Blog_v', $data);
		$this->load->view('Admin/Common/Footer');
	}
	
	//Function is used for featch Blog information points data for datatable
	public function bindDataTable()
	{
		try
		{
			$table         = "blog";
			$select_column = array("blog_id","blog_title","blog_date","blog_author","is_active");
			$join_column = "";
			$order_column= array(NULL,"blog_title","blog_date","blog_author","is_active",NULL);
			$search_column = array("blog_title","blog_date","blog_author","is_active");
			$group_by = "";
			$order_by = "blog_id  DESC";
			$where    = array("is_active != 2");
			$fetch_data = $this->Common_m->makeDataTables($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
		
			$data       = array();
			$i = 1;
			foreach($fetch_data as $row)
			{
				$id = $row->blog_id;
				
				$active_status   = '<button class="btn vd_btn vd_bg-green btn-xs" type="button" title="Enable" onclick="updateBlog('.$id.',0)">Enable</button>';
				$deactive_status = '<button class="btn vd_btn vd_bg-red btn-xs" type="button" title="Disable" onclick="updateBlog('.$id.',1)">Disable</button>';

				if($row->is_active == 1){
					$status = $active_status;
				}
				else
				{
					$status = $deactive_status;
				}

				$viewBtnURL = base_url().'view-blog/'.$id;
				$editBtnURL = base_url().'edit-blog/'.$id;
				
				if($this->session->userdata[ADMIN_SESSION])
				{
					$editBtn   = '<a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_yellow icon" href="'.$editBtnURL.'"> <i class="fa fa-pencil"></i> </a>';
					$deleteBtn = '<a data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_red icon" onclick="updateBlog('.$id.',2)"> <i class="fa fa-times"></i> </a>';
				}
				else
				{
					redirect('admin');
				}
				$viewBtn   = '<a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_green icon" href="'.$viewBtnURL.'"> <i class="fa fa-eye"></i> </a> ';

				$action    = $editBtn.$deleteBtn;
				
				$sub_array = array();
				$sub_array[] = $i++;
				$sub_array[] = $row->blog_title;
				$sub_array[] = date('d-m-Y', strtotime($row->blog_date));
				$sub_array[] = $row->blog_author;
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

	
	//add Blog View
	public function addBlog()
	{
		$headdata['title'] = 'Add Blogs | Nutreasy Think Healthy, Be Healthy';
		$data['pagejs'] = array('application/Blog.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Blog/AddBlog_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//edit Product view
	public function editBlog()
	{
		$id['blog_id'] = $this->uri->segment(2);
		$data['result'] = $this->Master_m->where('blog',$id);
		
		$headdata['title'] = 'Edit Blog | Nutreasy Think Healthy, Be Healthy';
		$data['pagejs'] = array('application/Blog.js');
		
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Blog/AddBlog_v',$data);
		$this->load->view('Admin/Common/Footer');
	}

	//Submit add and edit form
	public function submitBlog()
	{	
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$blog_title = trim($this->input->post('text_blog_title'));
		
		$short_code = strtolower($blog_title);
		$rep_char =  array(" ",",","/","[","]","(",")","--","---","?");
		$short_code = str_replace($rep_char,"-",$short_code);
		$rep_char1 =  array("--","---","----","----");
		$short_code = str_replace($rep_char1,"-",$short_code);
		
		$last_char = substr($short_code, -1);
		if($last_char == '-'){
			$short_code = rtrim($short_code, "-");;
		}else{
			$short_code = $short_code;
		}
		
		$blog_image = $this->input->post('old_blog_image');
		if($_FILES['blog_image']['name'])
		{
			$blog_image = file_upload("blog_image",BLOG_IMAGE_PATH);
		}
		
		$blog_date = $this->input->post('text_blog_date');
		
		if(!empty($this->input->post('text_blog_id')))
		{
			$id = $this->input->post('text_blog_id');

			$updatedata['blog_title'] = $blog_title;
			$updatedata['short_code'] = $short_code;
			$updatedata['blog_author'] = $this->input->post('text_blog_author');
			$updatedata['blog_date'] = date('Y-m-d',strtotime($blog_date));
			$updatedata['blog_image'] = $blog_image;
			$updatedata['short_description'] = $this->input->post('text_short_description');
			$updatedata['description'] = $this->input->post('text_description');
			$updatedata['meta_title'] = $this->input->post('text_meta_title');
			$updatedata['meta_description'] = $this->input->post('text_meta_description');
			$updatedata['meta_keyword'] = $this->input->post('text_meta_keyword');
			$updatedata['modified_by'] = $user_id;
			$updatedata['modified'] = date('Y-m-d H:i:s');		
			
			if($this->input->post('text_is_active') == 1)
				$updatedata['is_active'] = 1;
			else
				$updatedata['is_active'] = 0;
			
			$where['blog_id'] = $id;
			$update_result = update('blog',$updatedata,$where);
			logThis($update_result->query, date('Y-m-d'),'Blog');
			$this->session->set_flashdata('success','Successfully Update Record.');
			redirect('blog');
		}
		
		$insertdata['blog_title'] = $blog_title;
		$insertdata['short_code'] = $short_code;
		$insertdata['blog_author'] = $this->input->post('text_blog_author');
		$insertdata['blog_date'] = date('Y-m-d',strtotime($blog_date));
		$insertdata['blog_image'] = $blog_image;
		$insertdata['short_description'] = $this->input->post('text_short_description');
		$insertdata['description'] = $this->input->post('text_description');
		$insertdata['meta_title'] = $this->input->post('text_meta_title');
		$insertdata['meta_description'] = $this->input->post('text_meta_description');
		$insertdata['meta_keyword'] = $this->input->post('text_meta_keyword');
		$insertdata['created_by'] = $user_id;
		$insertdata['created'] = date('Y-m-d H:i:s');
		
		$insert_result = insert('blog',$insertdata,'');
		logThis($insert_result->query, date('Y-m-d'),'Blog');
		$this->session->set_flashdata('success', 'Successfully Insert Record.');
		redirect('blog');
	}



	public function updateStatus()
	{
		$user_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
		
		$id      = $this->input->post('id');
		$updatedata['modified_by'] = $user_id;
		$updatedata['modified'] = date('Y-m-d H:i:s');
		$updatedata['is_active'] = $this->input->post('status');
		
		$where['blog_id'] = $id;
		$update_result = update('blog',$updatedata,$where);
		logThis($update_result->query, date('Y-m-d'),'Blog');
		$json['status'] = "success";
		echo json_encode($json);
	}
	
	public function uploadImage()
	{
		$fieldname = "file";

		if($_FILES[$fieldname]['name']){
			$upload_name = file_upload("file",PRODUCT_DESC_PATH);
		}
		$response = new \StdClass;
		$response->link = base_url().PRODUCT_DESC_PATH.$upload_name;

		// Send response.
		echo stripslashes(json_encode($response));
	}
}
