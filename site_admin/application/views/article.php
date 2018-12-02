<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Article List</title>
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
         <link href="<?= base_url();?>css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
      	<!-- jTable style -->
      
        <!-- Theme style -->
        
        <link href="<?= base_url();?>css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('common_includes/header')?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php $this->load->view('common_includes/left_menu')?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Article</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url();?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_url();?>article"><i class="fa fa-dashboard"></i> Articles</a></li>
                        <li class="active">Article</li>
                    </ol>
                </section>


                <!-- Main content -->
                <section class="content clearfix">
					
                        <div class="row">
                        <div class="col-xs-12">
                        <?=@$msg; ?>
                         <form name="frm" class="" method="post">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Article</h3>
                                </div>
                                <div class="box-body">
                            
                                <div class="form-group">
                                     <label for="">Title</label>
                                      <input type="text" placeholder="Article title" id="article_title" name="article_title" value="<?=@$form_data['article_title'] ?>" class="form-control">
                                 </div>
                              
                               
                                 <div class="form-group">
                                     <label for="">Article</label>
                                       <?php echo $this->fckeditor->Create() ;?>
                                 </div>
                                 
                                
                                     <div class="row">
                            		<div class="col-xs-4">
		                              	<div class="form-group">
                                     		<label for="">Unique Url</label>
                                      		<input type="text" class="form-control"  name="seo_url" id="seo_url" value="<?=$form_data['seo_url'] ?>" placeholder="Unique Url, leave blank to auto generate">
                                 		</div> 
                                	</div>    
                            		<div class="col-xs-4">
		                              	<div class="form-group">
                                     		<label for="">Page Title</label>
                                      		<input type="text" class="form-control"  name="page_title" id="page_title" value="<?=@$form_data['page_title'] ?>" placeholder="Title of the page">
                                 		</div> 
                                	</div>    
                            		<div class="col-xs-4">
		                              	<div class="form-group">
                                     		<label for="">SEO Key words</label>
                                      		<input type="text" class="form-control"  name="page_keywords" id="page_keywords" value="<?=@$form_data['page_keywords'] ?>" placeholder="">
                                 		</div> 
                                	</div>    
                              
                               </div>
                               <div class="form-group">
		                                     <label for="">Page Description</label>
		                                      <input type="text" class="form-control"  name="page_description" id="page_description" placeholder="Short Description" value="<?=@$form_data['page_description'] ?>">
		                                 </div>
                                 
                                 
                                 
                                 
                                 <input type="hidden" name="operation" value="<?=$operation=="add"?"save":"update";?>" />
                                 

                                    
                                </div><!-- /.box-body --> 
                                <div class="box-footer">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                   
                            </div><!-- /.box --> 
                            </form>
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
        
     
		
    </body>
</html>