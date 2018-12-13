<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>SPARKER | Premium directory and listings template by Ansonika.</title>

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
				<form name="reg-form" class="sky-form" id="reg-form" method="post" action="<?=base_url();?>register">
 
<?php echo @$msg; ?>

<div class="header_description">Fill in the fields below to create a account. You'll be able to add place and provide various facility in  your area. Receive updates on your place visit.</div>
<div class='header_description'>If you have an account, Please <a class="color-sea" href='<?=base_url();?>user/login' title="sign In" >SIGN IN</a>  </div>
  <fieldset>
  			<div class="row">
			
					<label class="col-md-4">I am  :</label>
			
					
					<div class="col-md-4">
						<select id='iam' name='iam' class="form-control">
							<option value="">---Please Select---</option>
							<option value="A">Advertiser</option>
							<option value="U">Looking for Somtimng</option>
						
						</select>
						<b class="tooltip tooltip-bottom-right">Select Registration type</b>
					<i></i></label>
				</div>
			
			</div>&nbsp;&nbsp;
        
		
			<div class="row">
				<label class="label col col-4">Name :</label>
				<div class="col col-8">
					<label class="input">
						<input name="first_name" type="text" placeholder="name" value='<?php echo @$form_data['first_name']; ?>' class="form-control">
						<b class="tooltip tooltip-bottom-right">Needed to enter first name</b>
					</label>
				</div>
			</div>
        
		
	
		
			<div class="row">
				<label class="label col col-4">Address Line 1 :</label>
				<div class="col col-8">
					<label class="input">
						<input name="address_line_1" type="text" placeholder="Address Line 1" value='<?php echo @$form_data['address_line_1']; ?>' class="form-control">
						<b class="tooltip tooltip-bottom-right">Needed to enter Address Line 1</b>
					</label>
				</div>
			</div>
        
		
			<div class="row">
				<label class="label col col-4">Address Line 2 :</label>
				<div class="col col-8">
					<label class="input">
						<input name="address_line_2" type="text" placeholder="Address Line 2" value='<?php echo @$form_data['address_line_2']; ?>' class="form-control">
						<b class="tooltip tooltip-bottom-right">optional</b>
					</label>
				</div>
			</div>
        
		
		
			<div class="row">
				<label class="label col col-4">Country :</label>
				<div class="col col-8">
					<label class="select">
						<select id='country' name='country'  class="st" style="width:200px;">
						
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
        
		
			<div class="row">
				<label class="label col col-4">State/Province :</label>
				<div class="col col-8">
					<label class="select">
						<select id='state' name='state'></select>
     
						<b class="tooltip tooltip-bottom-right">State/Province</b>
					<i></i></label>
				</div>
			</div>
        
        
			<div class="row">
				<label class="label col col-4">City :</label>
				<div class="col col-8">
				<label class="select">
						<select id='city' name='city'></select>
     
						<b class="tooltip tooltip-bottom-right">City/Conunty</b>
					<i></i></label>
					
				</div>
			</div>
        
		
			<div class="row">
				<label class="label col col-4">ZIP/Postal Code :</label>
				<div class="col col-8">
					<label class="input">
						<input name="zip" type="text" placeholder="Postal Code" value='<?php echo @$form_data['zip']; ?>' class="st">
						<b class="tooltip tooltip-bottom-right">zip</b>
					</label>
				</div>
			</div>
        
		
			<div class="row">
				<label class="label col col-4">Phone :</label>
				<div class="col col-8">
					<label class="input">
						<input name="phone" type="text" placeholder="Phone No" value='<?php echo @$form_data['phone']; ?>' class="st">
						<b class="tooltip tooltip-bottom-right">phone</b>
					</label>
				</div>
			</div>
        
  
 </fieldset>
 <header>LOGIN INFORMATION</header>
 <fieldset>
		
			<div class="row">
				<label class="label col col-4">E-Mail :</label>
				<div class="col col-8">
					<label class="input">
						<input name="email" type="text" placeholder="E-mail" value='<?php echo @$form_data['email']; ?>' class="st">
						<b class="tooltip tooltip-bottom-right">Needed to enter E-Mail</b>
					</label>
				</div>
			</div>
        
	
		
			<div class="row">
				<label class="label col col-4">Password :</label>
				<div class="col col-8">
					<label class="input">
						<input name="pass" placeholder="password" type="password"  class="st">
						<b class="tooltip tooltip-bottom-right">Needed to type Password</b>
					</label>
				</div>
			</div>
        
		
		
			<div class="row">
				<div class="col col-4">Terms &amp; Conditions:</div>
				<div class="col col-8">
					<label class="checkbox"><input type="checkbox" id="ch" name="terms" value="ON">
					<i></i><a onclick="window.open('<?=base_url()?>terms_and_conditions','popup','width=680,height=400,scrollbars=yes');popup.focus();return(false);" href="javascript:void();">I accept The Terms &amp; Conditions</a>
					
					</label>
				</div>
			</div>
		
    
  
  <div class="row">
				<div class="col col-4">Identify yourself:</div>
				<div class="col col-8">
						<div class="g-recaptcha" data-sitekey="<?=GOOGLE_CAPTCHA_SITE_KEY?>"></div>
						</div>
						</div>
					
   
  </fieldset>
   <footer>
					<input type="submit" value="Register" name="reg_submit" value="reg" class="btn btn-info pull-right"> 
				</footer>
	
    
</form>
				
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