<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model 
{
	public function categories()
	{	
		$parentID=$this->input->get('ParentID')!=""?$this->input->get('ParentID'):-1; 
		$lbl=$this->input->get('lbl')!=""?$this->input->get('lbl'):0;
		$this->db->select('category_id,lavel,parent_id,category_name,catorder,category.article_id,last_updated,category.updated_by,date_added,article_title');
		$this->db->where('parent_id',$parentID);
		$this->db->where('lavel',$lbl);
		$this->db->from('category');
		$this->db->join('articles', 'articles.article_id = category.article_id', 'left');
		$this->db->order_by('category_name');
	
		return $this->db->get()->result_array();
		
	}

	public function category_save()
	{
		$parentID=$this->input->post('parent_id');
		$article_id=$this->input->post('article_id');
		$category_id=$this->input->post('category_id');
		$lavel=$this->input->post('lavel');
		$category_name=trim($this->input->post('category_name'));
		$catorder=trim($this->input->post('catorder'));
		
			
		$this->db->where('parent_id',$parentID);
		$this->db->where('lavel',$lavel);
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
				'article_id' => $article_id,
				'parent_id' => $parentID,
				'category_name' => $category_name,
				'catorder' => $catorder,
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
	{	$article_id=$this->input->post('article_id');
		$parentID=$this->input->post('parent_id');
		$category_id=$this->input->post('category_id');
		$lavel=$this->input->post('lavel');
		$category_name=trim($this->input->post('category_name'));
		$catorder=trim($this->input->post('catorder'));
		$category_id=$this->input->post('category_id');
		
	
		$this->db->where('parent_id',$parentID);
		$this->db->where('lavel',$lavel);
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
				'category_name' => $category_name,
				'article_id' => $article_id,
				'catorder' => $catorder,
				'updated_by' => $this->session->userdata('person_name'),
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