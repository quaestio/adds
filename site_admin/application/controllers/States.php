<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class States extends CI_Controller {
  	
	public function __construct() {
        parent:: __construct();
     	$this->cm->isloggedIn();
        $this->load->model("state_model");
      
    }
    
    public function index(){
    	$data['country']=$this->state_model->countries();
    $this->load->view('state_list',$data);
    }
    
	
	public function state($action)
	{
		header('Content-type: application/json; charset=utf-8');
		echo json_encode( $this->state_model->states($action));
	}
	
	
}
