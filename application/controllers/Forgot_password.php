<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_password extends CI_Controller {
 function __construct()
    {
        parent::__construct();
 
        $this->load->model('password_model');
        
       
    }
    public function index(){
        $data['top_menu'] = $this->common_model-> menues(); 
        $data['adds'] = $this->common_model-> adds('login_page');
       $this->load->view('forgot_password',$data);
    }
   
   
	public function reset()
		{
		    echo json_encode($this->password_model->reset_password());
		    
		}
	
		
}//class
