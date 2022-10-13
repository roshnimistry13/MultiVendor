<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
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
 		$headdata['title'] 		= 'Profile | '.ADMIN_THEME;		
		$jsdata['pagejs']	 	= array('application/Profile.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Profile/Profile_v');
		$this->load->view('Admin/Common/Footer',$jsdata);
	}
}