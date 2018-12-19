<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Register with us, Post local facility like Doctors, Departmental Stores, Hotels, Restaurants and many more.">
    <meta name="author" content="<?=COPYRIGHT?>">
    <title>Regiater | www.wantafacility.com</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?=base_url()?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url();?>js/select2/select2.min.css">
    <!-- BASE CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/style.css" rel="stylesheet">
	<link href="<?=base_url()?>css/vendors.css" rel="stylesheet">
	<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
 
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
					   <h4><strong>Register</strong></h4>
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
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
				<form name="reg-form" id="reg-form" method="post" action="<?=base_url();?>register">
					<h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
					<div class="form_container">
					<?php echo @$msg; ?>
						<div class="form-group clearfix">
							<div class="custom-select-form">
								<select class="wide add_bottom_10" name="iam" id="iam">
										<option value="">---Please Select---</option>
										<option value="A">Advertiser</option>
										<option value="U">Looking for Somtimng</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<input name="first_name" type="text" placeholder="name*" value='<?php echo @$form_data['first_name']; ?>' class="form-control">
						</div>
						<div class="form-group">
							<input name="address_line_1" type="text" placeholder="Address Line 1*" value='<?php echo @$form_data['address_line_1']; ?>' class="form-control">
						</div>
						<div class="form-group">
							<input name="address_line_2" type="text" placeholder="Address Line 2" value='<?php echo @$form_data['address_line_2']; ?>' class="form-control">
						</div>
						
						
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<input class="form-control" name="phone" id="phone" placeholder="Mobile/Phone*" value='<?php echo @$form_data['phone']; ?>' type="text">
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input class="form-control" name="alt_phone" id="alt_phone" placeholder="alt contact*" value='<?php echo @$form_data['alt_phone']; ?>' type="text">
									</div>
								</div>
								
							</div>
							<!-- /row -->
							<div class="row no-gutters">
							
								<div class="col-12">
									<div class="form-group">
										<div class="">
											<select class="form-control select2" name="country" id="country">
													<option value="">---Please Country---</option>
													<?php 
                    							foreach($country_list as $cItems)
                    													echo '<option value="'.$cItems['country_id'].'">'.$cItems['countries_name'].'</option>';
                    							
                    							
                    						?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row no-gutters">
							
								<div class="col-12">
									<div class="form-group">
										<div class="">
											<select class="wide add_bottom_10 form-control select2" name="state" id="state">
													<option value="">---Please State---</option>
													
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-12">
									<div class="form-group">
										<div class="">
											<select  class="wide add_bottom_10 form-control select2" name="city" id="city">
													<option value="">---Please City---</option>
													
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<input class="form-control" name="zip" id="zip" placeholder="Postal Code*" value='<?php echo @$form_data['zip']; ?>' type="text">
									</div>
								</div>
								
								
							</div>
						
						<hr>
						<div class="form-group">
							<input name="email" type="text" placeholder="Email/Login*" value='<?php echo @$form_data['email']; ?>' class="form-control">
						</div>
						<div class="form-group">
							<input name="pass" id="pass" type="text" placeholder="Password*" value='' class="form-control">
						</div>
						<div class="form-group">
							<input name="re_pass" id="re_pass"  type="text" placeholder="Password*" value='' class="form-control">
						</div>
						
						
						<div class="form-group">
							<label class="container_check">Accept <a onclick="window.open('<?=base_url()?>terms_and_conditions','popup','width=680,height=400,scrollbars=yes');popup.focus();return(false);" href="javascript:void();">The Terms &amp; Conditions</a>
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</div>
						<hr>
						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="<?=GOOGLE_CAPTCHA_SITE_KEY?>"></div>
						</div>
						<div class="text-center"><input value="Register" class="btn_1 full-width" type="submit" name="reg_submit"></div>
					</div>
					<!-- /form_container -->
					</form>
				</div>
				<!-- /box_account -->
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Already Client</h3>
					<div class="form_container">
						<div class="row no-gutters">
							<div class="col-lg-6 pr-lg-1">
								<a href="#0" class="social_bt facebook">Login with Facebook</a>
							</div>
							<div class="col-lg-6 pl-lg-1">
								<a href="#0" class="social_bt google">Login with Google</a>
							</div>
						</div>
						<div class="divider"><span>Or</span></div>
						<div class="form-group">
							<input class="form-control" name="login_email" id="login_email" placeholder="Email*" type="email">
						</div>
						<div class="form-group">
							<div style="position: relative; display: block; vertical-align: baseline; margin: 0px;" class="hideShowPassword-wrapper"><input style="margin: 0px; padding-right: 51px;" class="form-control hideShowPassword-field" name="password_in" id="password_in" value="" placeholder="Password*" type="password"><button aria-pressed="false" style="position: absolute; right: 0px; top: 50%; margin-top: -15px; display: none;" class="my-toggle hideShowPassword-toggle-show" tabindex="0" title="Show Password" aria-label="Show Password" role="button" type="button">Show</button></div>
						</div>
						<div class="clearfix add_bottom_15">
							<div class="checkboxes float-left">
								<label class="container_check">Remember me
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="float-right"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
						</div>
						<div class="text-center"><button id="btnLogIn" name="btnLogIn" class="btn_1 full-width" >log In</button> </div>
						<div id="forgot_pw">
							<div class="form-group">
								<input class="form-control" name="email_forgot_reg" id="email_forgot_reg" placeholder="Type your email" type="email">
							</div>
							<p>A new password will be sent shortly.</p>
							<div class="text-center"><button id="btnForfotPassword" name="btnForfotPassword" class="btn_1" >Reset Password</button></div>
						</div>
					</div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
				
				<!-- /row -->
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
	<script src="<?=base_url()?>js/validate.js"></script>
	<script type="text/javascript" src="<?= base_url();?>js/select2/select2.full.min.js"></script>
	<script src="<?=base_url();?>js/jquery.validate.min.js"></script>
	<script type="text/javascript">
	$(function()
			{
				
			    	    $(".select2").select2();
				
				$('#reg-form').validate(
				{					
					// Rules for form validation
					rules:
					{
						first_name:{required: true},
						address_line_1:{required: true,minlength:4},
						country:{required: true},
						state:{required: true},
						city:{required: true},
						phone:{required: true,minlength:6,number:true},
						zip:{required: true,minlength:6,number:true},
						email:{required: true,email:true},
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