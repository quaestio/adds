<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

		
	public function articles()
	{
		$jtSorting=$this->input->get('jtSorting');
		$jtStartIndex=$this->input->get('jtStartIndex');
		$jtPageSize=$this->input->get('jtPageSize');
		$sql="SELECT article_id,article_title,articles.is_active,articles.seo_url,date_created,full_name
		 	from articles,site_users 
  		where articles.updated_by=site_users.user_id 
   
  		and article_title like '%".makeSafe($_POST['article_title']) . "%' ";
		$query=$this->db->query($sql);
		$recordCount = $query->num_rows();

		//Get records from database
		$sql="select article_id,article_title,articles.is_active,articles.seo_url,date_created,full_name
  		from articles,site_users 
  		where articles.updated_by=site_users.user_id 
   		
  		and article_title like '%".makeSafe($_POST['article_title']) . "%' ORDER BY " . makeSafe($_GET["jtSorting"]) . " LIMIT " . makeSafe($_GET["jtStartIndex"]) . "," . makeSafe($_GET["jtPageSize"]) . "";
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
	
public function save_article($obj)
	{
		$this->db->where('seo_url', trim($obj['seo_url']));
		$query= $this->db->get('articles');
		if ($query->num_rows() > 0) 
		return message_alert('Duplicate Seo url');
		else 
		{
		 $this->db->insert('articles',$obj);
		 
		 return message_success('Article Saved Successfully');
		}
	
	}
public function update_article($obj,$article_id)
	{
		$this->db->where('seo_url', trim($obj['seo_url']));
		$this->db->where('article_id!=', $article_id);
		$query= $this->db->get('articles');
		if ($query->num_rows() > 0) 
		return message_alert('Duplicate Seo url');
		else 
		{
			$this->db->where('article_id', $article_id);
		 	$this->db->update('articles',$obj);
		 return message_success('Article Updated Successfully');
		}
	}
public function get_article_by_id($article_id)
	{
		$this->db->where('article_id', $article_id);
		$query= $this->db->get('articles');
		if ($query->num_rows() > 0) 
		    return $query->row_array();
		  
	
	}

public function delete_article($article_id)
	{
		$obj=array('is_active'=>makeSafe($this->input->post('data_value'))=="Y"?'N':'Y' );
		$this->db->where('article_id', $article_id);
		 $this->db->update('articles',$obj);
		
	return 'Data Updated Successfully';
	}

   
	
	
}//class