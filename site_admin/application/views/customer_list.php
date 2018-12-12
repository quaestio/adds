<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer List</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?= base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?= base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
          	   
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
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('common_includes/header')?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php $this->load->view('common_includes/left_menu')?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Customers</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url();?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Customers</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content clearfix">
					
                        <div class="row">
                        <div class="col-xs-12">
                            <div class="box"> 
                               <div class="box-header">
                                  
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <select name="dv" id="iv" style="width: 150px;" class="form-control input-sm pull-right">
                                                <option value="">All</option>
                                                <option value="Y">Verified</option>
                                                <option value="N">Not Verified</option>
                                            </select>
                                            <input type="text" placeholder="Search" style="width: 150px;" class="form-control input-sm pull-right" name="s_str" id="s_str">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default" id="LoadRecordsButton" ><i class="fa fa-search"></i></button>
                                                <button class="btn btn-sm btn-info" id="ViewProfile" ><i class="fa fa-user"></i> View Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="box-body table-responsive">
                                    <div id="AcTable"></div>
                                </div><!-- /.box-body -->
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
          
        <!-- AdminLTE App -->
        <script src="<?= base_url();?>plugins/AdminLTE/app.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?= base_url();?>plugins/jqv/jquery.validationEngine.js"></script>
		<script type="text/javascript" src="<?= base_url();?>plugins/jqv/jquery.validationEngine-en.js"></script>
		<script type="text/javascript" src="<?= base_url();?>plugins/jtable.2.4.0/jquery.jtable.js"></script>
        
        
       
        
		<script>
	$(document).ready(function(){
		 $(document).on('click', "a.btnDelete", function(e) {
	
		e.preventDefault();
		 var ans=confirm("Are you sure to Approve?");
		   if(ans)
		   {
		   $.post("<?=base_url();?>customers/approve",
				    { 
			   			cid:$(this).attr('data_id') ,
			   			data_value:$(this).attr('data_value') 
			   			
			  			
				    },
				    function(data){
				    		 
				    		 alert(data)
				    		 $('#LoadRecordsButton').click();
				    		 
				    });
		   }

	});
	

		    //Prepare jTable
			$('#AcTable').jtable({
				title: '',
				selecting: true, //Enable selecting
				multiselect: false,
              	paging: true,
				pageSize: 10,
				sorting: true,
				defaultSorting: 'date_register DESC',
				actions: {
				listAction: '<?php echo base_url();?>customers/lst',
				
									
				},
				fields: {
					customer_id: {key: true,	title: 'ID',create: false,	edit: false,list:false},
					reg_type: {	title: 'REG TYPE',create: false,	edit: false},
						first_name: {	create: true,	edit: true,list: true,title: 'NAME'},
						address_line_1: {	create: true,	edit: true,list: true,title: 'Address'},
						email: {create: true,	edit: true,list: true,title: 'Email'},
						phone: {create: true,	edit: true,list: true,title: 'Phone'},
												
						identity_verified: {	create: true,	edit: true,list: true,title: 'VERIFIED',display: function (data) {
							if(data.record.identity_verified=='N')
								return '<span class="label label-danger"><a href="#" class="btnDelete text-white" data_id="'+data.record.customer_id+'" data_value="'+data.record.identity_verified+'">NOT Approved</a></span>';
								else
								return '<span class="label label-success"><a href="#" class="btnDelete text-white" data_id="'+data.record.customer_id+'" data_value="'+data.record.identity_verified+'">Approved</a></span>';
							}},
							email_verified: {	create: true,	edit: true,list: true,title: 'Email Verified'},
							mobile_verified: {	create: true,	edit: true,list: true,title: 'Mobile Verified'},
							date_register: {	create: true,	edit: true,list: true,title: 'DT. Register'},
				},
			
		recordsLoaded: function(event, data) {
				$('.jtable-data-row').click(function() {
					var row_id = $(this).attr('data-record-key');
					$("#cid").val(row_id);
				});
			}
			
});

 //$('#AcTable').jtable('load');
 //Re-load records when user click 'load records' button.
        $('#LoadRecordsButton').click(function (e) {
           e.preventDefault();
           $('#AcTable').jtable('load', {
        	   s_str: $('#s_str').val(),
        	   iv: $('#iv').val()
           });
        });
 
        //Load all records when page is first shown
        $('#LoadRecordsButton').click();
        
        $('#ViewProfile').click(function (e) {
            e.preventDefault();
          if($('#cid').val()=="")
              alert("Please select a Profile");
          else
          {
              var url="<?=base_url()?>customers/profile/"+$('#cid').val();
        	  window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=500,width=800,height=600");

              }
            });
         
    });
	</script>
	<input type="hidden" id="cid" />
    </body>
</html>