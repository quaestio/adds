<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model 
{
	public function categories()
	{	
		$parentID=$this->input->get('ParentID')!=""?$this->input->get('ParentID'):-1; 
		$lbl=$this->input->get('lbl')!=""?$this->input->get('lbl'):0;
		$this->db->select('category_id,lavel,parent_id,category_name,catorder,last_updated,category.updated_by,date_added,page_title,seo_url,key_word,page_description');
		$this->db->where('parent_id',$parentID);
		$this->db->where('lavel',$lbl);
		$this->db->from('category');
		$this->db->order_by('category_name');
	
		return $this->db->get()->result_array();
		
	}

	public function category_save()
	{
		$parentID=$this->input->post('parent_id');
	    $category_id=$this->input->post('category_id');
		$lavel=$this->input->post('lavel');
		$category_name=trim($this->input->post('category_name'));
		$seo_url=trim($this->input->post('seo_url'));
		$catorder=trim($this->input->post('catorder'));
		
			
		$this->db->where('parent_id',$parentID);
		$this->db->where('seo_url',$seo_url);
		$this->db->where('category_name',$category_name);
		$query=$this->db->get('category');
		if($query->num_rows()>0)
		{
			return array("status" => "error", "msg"=>"Duplicate Menu Category Name In This Section");
		}
		else 
		{
			$obj = array(
				
				'lavel' => $lavel,
				'parent_id' => $parentID,
				'category_name' => $category_name,
				'catorder' => $catorder,
			    'seo_url' => trim($this->input->post('seo_url')),
			    'key_word' => trim($this->input->post('key_word')),
			    'page_description' => trim($this->input->post('page_description')),
				'updated_by' => $this->session->userdata('user_name'),
				'date_added' => date('Y-m-d')
			);
		
			if($this->db->insert('category',$obj))
			{
				$this->db->cache_delete_all();
				return array("status" => "success", "msg"=>"Menu Category Saved successfully");
				
			}
			else
			{
				return array("status" => "error", "msg"=>"Problem While Saving Menu Category...");
			}
		}
	}
	
	public function category_update()
	{	
		$parentID=$this->input->post('parent_id');
		$category_id=$this->input->post('category_id');
		$lavel=$this->input->post('lavel');
		$category_name=trim($this->input->post('category_name'));
		$seo_url=trim($this->input->post('seo_url'));
		$catorder=trim($this->input->post('catorder'));
		$category_id=$this->input->post('category_id');
		
	
		$this->db->where('parent_id',$parentID);
		$this->db->where('seo_url',$seo_url);
		$this->db->where('category_name',$category_name);
		$this->db->where('category_id !=',$category_id);
		$query=$this->db->get('category');
		if($query->num_rows()>0)
		{
			return array("status" => "error", "msg"=>"Duplicate Menu Category Name In This Section");
		}
		else 
		{
		    $obj = array(
		        
		        'lavel' => $lavel,
		        'parent_id' => $parentID,
		        'category_name' => $category_name,
		        'catorder' => $catorder,
		        'seo_url' => trim($this->input->post('seo_url')),
		        'key_word' => trim($this->input->post('key_word')),
		        'page_description' => trim($this->input->post('page_description')),
		        'updated_by' => $this->session->userdata('user_name')
		        
		    );
			$this->db->where('category_id',$category_id);
			if($this->db->update('category',$obj))
			{
				
				$this->db->cache_delete_all();
				return array("status" => "success", "msg"=>"Menu Category Updated successfully");
				
			}
			else
			{
				return array("status" => "error", "msg"=>"Problem While Updating Menu Category...");
			}
		}
	}
	public function category_delete($id)
	{	
	    
	    $this->db->where('parent_id',$id);
	    $query=$this->db->delete('category');
	    $this->db->where('category_id',$id);
	    $query=$this->db->delete('category');
	
	    return array("status" => "error", "msg"=>"Menu Category Deleted...");
	
	
	}
}//class