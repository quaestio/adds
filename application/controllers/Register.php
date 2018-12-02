<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
       
        $this->load->model('registration_model');
        $this->load->model('login_model');
        
        
    }
    
    public function index()
    {
        
            $data['top_menu'] = $this->common_model-> menues(); 
            $data['adds'] = $this->common_model-> adds('register_page');
            $data['country_list'] = $this->common_model-> country_list(); 
           
             if($this->input->post('reg')=="")
            {
                $this->load->view('register',$data);
            }
            else
            {			
				$emailOtp=rand(10000,99999);
				$MobileOtp=rand(10000,99999);
				$form_data=array(
						'reg_type'=> makeSafe($this->input->post('regtype')),
						'org_name' =>makeSafe($this->input->post('org_name')),
						'address_line_1'  => makeSafe($this->input->post('address_line_1')),
						'address_line_2'  => makeSafe($this->input->post('address_line_2')),
						'country'  => makeSafe($this->input->post('country')),
						'state'  => makeSafe($this->input->post('state')),
						'city'  => makeSafe($this->input->post('city')),
						'zip'  => makeSafe($this->input->post('zip')),
						'office_email'  => makeSafe($this->input->post('office_email')),
						'land_line'  => makeSafe($this->input->post('land_line')),
						'primary_reg_name'  => makeSafe($this->input->post('primary_reg_name')),
						'designation'  => makeSafe($this->input->post('designation')),
						'mobile_primary'  => makeSafe($this->input->post('mobile_primary')),
						'alt_mobile_primary'  => makeSafe($this->input->post('alt_mobile_primary')),
						'email_primary'  => makeSafe($this->input->post('email_primary')),
						'pass'  => makeSafe($this->input->post('pass')),
						'date_register'  => date('Y-m-d'),
						'mobile_otp'  => $MobileOtp,
						'email_otp'  => $emailOtp,
						
					);
					$data['form_data']=$form_data;
				 if(!$this->registration_model->check_duplicate(makeSafe($this->input->post('org_name')),makeSafe($this->input->post('email_primary'))))
				 {
				
					
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
							
							$id=$this->registration_model->register($form_data);
											 
							$data['msg']="<div class='alert alert-success alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Enquiry Submitted Successfully</div>";
							 
							$msgC='<table width="100%">
									<tr><td colspan="2">
									Dear '.$form_data["primary_reg_name"].',<br />
									Thank you for your interest on Tender Cliq.<br />
									Please verify your eMail.<br />
									<b>Your Email OTP is:'.$form_data["email_otp"].'</b><br />
									    
									<b>You can also verify your email by clicking <a href="'.base_url().'register/success/'.md5($id).'">here<a></b>
									    
									    
									</td></tr>
									<tr><td colspan="2"><strong>Registration Details</strong></td></tr>
									    
									<tr>
										<td width="50%">Organization Name:</td>
										<td width="50%">'.$form_data["org_name"].'</td>
									</tr>
									<tr>
										<td width="50%">Registration Type:</td>
										<td width="50%">'.$form_data["reg_type"].'</td>
									</tr>
									<tr>
										<td width="50%">Address Line 1:</td>
										<td width="50%">'.$form_data["address_line_1"].'</td>
									</tr>
									<tr>
										<td width="50%">Address Line 2:</td>
										<td width="50%">'.$form_data["address_line_2"].'</td>
									</tr>
									<tr>
										<td width="50%">Primary Registration name :</td>
										<td width="50%">'.$form_data["primary_reg_name"].'</td>
									</tr>
									<tr>
										<td width="50%">Designation:</td>
										<td width="50%">'.$form_data["designation"].'</td>
									</tr>
									<tr>
										<td width="50%">Mpbile:</td>
										<td width="50%">'.$form_data["mobile_primary"].'</td>
									</tr>
									<tr>
										<td width="50%">Email[Login Id]:</td>
										<td width="50%">'.$form_data["email_primary"].'</td>
									</tr>
										    
										    
								</table>';
								$msg['content']=$msgC;
								$content=$this->load->view('email_templates/reg_email',$msg,TRUE);
							
							$email_stat=@$this->common_model->sendEmail($form_data['email_primary'],
							    "Registration Details in Quaestio".$form_data["name"],
							    $content,
							    'no-reply@quaestio.in',
							    'Quaestio');
							
							//send SMS
							
							if($email_stat)
								$data['email']="<div class='alert alert-success alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Email Sent Successfully</div>";
							else
								$data['email']="<div class='alert alert-danger alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Email not Sent Successfully|</div>";
								
							//sending_sms	
								$msg="Dear ".makeSafe($this->input->post('primary_reg_name')).', Quaestio.in mobile verification OTP is '.$MobileOtp;
								$this->common_model->sendSMS(makeSafe($this->input->post('mobile_primary')),$msg);
								
								
								
							@redirect(base_url().'register/success/'.md5($id),'refresh');
						}
						else 
						{
							 $data['msg']="<div class='alert alert-danger alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Please Verify Captcha </div>";
							$this->load->view('register',$data);
						}
                }
                else
                {
                    
                    $data['msg']="<div class='alert alert-danger alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Invalid Captcha</div>";
                    $this->load->view('register',$data);
                }
            }
            else{
                $data['msg']="<div class='alert alert-danger alert-dismissible ' roll='alert'><button aria-label='Close' data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>X</span></button>Duplicate Email/ Organization Name</div>";
                $this->load->view('register',$data);
            }
            
        }
        }
        public function success($cid)
        {
            
            $data['top_menu'] = $this->common_model-> menues();
            $data['email_mobile_stat'] = $this->login_model-> email_mobile_stat($cid);
            
            $data['cid'] = $cid;
            $this->load->view('reg_success',$data);
            
        }
        public function send_mobile_otp(){
            $sql="select mobile_otp,mobile_primary,primary_reg_name from customers where MD5(customer_id)='".$this->input->post('cid')."'";
            $query=$this->db->query($sql);
            if($query->num_rows()>0)
            {
                $row=$query->row_array();
                $reg_name=$row['primary_reg_name'];
                $mobile=$row['mobile_primary'];
                $otp=$row['mobile_otp'];
                $msg="Dear ".$reg_name.', Quaestio.com mobile verification OTP is '.$otp;
                $res = $this->common_model->sendSMS($mobile,$msg);
                echo 'Please check your mobile '.$mobile.', SMS will be sent shortly';
            }
            else 
            {
                echo "Error: Please contact Administrator";
            }
        }
        public function resend_email_otp(){
            $form_data=$this->registration_model->customers();
            $msgC='<table width="100%">
									<tr><td colspan="2">
									Dear '.$form_data["primary_reg_name"].',<br />
									Thank you for your interest on Tender Cliq.<br />
									Please verify your eMail.<br />
									<b>Your Email OTP is:'.$form_data["email_otp"].'</b><br />
									    
									<b>You can also verify your email by clicking <a href="'.base_url().'register/success/'.md5($form_data["customer_id"]).'">here<a></b>
									    
									    
									</td></tr>
									<tr><td colspan="2"><strong>Registration Details</strong></td></tr>
									    
									<tr>
										<td width="50%">Organization Name:</td>
										<td width="50%">'.$form_data["org_name"].'</td>
									</tr>
									<tr>
										<td width="50%">Registration Type:</td>
										<td width="50%">'.$form_data["reg_type"].'</td>
									</tr>
									<tr>
										<td width="50%">Address Line 1:</td>
										<td width="50%">'.$form_data["address_line_1"].'</td>
									</tr>
									<tr>
										<td width="50%">Address Line 2:</td>
										<td width="50%">'.$form_data["address_line_2"].'</td>
									</tr>
									<tr>
										<td width="50%">Primary Registration name :</td>
										<td width="50%">'.$form_data["primary_reg_name"].'</td>
									</tr>
									<tr>
										<td width="50%">Designation:</td>
										<td width="50%">'.$form_data["designation"].'</td>
									</tr>
									<tr>
										<td width="50%">Mpbile:</td>
										<td width="50%">'.$form_data["mobile_primary"].'</td>
									</tr>
									<tr>
										<td width="50%">Email[Login Id]:</td>
										<td width="50%">'.$form_data["email_primary"].'</td>
									</tr>
																		    
										    
								</table>';
            $msg['content']=$msgC;
            $content=$this->load->view('email_templates/reg_email',$msg,TRUE);
            
            $email_stat=@$this->common_model->sendEmail($form_data['email_primary'],"Registration Details in Tendercliq.com",$content,'info@tendercliq.com','TenderCliq');
            
            //print_r($email_stat);
            //send SMS
            
            if($email_stat)
                $data['email']="SUCCESS: Email Sent Successfully to ".$form_data['email_primary'];
                else
                    $data['email']="ALERT: Email not Sent Successfully to ".$form_data['email_primary'];
                    echo $data['email'];
        }
        public function verify_mobile_otp(){
            echo json_encode($this->registration_model->verify_mobile_otp());
        }
        public function verify_email_otp(){
            echo json_encode($this->registration_model->verify_email_otp());
        }
}//class
