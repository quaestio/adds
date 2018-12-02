<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Forgot Password | Reset PAssword</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Prodict RegistrationGST,INDIA, GST INDIA, FREE GST SOLUTION,Quaestio.in,Free GST Software, Complete gst Solution, Web Development, Customized Web Solution" name="keywords">
  <meta content="Quaestio Customers login will hel you knowing your details amd renual amount. Quaestio customer id will help you fro further support " name="description">

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
              <div class="col-sm-8 inner-heading"> <h2>Forgot Password</h2></div>
              <div class="col-sm-4">
                <div class="inner-heading">
                  <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a> <i class="fa fa-angle-right"></i> </li>
                 
                    <li class="active"> Login</li>
                  </ul>
                 
                </div>
              </div>
            </div>
          </div>
        </section>
    <section id="content">
      	<div class="container">
        	<div class="row">
            	<div class="col-lg-4 col-md-offset-4 col-lg-4 col-sm-offset-3">  
				<!--h1 class="main_title entry-title"><span>SIGN IN OR <span class="color-green">CREATE A NEW ACCOUNT</span></span></h1-->
				
				<span id="idMsg"></span>
				
				
					<form name="frm" method="POST" class="sky-form" id="frm" >
					
				 <header>Forgot Password</header>
					
					<?php echo @$msg; ?>
					<fieldset>
						<section>
							<div class="row">
								<label class="label col col-4">Email :</label>
								<div class="col col-8">
									<label class="input">
										<input name="email" type="email" value='<?php echo @$email; ?>'>
										<b class="tooltip tooltip-bottom-right">Enter Email</b>
									</label>
								</div>
							</div>
				        </section>
						
					 </fieldset>
				   <footer><span><a href="<?=base_url();?>register" title="Register">Register?</a> Create a new Account</span> <input type="submit" value="Send Password" name="btnSubmit" class="btn btn-info pull-right" /> 
									
								</footer>
							<fieldset>	<div></div><div><h4>Login?</h4> <a href="<?=base_url();?>login" title="Login">click here</a> to Login. </div>
					
					</fieldset></form>
				
				</div>
            	<div class="col-sm-4">
            	<div>
                <strong class="widgetheading"><span></span></strong><BR />

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
$("#btnSubmit").click(function(e){
	 
	   e.preventDefault();
	   var form=$("#frm");
		 			  
	   form.validate({
		   
		    ignore:[],
			rules: {email:{required: true,email: true}},
			messages: {	email:{	required: 'Enter your email address',email: 'Enter a Valid email'}}
			});
	if(form.valid())
	   	 	$( "#frm" ).submit();
	 	
});
$("#frm").on('submit',(function(e) {
	
	e.preventDefault();
	
	var $btn = $("#btnSubmit").button('loading');
	$.ajax({
		url: "<?php echo base_url();?>forgot_password/reset",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		dataType:'json',
		success: function(data)
		{
			if(data.stat) 
				$("#idMsg").html('<div class="alert alert-success fade in alert-dismissible show"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true" >x</span> </button>'+data.message+'</div>');
			else
				$("#idMsg").html('<div class="alert alert-danger fade in alert-dismissible show"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button>'+data.message+'</div>');
			$("#email").val('');
			alert(data.message);
			$btn.button('reset');
		},
		error: function() 
		{
			
			$btn.button('reset');
		} 	
	});
}));

	   
				
		</script>
</body>
</html>
