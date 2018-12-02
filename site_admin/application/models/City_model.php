<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_model extends CI_Model {

	
	public function countries()
	{
		$sql="select * from countries order by countries_name";
		return $this->db->query($sql)->result_array();
	}
 
	public function states()
	{
		$sql="select * from states order by state_name";
		return $this->db->query($sql)->result_array();
	}
 
function load_states($country_id){
		$sql="select state_id, state_name from states where country_id=".$country_id." order by state_name";
		return $query = $this->db->query($sql)->result_array();
	}
		public function city($action)
		{
			try
			{
				if(makeSafe($action)== "list"){
					$search_string=$this->input->post('Search_Str');
					
					$state_select=$this->input->post('state_select');
				
					$jtSorting=$this->input->get('jtSorting');
					$jtStartIndex=$this->input->get('jtStartIndex');
					$jtPageSize=$this->input->get('jtPageSize');
					$sql = "SELECT *  FROM cities C,states S, countries Y where C.state_id=S.state_id and S.country_id=Y.country_id and ";
					if($state_select!="")
					$sql .=" C.state_id=".$state_select." and ";
					
					$sql .="( city_name like '%" . $search_string . "%' or city_code like '%" . $search_string . "%')";
					$query=$this->db->query($sql);
					$recordCount = $query->num_rows();
		
					//Get records from database
					 $sql="SELECT Y.country_id, C.city_id,C.city_code,C.city_name,C.state_id FROM cities C,states S,countries Y  where C.state_id=S.state_id and Y.country_id=S.country_id  and ";
					if($state_select!="")
					$sql .=" C.state_id=".$state_select." and ";
					
					$sql .="( city_name like '%" . $search_string . "%' or city_code like '%" . $search_string . "%')  ORDER BY " . $jtSorting . " LIMIT " . $jtStartIndex . "," . $jtPageSize . "";
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
							   'state_id' => makeSafe($this->input->post('state_id')) ,
							   'city_code' => makeSafe($this->input->post('city_code')) ,
							   'city_name' => makeSafe($this->input->post('city_name')) ,
							   'updatedby' => $this->session->userdata('user_name')
							  
							);
							$this->db->insert('cities',$data);
						    $last_insert_id=$this->db->insert_id();
							$sql="select * from cities where city_id=".$last_insert_id;
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
							   'state_id' => makeSafe($this->input->post('state_id')) ,
							   'city_code' => makeSafe($this->input->post('city_code')) ,
							   'city_name' => makeSafe($this->input->post('city_name')) ,
							   'updatedby' => $this->session->userdata('user_name')
							  
							);
							$this->db->where('city_id', $this->input->post('city_id'));
							$this->db->update('cities', $data); 
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