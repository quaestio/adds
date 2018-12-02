<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registyration Success</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="GST,INDIA, GST INDIA, FREE GST SOLUTION,Quaestio.in,Free GST Software, Complete gst Solution, Web Development, Customized Web Solution" name="keywords">
  <meta content="Quaestio offering the free GST softwares for all over India. We are pllaning to provide free GST solution for free" name="description">

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
  <link href="<?=base_url()?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="<?=base_url()?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=base_url()?>css/style.css" rel="stylesheet">
  <link href="<?=base_url()?>css/home.css" rel="stylesheet">

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
              <div class="col-sm-8 inner-heading"> <h2>Registration Success</h2></div>
              <div class="col-sm-4">
                <div class="inner-heading">
                  <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a> <i class="fa fa-angle-right"></i> </li>
                    <li class="active"> Success</li>
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
            	
                <div class="alert alert-success" role="alert"> Thank you for registering with us</div> 
              <h5>Verify Your Email and Mobile</h5>     
              <hr />
            <?php if($email_mobile_stat['email_verified']=="N"){?>
                  <div class="row" id="emailBox">
                  
                  <div class="col-lg-8">
                    <div class="input-group">
                    	<input type="text" id="emailOTPtxt" class="form-control" placeholder="Email OTP...">
                      <span class="input-group-btn">
                        <button class="btn btn-success" type="button" id="emailOTP">Verify Email</button>
                        <button class="btn btn-info" type="button" id="emailOTPr">Resend</button>
                      </span>
                      
                    </div><!-- /input-group -->
                    <br />
                  </div><!-- /.col-lg-6 -->
                 
                  </div> <?php }
                   if($email_mobile_stat['mobile_verified']=="N"){
                  ?>
                   <div class="row" id="PhoneBox">
                      <div class="col-md-8">
                        <div class="input-group">
                        	<input type="text" class="form-control" id="mobileOTPtxt" placeholder="Mobile OTP...">
                          <span class="input-group-btn">
                            <button class="btn btn-success" type="button" id="mobileOTP">Verify Mobile</button>
                            <button class="btn btn-info" type="button" id="mobileOTPr">Resend</button>
                          </span>
                          
                        </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
             
                  </div>
                  <?php }?>
              <input type="hidden" id="cid" class="form-control" value="<?=$cid?>">
           
            	</div>
            	<div class="col-sm-4" id="RightSide"></div>
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
  <script src="<?=base_url()?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="<?=base_url()?>lib/sticky/sticky.js"></script>
   <!-- Template Main Javascript File -->
  <script src="<?=base_url()?>js/main.js"></script>
<script>
$('#emailOTPr').click(function(e) 	{
	
	e.preventDefault();
	var $btn = $("#emailOTPr").button('loading');
  $.ajax({
	            url: '<?=base_url();?>register/resend_email_otp',
	            type: "POST",
				data:  {cid:$('#cid').val()},
				 success: function (data) {
	               alert(data);
	            },
	            error: function() 
	    		{
	    				
	    			 $btn.button('reset')
	    		} 
	        });
	  });
$('#mobileOTPr').click(function(e) 	{
	e.preventDefault();
	var $btn = $("#mobileOTPr").button('loading');
  $.ajax({
	            url: '<?=base_url();?>register/send_mobile_otp',
	            type: "POST",
				data:  {cid:$('#cid').val()},
				success: function (data) {
	               alert(data);
	               $('#mobileOTPr').hide();
	            },
				error: function() 
	    		{
	    				
	    			 $btn.button('reset')
	    		} 
	        });
	  });
$('#mobileOTP').click(function(e) 	{
	e.preventDefault();
	var $btn = $("#mobileOTP").button('loading');
  $.ajax({
	            url: '<?=base_url();?>register/verify_mobile_otp',
	            type: "POST",
	            dataType:'json',
				data:  {cid:$('#cid').val(),otp:$('#mobileOTPtxt').val()},
				success: function (d) {
					alert(d.msg);
					if(d.stat)
						 $('#PhoneBox').hide();
					else
						 $btn.button('reset');
	            },
				error: function() 
	    		{
	    				
	    			 $btn.button('reset');
	    		} 
	        });
	  });
$('#emailOTP').click(function(e) 	{
	e.preventDefault();
	var $btn = $("#emailOTP").button('loading');
  $.ajax({
	            url: '<?=base_url();?>register/verify_email_otp',
	            type: "POST",
	            dataType:'json',
				data:  {cid:$('#cid').val(),otp:$('#emailOTPtxt').val()},
				success: function (d) {
					alert(d.msg);
					if(d.stat)
						 $('#emailBox').hide();
					else
						 $btn.button('reset');
	            },
				error: function() 
	    		{
	    				
	    			 $btn.button('reset');
	    		} 
	        });
	  });
</script>
</body>
</html>
