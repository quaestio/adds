<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_model extends CI_Model {

	
	public function index()
	{
		
	}
	/**
	 * 
	 * Checks login  ...
	 * @param $emp_id
	 * @param $pwd
	 */
	public function register($frm_data)
	{
		
		
		$data=array();
		$data['available'] =false;
		if($this->db->insert('customers', $frm_data))
		{
			$id= $this->db->insert_id();
			 return $id;
			
		}
		else
	 		return 0;
	}
	public function check_duplicate($email)
	{
		
		$this->db->where('email',$email);
		$query=$this->db->get('customers');
		if($query->num_rows()>0)			
	 		return true;
		else 
		    return false;
		
	}
	public function verify_mobile_otp()
	{
		
	    $sql="select customer_id from customers where MD5(customer_id)='".$this->input->post('cid')."' and mobile_otp='".makeSafe($this->input->post('otp'))."'" ;
	    $query=$this->db->query($sql);
	    if($query->num_rows()>0)
	    {
	 		$sql="update customers set mobile_verified='Y' where MD5(customer_id)='".$this->input->post('cid')."' and mobile_otp='".makeSafe($this->input->post('otp'))."'" ;
	       $query=$this->db->query($sql);
	       $data['msg']= "Mobile Verified successfully";
	       $data['stat']= true;
	    }
	    else{
	        $data['msg']= "invalid OTP";
	        $data['stat']= false;
	    }
		
		    return $data;
		
	}
	public function verify_email_otp()
	{
		
	   $sql="select customer_id from customers where MD5(customer_id)='".$this->input->post('cid')."' and email_otp='".makeSafe($this->input->post('otp'))."'" ;
	    $query=$this->db->query($sql);
	    if($query->num_rows()>0)
	    {
	 		$sql="update customers set email_verified='Y' where MD5(customer_id)='".$this->input->post('cid')."' and email_otp='".makeSafe($this->input->post('otp'))."'" ;
	       $query=$this->db->query($sql);
	       $data['msg']= "Email Verified successfully";
	       $data['stat']= true;
	    }
	    else{
	        $data['msg']= "invalid OTP";
	        $data['stat']= false;
	    }
		
		    return $data;
		
	}
	public function customers(){
	    $sql="select * from customers where MD5(customer_id)='".$this->input->post('cid')."'" ;
	    return $this->db->query($sql)->row_array();;
	    
	}
	public function email_mobile_stat($cid){
	    $sql="select email_verified, mobile_verified from customers where MD5(customer_id)='".$cid."'";
	    return $this->db->query($sql)->row_array();
	    
	}
}//class