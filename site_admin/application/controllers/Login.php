<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	
	
	public function check_login(){
		 $this->load->model('login_model');
		$emp_id = $this->input->post('user_id');
		$pwd = $this->input->post('user_pass');
		$login_type = $this->input->post('login_type');
		
		$data=$this->login_model->check_login($emp_id,$pwd,$login_type);
		if($data)
			$return['success']=true;
		else
			$return['success']=false;
		echo json_encode($return);
	}

	public function logout(){
		 $this->load->model('login_model');
		$this->login_model->logout();
		redirect(base_url().'login');
	}
}
