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
   
    
    public function details($add_id)
    {
        
         $adds="";
		 $q=makeSafe($this->input->get('i'));
		 $sql="select add_id,A.customer_id,A.category_id,A.add_description,A.add_title,A.city_id,A.pin_code,A.link,A.img_1,A.img_2,A.img_3,A.is_active,L.city_name ,C.category_name,A.address_line_1,A.contacts
            from add_manager A,cities L,category C
            where A.city_id=L.city_id and C.category_id=A.category_id and add_id=".makeSafe($add_id)."
            and ( DATE_FORMAT(NOW(),'%Y-%m-%d')  between from_date and to_date )";
            $query=$this->db->query($sql);
                  $display=array();
            
             if($query->num_rows()>0)
             {
                 
                 $row=$query->row_array();
                    
                $display['stat']=true;
                $display['add_id']= $row['add_id'];
                $display['customer_id']= $row['customer_id'];
                $display['add_title']= $row['add_title'];
                $display['add_description']= $row['add_description'];
                $display['address_line_1']= $row['address_line_1'];
                $display['pin_code']= $row['pin_code'];
                $display['contacts']= $row['contacts'];
                $display['link']= $row['link'];
                $display['img_1']= $row['img_1'];
                $display['img_2']= $row['img_2'];
                $display['img_3']= $row['img_3'];
                $display['city_name']= $row['city_name'];
                $display['category_name']= $row['category_name'];
                   
                $sql="select  countries_name,state_name from countries,states,cities where countries.country_id=states.country_id and states.state_id=cities.state_id and city_id=".$row['city_id']." limit 0,1";
                $cs=$this->db->query($sql);
                if( $cs->num_rows()>0)
                {
                    $rowcs=$cs->row_array();
                    $display['state_name']=$rowcs['state_name'];
                    $display['country_name']=$rowcs['countries_name'];
                    
                    
                }
                else
                {
                    $display['state_name']="--";
                    $display['country_name']="--";
                }
                
            }
            else 
                $display['false']=true;
           
		     return $display;
		    
		 
	
	}
    public function adds($city,$category,$offset,$limit)
    {
        
         $adds="";
		 $q=makeSafe($this->input->get('i'));
		 $sql="select add_id,A.customer_id,A.category_id,A.add_description,A.add_title,A.city_id,A.pin_code,A.link,A.img_1,A.img_2,A.img_3,A.is_active,L.city_name ,C.category_name,A.address_line_1,A.contacts,A.email
            from add_manager A,cities L,category C
            where A.is_active='Y' and A.city_id=L.city_id and C.category_id=A.category_id 
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
                    $display[$array_index]['address_line_1']= $row['address_line_1'];
                    $display[$array_index]['pin_code']= $row['pin_code'];
                    $display[$array_index]['contacts']= $row['contacts'];
                    $display[$array_index]['email']= $row['email'];
                    $display[$array_index]['link']= $row['link'];
                    $display[$array_index]['img_1']= $row['img_1'];
                    $display[$array_index]['img_2']= $row['img_2'];
                    $display[$array_index]['img_3']= $row['img_3'];
                    $display[$array_index]['city_name']= $row['city_name'];
                    $display[$array_index]['category_name']= $row['category_name'];
                   
                    $sql="select  countries_name,state_name from countries,states,cities where countries.country_id=states.country_id and states.state_id=cities.state_id and city_id=".$row['city_id']." limit 0,1";
                    $cs=$this->db->query($sql);
                    if( $cs->num_rows()>0)
                    {
                        $rowcs=$cs->row_array();
                        $display[$array_index]['state_name']=$rowcs['state_name'];
                        $display[$array_index]['country_name']=$rowcs['countries_name'];
                        
                        
                    }
                    else 
                    {
                        $display[$array_index]['state_name']="--";
                        $display[$array_index]['country_name']="--";
                    }
                      
                    $array_index=$array_index+1;
                
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