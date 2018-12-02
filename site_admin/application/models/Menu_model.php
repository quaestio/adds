<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model 
{
	public function menus()
	{	
		$parentID=$this->input->get('ParentID')!=""?$this->input->get('ParentID'):-1; 
		$lbl=$this->input->get('lbl')!=""?$this->input->get('lbl'):0;
		$this->db->select('menu_id,lavel,parent_id,menu_name,catorder,site_menus.article_id,last_updated,site_menus.updated_by,date_added,article_title');
		$this->db->where('parent_id',$parentID);
		$this->db->where('lavel',$lbl);
		$this->db->from('site_menus');
		$this->db->join('articles', 'articles.article_id = site_menus.article_id', 'left');
		$this->db->order_by('menu_name');
	
		return $this->db->get()->result_array();
		
	}

	public function menu_save()
	{
		$parentID=$this->input->post('parent_id');
		$article_id=$this->input->post('article_id');
		$menu_id=$this->input->post('menu_id');
		$lavel=$this->input->post('lavel');
		$menu_name=trim($this->input->post('menu_name'));
		$catorder=trim($this->input->post('catorder'));
		
			
		$this->db->where('parent_id',$parentID);
		$this->db->where('lavel',$lavel);
		$this->db->where('menu_name',$menu_name);
		$query=$this->db->get('site_menus');
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
				'menu_name' => $menu_name,
				'catorder' => $catorder,
				'updated_by' => $this->session->userdata('user_name'),
				'date_added' => date('Y-m-d')
			);
		
			if($this->db->insert('site_menus',$obj))
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
	
	public function menu_update()
	{	
	    $article_id=$this->input->post('article_id');
		$parentID=$this->input->post('parent_id');
		$menu_id=$this->input->post('menu_id');
		$lavel=$this->input->post('lavel');
		$menu_name=trim($this->input->post('menu_name'));
		$catorder=trim($this->input->post('catorder'));
		$menu_id=$this->input->post('menu_id');
		
	
		$this->db->where('parent_id',$parentID);
		$this->db->where('lavel',$lavel);
		$this->db->where('menu_name',$menu_name);
		$this->db->where('menu_id !=',$menu_id);
		$query=$this->db->get('site_menus');
		if($query->num_rows()>0)
		{
			return array("status" => "error", "msg"=>"Duplicate Menu Category Name In This Section");
		}
		else 
		{
			$obj = array(
				'menu_name' => $menu_name,
				'article_id' => $article_id,
				'catorder' => $catorder,
				'updated_by' => $this->session->userdata('person_name'),
			);
			$this->db->where('menu_id',$menu_id);
			if($this->db->update('site_menus',$obj))
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
	public function menu_delete($id)
	{	
	    
	    $this->db->where('parent_id',$id);
	    $query=$this->db->delete('site_menus');
	    $this->db->where('menu_id',$id);
	    $query=$this->db->delete('site_menus');
	
	    return array("status" => "error", "msg"=>"Menu  Deleted...");
	
	
	}
}//class