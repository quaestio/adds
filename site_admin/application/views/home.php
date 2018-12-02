<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADMINISTRATION | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?= base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?= base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?= base_url();?>css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?= base_url();?>css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?= base_url();?>css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?= base_url();?>css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?= base_url();?>css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
      	<!-- jTable style -->
      	<link type="text/css" href="<?= base_url();?>plugins/JQthems/blue/jquery-ui.css" rel="stylesheet" />
   		<link type="text/css" href="<?= base_url();?>plugins/jtable.2.4.0/themes/lightcolor/blue/jtable.css" rel="stylesheet" />
		<link type="text/css" href="<?= base_url();?>plugins/jqv/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
	
        <!-- Theme style -->
        
        <link href="<?= base_url();?>css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('common_includes/header')?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php $this->load->view('common_includes/left_menu')?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                               <div class="inner">
                                    <h3> <?=@$tourist_places;?> </h3>
                                    <p> TENDERS</p>
                                </div>
                                <div class="icon"> <i class="fa fa-th"></i></div>
                                <a class="small-box-footer" href="<?=base_url()?>tenders">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3><?=@$act_rules_count;?></h3>
                                    <p>Companies</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-certificate"></i>
                                </div>
                                <a class="small-box-footer" href="<?=base_url();?>act_rule">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=@$image_gallery_count;?></h3>
                                    <p>USERS </p>
                                </div>
                                <div class="icon"><i class="fa fa-camera"></i></div>
                                <a class="small-box-footer" href="<?=base_url();?>gallery/gallery_list">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        
                                    </h3>
                                    <p>
                                      Clear the cache will clear system cache. New updates will be reflected on the main site.
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-cog"></i>
                                </div>
                                <a class="small-box-footer CCache" href="#">
                                   Clear the Cache<i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div>
                <div class="row">
					 <div class="col-md-12">
                            <!-- Bar chart -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title"></h3>
                                </div>
                               
                            </div><!-- /.box -->
                     </div>   
                     </div>    
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

       

        <!-- jQuery 2.0.2 -->
        <script src="<?= base_url();?>js/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
     <script src="<?= base_url();?>js/jquery-ui-1.11.4.js"></script>
	
        <!-- jQuery UI 1.10.3 -->
        <script src="<?= base_url();?>js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?= base_url();?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?= base_url();?>plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?= base_url();?>plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
          <!-- jQuery Knob Chart -->
        <script src="<?= base_url();?>plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?= base_url();?>plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?= base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?= base_url();?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?= base_url();?>plugins/AdminLTE/app.js" type="text/javascript"></script>
        
        <script src="<?= base_url();?>plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src="<?= base_url();?>plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <script src="<?= base_url();?>plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <script src="<?= base_url();?>plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    
    
    </body>
</html>