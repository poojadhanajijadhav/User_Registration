<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		if(NULL == $this->session->userdata('u_id')){
			$this->session->set_flashdata(array(
				'title' => 'Error',
				'css_class' => 'box-warning',
				'message' => 'Session timeout !'
			));
			redirect('login');
		}
	   
		$this->header_data = array(
			'page_title' => 'User Panel',
			'dashboard' => '',
			'room_tarrif' => '',
				'room_enquiries' => '',
				'room_type' => '',
				'room_booking' => '',
				'booking' => '',
				'check_out' => '',
			'water_park' => '',
				'water_park_enquiries' => '',
				'water_park_booking' => '',
			'banquets' => '',
				'banquets_enquiries' => '',
			'group_deals' => '',
				'group_deals_enquiries' => '',
			'dinning' => '',
				'dinning_enquiries' => '',
				
			'wedding' => '',
				'wedding_enquiries' => '',
			'corporate_events' => '',
				'corporate_events_enquiries' => '',
			'private_parties' => '',
				'private_parties_enquiries' => '',
		);
		
	}
	
}
