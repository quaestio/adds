<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
public function __construct() {
        parent:: __construct();
     
     	$this->load->model("article_model");
      }
	
	
	public function read($seo)
	{	
	    $data['top_menu'] = $this->common_model-> menues(); 
	   
		$article_details=$this->article_model->article($seo);
		if(sizeof($article_details)>0)
		{
			$data['article_title']=$article_details['article_title'];
			$data['page_keywords']=$article_details['page_keywords'];
			$data['page_description']=$article_details['page_description'];
			$data['article']=$article_details['article'];
			$this->load->view('article',$data);
		}
		else 
		$this->load->view('error',$data);
		
	}
	

}
