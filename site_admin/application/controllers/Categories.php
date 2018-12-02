<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       
     
      	$this->load->model('category_model'); 
     	$this->cm->isloggedIn();
    }
	
	public function index()
	{
		$data['categories']  = $this->category_model->categories();
		$data['articles']  = $this->cm->articles();
		$this->load->view('categories',$data);
	}
	
	public function category_op()
	{
		$msg='';
		$option=$this->input->post('data_op');
	
		if($option=="add")	$msg=$this->category_model->category_save();
		if($option=="edit")	$msg=$this->category_model->category_update();
		echo json_encode($msg);
		exit;
	}
	public function category_delete($id)
		{
	   
		    $msg=$this->category_model->category_delete($id);
		
		echo json_encode($msg);
		exit;
	}
}
