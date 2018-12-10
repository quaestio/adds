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
	    $data['categories'] = $this->common_model-> categories();
	    $data['adds'] = $this->adds_model-> adds($city,$category);
	    $this->load->view('search_adds',$data);
	}
}
