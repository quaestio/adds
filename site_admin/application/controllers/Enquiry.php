<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {
  	
	public function __construct() {
        parent:: __construct();
     	$this->cm->isloggedIn();
        $this->load->model("enquiry_model");
      
    }
    
    public function index(){
    	    $this->load->view('enquiry_list');
    }
    
	
    public function enquiry_list($action)
	{
		header('Content-type: application/json; charset=utf-8');
		echo json_encode( $this->enquiry_model->enquiry_list($action));
	}
	
	
}
