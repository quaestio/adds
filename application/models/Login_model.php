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
	public function check_login()
	{
		
	    $email = makeSafe($this->input->post('txtemail'));
	    $pass = makeSafe($this->input->post('txtpassword'));
	
	$this->db->select('customer_id,reg_type, org_name,country,state, city,zip,email_verified, mobile_verified,email_primary,primary_reg_name');
	$this->db->where('email_primary',$email);
	$this->db->where('pass',$pass);
	$q=$this->db->get('customers');
	
	if($q->num_rows()>0)
	{
	    $row = $q->row_array();
	
    	$data = array(
    	    'customer_id' => $row['customer_id'],
    	    'reg_type' => $row['reg_type'],
    	    'org_name' => $row['org_name'],
    	    'country' => $row['country'],
    	    'state' =>  $row['state'],
    	    'city' =>  $row['city'],
    	    'zip' =>  $row['zip'],
    	    'email_verified' =>  $row['email_verified'],
    	    'mobile_verified' =>  $row['mobile_verified'],
    	    'email_primary' =>  $row['email_primary'],
    	    'primary_reg_name' =>  $row['primary_reg_name'],
    	    'p' =>  'P'
    	);
    	
    	$this->session->set_userdata($data);
    	return 1;
	} else
	    return 0;
	
	}
	
	public function email_mobile_stat($cid){
	    $sql="select email_verified, mobile_verified from customers where MD5(customer_id)='".$cid."'";
	   	return $this->db->query($sql)->row_array();
	    
	}
}//class