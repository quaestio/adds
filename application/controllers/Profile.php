<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
 function __construct()
    {
        parent::__construct();
 
        $this->load->model('user_model');
        if(!$this->common_model->isLoggedIn())
            redirect(base_url().'login');
       
    }
    public function index(){
        $data['top_menu'] = $this->common_model-> menues(); 
       
        $this->load->view('profile',$data);
    }
   
   
    public function fav_tenders($offset,$limit)
		{
		    echo json_encode($this->user_model-> fav_tenders($offset,$limit));
		}
	
	
}//class
