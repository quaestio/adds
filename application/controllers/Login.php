<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
 function __construct()
    {
        parent::__construct();
 
        $this->load->model('login_model');
        
       
    }
    public function index(){
        $data['top_menu'] = $this->common_model-> menues(); 
        $data['adds'] = $this->common_model-> adds('login_page');
       
        if($this->input->post('btnSubmit')=='Sign in')
        {
            if($this->login_model->check_login())
            {
                if($this->session->userdata('email_verified')=="N" || $this->session->userdata('mobile_verified')=="N" )
                    redirect(base_url().'register/success/'.md5($this->session->userdata('customer_id')));
                else
                    redirect(base_url().'profile');
            }
             else
                $data['msg']='<div role="alert" class="alert alert-warning alert-dismissible"> <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span></button> <strong>ERROR!</strong> Invalid email/password. </div>';
        }
        $this->load->view('login',$data);
    }
   
   
	public function logout()
		{
		    $data['top_menu'] = $this->common_model-> menues(); 
			$this->session->sess_destroy();
			$this->load->view('login',$data);
		}
	
	
}//class
