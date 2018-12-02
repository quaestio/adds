<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country_model extends CI_Model {

	
	public function index()
	{
		
	}
 
    
		public function country($action)
		{
			try
			{
				if(makeSafe($action)== "list"){
					$search_string=$this->input->post('Search_Str');
			
					$jtSorting=$this->input->get('jtSorting');
					$jtStartIndex=$this->input->get('jtStartIndex');
					$jtPageSize=$this->input->get('jtPageSize');
					$sql = "SELECT *  FROM countries  where ( countries_iso_code_2 like '%" . $search_string . "%' or countries_name like '%" . $search_string . "%')";
					$query=$this->db->query($sql);
					$recordCount = $query->num_rows();
		
					//Get records from database
					 $sql="SELECT * FROM countries where ( countries_iso_code_2 like '%" . $search_string . "%' or countries_name like '%" . $search_string . "%') ORDER BY " . $jtSorting . " LIMIT " . $jtStartIndex . "," . $jtPageSize . "";
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
							   'countries_name' => makeSafe($this->input->post('countries_name')) ,
							   'phonecode' => makeSafe($this->input->post('phonecode')) ,
						 	   'countries_iso_code_2' => makeSafe($this->input->post('countries_iso_code_2')) ,
							   'countries_iso_code_3' => makeSafe($this->input->post('countries_iso_code_3')) ,
							   'is_active' => makeSafe($this->input->post('is_active')) ,
							   'updatedby' => $this->session->userdata('user_name')
							  
							);
							$this->db->insert('countries',$data);
						    $last_insert_id=$this->db->insert_id();
							$sql="select * from countries where country_id=".$last_insert_id;
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
							   	'countries_name' => makeSafe($this->input->post('countries_name')) ,
								'phonecode' => makeSafe($this->input->post('phonecode')) ,
							   	'countries_iso_code_2' => makeSafe($this->input->post('countries_iso_code_2')) ,
							   	'countries_iso_code_3' => makeSafe($this->input->post('countries_iso_code_3')) ,
							   	'is_active' => makeSafe($this->input->post('is_active')) ,
							   	'updatedby' => $this->session->userdata('user_name')
							  
							);
							$this->db->where('country_id', $this->input->post('country_id'));
							$this->db->update('countries', $data); 
							
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