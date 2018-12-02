<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->model("master_model");
		$this->cm->isloggedIn();
		
	}
    
   
	public function index(){}
	public function classifications(){
    	
    	$this->load->view('classifications');
    }
	public function classification_op($action)
	{
		header('Content-type: application/json; charset=utf-8');
		echo  $this->master_model->classification_op($action);
	}
	public function classification_details(){
    	$data['classifications']=$this->master_model->classifications();
    	$this->load->view('classification_details',$data);
    }
	public function classification_details_op($action)
	{
		header('Content-type: application/json; charset=utf-8');
		echo  $this->master_model->classification_details_op($action);
	}
}
