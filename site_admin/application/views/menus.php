<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site Menus</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?= base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?= base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Morris chart -->
        <link href="<?= base_url();?>css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?= base_url();?>css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
      
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
                    <h1>Site Menus </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Site Menus</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                
					 <div class="row">
					 <div class="box">
					<div class="col-md-12">
					 <div class="panel">
							
								<div class="box-header">
                                   
                                    <div class="box-tools">
                                        
                                                <button class="btn btn-info btn-flat btnAdd" id=""><i class="fa fa-plus"></i> Add</button>
                                           
                                    </div>
                                </div>
						
							<div class="box-body table-responsive">
														
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												
												<th>Site Menus Name</th>
												<th>Article</th>
												<th>Created By</th>
												<th>Last updated</th>
												<th>Date Created</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php 
										foreach($menus as $items){
										?>
											<tr>
												<td><?=$items['menu_name'] ?></td>
												<td><?=$items['article_title'] ?></td>
												<td><?=$items['updated_by'] ?></td>
												<td><?=$items['last_updated'] ?></td>
												<td><?=$items['date_added'] ?></td>
												<td class="text-right">
												<?php if($this->input->get('lbl')<1){?>
													<a class="btn btn-xs btn-default add-tooltip btnSub" data-toggle="tooltip" href="<?=base_url()?>menu?ParentID=<?=$items['menu_id']?>&lbl=<?=$items['lavel']+1?>" data-original-title="Sub Category" data-container="body"><i class="fa fa-list"></i> Sub Site Menus</a>
													<?php }?>
													<a class="btn btn-xs btn-default add-tooltip btnEdit" data-toggle="tooltip" data-id="<?=$items['menu_id'] ?>" data-value="<?=$items['menu_name'] ?>" catorder="<?=$items['catorder'] ?>" article_id="<?=$items['article_id'] ?>"  href="#" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i> Edit</a>
													<a class="btn btn-xs btn-danger add-tooltip btnDelete" data-toggle="tooltip" data-id="<?=$items['menu_id'] ?>" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-pencil"></i> Delete</a>
													
												</td>
											</tr>
											<?php }?>
										</tbody>
									</table>
								
							</div>
						</div>
                        
                      
                    </div>  
                    </div>  
                    </div>  
                      
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

       <div class="modal" id="Modal_Menu" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--Modal header-->
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button">
					<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Site Menus</h4>
				</div>
				<!--Modal body-->
				<div class="modal-body">
					<div class="panel">
						<div id="opMessage"></div>
						<!--Horizontal Form-->
						<!--===================================================-->
						<form class="form-horizontal" id="frm">
							<div class="panel-body">
								<div class="form-group">
									<label for="menu_name" class="col-sm-3 control-label">Menu Name</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="catorder" class="col-sm-3 control-label">Menu Order</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="catorder" name="catorder" placeholder="Order">
									</div>
								</div>
								<div class="form-group">
									<label for="catorder" class="col-sm-3 control-label">Select Article</label>
									<div class="col-sm-7">
										<select class="form-control" id="article_id" name="article_id">
										<option value="0">Select a article</option>
										<?php 
										foreach($articles as $items){
												echo'<option value="'.$items['article_id'].'">'.$items['article_title'].'</option>';
										}
										?>
										</select>
									</div>
								</div>
								<input type="hidden" name="data_op" id="data_op" />
								<input type="hidden" name="menu_id" id="menu_id" />
								<input type="hidden" name="parent_id" id="parent_id" value="<?=$this->input->get('ParentID')==""?-1:$this->input->get('ParentID');?>" />
								<input type="hidden" name="lavel" id="lavel" value="<?=$this->input->get('lbl')==""?0:$this->input->get('lbl')?>" />
							</div>
						</form>
						<!--===================================================-->
						<!--End Horizontal Form-->
					</div>
				</div>
				<!--Modal footer-->
				<div class="modal-footer">
					<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
					<button class="btn btn-primary" id="btnSave">Save changes</button>
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
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?= base_url();?>plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?= base_url();?>plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
          <!-- jQuery Knob Chart -->
        <script src="<?= base_url();?>plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
          <!-- iCheck -->
        <script src="<?= base_url();?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?= base_url();?>plugins/AdminLTE/app.js" type="text/javascript"></script>
          <script src="<?=base_url()?>js/jquery.validate.js"></script>
		
    <script>
		var data_op="add";
		var object_id='';
		$.ajaxSetup({cache: false}); 
		
		$(".btnEdit").click(function(e)
			{
				e.preventDefault();
				$('#menu_id').val($(this).attr("data-id"));
				$('#menu_name').val($(this).attr("data-value"));
				$('#catorder').val($(this).attr("catorder"));
				$('#article_id').val($(this).attr("article_id"));
				$('#data_op').val('edit');
				$('#Modal_Menu').modal('show');
			});
		
		$(".btnAdd").click(function(e)
			{
				e.preventDefault();
				$('#Modal_Menu').modal('show');
				$('#data_op').val('add');
				$('#menu_id').val("");
				document.getElementById("frm").reset();
			});
		$("#btnSave").click(function(e){
		   e.preventDefault();
		   var form=$("#frm");
		   
		   form.validate(
		   {
				ignore:[],
					rules: {
						menu_name: "required",
						catorder: "required",
						article_id: "required"
							},
				messages: {
					menu_name: "<b class='text-danger'>Please Enter Category Name</b>",
					catorder: "<b class='text-danger'>Please Enter Category Order</b>"
						}
			});
			if(form.valid())
			{
				
				$( "#frm" ).submit();
			}//is valid
		});
		$(window).on('hidden.bs.modal', function(e) { 
			document.getElementById("frm").reset();
			$('#data_op').val('add');
			
			data_op='add';
			location.reload();
			
		});
		$.ajaxSetup({cache: false}); 
		$("#frm").on('submit',(function(e) {
			e.preventDefault();
			
			$.ajax({
	        	url: "<?=base_url();?>menu/menu_op",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
	    	    cache: false,
				processData:false,
				dataType: "json",
				success: function(response)
			    {
				    alert(response.status);
				    if(response.status=="success")
					{
					    $('#opMessage').css('display', 'all');
		    		   	$('#opMessage').html(response.msg);
		 				$('#opMessage').addClass('alert alert-success alert-dismissable');
						$('#opMessage').delay(3000).fadeOut();
					}
				    else
				    {
				    	$('#opMessage').css('display', 'all');
		    		   	$('#opMessage').html(response.msg );
		 				$('#opMessage').addClass('alert alert-success alert-dismissable');
						$('#opMessage').delay(3000).fadeOut();

					    }	
						        			
			    },
			  	error: function() 
		    	{
			    	alert(data);
		    	} 	        
		   });
		}));
		$(".btnDelete").click(function(e){
		e.preventDefault();
			if(confirm('Are your sure to delete this category'))
			{
			
			
			$.ajax({
	        	url: "<?=base_url();?>menu/menu_delete/"+$(this).attr('data-id'),
				type: "POST",
				dataType: "json",
				success: function(response)
			    {
					alert(response.msg)
					location.reload();
				    
						        			
			    },
			  	error: function() 
		    	{
			    	alert(data);
		    	} 	        
		   });
			}
		});
	</script>
    </body>
</html>