<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
       parent::__construct();
	   if(NULL != $this->session->userdata('u_id')){
           redirect('login');
       }
       $this->load->model('Loginmodel');
	}

	
	public function index()
	{
		$this->load->view('pages/login');
	}
	
	public function authenticate(){
		if($this->input->post()){
			$user_data = $this->Loginmodel->authentication();
			if($user_data){
				$this->session->set_flashdata(array(
					'title' => 'Success',
					'css_class' => 'box-success',
					'message' => 'Loggedin Successfully!'
				));
				$this->session->set_userdata(array(
					'u_id'=>$user_data->u_id,
					'u_name'=>$user_data->u_name
				));
				redirect('Home');
			}else{
				$this->session->set_flashdata(array(
					'title' => 'Failure',
					'css_class' => 'box-danger',
					'message' => 'Authentication Failed...Note - Please do your verification, link shared on your email address.'
				));
				redirect('login');
			}
			
		}else{
			$this->session->set_flashdata(array(
				'title' => 'Restricted',
				'css_class' => 'box-warning',
				'message' => 'Direct access to some links are prohibited!'
			));
			redirect('login');
		}
	}
	
}
