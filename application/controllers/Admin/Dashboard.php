<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata(ADMIN_SESSION))){
			redirect('admin');
		}
	}
	public function index()
	{
 		$data['totalproducts'] 		= $this->Master_m->totalProductsCount(); 
 		$data['totalvendors'] 		= $this->Master_m->totalVendorCount();
 		$data['totalorders']		= $this->Master_m->totalOrderCount();
 		$data['totalCustomers'] 	= $this->Master_m->totalCustomerCount();
		
		
		$headdata['title'] 		= 'Dashboard | '.ADMIN_THEME;		
		$jsdata['pagejs']	 	= array('application/Dashboard.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Dashboard/Dashboard_v',$data);
		$this->load->view('Admin/Common/Footer',$jsdata);
	}
}