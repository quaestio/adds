<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
  	
	public function __construct() {
        parent:: __construct();
     	$this->cm->isloggedIn();
        $this->load->model("article_model");
       $this->load->library("pagination");
     
       
    }
    
    public function index(){
   		
   
    	$this->load->view('article_list');
    }
      public function articles(){
    	header('Content-type: application/json; charset=utf-8');
		echo json_encode( $this->article_model->articles());
      }
	
	public function article_op($op="",$article_id="")	{
		
	
       $data['operation']=$op;
     
       if($this->input->post('operation')=="save" or $this->input->post('operation')=="update")
       {
       	$form_data=array(
       	'article_title' =>  makeSafe($this->input->post('article_title')),
      	'article' => $this->input->post('article'),
       	'page_title' => makeSafe($this->input->post('page_title')),
      	'page_keywords' => makeSafe($this->input->post('page_keywords')),
      	'page_description' => makeSafe($this->input->post('page_description')),
      	'seo_url' => makeSafe($this->input->post('seo_url'))==""? makeSafe(print_seo_link($this->input->post('article_title'))):makeSafe(print_seo_link($this->input->post('seo_url'))) ,
      	'updated_by' => makeSafe($this->session->userdata('admin_user_id'))
       	);
       
       	
       }
        if($this->input->post('operation')=="save")
              	$data['msg']=$this->article_model->save_article($form_data);
        if($this->input->post('operation')=="update")
              	$data['msg']=$this->article_model->update_article($form_data,$article_id);
        	
        	$fckeditorConfig = array(
			'instanceName' => 'article',
			'BasePath' => base_url().'plugins/fckeditor/',
			'ToolbarSet' => 'Default',
			'Width' => '100%',
			'Height' => '400',
			'Value' => @$_POST['article']
			);
			
			$data['form_data']=@$obj;
			if($op=="edit")
			{
				$data['form_data']=$this->article_model->get_article_by_id($article_id);
				$fckeditorConfig['Value']=$data['form_data']['article'];
			}
		echo $data['form_data']['seo_url'];
				
       $this->load->library('fckeditor',$fckeditorConfig);
		$this->load->view('article',$data);
	}
	function preview($article_id){
	$data['form_data']=$this->article_model->get_article_by_id($article_id);
	$this->load->view('preview_article',$data);
	
	}
	public function delete_article(){
	
	echo $this->article_model->delete_article(makeSafe($this->input->post('data_id')));
	}

}
