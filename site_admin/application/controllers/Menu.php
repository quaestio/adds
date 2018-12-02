<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       
     
      	$this->load->model('menu_model'); 
     	$this->cm->isloggedIn();
    }
	
	public function index()
	{
		$data['menus']  = $this->menu_model->menus();
		$data['articles']  = $this->cm->articles();
		$this->load->view('menus',$data);
	}
	
	public function menu_op()
	{
		$msg='';
		$option=$this->input->post('data_op');
	
		if($option=="add")	$msg=$this->menu_model->menu_save();
		if($option=="edit")	$msg=$this->menu_model->menu_update();
		echo json_encode($msg);
		exit;
	}
	public function menu_delete($id)
		{
	   
		    $msg=$this->menu_model->menu_delete($id);
		
		echo json_encode($msg);
		exit;
	}
}
