<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact Us | Free Gst Solution</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Contact Us for Free Demo,GST,INDIA, GST INDIA, FREE GST SOLUTION,Quaestio.in,Free GST Software, Complete gst Solution, Web Development, Customized Web Solution" name="keywords">
  <meta content="Contact Quaestio for free Demo or Installation. Ask Any question and our technical team will respond you" name="description">

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
              <div class="col-sm-8 inner-heading"> <h2>Contact Us</h2></div>
              <div class="col-sm-4">
                <div class="inner-heading">
                  <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a> <i class="fa fa-angle-right"></i> </li>
                 
                    <li class="active"> Contact Us</li>
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
            	<form  id="sky-form" class="sky-form" action="<?=base_url();?>contact_us" method="POST">
                            
                            <fieldset>          
								<?php echo @$msg;?>
							<section>
								 <div class="row nomargin">
                                        <label class="label col col-4">Name :</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                
                                                <input type="text" name="name" id="name" value="<?=@$form_data['name'];?>">
												<b class="tooltip tooltip-bottom-right">Needed to enter Mobile no</b>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row nomargin">
                                        <label class="label col col-4">Mobile :</label>
                                        <div class="col col-8">
                                            <label class="input">
                                             
                                                <input type="text" name="mobile" id="mobile" value="<?=@$form_data['mobile'];?>">
												<b class="tooltip tooltip-bottom-right">Needed to enter Mobile no</b>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row nomargin">
                                        <label class="label col col-4">E-mail</label>
                                        <div class="col col-8">
                                            <label class="input">
                                              
                                                <input type="text" name="email" id="email" value="<?=@$form_data['email'];?>">
												<b class="tooltip tooltip-bottom-right">Needed to enter email id</b>
                                            </label>
                                        </div>
                                    </div> 
									
								
									<div class="row nomargin">
                                        <label class="label col col-4">Queries :</label>
                                        <div class="col col-8">
                                            <label class="input">
                                              
                                                 <textarea rows="4"  name="message" id="message" class="form-control" ><?=@$form_data['message'];?></textarea>
												<b class="tooltip tooltip-bottom-right">Needed to enter message</b>
                                            </label>
                                        </div>
                                    </div>
									<div class="row nomargin">
                                        <label class="label col col-4">Identify yourself</label>
                                        <div class="col col-8">
                                                                         
                                               <div class="g-recaptcha" data-sitekey="<?=GOOGLE_C_PUBLIC?>"></div>
                                           
                                        </div>
                                    </div>
                                	
								
                           			
                           
                                </section> 
								
                            </fieldset>
                            <footer>
                                <button class="btn btn-info margin-bottom-20" type="submit" name="enquiry_submit" id="enquiry_submit" value="submit">Send Message</button>
                               
                            </footer>
				</form>  
            	</div>
            	
            	<div class="col-sm-4">
            	<section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p></p>
        </div>

        <div class="row contact-info">

          <div class="col-md-12">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Near Kadam Kanan, Jhargram, West Bengal, India-721507</address>
            </div>
          </div>

          <div class="col-md-12">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+91 9800 9700 01</a></p>
            </div>
          </div>

          <div class="col-md-12">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@quaestio.com">info@quaestio.in</a></p>
              <p><a href="mailto:quaestioindia@gmail.com">quaestioindia@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

     

    </section>
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
						name:{required: true},
						mobile:{required: true},
						email:{required: true,email:true},
						message:{required: true}
					},
										
					// Messages for form validation
					messages:
					{
						name:{required: 'Please enter your Name'},
						mobile:{required: 'Please enter your Mobile No'},
						email:{required: 'Please enter valid Email'},
						message:{required: 'Enter Your Message'}
					},					
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});	
			
		</script>
</body>
</html>
