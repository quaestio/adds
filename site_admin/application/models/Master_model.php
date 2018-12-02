<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {
  	
    public function tender_category_op($action){

	try
	{
		if(makeSafe($action)== "list"){
			$sql="SELECT tc_id AS RecordCount FROM tender_category";
			$query=$this->db->query($sql);
			$recordCount = $query->num_rows();
			$sql="SELECT  * FROM tender_category ";
			$query=$this->db->query($sql);
			
			$rows = array();
			foreach ($query->result_array() as $row)
								$rows[] = $row;
			$jTableResult = array();
			$jTableResult['Result'] = "OK";
			$jTableResult['TotalRecordCount'] = $recordCount;
			$jTableResult['Records'] = $rows;
			print json_encode($jTableResult);
		}else if(makeSafe($action) == "create")
				{
				 $sql="select * from tender_category where tc_name='".makeSafe($_POST['tc_name'])."'";
				 $query=$this->db->query($sql);
				 if($query->num_rows()>0)
				 {
				 	$jTableResult = array();
				$jTableResult['Result'] = "ERROR";
				$jTableResult['Message'] = "Duplicate Category Name";
				print json_encode($jTableResult);
				 }
				 else 
				 {
					$sql="insert into tender_category( tc_name,short_desc, updated_by)
					values('".makeSafe($_POST['tc_name'])."',
					'".makeSafe($_POST['short_desc'])."',
					'".makeSafe($this->session->userdata('user_name'))."')";
					$this->db->query($sql);
					$query=$this->db->query("SELECT * FROM tender_category WHERE tc_id = ".$this->db->insert_id());
								
					$jTableResult = array();
					$jTableResult['Result'] = "OK";
					$jTableResult['Record'] = $query->row_array();
					print json_encode($jTableResult);
				 }
				}
			
			//Updating a record (updateAction)
			else if(makeSafe($action) == "update")
			{

				 $sql="select * from tender_category where tc_name='".makeSafe($_POST['tc_name'])."' and tc_id!=".$_POST["tc_id"];
				 $query=$this->db->query($sql);
				 if($query->num_rows()>0)
				 {
				 	$jTableResult = array();
					$jTableResult['Result'] = "ERROR";
					$jTableResult['Message'] = "Duplicate classification name";
					print json_encode($jTableResult);
				 }
				 else 
				 {
					$sql="update tender_category set
					tc_name='".makeSafe($_POST['tc_name'])."',
					short_desc='".makeSafe($_POST['short_desc'])."',
					updated_by='".makeSafe($this->session->userdata('user_name'))."' 
					where  tc_id = " . makeSafe($_POST["tc_id"]);
					$this->db->query($sql);
					//Return result to jTable
					$jTableResult = array();
					$jTableResult['Result'] = "OK";
					print json_encode($jTableResult);
				 }
				
			}
			//Deleting a record (deleteAction)
			else if(makeSafe($action) == "delete")
			{
				
					$this->db->query("DELETE FROM tender_category WHERE tc_id = " . makeSafe($_POST["tc_id"]) . ";");
					$jTableResult = array();
					$jTableResult['Result'] = "OK";
					print json_encode($jTableResult);
			}
		}
		catch(Exception $ex)
		{
		    //Return error message
			$jTableResult = array();
			$jTableResult['Result'] = "ERROR";
			$jTableResult['Message'] = $ex->getMessage();
			print json_encode($jTableResult);
		}
			

	
	}
	
	//=================================
	public function tender_sub_category_op($action){

	try
	{
		if(makeSafe($action)== "list"){
			$sql="SELECT cd_id AS RecordCount FROM classification_details";
			$query=$this->db->query($sql);
			$recordCount = $query->num_rows();
			$sql="SELECT  * FROM classification_details ";
			$query=$this->db->query($sql);
			
			$rows = array();
			foreach ($query->result_array() as $row)
								$rows[] = $row;
			$jTableResult = array();
			$jTableResult['Result'] = "OK";
			$jTableResult['TotalRecordCount'] = $recordCount;
			$jTableResult['Records'] = $rows;
			print json_encode($jTableResult);
		}else if(makeSafe($action) == "create")
				{
				 $sql="select * from classification_details where cd_name='".makeSafe($_POST['cd_name'])."'";
				 $query=$this->db->query($sql);
				 if($query->num_rows()>0)
				 {
				 	$jTableResult = array();
				$jTableResult['Result'] = "ERROR";
				$jTableResult['Message'] = "Duplicate Place name";
				print json_encode($jTableResult);
				 }
				 else 
				 {
					$sql="insert into classification_details( tc_id,cd_name,short_desc, updated_by)
					values(
					'".makeSafe($_POST['tc_id'])."',
					'".makeSafe($_POST['cd_name'])."',
					'".makeSafe($_POST['short_desc'])."',
					'".makeSafe($this->session->userdata('user_name'))."')";
					$this->db->query($sql);
					$query=$this->db->query("SELECT * FROM classification_details WHERE cd_id = ".$this->db->insert_id());
								
					$jTableResult = array();
					$jTableResult['Result'] = "OK";
					$jTableResult['Record'] = $query->row_array();
					print json_encode($jTableResult);
				 }
				}
			
			//Updating a record (updateAction)
			else if(makeSafe($action) == "update")
			{

				 $sql="select * from classification_details where cd_name='".makeSafe($_POST['cd_name'])."' and cd_id!=".$_POST["cd_id"];
				 $query=$this->db->query($sql);
				 if($query->num_rows()>0)
				 {
				 	$jTableResult = array();
					$jTableResult['Result'] = "ERROR";
					$jTableResult['Message'] = "Duplicate Clasification details name";
					print json_encode($jTableResult);
				 }
				 else 
				 {
					$sql="update classification_details set
					tc_id='".makeSafe($_POST['tc_id'])."',
					cd_name='".makeSafe($_POST['cd_name'])."',
					short_desc='".makeSafe($_POST['short_desc'])."',
					updated_by='".makeSafe($this->session->userdata('user_name'))."' 
					where  cd_id = " . makeSafe($_POST["cd_id"]);
					$this->db->query($sql);
					//Return result to jTable
					$jTableResult = array();
					$jTableResult['Result'] = "OK";
					print json_encode($jTableResult);
				 }
				
			}
			//Deleting a record (deleteAction)
			else if(makeSafe($action) == "delete")
			{
				
					$this->db->query("DELETE FROM classification_details WHERE cd_id = " . makeSafe($_POST["cd_id"]) . ";");
					$jTableResult = array();
					$jTableResult['Result'] = "OK";
					print json_encode($jTableResult);
			}
		}
		catch(Exception $ex)
		{
		    //Return error message
			$jTableResult = array();
			$jTableResult['Result'] = "ERROR";
			$jTableResult['Message'] = $ex->getMessage();
			print json_encode($jTableResult);
		}
			

	
	}//historical place type
	
	public function tender_category(){
		$sql="select tc_id,tc_name from tender_category order by tc_name";
		return $this->db->query($sql)->result_array();
	}
	public function tender_doc_category(){
		$sql="select tdc_id,tdc_name,date_updated,updated_by from tender_doc_category order by tc_name";
		return $this->db->query($sql)->result_array();
	}
	public function tender_doc_category_op($action){
	    
	    try
	    {
	        if(makeSafe($action)== "list"){
	            $sql="SELECT tdc_id AS RecordCount FROM tender_doc_category";
	            $query=$this->db->query($sql);
	            $recordCount = $query->num_rows();
	            $sql="SELECT  * FROM tender_doc_category ";
	            $query=$this->db->query($sql);
	            
	            $rows = array();
	            foreach ($query->result_array() as $row)
	                $rows[] = $row;
	                $jTableResult = array();
	                $jTableResult['Result'] = "OK";
	                $jTableResult['TotalRecordCount'] = $recordCount;
	                $jTableResult['Records'] = $rows;
	                print json_encode($jTableResult);
	        }else if(makeSafe($action) == "create")
	        {
	            $sql="select * from tender_doc_category where tdc_name='".makeSafe($_POST['tdc_name'])."'";
	            $query=$this->db->query($sql);
	            if($query->num_rows()>0)
	            {
	                $jTableResult = array();
	                $jTableResult['Result'] = "ERROR";
	                $jTableResult['Message'] = "Duplicate Category Name";
	                print json_encode($jTableResult);
	            }
	            else
	            {
	                $sql="insert into tender_doc_category( tdc_name,updated_by)
					values('".makeSafe($_POST['tdc_name'])."',
					'".makeSafe($this->session->userdata('updated_by'))."')";
	                $this->db->query($sql);
	                $query=$this->db->query("SELECT * FROM tender_doc_category WHERE tdc_id = ".$this->db->insert_id());
	                
	                $jTableResult = array();
	                $jTableResult['Result'] = "OK";
	                $jTableResult['Record'] = $query->row_array();
	                print json_encode($jTableResult);
	            }
	        }
	        
	        //Updating a record (updateAction)
	        else if(makeSafe($action) == "update")
	        {
	            
	            $sql="select * from tender_doc_category where tdc_name='".makeSafe($_POST['tdc_name'])."'and tdc_id!=".$_POST["tdc_id"];
	            $query=$this->db->query($sql);
	            if($query->num_rows()>0)
	            {
	                $jTableResult = array();
	                $jTableResult['Result'] = "ERROR";
	                $jTableResult['Message'] = "Duplicate Category name";
	                print json_encode($jTableResult);
	            }
	            else
	            {
	                $sql="update tender_doc_category set
					tdc_name='".makeSafe($_POST['tdc_name'])."',
					updated_by='".makeSafe($this->session->userdata('user_name'))."'
					where  tdc_id = " . makeSafe($_POST["tdc_id"]);
	                $this->db->query($sql);
	                //Return result to jTable
	                $jTableResult = array();
	                $jTableResult['Result'] = "OK";
	                print json_encode($jTableResult);
	            }
	            
	        }
	        //Deleting a record (deleteAction)
	        else if(makeSafe($action) == "delete")
	        {
	            
	            $this->db->query("DELETE FROM tender_doc_category WHERE tdc_id = " . makeSafe($_POST["tdc_id"]) . ";");
	            $jTableResult = array();
	            $jTableResult['Result'] = "OK";
	            print json_encode($jTableResult);
	        }
	    }
	    catch(Exception $ex)
	    {
	        //Return error message
	        $jTableResult = array();
	        $jTableResult['Result'] = "ERROR";
	        $jTableResult['Message'] = $ex->getMessage();
	        print json_encode($jTableResult);
	    }
	    
	    
	    
	}
}
