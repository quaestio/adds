<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp extends CI_Controller {
  	
	public function __construct() {
        parent:: __construct();
     	$this->cm->isloggedIn();
        $this->load->model("employee/emp_model");
      
    }
    public function index(){
       $this->load->view('employee/emp');
    }
    
    public function change_password(){
       $this->load->view('change_password');
    }
	public function changePassword(){
		
		echo $this->user_model->change();
	}
    
	
	public function emp_op($action)
	{
		header('Content-type: application/json; charset=utf-8');
		echo  json_encode($this->emp_model->user_op($action));
	}
	
	
}
?>
