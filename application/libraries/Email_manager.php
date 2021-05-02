<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email_manager {

	public function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->library('email');
		$this->initialize_email();
	}
	
	/************ INITIALIZE EMAIL CREDENTIALS **************/
	public function initialize_email(){
		$this->CI->email->initialize(array(
			'protocol' => 'smtp',
			'smtp_host' =>  'ssl://stmp.googlemail.com',
			'smtp_user' => 'poojajadhav1906@gmail.com',
			'smtp_pass' => '123456789',
			'smtp_port' => 465,
			'smtp_timeout' => '45',
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'crlf' => "\r\n",
			'newline' => "\r\n"
		));
	} 
	
	/*******************User Welcome mail*******************/
	
	public function send_welcome_email($message, $email)
	{
		$this->CI->email->from('poojajadhav1906@gmail.com', 'XYZ website');
		$this->CI->email->to($email);
		$this->CI->email->subject('Please verify your email for login');
		$this->CI->email->message($message);
		$this->CI->email->send();
		return true;
	}
}	
