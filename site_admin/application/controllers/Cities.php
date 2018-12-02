<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities extends CI_Controller {
  	
	public function __construct() {
        parent:: __construct();
     	$this->cm->isloggedIn();
        $this->load->model("city_model");
      
    }
    
    public function index(){
    	$data['country']=$this->city_model->countries();
    	$data['states']=$this->city_model->states();
    $this->load->view('city_list',$data);
    }
public function load_states($country_id){
		
			echo json_encode($this->city_model->load_states($country_id));
	}
	
	public function city($action)
	{
		header('Content-type: application/json; charset=utf-8');
		echo json_encode( $this->city_model->city($action));
	}
	
	
}
