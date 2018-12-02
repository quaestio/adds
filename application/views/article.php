<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?=$article_title?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<meta name="keywords" content="<?=$page_keywords?>" />
	<meta name="description" content="<?=$page_description?>" />
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
              <div class="col-sm-8 inner-heading"> <h2><?=$article_title?></h2></div>
              <div class="col-sm-4">
                <div class="inner-heading">
                  <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a> <i class="fa fa-angle-right"></i> </li>
                 
                    <li class="active"> <?=$article_title?></li>
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
            	<section id="article">
              			<?=$article?>
              	</section>
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

</body>
</html>
