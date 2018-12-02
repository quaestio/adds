<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_model extends CI_Model {

	
    public function enquiry_list($action)
		{
			try
			{
				if(makeSafe($action)== "list"){
					$search_string=$this->input->post('enquiry');
					
					$jtSorting=$this->input->get('jtSorting');
					$jtStartIndex=$this->input->get('jtStartIndex');
					$jtPageSize=$this->input->get('jtPageSize');
					$sql = "SELECT *  FROM enquiry  where ";
										
					$sql .="( mobile like '%" . $search_string . "%' or email like '%" . $search_string . "%' or enquiry_by like '%" . $search_string . "%') ";
					$query=$this->db->query($sql);
					$recordCount = $query->num_rows();
		     		//Get records from database
					$sql="SELECT * FROM enquiry where ";
				    $sql .="( mobile like '%" . $search_string . "%' or email like '%" . $search_string . "%' or enquiry_by like '%" . $search_string . "%')  ORDER BY " . $jtSorting . " LIMIT " . $jtStartIndex . "," . $jtPageSize . "";
					
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