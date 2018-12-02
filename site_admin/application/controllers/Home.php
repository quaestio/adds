<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->cm->isloggedIn();
		$this->load->model("home_model");
	}
	public function index()
	{
		
		
	    $data=array();
		$this->load->view('home',$data);
	}
	public function clear_cache()
	{
		
		$data=$this->home_model->clear_cache();
		
		echo $data;
	}
	
	
}
