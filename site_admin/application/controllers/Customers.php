<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {
  	
	public function __construct() {
        parent:: __construct();
     	$this->cm->isloggedIn();
        $this->load->model("customer_model");
      
     
       
    }
    
    public function index(){$this->load->view('customer_list'); }
    public function lst(){ echo json_encode($this->customer_model->lst());}
    public function approve(){ echo $this->customer_model->approve();}
    public function profile($pid){ 
        
        $data=$this->customer_model->profile($pid);
        $this->load->view('reports/customer_profile',$data);
    }
     
}
