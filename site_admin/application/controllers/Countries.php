<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countries extends CI_Controller {
  	
	public function __construct() {
        parent:: __construct();
     	$this->cm->isloggedIn();
        $this->load->model("country_model");
      
    }
    
    public function index(){
    $this->load->view('country_list');
    }
    
	
	public function country($action)
	{
		header('Content-type: application/json; charset=utf-8');
		echo json_encode( $this->country_model->country($action));
	}
	
	
}
