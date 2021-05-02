<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/HomeView.php");

class Home extends HomeView {
	
	public function __construct() {
       parent::__construct();
	}

	public function index()
	{
		$this->dashboard_page();
	}
	
	public function logout(){
		$this->session->unset_userdata('u_id');
		$this->session->unset_userdata('u_name');
		$this->session->set_flashdata(array(
			'title' => 'Logged Out',
			'css_class' => 'box-success',
			'message' => 'You Are Logged-out Successfully!'
		));
		redirect('login');
	}
}
