<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adds extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        
        $this->load->model("adds_model");
    }
	
	public function index()
	{
	   $this->search_adds('all','all');
	}
	
	public function search_adds($city="",$category="")
	{
	    $data['category'] = $category;
	    $data['city'] = $city;
	    $data['categories'] = $this->common_model-> categories();
	    $data['rc'] = $this->adds_model-> record_count($city,$category);
	    $this->load->view('search_adds',$data);
	}
	public function details($add_id_str)
	{ 
	    $data['top_menu'] = $this->common_model-> menues();
	    $data['categories'] = $this->common_model-> categories();
	    $list=explode("-",$add_id_str);
	    if(is_numeric($list[0])){
	        $data['add_details'] = $this->adds_model-> details($list[0]);
	       $this->load->view('add_details',$data);
	    }
	    else 
	        $this->load->view('404',$data);
	}
	public function load_adds($city="",$category="",$offset,$limit)
	{
	    echo json_encode($this->adds_model->adds($city,$category,$offset,$limit));	    
	}
}
