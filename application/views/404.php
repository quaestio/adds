<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Resource not found</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?=base_url()?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?=base_url()?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?=base_url()?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?=base_url()?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?=base_url()?>img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/style.css" rel="stylesheet">
	<link href="<?=base_url()?>css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=base_url()?>css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
	<?php $this->load->view('common_includes/header')?>
	<!-- /header -->
	
	<main>
		<div id="error_page">
			<div class="wrapper">
				<div class="container">
					<div class="row justify-content-center text-center">
						<div class="col-xl-7 col-lg-9">
							<h2>404 <i class="icon_error-triangle_alt"></i></h2>
							<p>We're sorry, but the page you were looking for doesn't exist.</p>
							<form>
								<div class="search_bar_error">
									<input type="text" class="form-control" placeholder="What are you looking for?">
									<input type="submit" value="Search">
								</div>
							</form>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /wrapper -->
		</div>
		<!-- /error_page -->
	</main>
	<!--/main-->
	<?php $this->load->view('common_includes/footer');?>
	
	<!--/footer-->
	</div>
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url()?>js/common_scripts.js"></script>
	<script src="<?=base_url()?>js/functions.js"></script>
	<script src="<?=base_url()?>assets/validate.js"></script>
	
	<script>
		$('.wish_bt.liked').on('click', function (c) {
			$(this).parent().parent().parent().fadeOut('slow', function (c) {});
		});
	</script>
  
</body>
</html>