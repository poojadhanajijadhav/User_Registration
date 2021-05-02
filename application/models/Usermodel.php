<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model
{
	public function insert_user_data()
	{
		$this->db->trans_begin();
		$this->db->insert('users', $this->bind_user_details());
		$user_id = $this->db->insert_id();
		 if($this->db->trans_status()===FALSE)
		 {
            $this->db->trans_rollback();
            return 0;
			}
			else 
			{
				$this->db->trans_commit();
				return $user_id;
			}
	}
	private function bind_user_details()
	{
		$user_details = array(
		'u_name'=>$this->input->post('u_name'),
		'mob_no'=>$this->input->post('mob_no'),
		'email_id'=>$this->input->post('email_id'),
		'password '=> md5($this->input->post('pwd')),
		);
		return $user_details;
	}
	 public function get_user_data($id)
    {
        $this->db->select('u_id , u_name', 'email_id');
        $this->db->where('u_id ', $id);
        $result = $this->db->get('users')->row();
		if($result != NULL){return $result;}else{return false;}
    }
	public function verify_email($u_id)
	{
		$data = array('email_verification_status'=> 1);
		$this->db->where('u_id',$u_id);
		$this->db->update('users',$data );
		return $this->db->affected_rows();
	}
	
}