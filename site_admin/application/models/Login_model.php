<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function index()
	{
		
	}
	/**
	 * 
	 * Checks login  ...
	 * @param $emp_id
	 * @param $pwd
	 */
	public function check_login($emp_id,$pwd,$login_type)
	{
		
			$sql="select user_id,full_name,email from site_users where  email='".$emp_id."' and user_pass='".$pwd."' and permission_type=1";
			$query = $this->db->query($sql);
	            if ( $query->num_rows() > 0 )
            		{
	                	$row= $query->row();
					    $sessionData = array(
		                'admin_user_id' => $row->user_id,
		                'emp_code' => $row->user_id,
		                'user_type' => 'A',
		                'user_name' => $row->full_name,
		                'user_email'=>$row->email,
		              
                		);
				
                		$this->session->set_userdata($sessionData);
            return true;
			}	
				
			
	}
	public function logout() {
		
		$this->session->sess_destroy();
	}
}//class