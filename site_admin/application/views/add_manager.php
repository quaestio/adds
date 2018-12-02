<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adds</title>
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
        <style type="text/css">
        .pagination{margin:0px}
        </style>
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
                    <h1>Tender List</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url();?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Adds</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content clearfix">
					
                        <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><a href="<?=base_url();?>add_manager/add_op/add" class="btn btn-info btn-flat">Create</a> </h3>
                                    
                                    <div class="box-tools">  
                                        <div class="input-group">
                                        
                                            <input type="text" placeholder="Search" style="width: 150px;" class="form-control input-sm pull-right" name="table_search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive clearfix">
                              <div class="pull-right"><?php echo $links?></div>
                                    <table class="table table-hover table-bordered">
                                        <tbody><tr>
                                          
                                            <th>IMG</th>
                                            <th>ORG NAME</th>
                                            <th>DESC</th>
                                            <th>LINK</th>
                                            <th>FROM DATE</th>
                                            <th>TO DATE</th>
                                            <th>STATUS</th>
                                            <th>UPDATED BY</th>
                                            <th>DATE UPDATED</th>
                                            <th></th>
                                          
                                        </tr>
                                        <?php 
                                        foreach($adds as $items)
                                        {
                                        
                                        ?>
                                        <tr>
                                          
                                            <td><img src="<?=base_url()?>../site_img/adds/<?=$items['img_1'];?>" height="100px"></td>
                                            <td><?=$items['org_name'];?></td>
                                            <td><?=$items['add_description'];?></td>
                                            <td><a href="<?=$items['link'];?>" target="_new">link</a></td>
                                            <td><?=$items['from_date'];?></td>
                                            <td><?=$items['to_date'];?></td>
                                            
                                            
                                            
                                            <td>
                                            <span id="PUStat<?=$items['add_id']?>">
                                            <?php 
                                            if($items['is_active']=="Y")
                                            echo '<span class="label label-success"><a href="" class="btnPubUnpub text-white" data-id='.$items['add_id'].' data-value='.$items['is_active'].'> Approved</a></span>';
                                            else
                                            echo '<span class="label label-warning"><a href="" class="btnPubUnpub text-white" data-id='.$items['add_id'].' data-value='.$items['is_active'].'> Pending</a></span>';
                                            ?></span>
                                            </td>
                                            <td><?=$items['updated_by'];?></td>
                                            <td><?=$items['dt'];?></td>
                                            <td> 
                                             <a href="<?=base_url()?>add_manager/add_op/edit/<?=$items['add_id'];?>" class="btn btn-xs btn-danger add-tooltip"><i class="fa fa-edit"></i></a>
                                             <a href="" data_id="<?=$items['add_id'];?>" class="btnImage btn btn-xs btn-danger add-tooltip text-white"><i class="fa fa-image"></i></a>
                                             <!-- a href="" data_id="<?=$items['add_id'];?>" class="btnDelete btn btn-xs btn-danger add-tooltip text-white"><i class="fa fa-times"></i></a-->
                                             
                                             </td>
                                        </tr>
                                       
                                        <?php }?>
                                       
                                    </tbody></table>
                                     <div class="pull-right"><?php echo $links?></div>
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                    </div>      
                              
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
<div class="modal fade" id="myModalImage" tabindex="-1" role="dialog" aria-labelledby="myModalImageLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload Add Image</h4>
      </div>
      <div class="modal-body">
        	<form role="form" name="PostImage" id="PostImage">
                      <div id="sys-msg"></div>
                      
                             <div class="form-group">
                              	<label for="userfile">File input</label>
                                 <input type="file" name="userfile">
                                  	<p class="help-block">jpg,gpeg,gif only</p>
                              </div>
                                   <input type="text" name="obj_id"  id="obj_id">     
                                    
                                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnUpload" >Upload</button>
      </div>
    </div>
  </div>
</div>
       

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
         <script src="<?=base_url();?>js/jquery.validate.min.js"></script>
		<script>
	$(document).ready(function(){
			$(document).on('click', "a.btnPubUnpub", function(e) {
			 ms="Publish";
			
		if($(this).attr('date-value')=='Y'){ms="Un-Publish";}
		idSpan="PUStat"+$(this).attr('data-id');
		e.preventDefault();
		 var ans=confirm("Are you sure to "+ms+"?");
		   if(ans)
		   {
				var $btn = $(this).button('loading');
		   $.post("<?=base_url();?>add_manager/pub_unpun",
				    { 
			   			data_id:$(this).attr('data-id') ,
			   			data_value:$(this).attr('data-value') 
			   			
			  			
				    },
				    function(data){
				    		 $('#'+idSpan+'').html(data);
				    		 $btn.button('reset');
				    		 
				    });
		   }

	});
		 $(document).on('click', "a.btnDelete", function(e) {
	
		e.preventDefault();
		 var ans=confirm("Are you sure to delete?");
		   if(ans)
		   {
		   $.post("<?=base_url();?>add_manager/delete_add",
				    { 
			   			data_id:$(this).attr('data_id') ,
			   			data_value:$(this).attr('data_value') 
			   		   },
				    function(data){
				    	   		 location.reload();
				    	  });
		   }

	});
	$(document).on('click', ".delDoc", function(e) {
		 
		e.preventDefault();
		 var ans=confirm("Are you sure to delete Doc?");
		   if(ans)
		   {
			   
			   	ImgSpan="Doc"+$(this).attr('data_id');
		   		$.post("<?=base_url();?>add_manager/delete_doc",
				    { 
			   			data_id:$(this).attr('data_id') 
			   			
			   		   },
				    function(data){
				    	   		if(data)
				    	   		{
				    	   			$('#'+ImgSpan+'').remove();
				    	   			alert('Document deleted successfully');

				    	   		}
				    	   		else
				    	   			alert('Error: Document not deleted successfully');
				    	  });
		   }

	});
	
		 $( ".btnImage" ).click(function(e) {
			 e.preventDefault();
			 $("#obj_id").val($(this).attr('data_id'));
			 	$('#myModalImage').modal('show');
				});
			
		 $( "#btnUpload" ).click(function(e) {
			 e.preventDefault();
			   var form=$("#PostImage");
			   form.validate({
					    ignore:[],
						rules: {   obj_id: "required"},
						messages: {	obj_id: "<b class='text-danger'>Please select</b>"}
					});
			   if(form.valid())
				 	$( "#PostImage" ).submit();
			});
			
		$("#PostImage").on('submit',(function(e) {
			e.preventDefault();
			
			var $btn = $("#btnUpload").button('loading');
			$.ajax({
	        	url: "<?=base_url();?>add_manager/upload_image",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
	    	    cache: false,
				processData:false,
				success: function(data)
			    {

				    try{
	    		    var obj = JSON.parse(data);
	    		         		
	        			if(obj.ImageUploaded)
	        			{
	        				
			 					$('#sys-msg').html('Image Uploaded Successfully');
			 					$('#sys-msg').addClass('alert alert-success alert-dismissable');
			 					$btn.button('reset');
								//$('#myModal').delay(3000).modal('hide');
		            		
	        			}
	        			else
	        			{
		        			alert(obj.img_error);
		        			 $btn.button('reset');
	        			}

				    }
				    catch(err)   {$btn.button('reset'); }
			    },
			  	error: function(data) {$btn.button('reset')} 	        
		   });
		}));
	});
	</script>
	<input type="hidden" id="ac_no_select" />
    </body>
</html>