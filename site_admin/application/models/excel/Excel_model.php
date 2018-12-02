<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_model extends CI_Model {

	
	public function index()
	{
		
	}
	

public function gps($block_id){
	$pArray=array();
	$sqlPerSets="select gp_name from gps where block_id=".$block_id;
	$query=$this->db->query($sqlPerSets);
			foreach ($query->result() as $row)
				{
				array_push($pArray,$row->gp_name);
				}
				return $pArray;
					
}
public function gps_array_key($block_id){
	$pArray=array();
	$sqlPerSets="select gp_name,gp_id from gps where block_id=".$block_id;
	$query=$this->db->query($sqlPerSets);
			foreach ($query->result() as $row)
				
					
					 $settings[$row->gp_name] = $row->gp_id;
				
				return $settings;
					
}
public function edu_types(){
	$pArray=array();
	$sqlPerSets="select type_name from educational_type";
	$query=$this->db->query($sqlPerSets);
			foreach ($query->result() as $row)
				{
				array_push($pArray,$row->type_name);
				}
				return $pArray;
					
}
public function edu_type_array_key(){
	$pArray=array();
	$sqlPerSets="select type_name,educational_id from educational_type ";
	$query=$this->db->query($sqlPerSets);
	foreach ($query->result() as $row)
		$settings[$row->type_name] = $row->educational_id;
	return $settings;
					
}
public function health_types(){
	$pArray=array();
	$sqlPerSets="select type_name from health_types";
	$query=$this->db->query($sqlPerSets);
	foreach ($query->result() as $row)
		array_push($pArray,$row->type_name);
		
		return $pArray;
			
}
public function health_type_array_key(){
	$pArray=array();
	$sqlPerSets="select type_name,health_id from health_types ";
	$query=$this->db->query($sqlPerSets);
	foreach ($query->result() as $row)
		$settings[$row->type_name] = $row->health_id;
	return $settings;
					
}
public function housing_types(){
	$pArray=array();
	$sqlPerSets="select scheme_name from housing_scheme_master";
	$query=$this->db->query($sqlPerSets);
	foreach ($query->result() as $row)
		array_push($pArray,$row->scheme_name);
		
		return $pArray;
			
}
public function housing_type_array_key(){
	$pArray=array();
	$sqlPerSets="select scheme_name,housing_scheme_id from housing_scheme_master ";
	$query=$this->db->query($sqlPerSets);
	foreach ($query->result() as $row)
		$settings[$row->scheme_name] = $row->housing_scheme_id;
	return $settings;
					
}
public function shg($obj,$table_name){
	$this->db->insert($table_name,$obj);
}
public function save($obj,$table_name){
	$this->db->insert($table_name,$obj);
}
	
   
   
	
	
}//class