<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register | Free GST for All</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Prodict RegistrationGST,INDIA, GST INDIA, FREE GST SOLUTION,Quaestio.in,Free GST Software, Complete gst Solution, Web Development, Customized Web Solution" name="keywords">
  <meta content="Quaestio customer must register to get certificate from us. Without registration software locks some of the features" name="description">

  <!-- Favicons -->
  <link href="<?=base_url()?>favicon.ico" rel="icon">
  <link href="<?=base_url()?>img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="<?=base_url()?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="<?=base_url()?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url()?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?=base_url()?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  
  <link href="<?=base_url()?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
 <link rel="stylesheet" href="<?=base_url()?>js/sky-forms/sky-forms.css">
    <link rel="stylesheet" href="<?=base_url()?>js/sky-forms/custom-sky-forms.css">
  <!-- Main Stylesheet File -->
  <link href="<?=base_url()?>css/style.css" rel="stylesheet">
  <link href="<?=base_url()?>css/home.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body id="body">

 
  <!--==========================
    Header
  ============================-->
  
<?php $this->load->view('common_include/header');?>
  <!--==========================
    Intro Section
  ============================-->
 

  <main id="main">
 <!-- /section featured -->
    <section id="inner-headline">
          <div class="container">
            <div class="row nomargin ">
              <div class="col-sm-8 inner-heading"> <h2>Register</h2></div>
              <div class="col-sm-4">
                <div class="inner-heading">
                  <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a> <i class="fa fa-angle-right"></i> </li>
                 
                    <li class="active"> Register</li>
                  </ul>
                 
                </div>
              </div>
            </div>
          </div>
        </section>
    <section id="content">
      	<div class="container">
        	<div class="row">
            	<div class="col-sm-8">
            	<form  id="sky-form" class="sky-form" action="<?=base_url();?>register" method="POST">
                   	<fieldset>          
								<?php echo @$msg;?>
							<section>
								 <div class="row nomargin">
                                        <label class="label col col-4 mandate">Select Product :</label>
                                        <div class="col col-8">
                                            <label class="select">
                                                <i class="icon-append icon-user"></i>
                                                <select name="regtype" id="regtype">
                                                	<option value="">--Select Product Type</option>
                                                	<option value="MediSell" <?php echo @$form_data['reg_type']=="MediSell"?' selected ':''?>>MediSell(Medicine Counters)</option>
                                                	<option value="eRetail" <?php echo @$form_data['reg_type']=="eRetail"?' selected ':''?>>eRetail(All Other Except Medicine)</option>
                                                	<option value="WebSite" <?php echo @$form_data['reg_type']=="WebSite"?' selected ':''?>>Web Application</option>
                                                	
                                                </select>
                                              
												<b class="tooltip tooltip-bottom-right">Select Type of Product</b>
                                            </label>
                                        </div>
                                    </div>
								 <div class="row nomargin">
                                        <label class="label col col-4 mandate">Organization/Busicess Name :</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append">B</i>
                                                <input type="text" name="org_name" id="org_name" value="<?=@$form_data['org_name'];?>">
												<b class="tooltip tooltip-bottom-right">Organization/Busicess Name Same as it appeare in Invoice</b>
                                            </label>
                                        </div>
                                    </div>
                                  
                            			<div class="row nomargin mandate">
                            				<label class="label col col-4">Address Line 1 :</label>
                            				<div class="col col-8">
                            					<label class="input">
                            						<input name="address_line_1"  id="address_line_1" type="text" value='<?php echo @$form_data['address_line_1']; ?>'>
                            						<b class="tooltip tooltip-bottom-right">optional</b>
                            					</label>
                            				</div>
                            			</div>
                                   
                            		
                                    <div class="row nomargin">
                        				<label class="label col col-4">Address Line 2 :</label>
                        				<div class="col col-8">
                        					<label class="input">
                        						<input name="address_line_2" type="text" value='<?php echo @$form_data['address_line_2']; ?>' class="st">
                        						<b class="tooltip tooltip-bottom-right">optional</b>
                        					</label>
                        				</div>
                        			</div>
                        			<div class="row nomargin">
                        				<label class="label col col-4 mandate">Country :</label>
                        				<div class="col col-8">
                        					<label class="select">
                        						<select id='country' name='country'  class="st">
                        						
                        							<option value="">Select Country</option>
                        							<?php foreach($country_list as $cItems)
                        						{
                        							echo '<option value="'.$cItems['country_id'].'">'.$cItems['countries_name'].'</option>';
                        							
                        							
                        						}?>
                        						</select>
                        						<b class="tooltip tooltip-bottom-right">Country</b>
                        					<i></i></label>
                        				</div>
                        			</div>
                        		    <div class="row nomargin mandate">
                        				<label class="label col col-4">State/Province :</label>
                        				<div class="col col-8">
                        					<label class="select">
                        						<select id='state' name='state'></select>
                             
                        						<b class="tooltip tooltip-bottom-right">State/Province</b>
                        					<i></i></label>
                        				</div>
                        			</div>
                               
                        			<div class="row nomargin">
                        				<label class="label col col-4 mandate">City :</label>
                        				<div class="col col-8">
                        				<label class="select">
                        						<select id='city' name='city'></select>
                             
                        						<b class="tooltip tooltip-bottom-right">City/Conunty</b>
                        					<i></i></label>
                        					
                        				</div>
                        			</div>
                                			<div class="row nomargin">
                        				<label class="label col col-4 mandate">ZIP/Postal Code :</label>
                        				<div class="col col-8">
                        					<label class="input">
                        						<input name="zip" id="zip"  type="text" value='<?php echo @$form_data['zip']; ?>' class="st">
                        						<b class="tooltip tooltip-bottom-right">Pin code</b>
                        					</label>
                        				</div>
                        			</div>
        							<div class="row nomargin">
                                        <label class="label col col-4">Official E-mail</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append icon-envelope"></i>
                                                <input type="text" name="office_email" id="office_email" value="<?=@$form_data['office_email'];?>">
												<b class="tooltip tooltip-bottom-right">Optional: Official email id</b>
                                            </label>
                                        </div>
                                    </div>  
                        			
                        			
                        			
                        			
                                    <div class="row">
                                        <label class="label col col-4">Land Line No :</label>
                                        <div class="col col-4">
                                            <label class="input">
                                                <i class="icon-append icon-phone"></i>
                                                <input type="text" name="land_line" id="land_line" value="<?=@$form_data['land_line'];?>">
												<b class="tooltip tooltip-bottom-right">Land Line No</b>
                                            </label>
                                        </div>
                                        
                                    </div>
                                   
                                   <section>
                                  
                                    <div class="row nomargin">
                                        <label class="label col col-4 mandate">Your Name</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append icon-envelope"></i>
                                                <input type="text" name="primary_reg_name" id="primary_reg_name" value="<?=@$form_data['primary_reg_name'];?>">
												<b class="tooltip tooltip-bottom-right">Your Name</b>
                                            </label>
                                        </div>
                                    </div> 
                                    <div class="row nomargin">
                                        <label class="label col col-4">Designation</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append icon-envelope"></i>
                                                <input type="text" name="designation" id="designation" value="<?=@$form_data['designation'];?>">
												<b class="tooltip tooltip-bottom-right">Designation</b>
                                            </label>
                                        </div>
                                    </div>
                                     <div class="row nomargin">
                                        <label class="label col col-4 mandate">Primary Mobile No :</label>
                                        <div class="col col-4">
                                            <label class="input">
                                                <i class="icon-append fa fa-phone"></i>
                                                <input type="text" name="mobile_primary" id="mobile_primary" maxlength="10" value="<?=@$form_data['mobile_primary'];?>" placeholder="Primary Mobile">
												<b class="tooltip tooltip-bottom-right">Primary Mobile No account verification</b>
                                            </label>
                                        </div>
                                    
                                        <div class="col col-4">
                                            <label class="input">
                                                <i class="icon-append fa fa-phone"></i>
                                                <input type="text" name="alt_mobile_primary" id="alt_mobile_primary" value="<?=@$form_data['alt_mobile_primary'];?>" placeholder="Alternet Mobile">
												<b class="tooltip tooltip-bottom-right">Alternet Mobile Nos not Mandatory</b>
                                            </label>
                                        </div>
                                    </div>
                                     <div class="row nomargin">
                                        <label class="label col col-4 mandate">Your E-mail</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append icon-envelope"></i>
                                                <input type="text" name="email_primary" id="email_primary" value="<?=@$form_data['email_primary'];?>">
												<b class="tooltip tooltip-bottom-right">Login :Primary email id</b>
                                            </label>
                                        </div>
                                    </div>  
                                     <div class="row nomargin">
                                        <label class="label col col-4 mandate">Your Password</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append icon-envelope"></i>
                                                <input type="password" name="pass" id="pass" value="">
												<b class="tooltip tooltip-bottom-right">Login Password</b>
                                            </label>
                                        </div>
                                    </div>  
                                     <div class="row nomargin">
                                        <label class="label col col-4 mandate">Retype Password</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append icon-envelope"></i>
                                                <input type="password" name="re_pass" id="re_pass">
												<b class="tooltip tooltip-bottom-right">Needed to enter password Again</b>
                                            </label>
                                        </div>
                                    </div>  
                                    </section>
									<div class="row nomargin">
                                        <label class="label col col-4 mandate">Identify yourself</label>
                                        <div class="col col-4">
                                            <label class="input">
                                                 <div class="g-recaptcha" data-sitekey="<?=GOOGLE_C_PUBLIC;?>"></div>
                                            </label>
                                        </div>
                                    </div>
                                	
								
                           			
                           
                                </section> 
								
                            </fieldset>
                            <footer>
                                <button class="btn btn-info margin-bottom-20" type="submit" name="reg" id="reg" value="reg">Register Me</button>
                               
                            </footer>
				</form>  
            	</div>
            	
            	<div class="col-sm-4">
            	<div>
                <strong class="widgetheading">INSTRUCTIONS<span></span></strong><BR />

                <p class="text-justify" style="font-size:80%">This account will be the primary account to manage this account.<br /> We will verify account information from various sources. Our Customer care executive will call for account verification withis 48hrs.
                <br /> You will receive email amd Mobile OTP for verification.
                <br /> Please read our <a href="<?=base_url();?>article/read/terms-and-conditions">Terms and Conditions</a> before registration.
                <br /> Once your account is verified you will be able to create your own Advertisement.
                
               </p>
             </div>
            	</div>
            	<div class="col-sm-4" id="RightSide">
            	
            	
            	</div>
        	</div>
		</div>
    </section>


  </main>

  <!--==========================
    Footer
  ============================-->
  <?php $this->load->view('common_include/footer');?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?=base_url()?>lib/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?=base_url()?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>lib/easing/easing.min.js"></script>
  <script src="<?=base_url()?>lib/superfish/hoverIntent.js"></script>
  <script src="<?=base_url()?>lib/superfish/superfish.min.js"></script>
  <script src="<?=base_url()?>lib/wow/wow.min.js"></script>
 
  <script src="<?=base_url()?>lib/sticky/sticky.js"></script>
   <!-- Template Main Javascript File -->
  <script src="<?=base_url()?>js/main.js"></script>
  <script src="<?=base_url();?>js/sky-forms/version-2.0.1/js/jquery.maskedinput.min.js"></script>
<script src="<?=base_url();?>js/sky-forms/version-2.0.1/js/jquery-ui.min.js"></script>
<script src="<?=base_url();?>js/sky-forms/version-2.0.1/js/jquery.validate.min.js"></script>
<script type="text/javascript">
			$(function()
			{
				
				$('#sky-form').validate(
				{					
					// Rules for form validation
					rules:
					{
						regtype:{required: true},
						org_name:{required: true,minlength:4},
						address_line_1:{required: true,minlength:10},
						country:{required: true},
						state:{required: true},
						city:{required: true},
						zip:{required: true,minlength:6,number:true},
						ic:{required: true},
						primary_reg_name:{required: true,minlength:6},
						mobile_primary:{required: true,minlength:10,maxlength:10},
						email_primary:{required: true,email:true},
						pass:{required: true,minlength:6},
						re_pass:{required: true,minlength:6,equalTo: "#pass"},
						
					},
										
					// Messages for form validation
					messages:
					{
						name:{required: 'Please enter your Name'},
						mobile:{required: 'Please enter your Mobile No'},
						email:{required: 'Please enter valid Email'},
						ic:{required: 'Enter Interested category'}
					},					
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});	
			
		</script>
<script type="text/javascript">
		
		$("#country").on("change",function(){
			if($("#country").val()!="")
				loadlist($('select#state').get(0),'<?=base_url();?>cc/get_states/'+$("#country").val()+'','state_name','state_id');
			else
				  $('select#state').empty();
			});
		$("#state").on("change",function(){
			if($("#state").val()!="")
				loadlist($('select#city').get(0),'<?=base_url();?>cc/get_cities/'+$("#state").val()+'','city_name','city_id');
			else
				 $('select#city').empty();
			});
		 function loadlist(selobj,url,nameattr,valueattr)
		{
		    $(selobj).empty();
		    $.getJSON(url,{},function(data)
		    {
			    $(selobj).append($('<option></option>').val('').html('--Select All--'));
		        $.each(data, function(i,obj)
		        {
		             
		             $(selobj).append($('<option></option>').val(obj[valueattr]).html(obj[nameattr]));
		        });
		    });
		}
		</script>
</body>
</html>
