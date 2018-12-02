<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

		
	public function lst()
	{
		$jtSorting=$this->input->get('jtSorting');
		$jtStartIndex=$this->input->get('jtStartIndex');
		$jtPageSize=$this->input->get('jtPageSize');
		$sql="select * FROM customers 
   		  		where  identity_verified like '%".makeSafe($_POST['iv']) . "%'
               and ( org_name like '%".makeSafe($_POST['s_str']) . "%'
                or email_primary like '%".makeSafe($_POST['s_str']) . "%'
                or primary_reg_name like '%".makeSafe($_POST['s_str']) . "%'
                or office_email like '%".makeSafe($_POST['s_str']) . "%'
                or alt_mobile_primary like '%".makeSafe($_POST['s_str']) . "%'
		        or mobile_primary like '%".makeSafe($_POST['s_str']) . "%')";
		$query=$this->db->query($sql);
		$recordCount = $query->num_rows();

		//Get records from database
		$sql="select * FROM customers
   		where   identity_verified like '%".makeSafe($_POST['iv']) . "%'
               and ( org_name like '%".makeSafe($_POST['s_str']) . "%'
                or email_primary like '%".makeSafe($_POST['s_str']) . "%'
                or primary_reg_name like '%".makeSafe($_POST['s_str']) . "%'
                or office_email like '%".makeSafe($_POST['s_str']) . "%'
                or alt_mobile_primary like '%".makeSafe($_POST['s_str']) . "%'
		        or mobile_primary like '%".makeSafe($_POST['s_str']) . "%') 
                ORDER BY " . makeSafe($_GET["jtSorting"]) . " LIMIT " . makeSafe($_GET["jtStartIndex"]) . "," . makeSafe($_GET["jtPageSize"]) . "";
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
	

	public function approve()
	{
	    $cid=$this->input->post('cid');
		$obj=array('identity_verified'=>makeSafe($this->input->post('data_value'))=="Y"?'N':'Y' );
		$this->db->where('customer_id', $cid);
		 $this->db->update('customers',$obj);
		
	   return 'Update Success';
	}
	public function profile($cid)
	{
	    $sql="select * FROM customers where customer_id=".$cid;
	    $query=$this->db->query($sql);
	    
	    if($query->num_rows()>0)
	    {
	        $row=$query->row_array();
	        $data['stat']=true;
	        $data['reg_type']=$row['reg_type'];
	        $data['org_name']=$row['org_name'];
	       
	        $data['address_line_1']=$row['address_line_1'];
	        $data['address_line_2']=$row['address_line_2'];
	        $data['country']=$this->cm->get_country_name_from_id( $row['country'] );
	        $data['state']=$this->cm->get_state_name_from_id($row['state']);
	        $data['city']=$this->cm->get_city_name_from_id($row['city']);
	        $data['zip']=$row['zip'];
	        $data['office_email']=$row['office_email'];
	        $data['land_line']=$row['land_line'];
	        $data['land_line_ext']=$row['land_line_ext']; 
	        $data['primary_reg_name']=$row['primary_reg_name'];
	        $data['designation']=$row['designation'];
	        $data['mobile_primary']=$row['mobile_primary'];
	        $data['alt_mobile_primary']=$row['alt_mobile_primary'];
	        $data['email_primary']=$row['email_primary'];
	        $data['date_register']=$row['date_register'];
	        $data['email_verified']=$row['email_verified'];
	        $data['mobile_verified']=$row['mobile_verified'];
	        $data['identity_verified']=$row['identity_verified'];
	        $sql="select tc_name from tender_category,customers_i_c where tender_category.tc_id=customers_i_c.category_id and customers_i_c.customer_id=".$cid;
	        $data['ic']=$this->db->query($sql)->result_array();
	        
	    }
	    else 
	        $data['stat']=false;
	    return $data;
   		
	}

   
	
	
}//class