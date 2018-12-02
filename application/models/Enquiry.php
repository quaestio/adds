<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Model {

	
	public function index()
	{
		
	}
	/**
	 * 
	 * Checks login  ...
	 * @param $emp_id
	 * @param $pwd
	 */
	public function submit_enquiry()
	{
		
		
		$data=array();
		$data['available'] =false;
	  	$enquiry=array(
			 'enquiry_by'=>$this->input->post('name'),
			 'mobile'=>$this->input->post('mobile'),
			 'email'=>$this->input->post('email'),
			 'message'=>$this->input->post('message')
			 
			);
			$this->db->insert('enquiry', $enquiry);
			
	 		return true;
	}
}//class