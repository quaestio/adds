<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adds_model extends CI_Model {

	

    public function adds($city,$category)
    {
        $categpry_name=makeSafe($category);
      
        $array_index=0;
        $display=array();
		$q=makeSafe($this->input->get('i'));
		 $sql="select add_id,A.customer_id,A.category_id,A.add_description,A.add_title,A.city_id,A.pin_code,A.link,A.lati,A.longi,A.img_1,A.img_2,A.img_3,A.is_active,L.city_name ,C.category_name
            from add_manager A,cities L,category C
            where A.city_id=L.city_id
            and ( DATE_FORMAT(NOW(),'%Y-%m-%d')  between from_date and to_date )";
          
            if($city!="" or $city!="All") $sql .= " and REPLACE(L.city_name,' ','_') like '%".$city."%'";
            
            if($categpry_name!="") $sql .= " and REPLACE(C.category_name,' ','_') ='".$categpry_name."'";
           
           echo $sql .= "  order by impression desc Limit 0,20";
		    
            $query=$this->db->query($sql);
            if($query->num_rows()>0)
            {
                $display['record_found']=1;
                
                foreach($query->row_array() as $Item){
                    //===================================================================
                   echo' <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="strip grid">
                    <figure>
                    <a href="#0" class="wish_bt"></a>
                    <a href="detail-restaurant.html"><img src="img/location_1.jpg" class="img-fluid" alt=""><div class="read_more"><span>Read more</span></div></a>
                    <small>Restaurant</small>
                    </figure>
                    <div class="wrapper">
                    <h3><a href="detail-restaurant.html">Da Alfredo</a></h3>
                    <small>27 Old Gloucester St</small>
                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                    <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a>
                    </div>
                    <ul>
                    <li><span class="loc_open">Now Open</span></li>
                    <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                    </ul>
                    </div>
                    </div>';
                    //===================================================================
                      $display[$array_index]['tender_id']= $row['add_id'];
                      $display[$array_index]['add_title']= $row->add_title;
                }
                
            }
            else {
                
                $display['record_found']=0;
            }
            
		     return $this->db->query($sql)->result_array();
		 
	
	}

	

	
}//class