<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Registration Success.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?=base_url()?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/style.css" rel="stylesheet">
	<link href="<?=base_url()?>css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=base_url()?>css/custom.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
	
	<div id="page">
		
	<?php $this->load->view('common_includes/header_all')?>
	<!-- /header -->
	
	<main>
		<div id="results">
		   <div class="container">
			   <div class="row">
				   <div class="col-lg-3 col-md-4 col-10">
					   <h4><strong>Registration Success</strong></h4>
				   </div>
				   <div class="col-lg-9 col-md-8 col-2">
					   <a href="#0" class="side_panel btn_search_mobile"></a> <!-- /open search panel -->
						<div class="row no-gutters custom-search-input-2 inner">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text"  id="s_s_txt" name="s_s_txt"  placeholder="What are you looking for...">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" id="s_s_city" name="s_s_city" placeholder="Where">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide" name="s_s_cat" id="s_s_cat">
								<option value="All">All Categories</option>	
								<?php foreach($categories as $items)
									echo '<option value="'.$items['category_name'].'">'.$items['category_name'].'</option>';
								?>
				</select>
				
							</div>
							<div class="col-lg-1">
								<input type="submit" name="btnSearchComp" id="btnSearchComp" value="Search">
							</div>
						</div>
				   </div>
			   </div>
			   <!-- /row -->
		   </div>
		   <!-- /container -->
	   </div>
		
	   	
		
		<!-- /Filters -->

		<div class="container margin_60_35">
			
			<div class="row">
				 <div class="col-md-8">
                <div class="alert alert-success" role="alert"> Thank you for registering with us</div> 
              <h5>Verify Your Email and Mobile</h5>     
              <hr />
            <?php if($email_mobile_stat['email_verified']=="N"){?>
                  <div class="row" id="emailBox">
                  
                  <div class="col-lg-8">
                    <div class="input-group">
                    	<input type="text" id="emailOTPtxt" class="form-control" placeholder="Email OTP...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="emailOTP">Verify Email</button>
                        <button class="btn btn-info" type="button" id="emailOTPr">Resend</button>
                      </span>
                      
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                 
                  </div> <?php }
                   if($email_mobile_stat['mobile_verified']=="N"){
                  ?>
                   <div class="row" id="PhoneBox">
                  <div class="col-lg-8">
                    <div class="input-group">
                    	<input type="text" class="form-control" id="mobileOTPtxt" placeholder="Mobile OTP...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="mobileOTP">Verify Mobile</button>
                        <button class="btn btn-info" type="button" id="mobileOTPr">Resend</button>
                      </span>
                      
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
             
                  </div>
                  <?php }?>
              <input type="hidden" id="cid" class="form-control" value="<?=$cid?>" />
           </div>
				
			</div>
			<!-- /row -->
			
			
		</div>
		<!-- /container -->
		
	</main>
	<?php $this->load->view('common_includes/footer');?>
	</div>
	<!-- page -->
	
	
	
	<div id="toTop"></div><!-- Back to top button -->
	<script type="text/javascript">
var base_url='<?=base_url()?>';


</script>
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url()?>js/common_scripts.js"></script>
	<script src="<?=base_url()?>js/functions.js"></script>
	<script src="<?=base_url()?>assets/validate.js"></script>

	<script type="text/javascript">
		
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