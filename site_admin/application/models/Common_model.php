<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {


	public function isloggedIn()
	{
		if($this->session->userdata('admin_user_id')!="")
		{}
		else
		{
			redirect(base_url().'login');
				
		}
			
	}


	public function get_code($seed_length=8) {
		$seed = "ABCDEFGHJKLMNPQRSTUVWXYZ234567892345678923456789";
		$str = '';
		srand((double)microtime()*1000000);
		for ($i=0;$i<$seed_length;$i++) {
			$str .= substr ($seed, rand() % 48, 1);
		}
		return $str;
	}

	function tender_categories(){
	    $sql="select category_id,category_name from category	 where lavel=1 order  by category_name ";
	    return $query = $this->db->query($sql)->result_array();
	}
	function customers(){
	    $sql="select customer_id,reg_type,first_name from customers where identity_verified='Y' and(reg_type='C' or reg_type='S') order  by first_name ";
	    return $query = $this->db->query($sql)->result_array();
	}
	public function country_list()
	{
		$sql="select country_id ,countries_name from countries order by countries_name";
		return $this->db->query($sql)->result_array();
	
	}
	
	function states($country_id){
		$sql="select state_id,state_name from states where country_id=".$country_id." order by state_name";
		return $query = $this->db->query($sql)->result_array();
	}
	function cities($state_id){
		$sql="select city_id,city_name from cities where state_id=".$state_id." order by city_name";
		return $query = $this->db->query($sql)->result_array();
	}
	
	public function get_country_name_from_id($country_id){
	    $sqlC="SELECT countries_name  FROM countries where country_id=".$country_id."";
	    $queryC= $this->db->query($sqlC);
	    if($queryC->num_rows()>0)
	    {
	        $row=$queryC->row_array();
	        return $row['countries_name'];
	        
	    }
	    else
	        
	        return "UN-KNOWN";
	}
	public function get_state_name_from_id($state_id){
	    $sqlC="SELECT state_name  FROM states where state_id=".$state_id."";
	    $queryC= $this->db->query($sqlC);
	    if($queryC->num_rows()>0)
	    {
	        $row=$queryC->row_array();
	        return $row['state_name'];
	        
	    }
	    else
	        return "UN-KNOWN";
	}
	public function get_city_name_from_id($city_id){
	    $sqlC="SELECT city_name  FROM cities where city_id=".$city_id."";
	    $queryC= $this->db->query($sqlC);
	    if($queryC->num_rows()>0)
	    {
	        $row=$queryC->row_array();
	        return $row['city_name'];
	        
	    }
	    else
	        
	        return "UN-KNOWN";
	}

	public function articles()	{
		$sql="select * from articles order by date_created desc";
		return $this->db->query($sql)->result_array();
	}


	public function pub_unpub()	{
		if($this->session->userdata('user_type')=="A")
		{
			$table=($this->input->post('tb'));
			$id_fiels=($this->input->post('fld'));
			$id_fiels_value=$this->input->post('data_id');

			$obj=array('is_active'=>makeSafe($this->input->post('data_value'))=="Y"?'N':'Y' );
			$this->db->where($id_fiels, $id_fiels_value);
			$this->db->update($table,$obj);
				
			return 'Data Updated Successfully';
		}
		else
		return 'Only Administrator can approve';
	}
	public function check_permission($module){
	    return true;
	}
}//class