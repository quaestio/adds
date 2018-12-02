<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_model extends CI_Model {

	
	
public function countries()
	{
		$sql="select * from countries order by countries_name";
		return $this->db->query($sql)->result_array();
	}
    
		public function states($action)
		{
			try
			{
				if(makeSafe($action)== "list"){
					$search_string=$this->input->post('Search_Str');
					$country_select=$this->input->post('country_select');
				
					$jtSorting=$this->input->get('jtSorting');
					$jtStartIndex=$this->input->get('jtStartIndex');
					$jtPageSize=$this->input->get('jtPageSize');
					$sql = "SELECT *  FROM states  where ";
					if($country_select!="")
					$sql .=" country_id=".$country_select." and ";
					
					$sql .="( state_name like '%" . $search_string . "%' or state_code like '%" . $search_string . "%') ";
					$query=$this->db->query($sql);
					$recordCount = $query->num_rows();
		
					//Get records from database
					 $sql="SELECT * FROM states where ";
					if($country_select!="")
					$sql .=" country_id=".$country_select." and ";
					
					$sql .="( state_name like '%" . $search_string . "%' or state_code like '%" . $search_string . "%') ORDER BY " . $jtSorting . " LIMIT " . $jtStartIndex . "," . $jtPageSize . "";
					
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
				
				
				else if($this->session->userdata('user_type')=="A")
				{
					//Creating a new record (createAction)
					 if(makeSafe($action) == "create"){
						 $data = array(
							   'country_id' => makeSafe($this->input->post('country_id')) ,
							   'state_code' => makeSafe($this->input->post('state_code')) ,
							   'state_name' => makeSafe($this->input->post('state_name')) ,
							   'updatedby' => $this->session->userdata('user_name')
							  
							);
							$this->db->insert('states',$data);
						    $last_insert_id=$this->db->insert_id();
							$sql="select * from states where state_id=".$last_insert_id;
							$row = $query = $this->db->query($sql)->row_array();
			
							//Return result to jTable
							$jTableResult = array();
							$jTableResult['Result'] = "OK";
							$jTableResult['Record'] = $row;
							return ($jTableResult);
						}
					
					//Updating a record (updateAction)
					else if(makeSafe($action) == "update")
					{
					
					  
							$data = array(
							   'country_id' => makeSafe($this->input->post('country_id')) ,
							   'state_code' => makeSafe($this->input->post('state_code')) ,
							   'state_name' => makeSafe($this->input->post('state_name')) ,
							   'updatedby' => $this->session->userdata('user_name')
							  
							);
							$this->db->where('state_id', $this->input->post('state_id'));
							$this->db->update('states', $data); 
							$jTableResult = array();
							$jTableResult['Result'] = "OK";
							return ($jTableResult);
						
					}
					
			
					//Close database connection
					
				}
				else
				{
					$jTableResult['Result'] = "ERROR";
					$jTableResult['Message'] = "You are not authorized";
					 return ($jTableResult);
				}
			}
			catch(Exception $ex)
			{
			    //Return error message
				$jTableResult = array();
				$jTableResult['Result'] = "ERROR";
				$jTableResult['Message'] = $ex->getMessage();
				return ($jTableResult);
			}
	

		
		}//end emp class
	
	
   
   
	
	
}//class