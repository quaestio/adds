<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adds extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        
        $this->load->model("adds_os_model");
    }
	
	public function index()
	{
	   $this->search_adds('all','all');
	}
	
	
	public function load_adds($offset,$limit)
	{
	    $city='Jhargram';
	    $category=makeSafe($this->input->post('categoty'));
	    $s_str=makeSafe($this->input->post('s_str'));
	    header('Access-Control-Allow-Origin: *');
	    echo $this->adds_os_model->adds($s_str,$city,$category,$offset,$limit);	    
	}
	public function display_add($add_id)
	{
	   
	    $add_id=makeSafe($add_id);
	    header('Access-Control-Allow-Origin: *');
	    echo $this->adds_os_model->display_add($add_id);	    
	}
	public function categories()
	{
		header('Access-Control-Allow-Origin: *');
	    echo json_encode($this->common_model-> categories());
	}
	public function add_hits($add_id)
	{
	    $this->adds_model->add_hits($add_id);	    
	}
}
