<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/MY_Controller.php");

class HomeView extends MY_Controller {

	public function dashboard_page()
	{
		$this->header_data['page_title'] = "Dashboard";
		$this->header_data['dashboard'] = "active";
		$this->load->view('layouts/header' , $this->header_data);
		$this->load->view('pages/dashboard');
		$this->load->view('layouts/footer');
	}
}
