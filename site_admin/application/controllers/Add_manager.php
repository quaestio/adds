<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_manager extends CI_Controller {
    
    public function __construct() {
        parent:: __construct();
        $this->cm->isloggedIn();
        $this->load->model("add_model");
        $this->load->library("pagination");
        
        
    }
    
   
    public function add_list(){
        
        $config = array();
        
        $config["base_url"] = base_url() . "add_manager/add_list";
        $config['total_rows'] = $this->add_model->record_count();
        $config['per_page'] =5;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["adds"] = $this->add_model->add_list( $page,$config["per_page"]);
        $data["links"] = $this->pagination->create_links();
        $this->load->view('add_manager',$data);
    }
    
    
    
    public function add_op($op="",$add_id="")	{
       	
        $data['operation']=$op;
        $data['tc']=$this->cm->tender_categories();
        $data['vendor']=$this->cm->customers();
		//$data['cty']=$this->cm->cty();
        
        if($this->input->post('operation')=="save" or $this->input->post('operation')=="update")
        {
            
            $form_data=array(
                'customer_id' =>  makeSafe($this->input->post('customer_id')),
                'category_id' =>  makeSafe($this->input->post('category_id')),
                'add_description' => makeSafe($this->input->post('add_description')),
				'add_title' => makeSafe($this->input->post('add_title')),
				'city_id' => makeSafe($this->input->post('city_id')),
				'pin_code' => makeSafe($this->input->post('pin_code')),
                'link' => $this->input->post('link'),
				'lati' => makeSafe($this->input->post('lati')),
				'longi' => makeSafe($this->input->post('longi')),
                'from_date' => makeSafe($this->input->post('from_date')),
                'to_date' => makeSafe($this->input->post('to_date')),
                'login_page' => makeSafe($this->input->post('login_page'))==""?'N':'Y',
                'home_page' => makeSafe($this->input->post('home_page'))==""?'N':'Y',
                'register_page' => makeSafe($this->input->post('register_page'))==""?'N':'Y',
                'contactus_page' => makeSafe($this->input->post('contactus_page'))==""?'N':'Y',
                'tenders' => makeSafe($this->input->post('tenders'))==""?'N':'Y',
                'tender_details' => makeSafe($this->input->post('tender_details'))==""?'N':'Y',
                'impression' => makeSafe($this->input->post('impression'))==""?'0':$this->input->post('impression'),
                'is_active' => 'N',
                'updated_by' => makeSafe($this->session->userdata('user_name')),
            );
           
            
            
        }
        if($this->input->post('operation')=="save")
        {
            $data['msg']=$this->add_model->save_add($form_data);
            $form_data=array();
        }
        if($this->input->post('operation')=="update")
            $data['msg']=$this->add_model->update_add($form_data,$add_id);
            
            
            $data['form_data']=@$obj;
            if($op=="edit")
            {
                
                $data['form_data']=$this->add_model->get_add_by_id($add_id);
					print_r( $data['form_data']);
                
            }
            
            
            $this->load->view('add_create_edit',$data);
    }
    
    function preview($PLACE_ID){
        $data['tp']=$this->add_model->preview($PLACE_ID);
        $this->load->view('preview/tender_preview',$data);
        
    }
    
    public function delete_add(){	echo $this->add_model->delete_add();	}
    
    public function delete_doc(){echo $this->add_model->delete_doc();	}
    public function pub_unpun(){echo $this->add_model->pub_unpub();}
  
  
    public function customer_hint(){	echo json_encode($this->add_model->customer_hint());}
    public function upload_image(){    echo json_encode($this->add_model->upload_image());    }
}
