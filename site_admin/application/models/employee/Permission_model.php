<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission_model extends CI_Model {

		
	
	
public function save_permission($user_id,$module_name,$module_permission)
	{
		$obj=array(
		'user_id'=>$user_id,
		'module_name'=>$module_name,
		'permission'=>$module_permission
		
		);
			$this->db->insert('permission',$obj);
	
	}

public function delete_permission($user_id)
	{
		
			$this->db->where('user_id',$user_id);
			$this->db->delete('permission');
	
	}
	



   
	
	
}//class