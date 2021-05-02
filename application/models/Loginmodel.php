<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model
{
    public function authentication()
    {
        $this->db->select('u_id , u_name, email_verification_status');
		$this->db->where('email_verification_status', 1);
        $this->db->where('email_id ', $this->input->post('u_id'));
        $this->db->where('password', md5($this->input->post('password')));
        $result = $this->db->get('users')->row();
		if($result != NULL){return $result;}else{return false;}
    }
	
}