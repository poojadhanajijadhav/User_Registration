<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
       parent::__construct();
	   $this->load->model('Usermodel');
	}
	
	
	public function index()
	{
		$this->load->view('pages/sign_up');
	}
	public function registerUser(){
		if($this->input->post()){
			if($this->validate_user_form())
			{
				$u_id=$this->Usermodel->insert_user_data();
					if($u_id !== NULL)
					{
						$data['user_data'] = $this->Usermodel->get_user_data($u_id);
						$message=$this->load->view('email/welcome',$data,TRUE);
						$this->load->library('email_manager');
						$this->email_manager->send_welcome_email($data['user_data']->email_id,$message);
						
						$this->session->set_flashdata(array(
							'title' => 'Success',
							'css_class' => 'box-success',
							'message' => 'User Registration Successfully!'
						));
						redirect('Login/');
					}
			}
			else{
				$this->index();
			}
		}else{
			$this->session->set_flashdata(array(
				'title' => 'Restricted',
				'css_class' => 'box-warning',
				'message' => 'Registration Failed...!'
			));
			redirect('User/');
		} 
	}
	function validate_user_form()
	{
		$this->form_validation->set_error_delimiters ( '<div class="error_msg">', '</div>' );
		$this->form_validation->set_rules ( 'u_name', 'Full Name', 'required|trim|max_length[50]|callback_alpha_dash_space[' . $this->input->post ( 'u_name' ) . ']' );
		$this->form_validation->set_rules('email_id', 'Email', 'trim|valid_email|is_unique[users.email_id]|max_length[50]');
		$this->form_validation->set_rules('mob_no', 'Mobile', 'required|trim|is_unique[users.mob_no]|numeric|min_length[10]|max_length[10]');
		$status = $this->form_validation->run();
    	return $status;
	}
	function alpha_dash_space($name) {
		if (! preg_match ( '/^[a-zA-Z\s]+$/', $name )) {
			$this->form_validation->set_message ( 'alpha_dash_space', 'The %s field may only contain alpha characters & white spaces' );
			return FALSE;
		} else {
			return TRUE;
		}
	}
	public function email_verfication(){
			$u_id = $this->uri->segment(3, 0);
			$verify = $this->Usermodel->verify_email($u_id);
			if($verify>0){
				echo "Your verification id done. Please Wist our website to Login...";
			}else{
				echo "Your verification Failed. Please contact to Company persion...";
			}
	}
	
}
