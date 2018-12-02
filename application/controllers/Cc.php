<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//this is common contriller
class Cc extends CI_Controller {

    function __construct()    {        parent::__construct();  }
    public function get_states($country_id){echo json_encode($this->common_model->states($country_id));	}
    public function get_cities($state_id){	echo json_encode($this->common_model->cities($state_id));}
    public function location_info(){	
        $data=$this->input->post('dt');
        $session_data=array();
        for ($i = 0; $i < sizeof($data['results'][0]['address_components']); $i++)
        {
           
            //echo $data['results'][0]['address_components'][$i]['long_name']."|".$data['results'][0]['address_components'][$i]['short_name']."|".$data['results'][0]['address_components'][$i]['types'][0]."<br />";
            if($data['results'][0]['address_components'][$i]['types'][0]=='locality')
            {
                $locality=$data['results'][0]['address_components'][$i]['long_name'];
                
                
            }
            if($data['results'][0]['address_components'][$i]['types'][0]=='administrative_area_level_2')
            {
                $district=$data['results'][0]['address_components'][$i]['long_name'];
                
                
            }
            if($data['results'][0]['address_components'][$i]['types'][0]=='administrative_area_level_1')
            {
                $state=$data['results'][0]['address_components'][$i]['long_name'];
                
                
            }
            if($data['results'][0]['address_components'][$i]['types'][0]=='country')
            {
                $country=$data['results'][0]['address_components'][$i]['long_name'];
                
                
            }
            if($data['results'][0]['address_components'][$i]['types'][0]=='postal_code')
            {
                $zip=$data['results'][0]['address_components'][$i]['long_name'];
                
                
            }
            
            
        }
        $session_data=array(
            'g_locality'=>@$locality,
            'g_district'=>@$district,
            'g_state'=>@$state,
            'g_country'=>@$country,
            'g_zip'=>@$zip,
            
        );
        print_r($session_data);
        $this->session->set_userdata($session_data);
             
    
    }
}
