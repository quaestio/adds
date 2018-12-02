<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function index()
	{
		
	}
	
	public function record_count()
	{
	    
	    $sql="select * from tenders,user_fav_tenders   where tenders.tender_id=user_fav_tenders.tender_id and approved='Y' and user_fav_tenders.customer_id=".$this->session->userdata('customer_id');
	    $sql .=" order by pub_date desc";
	    
	    return $this->db->query($sql)->num_rows();
	    
	    
	}
	
	public function fav_tenders($offset,$limit)
	{
	   
	    $array_index=0;
	    $display=array();
	    $sql="select * from tenders,user_fav_tenders   where tenders.tender_id=user_fav_tenders.tender_id and approved='Y' and user_fav_tenders.customer_id=".$this->session->userdata('customer_id');
        $sql .=" order by pub_date desc limit ".$offset.",".$limit;
	   
	    $query = $this->db->query($sql);
	    foreach ($query->result() as $row)
	    {
	        $display[$array_index]['tender_id']= $row->tender_id;
	        $display[$array_index]['category_id']= $row->category_id;
	        $sqlC="select tc_name from tender_category where tc_id=".$row->tender_id;
	        $q=$this->db->query($sqlC);
	        if($q->num_rows()>0)
	        {
	            $rowCat=$q->row_array();
	            $display['category_name']=$rowCat['tc_name'];
	        }
	        else
	            $display['category_name']="Not Sure";
	            
	        $display[$array_index]['tender_type']= $row->tender_type;
	        $display[$array_index]['ref_number']= $row->ref_number;
	        $display[$array_index]['title']= $row->title;
	        $display[$array_index]['description']= $row->description;
	        $display[$array_index]['currency']= $row->currency;
	        $display[$array_index]['emd_fee']= $row->emd_fee;
	        $display[$array_index]['tender_fee']= $row->tender_fee;
	        $display[$array_index]['emd_exemption']= $row->emd_exemption;
	        $display[$array_index]['emd_fee_type']= $row->emd_fee_type;
	        $display[$array_index]['emd_payable_to']= $row->emd_payable_to;
	        $display[$array_index]['pub_date']= date('d F Y',strtotime($row->pub_date));
	        $display[$array_index]['bid_submission_start_date']= $row->bid_submission_start_date;
	        $display[$array_index]['bid_submission_end_date']= date('d F Y',strtotime($row->bid_submission_end_date)) ;
	        $display[$array_index]['opening_date']= $row->opening_date;
    	    
	        $array_index=$array_index + 1;
	    }
	    
	    return $display;
	}
	

	
}//class