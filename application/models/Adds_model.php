<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adds_model extends CI_Model {

	

    public function record_count($city,$category){
        $category_name=makeSafe($category);
        $adds="";
        $q=makeSafe($this->input->get('i'));
        $sql="select add_id
            from add_manager A,cities L,category C
            where A.city_id=L.city_id and C.category_id=A.category_id
            and ( DATE_FORMAT(NOW(),'%Y-%m-%d')  between from_date and to_date )";
        
        $sql .= $this->create_filters($city, $category);
        
       return $this->db->query($sql)->num_rows();
        
    }
        
    
    public function adds($city,$category,$offset,$limit)
    {
        
         $adds="";
		 $q=makeSafe($this->input->get('i'));
		 $sql="select add_id,A.customer_id,A.category_id,A.add_description,A.add_title,A.city_id,A.pin_code,A.link,A.img_1,A.img_2,A.img_3,A.is_active,L.city_name ,C.category_name
            from add_manager A,cities L,category C
            where A.city_id=L.city_id and C.category_id=A.category_id 
            and ( DATE_FORMAT(NOW(),'%Y-%m-%d')  between from_date and to_date )";
            $sql .= $this->create_filters($city, $category);
            $sql .= "  order by impression desc limit ".$offset.",".$limit;
		    
            $query=$this->db->query($sql);
            $array_index=0;
            $display=array();
            
                foreach($query->result_array() as $row){
                    
                    $display[$array_index]['add_id']= $row['add_id'];
                    $display[$array_index]['customer_id']= $row['customer_id'];
                    $display[$array_index]['add_title']= $row['add_title'];
                    $display[$array_index]['url']= print_seo_link($row['add_title']);
                    $display[$array_index]['add_description']= $row['add_description'];
                    $display[$array_index]['pin_code']= $row['pin_code'];
                    $display[$array_index]['link']= $row['link'];
                    $display[$array_index]['img_1']= $row['img_1'];
                    $display[$array_index]['img_2']= $row['img_2'];
                    $display[$array_index]['img_3']= $row['img_3'];
                    $display[$array_index]['city_name']= $row['city_name'];
                    $display[$array_index]['category_name']= $row['category_name'];
                   
                    
                      
                    $array_index+1;
                
            }
            
           
		     return $display;
		    
		 
	
	}
	private function create_filters($city, $category,$search_txt=""){
	     $sql="";
	    if($city=="" or $city!="All") $sql .= " and REPLACE(L.city_name,' ','_') like '%".$city."%'";
	    
	    if($category=="" or $category!="All") $sql .= " and REPLACE(C.category_name,' ','_') ='".$category."'";
	    return $sql;
	    
	}

	

	
}//class