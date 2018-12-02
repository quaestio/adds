<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title> Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?=base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?=base_url();?>css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="<?=base_url();?>js/html5shiv.js"></script>
          <script src=<?=base_url();?>js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
<div id="msg"></div>
        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="#" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="user_id" id="user_id" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="user_pass" id="user_pass" class="form-control" placeholder="Password"/>
                    </div>          
                    
                </div>
                <div class="footer">                                                               
                    <button type="button" class="btn bg-olive btn-block" id="login">Sign me in</button>  
                    
                    
                </div>
            </form>

            
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="<?=base_url();?>js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?=base_url();?>js/bootstrap.min.js" type="text/javascript"></script>        
		<script>    
$('#login').click(function() { 
	
		$.ajax({
			url: '<?= base_url();?>login/check_login',
			data: {"user_id":$("#user_id").val() , "user_pass":$("#user_pass").val(),"login_type":$("#login_type").val()},
			type:"post",
			dataType: 'json',
			success: function (resObj) {
				if (resObj.success == true) 
				{
					window.location = '<?php echo base_url();?>home';
				}else{
					$("#msg").html('<div class="alert alert-warning alert-dismissable"><i class="fa fa-warning"></i>Invalid Username and/or password <br /> Please contact admin if you are restricted</div>');
					//$("#msg").show();
				}	
			},
			error: function(){
			}
			});
	});		
 </script>
    </body>
</html>