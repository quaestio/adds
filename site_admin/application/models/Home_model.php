<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	
	public function index()
	{
		
	}
	
	
public function clear_cache()
	{
		$this->db->cache_delete_all();
		return 'System cache cleared';
	
	
	}
	
}//class