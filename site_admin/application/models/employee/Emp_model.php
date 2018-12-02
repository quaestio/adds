<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_model extends CI_Model {
	public function change()
	{
		$oldPass=$this->input->post('oldPass');
		$pass=$this->input->post('pass');
		$renewpass=$this->input->post('renewpass');
		if(trim($pass)!="")
		{
			if($pass!=$renewpass)
			return message_alert("New Password and re-type password is not same");
			else
			{
				$sql="select user_id from site_users where  user_id='".$this->session->userdata('user_id')."' and password='".$oldPass."'";
				$query = $this->db->query($sql);
				if ( $query->num_rows() > 0 )
				{
					$data = array('password' => $pass);
					$this->db->where('user_id', $this->session->userdata('user_id'));
					$this->db->update('site_users', $data);
					return message_success("Password changed successfully");
				}
				else
				return message_alert("Invalid old password");
			}

		}
		else
		{
			return message_alert("Password cant be blank");
		}
			
			
	}
	public function user_op($action)
	{

		if($this->session->userdata('user_type')=="A")
		{
			try
			{

				if(makeSafe($action)== "list"){

					$jtSorting=$this->input->get('jtSorting');
					$jtStartIndex=$this->input->get('jtStartIndex');
					$jtPageSize=$this->input->get('jtPageSize');
					$sql = "SELECT *  FROM site_users";
					$query=$this->db->query($sql);
					$recordCount = $query->num_rows();

					//Get records from database
					$sql="SELECT user_id,full_name,designation,email,user_pass,login_type,mime,permission_type FROM site_users  where full_name like '%" . makeSafe($this->input->post('full_name')) . "%' ORDER BY " . makeSafe($_GET["jtSorting"]) . " LIMIT " . makeSafe($_GET["jtStartIndex"]) . "," . makeSafe($_GET["jtPageSize"]) . "";
					$query=$this->db->query($sql);
					//Add all records to an array
					$rows = array();
					foreach ($query->result_array() as $row)
					$rows[] = $row;

					//Return result to jTable
					$jTableResult = array();
					$jTableResult['Result'] = "OK";
					$jTableResult['TotalRecordCount'] = $recordCount;
					$jTableResult['Records'] = $rows;
					return $jTableResult;
				}
					
				else if(makeSafe($action) == "create"){




					//check the duplicate
					$this->db->where('email',makeSafe($this->input->post('email')));
					$query=$this->db->get('site_users');
					if($query->num_rows()>0)
					{
						$jTableResult = array();
						$jTableResult['Result'] = "ERROR";
						$jTableResult['Message'] = "Duplicat user name";
						return ($jTableResult);
					}
					else {
    						$this->db->where('full_name',makeSafe($this->input->post('full_name')));
    						$query=$this->db->get('site_users');
    						if($query->num_rows()>0)
    						{
    							$jTableResult = array();
    							$jTableResult['Result'] = "ERROR";
    							$jTableResult['Message'] = "Duplicat name";
    							return ($jTableResult);
    						}
    						else {
    
    							
    								$data = array(
    									  
    									   'full_name' => makeSafe($this->input->post('full_name')) , 
    									   'designation' => makeSafe($this->input->post('designation')) ,
    									   'email' => makeSafe($this->input->post('email')) ,
    									   'user_pass' => makeSafe($this->input->post('user_pass')) ,
    									   'login_type' => makeSafe($this->input->post('login_type')) ,
    									   'mime' =>"" ,
    									   'permission_type' => '1'
    									  
    									
    								);
    								$this->db->insert('site_users',$data);
    								$last_insert_id=$this->db->insert_id();
                                    $sql="select * from site_users where user_id=".$last_insert_id;
    								$row = $query = $this->db->query($sql)->row_array();
    
    									//Return result to jTable
    									$jTableResult = array();
    									$jTableResult['Result'] = "OK";
    									$jTableResult['Record'] = $row;
    									return ($jTableResult);
    								
    							}
							
						}
					}

				

				//Updating a record (updateAction)
				else if(makeSafe($action) == "update")
				{		
				    $data = array(
				        
				        'full_name' => makeSafe($this->input->post('full_name')) ,
				        'designation' => makeSafe($this->input->post('designation')) ,
				        'email' => makeSafe($this->input->post('email')) ,
				        'user_pass' => makeSafe($this->input->post('user_pass')) ,
				        'login_type' => makeSafe($this->input->post('login_type')) ,
				        'mime' =>"" ,
				        'permission_type' => '1'
				       
				    );
					$this->db->where('email',makeSafe($this->input->post('email')));
					$this->db->where('user_id!=', makeSafe($this->input->post('user_id')));
					$query=$this->db->get('site_users');
					if($query->num_rows()>0)
					{
						$jTableResult = array();
						$jTableResult['Result'] = "ERROR";
						$jTableResult['Message'] = "Duplicate user name";
						return ($jTableResult);
					}
					else
						{
						
							$this->db->where('user_id', $this->input->post("user_id"));
							$this->db->update('site_users',$data);
    						$jTableResult = array();
							$jTableResult['Result'] = "OK";
							print json_encode($jTableResult);
							exit;
		              }

				}
				//Deleting a record (deleteAction)
				else if(makeSafe($action) == "delete")
				{

					$jTableResult = array();
					$jTableResult['Result'] = "ERROR";
					$jTableResult['Message'] ="Deletion Restricted, Deactivate the user";
					return ($jTableResult);

				}

				//Close database connection

					
			}

			catch(Exception $ex)
			{
				//Return error message
				$jTableResult = array();
				$jTableResult['Result'] = "ERROR";
				$jTableResult['Message'] = $ex->getMessage();
				return ($jTableResult);
			}
		}
		else
		{

			$jTableResult = array();
			$jTableResult['Result'] = "ERROR";
			$jTableResult['Message'] = "You are not authorized to view this";
			return ($jTableResult);
		}
	}//end emp class

}//class