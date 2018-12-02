<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tender_model extends CI_Model {

	public function upload_image(){
		$config['upload_path'] = '../site_img/tdocs';
		$config['allowed_types'] = 'pdf|doc|docx|xlsx|xls|jpg|gpeg|zip';
		$config['max_size']	= '10000';
		$config['overwrite'] = TRUE;
		$temp_file_name=temp_image_id();
			
		$config['file_name']  = $temp_file_name;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$dataRet['img_error']= $this->upload->display_errors();
			$dataRet['ImageUploaded']= false;
			$dataRet['ImageDetails']= '';
		}
		else
		{
			$uploaded_data=$this->upload->data();
			$dataRet['ImageUploaded']= true;
			$mime=$uploaded_data['file_ext'] ;
			$other_cat = trim($this->input->post('other_cat'));
			$tdc = $this->input->post('tdc') ;
			
			
			if($tdc=="other") $tdc=$other_cat;
			$data = array(
				'tender_id' => $this->input->post('obj_id'), 
			    'doc_title' => $tdc ,
				'doc_name' => $temp_file_name.$mime

			);
			$this->db->insert('tender_documetns', $data);
			$max_image_id=$this->db->insert_id();
			$dataRet['image_id']=$max_image_id;
			$dataRet['image_mime']=$temp_file_name.$mime;
	
		}
		return $dataRet;
	}
	
	public function record_count(){
	    $sql="select * from tenders where tenders.deleted='N'";
	    return $this->db->query($sql)->num_rows();
	    
	}
	public function tender_list($start,$limit){
		$array_index=0;
		$display = array();
		$sql="select tenders.tender_id,customer_id,tc_name,tender_type,alt_org,ref_number,title,web_site,approved,DATE_FORMAT(tenders.date_updated, '%d %b %y') as dt,tenders.updated_by,front_page 
        from tenders,tender_category 
        where tenders.category_id=tender_category.tc_id and tenders.deleted='N'
        order by tender_id desc limit $start,$limit ";

		$query=$this->db->query($sql);
		foreach ($query->result() as $row)
		{

			$display[$array_index]['tender_id']= $row->tender_id;
			$display[$array_index]['tc_name']= $row->tc_name;
			$sqlO="select org_name from customers where customer_id=".$row->customer_id;
			$query=$this->db->query($sqlO);
			if($query->num_rows()>0)
			{
			    $rowC=$query->row_array();
			    $display[$array_index]['org_name']= $rowC['org_name'];
			}
			else
			    $display[$array_index]['org_name']= "*".$row->alt_org;
			
			
			$display[$array_index]['tender_type']= $row->tender_type;
			$display[$array_index]['ref_number']= $row->ref_number;
			$display[$array_index]['title']= $row->title;
			$display[$array_index]['web_site']= $row->web_site;
			$display[$array_index]['approved']= $row->approved;
			$display[$array_index]['dt']= $row->dt;
			$display[$array_index]['updated_by']= $row->updated_by;
			$display[$array_index]['front_page']= $row->front_page;
			$sqlImage="select doc_id,doc_title,doc_name from tender_documetns where tender_id=".$row->tender_id;
			$display[$array_index]['docs'] = $this->db->query($sqlImage)->result_array();
			$array_index=$array_index+1;
		}
		return $display;
	}
	

	
	public function delete_doc(){
		$doc_id=$this->input->post('data_id');
		$sql="select doc_name from tender_documetns where doc_id=".$doc_id;
		$query=$this->db->query($sql);
		if($query->num_rows()>0)
		{
		    $row=$query->row_array();
		    $doc_name=$row['doc_name'];
		    $sql="delete from  tender_documetns where doc_id=".$doc_id;
		    $this->db->query($sql);
		    @unlink('../site_img/tdocs/'.$doc_name);
		    return 1;
		}
		return 0;
		
		
	}
	public function save_tender($obj)
	{
			 $this->db->insert('tenders',$obj);
			 $tender_id=$this->db->insert_id();
			 return message_success('Tender Saved Successfully');
		

	}
	public function delete_tender()
	{
	    $tid=makeSafe($this->input->post('data_id'));
		$this->db->where('tender_id',$tid);
		$this->db->update('tenders',array('deleted'=>'Y','approved'=>'N'));
	    	
		return 1;

	}
	public function delete_tender_to_approve()
	{
	    $tid=makeSafe($this->input->post('data_id'));
		$this->db->where('tender_id',$tid);
		$this->db->update('tenders',array('deleted'=>'N','approved'=>'N'));
	    	
		return 1;

	}
	public function update_tender($obj,$tender_id)
	{
		
			$this->db->where('tender_id', $tender_id);
			$this->db->update('tenders',$obj);
			return message_success('Tender Updated Successfully');
		
	}
	public function get_tender_by_id($tender_id)
	{
		$this->db->where('tender_id', $tender_id);
		$query= $this->db->get('tenders');
		if ($query->num_rows() > 0)
		return $query->row_array();


	}
	
	public function pub_unpub()
	{
	    $current_stat=$this->input->post('data_value')=="Y"?'N':'Y';
	    $tender_id= makeSafe($this->input->post('data_id'));

	    $obj=array('approved'=>makeSafe($current_stat));
	    $this->db->where('tender_id',$tender_id);
		$this->db->update('tenders',$obj);

		if($this->input->post('data_value')=="N")
		    echo'<span class="label label-success"><a href="" class="btnPubUnpub text-white" data-id="'.$tender_id.'" data-value="'.$current_stat.'"> Approved</a></span>';
		
		else 
		    echo'<span class="label label-warning"><a href="" class="btnPubUnpub text-white" data-id="'.$tender_id.'" data-value="'.$current_stat.'"> Pending</a></span>';
		   
		

	}
	public function front_page_stat()
	{
	    $current_stat=$this->input->post('data_value')=="Y"?'N':'Y';
	    $tender_id= makeSafe($this->input->post('data_id'));

	    $obj=array('front_page'=>makeSafe($current_stat));
	    $this->db->where('tender_id',$tender_id);
		$this->db->update('tenders',$obj);

		if($this->input->post('data_value')=="N")
		    echo'<span class="label label-success"><a href="" class="btnFP text-white" data-id="'.$tender_id.'" data-value="'.$current_stat.'"> Yes</a></span>';
		
		else 
		    echo'<span class="label label-warning"><a href="" class="btnFP text-white" data-id="'.$tender_id.'" data-value="'.$current_stat.'"> No</a></span>';
		   
		

	}
	public function tdc()
	{
	   return $this->db->get('tender_doc_category')->result_array();

	}
	public function opt_hint()
	{
	    $SQL="select distinct alt_org, plant_location, auctioneer,auctioneer_con_per, auctioneer_con_nos,auctioneer_con_email,auctioneer_web ";
	    $SQL .=" FROM tenders where alt_org like '%".$this->input->get('searchText')."%' order by alt_org";
	    return $this->db->query($SQL)->result_array();

	}

	public function record_count_deleted(){
	    $sql="select * from tenders where deleted='Y'";
	    return $this->db->query($sql)->num_rows();
	    
	}
	public function tender_list_deleted($start,$limit){
	    $array_index=0;
	    $display = array();
	    $sql="select tenders.tender_id,customer_id,tc_name,tender_type,alt_org,ref_number,title,web_site,approved,DATE_FORMAT(tenders.date_updated, '%d %b %y') as dt,tenders.updated_by
        from tenders,tender_category
        where tenders.category_id=tender_category.tc_id and tenders.deleted='Y'
        order by tender_id desc limit $start,$limit ";
	    
	    $query=$this->db->query($sql);
	    foreach ($query->result() as $row)
	    {
	        
	        $display[$array_index]['tender_id']= $row->tender_id;
	        $display[$array_index]['tc_name']= $row->tc_name;
	        $sqlO="select org_name from customers where customer_id=".$row->customer_id;
	        $query=$this->db->query($sqlO);
	        if($query->num_rows()>0)
	        {
	            $rowC=$query->row_array();
	            $display[$array_index]['org_name']= $rowC['org_name'];
	        }
	        else
	            $display[$array_index]['org_name']= "*".$row->alt_org;
	            
	            
	            $display[$array_index]['tender_type']= $row->tender_type;
	            $display[$array_index]['ref_number']= $row->ref_number;
	            $display[$array_index]['title']= $row->title;
	            $display[$array_index]['web_site']= $row->web_site;
	            $display[$array_index]['approved']= $row->approved;
	            $display[$array_index]['dt']= $row->dt;
	            $display[$array_index]['updated_by']= $row->updated_by;
	            $sqlImage="select doc_id,doc_title,doc_name from tender_documetns where tender_id=".$row->tender_id;
	            $display[$array_index]['docs'] = $this->db->query($sqlImage)->result_array();
	            $array_index=$array_index+1;
	    }
	    return $display;
	}

}
?>