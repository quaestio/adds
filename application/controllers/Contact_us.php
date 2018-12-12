<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('captcha');
        @session_start(); 
        
        
        
    }
    public function index()
    {
        
            $data['top_menu'] = $this->common_model-> menues(); 
           if($this->input->post('enquiry_submit')=="")
                $this->load->view('contact_us',$data);
            
            else
            {
                $form_data=array(
                    'name'          => $this->input->post('name'),
                    'mobile'          => $this->input->post('mobile'),
                    'email'          => $this->input->post('email'),
                    'message'          => $this->input->post('message')
                );
                $data['form_data']=$form_data;
                if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
                {
                    
                
                    //your site secret key
                    $secret = GOOGLE_C_SECRET;
                    //get verify response data
                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                    $responseData = json_decode($verifyResponse);
                    if($responseData->success) 
                    {
                        $attachment="";
                        $this->load->model('enquiry');
                        $this->enquiry->submit_enquiry($form_data);
                                         
                        $data['msg']="<div class='alert alert-success alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Enquiry Submitted Successfully</div>";
                         
                        $msg['content']='<table width="100%">
								<tr>
									<td width="50%">Name:</td>
									<td width="50%">'.$form_data["name"].'</td>
								</tr>
								<tr>
									<td width="50%">Email:</td>
									<td width="50%">'.$form_data["email"].'</td>
								</tr>
								<tr>
									<td width="50%">Contact No:</td>
									<td width="50%">'.$form_data["mobile"].'</td>
								</tr>
								<tr>
									<td width="50%">Message:</td>
									<td width="50%">'.nl2br($form_data["message"]).'</td>
								</tr>
									    
							</table>';
                        $content=$this->load->view('email_templates/enquiry',$msg,true);
                        $email_stat=@$this->common_model->sendEmail(
                            $form_data["email"],
                            'Enquiry from '.$form_data["name"],
                            $content,
                            'no-reply@quaestio.in');
                          $data['email']="<div class='alert alert-success alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Enquiry Sent Successfully, We will get back yo you soon</div>";
                      
                        
                        $data['form_data']=array();
                        $data['menues']=$this->common_model->menues();
                        $this->load->view('contact_us',$data);
                }
                else
                {
                    
                    $data['msg']="<div class='alert alert-danger alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Invalid Captcha</div>";
                    $this->load->view('contact_us',$data);
                }
            }
            else{
                $data['msg']="<div class='alert alert-danger alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Invalid Captcha</div>";
                $this->load->view('contact_us',$data);
            }
            
        }
        }
   
}
