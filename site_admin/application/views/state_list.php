<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>State List</title>
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
                    <h1>State List</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url();?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">State List</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content clearfix">
					
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                <div class="box-tools">
		                         <div class="input-group">
		                           <input type="text" class="form-control input-sm pull-right" style="width: 150px;"  name="State" id="State">
		                            <select name="country_select" id="country_select" class="form-control input-sm pull-right" style="width: 150px;">
                                        <option value="">Select country</option>
                                        <?php 
												foreach($country as $row){
													echo"<option value='".$row['country_id']."'>".$row['countries_name']."</option>";
												}?>
												
                                        </select>
		                         		
		                              <div class="input-group-btn">
		                               <button class="btn btn-sm btn-default" id="LoadRecordsButton"><i class="fa fa-search"></i></button>
		                               
		                               </div>
		                          </div>
		                      </div>
                                   
                                 
                                </div><!-- /.box-header -->
                                <div class="box-body" id="BodyTable"></div>
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
<script type="text/javascript" src="<?= base_url();?>js/jquery-migrate-1.2.1.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url();?>plugins/AdminLTE/app.js" type="text/javascript"></script>
        
        
        <!-- AdminLTE for demo purposes -->
        
		<script type="text/javascript" src="<?= base_url();?>plugins/jqv/jquery.validationEngine.js"></script>
		<script type="text/javascript" src="<?= base_url();?>plugins/jqv/jquery.validationEngine-en.js"></script>
		<script type="text/javascript" src="<?= base_url();?>plugins/jtable.2.4.0/jquery.jtable.js"></script>
	<script type="text/javascript">
					
							$(document).ready(function () {
					
							    //Prepare jTable
								$('#BodyTable').jtable({
									title: '&nbsp;',
									cssClass:"table table-bordered",
									selecting: true, //Enable selecting
									multiselect: false,
					               	paging: true,
									pageSize: 10,
									sorting: true,
									defaultSorting: 'state_name desc',
									
									actions: {
										listAction: '<?php echo base_url();?>states/state/list',
										createAction: '<?php echo base_url();?>states/state/create',
										updateAction: '<?php echo base_url();?>states/state/update'
										
														
									},
									fields: {
										
										state_id: {	key: true,title: ' ',edit: false,list: false,title: ''},
										country_id: {create: true,edit: true,list: true,title: 'Country',options: {
												<?php 
												foreach($country as $row){
												echo "'".$row['country_id']."':'".$row['countries_name']."',";
												}
												?> 

												 }, inputClass: 'validate[required]'},
										state_name: {create: true,edit: true,list: true,title: 'State Name', inputClass: 'validate[required]'},
										state_code: {create: true,edit: true,list: true,type:'text',title: 'State Code', inputClass: 'validate[required]'},
										updatedby: {create: false,edit: false,list: true,title: 'UPDATED BY'},
									
									},
									
							
					            //Validate form when it is being submitted
					            formSubmitting: function (event, data) {
					                return data.form.validationEngine('validate');
					            },
					            //Dispose validation logic when form is closed
					            formClosed: function (event, data) {
					                data.form.validationEngine('hide');
					                data.form.validationEngine('detach');
					            },
								recordsLoaded: function(event, data) {
									$('.jtable-data-row').click(function() {
										var row_id = $(this).attr('data-record-key');
										$("#State_select").val(row_id);
									});
								}
								
					});
					
					// $('#BodyTable').jtable('load');
					 //Re-load records when user click 'load records' button.
					        $('#LoadRecordsButton').click(function (e) {
					           e.preventDefault();
					           $('#BodyTable').jtable('load', {
					        	   Search_Str: $('#State').val(),
					        	   country_select: $('#country_select').val()
					           });
					        });
					 
					        //Load all records when page is first shown
					        $('#LoadRecordsButton').click();
					    });
						</script>
			<input type="hidden" id="State_select" />
    </body>
</html>