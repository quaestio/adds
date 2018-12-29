<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adds_os_model extends CI_Model {

	

    
    
    public function details($add_id)
    {
        
         $adds="";
		 $q=makeSafe($this->input->get('i'));
		 $sql="select add_id,A.customer_id,A.category_id,A.add_description,A.add_title,A.city_id,A.pin_code,A.link,A.img_1,A.img_2,A.img_3,A.is_active,L.city_name ,C.category_name,A.address_line_1,A.contacts,A.email
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
                $display['email']= $row['email'];
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
	public function adds($s_str,$city,$category,$offset,$limit)
    {
        
         $adds="";
		 $q=makeSafe($this->input->get('i'));
		 $sql="select DISTINCT add_id,A.add_description,A.add_title,A.city_id,A.pin_code,A.link,A.img_1,A.img_2,A.img_3,A.is_active,L.city_name ,C.category_name,A.address_line_1,A.contacts,A.email
            from add_manager A,cities L,category C
            where A.is_active='Y' and A.city_id=L.city_id and C.category_id=A.category_id 
            and ( DATE_FORMAT(NOW(),'%Y-%m-%d')  between from_date and to_date )";
		 $sql .= $this->create_filters($city, $category,$s_str);
            
            $sql .= "  order by impression desc limit ".$offset.",".$limit;
		   
            $query=$this->db->query($sql);
            $addStr="";
           // echo $query->num_rows();
            foreach($query->result_array() as $row){
                  
                $addStr .='<div class="col-md-4">
				                <div class="strip grid">
					               <figure>
						             
						              <a href=""><img src="'.base_url().'site_img/adds/'. $row['img_1'].'" class="img-fluid" alt="'.$row['add_title'].'"><div class="read_more"><span>Read more</span></div></a>
						              <small>'.$row['category_name'].'</small>
					                </figure>
					           <div class="wrapper">
						      <h3>'.$row['add_title'].'</h3>
						  <p>'.$row['add_description'].'</p>
						<p style="height:auto;margin-bottom:2px"><i class="fa fa-home"></i> '.$row['address_line_1'].', '.$row['city_name'].', West Bengal, India-721507</p>
						<p style="height:auto;margin-bottom:2px"><i class="fa fa-phone"></i> '.$row['contacts'].'</p>
						<p style="height:auto;margin-bottom:2px"><i class="fa fa-envelope"></i> '.$row['email'].'</p>
						<p style="height:auto;margin-bottom:2px"><i class="fa fa-link"></i> <a href="'.$row['link'].'">'.$row['link'].'</a></p>
						    
						
					</div>
				    <ul>
						<li><span><a href="" data-add-title="'.$row['add_title'].'" data-add-id="'.$row['add_id'].'" class="btn btn-info btn-sm qView" >Quick View</a></span></li>
						
					</ul>
				</div>
			</div>';
                    
                   
                  
                
            }
            
           
            return $addStr;
		    
		 
	
	}
	public function display_add($add_id)
	{
	    
	        $sql="select DISTINCT add_id,A.add_description,A.add_title,A.city_id,A.pin_code,A.link,A.img_1,A.img_2,A.img_3,A.is_active,L.city_name ,C.category_name,A.address_line_1,A.contacts,A.email
            from add_manager A,cities L,category C
            where A.is_active='Y' and add_id=".$add_id." and A.city_id=L.city_id and C.category_id=A.category_id
            and ( DATE_FORMAT(NOW(),'%Y-%m-%d')  between from_date and to_date )";
	    
	    
	    $query=$this->db->query($sql);
	    if($query->num_rows()>0)
	    {
	        $row=$query->row_array();
	        $addStr ='<div class="col-md-12">
				                <div class="strip grid">
					               <figure>
	            
						              <a href=""><img src="'.base_url().'site_img/adds/'. $row['img_1'].'" class="img-fluid" alt="'.$row['add_title'].'"><div class="read_more"><span>Read more</span></div></a>
						              <small>'.$row['category_name'].'</small>
					                </figure>
					           <div class="wrapper">
						      <h3>'.$row['add_title'].'</h3>
						  <p>'.$row['add_description'].'</p>
						<p style="height:auto;margin-bottom:2px"><i class="fa fa-home"></i> '.$row['address_line_1'].', '.$row['city_name'].', West Bengal, India-721507</p>
						<p style="height:auto;margin-bottom:2px"><i class="fa fa-phone"></i> '.$row['contacts'].'</p>
						<p style="height:auto;margin-bottom:2px"><i class="fa fa-envelope"></i> '.$row['email'].'</p>
						<p style="height:auto;margin-bottom:2px"><i class="fa fa-link"></i> <a href="'.$row['link'].'">'.$row['link'].'</a></p>
						    
						    
					</div>
				   
				</div>
			</div>';
	        
	    }
	    else 
	    $addStr=" Invalid Add Please contact admin";
	  
	    
	    return $addStr;
	    
	    
	    
	}
	private function create_filters($city, $category,$search_txt=""){
	     $sql="";
	    $sql .= " and L.city_name= '".$city."'";
	    
	    if($category!="") $sql .= " and C.category_id ='".$category."'";
	    
	    
	    $search_array=explode(' ',$search_txt);
	    $find = array("in","the");
	    $replace = array("");
	    $search_array=str_replace($find,$replace,$search_array);
	    
	    $sqlStr="";
	    
	    foreach($search_array as $items)
	    {
	        if(trim($items)!="")
	        {
	        if($sqlStr=="")
	            $sqlStr .=" and ( A.add_title like '%".$items."%'";
	        else 
	            $sqlStr .=" or A.add_title like '%".$items."%'";
	        }
	    }
	    
	    if($sqlStr!="")
	        $sqlStr .=")";
	        return $sql.$sqlStr;
	    
	}
	public function add_hits($add_id){
	    $this->db->where('add_id',$add_id);
	    $sql="update add_manager set hits=hits+1 where add_id=".$add_id;
	    $this->db->query($sql);
	    
	}

	

	
}//class