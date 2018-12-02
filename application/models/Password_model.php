<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_model extends CI_Model {

	
	public function index()
	{
		
	}
	/**
	 * 
	 * Checks login  ...
	 * @param $emp_id
	 * @param $pwd
	 */
	public function reset_password(){
	    $this->db->select('pass,org_name,address_line_1,mobile_primary,email_primary,primary_reg_name');
	    $this->db->where('email_primary',makeSafe($this->input->post('email')));
	    $query=$this->db->get('customers');
	    if($query->num_rows($query)>0)
	    {
	        $form_data=$query->row_array();
	        $msgC='<table width="100%">
					<tr><td colspan="2">
					Dear '.$form_data["primary_reg_name"].',<br />
					Thank you for your interest on Tender Cliq.
					<h5>Your Password:'.$form_data["pass"].'</h5><br />
					    
					<b>Login by clicking <a href="'.base_url().'login">here<a></b>
					    
					    
					</td></tr>
					<tr><td colspan="2"><strong>Registration Details</strong></td></tr>
					    
					<tr>
						<td width="50%">Organization Name:</td>
						<td width="50%">'.$form_data["org_name"].'</td>
					</tr>
						    
					<tr>
						<td width="50%">Address Line 1:</td>
						<td width="50%">'.$form_data["address_line_1"].'</td>
					</tr>
						    
					<tr>
						<td width="50%">Primary Registration name :</td>
						<td width="50%">'.$form_data["primary_reg_name"].'</td>
					</tr>
						    
					<tr>
						<td width="50%">Mpbile:</td>
						<td width="50%">'.$form_data["mobile_primary"].'</td>
					</tr>
					<tr>
						<td width="50%">Email[Login Id]:</td>
						<td width="50%">'.$form_data["email_primary"].'</td>
					</tr>
						    
						    
				</table>';
	        $msg['content']=$msgC;
	        $content=$this->load->view('email_templates/reg_email',$msg,TRUE);
	        
	        $email_stat=@$this->common_model->sendEmail($form_data['email_primary'],"Password Details in Tendercliq.com",$content,'info@tendercliq.com','TenderCliq');
	        
	        
	        
	        if($email_stat)
	        { $data['stat']=true;
	        $data['message']="SUCCESS: Email Sent Successfully to ".$form_data['email_primary'];
	        }
	        else
	        {
	            $data['message']="ALERT: Email not Sent Successfully to ".$form_data['email_primary'];
	            $data['stat']=false;
	        }
	        
	    }//email found
	    else
	    {
	        $data['message']="This Email id not registered, Please check your email";
	        $data['stat']=false;
	    }
	    return $data;
	}
}//class