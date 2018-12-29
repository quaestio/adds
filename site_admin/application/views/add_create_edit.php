<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADD ADD EDIT</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?= base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?= base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?= base_url();?>css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?= base_url();?>css/morris/morris.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?=base_url();?>plugins/JQthems/blue/jquery-ui.css">
        <!-- jvectormap -->
        <link href="<?= base_url();?>css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="<?= base_url();?>plugins/select2/select2.min.css">
        <!-- Theme style -->
        <link type="text/css" href="<?= base_url();?>plugins/jqv/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url();?>css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
        .invalid{color:red;font-size:10px}
        .form-group {
    margin-bottom: 1px;
}
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
                    <h1>ADDS</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url();?>home"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_url();?>add_manager/add_list"><i class="fa fa-dashboard"></i> Adds</a></li>
                        <li class="active">Add(add,Edit)e</li>
                    </ol>
                </section>


                <!-- Main content -->
                <section class="content clearfix">
					 <form name="frm" id="frm"  class="form-horizontal" method="post">
                        <div class="row">
                        <div class="col-md-6">
                        <?=@$msg;?>
                        
                            <div class="box box-info">
                                
                                <div class="box-header"><h3 class="box-title">General information</h3></div>
                                <div class="box-body clearfix">
                                	<div class="col-xs-12">
								 		<div class="form-group">
		                                     <label for="">Category</label>
											 <select name="category_id" id="category_id" class="form-control">
											 <option value=''>select category</option>
											 <?php 
											 foreach($tc as $items)
											 echo'<option value="'.$items['category_id'].'">'.$items['category_name'].'</option>';
											 ?>
											 </select>
		                                </div>
                                  </div>
								  <div class="col-xs-12">
								 		<div class="form-group">
		                                     <label for="">Organization/Customer</label>
		                                      <input type="text" placeholder="" id="first_name" name="first_name" value="<?=@$form_data['first_name'] ?>" class="form-control" autocomplete="off">
		                                      <input type="hidden" placeholder="" id="customer_id" name="customer_id" value="<?=@$form_data['customer_id'] ?>" class="form-control">
		                                 </div>
                                  </div>
		                           <div class="col-xs-12">
		                              	<div class="form-group">
                                     		<label for="">Add-Title</label>
                                     		<input type="text" placeholder="" id="add_title" name="add_title" value="<?=@$form_data['add_title'] ?>" class="form-control">
                                      		
                                 		</div> 
                                	</div>	
		                           
                            		<div class="col-xs-12">
		                              	<div class="form-group">
                                     		<label for="">Description</label>
                                      		<textarea placeholder="" id="add_description" name="add_description" class="form-control"><?=@$form_data['add_description'];?></textarea>
                                 		</div> 
                                	</div>
                                    <div class="col-xs-12">
		                              	<div class="form-group">
                                     		<label for="">Address line 1</label>
                                     		<input type="text" placeholder="" id="address_line_1" name="address_line_1" value="<?=@$form_data['address_line_1'] ?>" class="form-control">
                                      		
                                 		</div> 
                                	</div>				
                                	 <div class="col-xs-6">
								 		<div class="form-group">
		                                     <label for="">Add Target City</label>
		                                      <input type="text" placeholder="" id="city_name" name="city_name" value="<?=@$form_data['city_name'] ?>" class="form-control" autocomplete="off">
		                                      <input type="hidden" placeholder="" id="city_id" name="city_id" value="<?=@$form_data['city_id'] ?>" class="form-control">
		                                 </div>
                                  </div>					
                                    
                                   <div class="col-xs-6">
								 		<div class="form-group">
		                                     <label for="">Pincode</label>
		                                      <input type="text" placeholder="" id="pin_code" name="pin_code" value="<?=@$form_data['pin_code'] ?>" class="form-control">
		                                 </div>
                                  </div>								  
                                   <div class="col-xs-12">
								 		<div class="form-group">
		                                     <label for="">CONTACTS</label>
		                                      <input type="text" placeholder="" id="contacts" name="contacts" value="<?=@$form_data['contacts'] ?>" class="form-control">
		                                 </div>
                                  </div>								  
                                   <div class="col-xs-12">
								 		<div class="form-group">
		                                     <label for="">e-Mail</label>
		                                      <input type="text" placeholder="" id="email" name="email" value="<?=@$form_data['email'] ?>" class="form-control">
		                                 </div>
                                  </div>								  
                                                              
                                  
								  <div class="col-xs-6">
								 		<div class="form-group">
		                                     <label for="">Latitude</label>
		                                      <input type="text" placeholder="lititude" id="lati" name="lati" value="<?=@$form_data['lati'] ?>" class="form-control">
		                                 </div>
                                  </div>
								  <div class="col-xs-6">
								 		<div class="form-group">
		                                     <label for="">Longitude</label>
		                                      <input type="text" placeholder="longitude" id="longi" name="longi" value="<?=@$form_data['longi'] ?>" class="form-control">
		                                 </div>
                                  </div>
                                  <div class="col-xs-6">
								 		<div class="form-group">
		                                     <label for="">Web Site</label>
		                                      <input type="text" placeholder="" id="link" name="link" value="<?=@$form_data['link'] ?>" class="form-control">
		                                 </div>
                                  </div>
                                  <div class="col-xs-6">
								 		<div class="form-group">
		                                     <label for="">Impression(Adds order)</label>
		                                      <input type="text" placeholder="" id="impression" name="impression" value="<?=@$form_data['impression'] ?>" class="form-control">
		                                 </div>
                                  </div>
                                  <div class="col-xs-6">
    		                                <div class="form-group">
    		                                     <label for="">Start Date ?</label>
    		                                     <input type="text" id='from_date' name='from_date' class="form-control date" value="<?=@$form_data['from_date'];?>" />
    		                                 </div>
        		                         </div>
                                    	<div class="col-xs-6">
    		                                <div class="form-group">
    		                                     <label for="">End Date ?</label>
    		                                     <input type="text" id='to_date' name=to_date class="form-control date" value="<?=@$form_data['to_date'];?>" />
    		                                 </div>
        		                         </div>
        		                         
        		                   
                                  </div><!-- /.box-body --> 
                                
                                <div class="box-footer">
                   			<input type="submit" value="<?=$operation=='edit'?'Update Add':'Save Add';?>" name="reg_submit" class="btn btn-info pull-right"> 
                                
                                        <a href="<?=base_url()?>add_manager/add_list" title="back" class="btn btn-primary" >Back</a>
                                        <input type="hidden" name="operation" value="<?=$operation=="add"?"save":"update";?>" />
                                    </div>
                                   
                            </div><!-- /.box --> 
                            </div><!-- /.col-6 --> 
                                  
                          
                    
                    	
                   </div>
                   
                   </form>            
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
        <!-- Select2 -->
		<script src="<?= base_url();?>plugins/select2/select2.full.min.js"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?= base_url();?>plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?= base_url();?>plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
          <!-- jQuery Knob Chart -->
        <script src="<?= base_url();?>plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
         <script src="<?= base_url();?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url();?>plugins/AdminLTE/app.js" type="text/javascript"></script>
        <script src="<?=base_url();?>js/mautocomplete.js"></script>
        
		<script type="text/javascript" src="<?= base_url();?>plugins/jqv/jquery.validationEngine.js"></script>
		<script type="text/javascript" src="<?= base_url();?>plugins/jqv/jquery.validationEngine-en.js"></script>
		<script src="<?=base_url();?>js/jquery-ui-1.11.4.js"></script>
<script src="<?=base_url();?>js/jquery.validate.min.js"></script>
        
     <script type="text/javascript">
     $("#first_name").mcautocomplete({
		    // These next two options are what this plugin adds to the autocomplete widget.
		    showHeader: true,
		    columns: [
		      	    {name: 'ORGANIZATION', width: '200px',valueField: 'first_name'}, 
		      	  	
		    		
		    		],

		    // Event handler for when a list item is selected.
		    select: function (event, ui) {
		    	  this.value = (ui.item ? ui.item.first_name : '');
		    		$('#first_name').val(ui.item.first_name);
		    		$('#customer_id').val(ui.item.customer_id);
		    		$('#address_line_1').val(ui.item.address_line_1);
		    		$('#pin_code').val(ui.item.zip);
		    		$('#add_title').focus();
		    		 return false;
		          
		    },

		    // The rest of the options are for configuring the ajax webservice call.
		    minLength: 1,
		    source: function (request, response) {
		        $.ajax({
		            url: '<?=base_url();?>add_manager/customer_hint',
		            dataType: "json",
		            data: { searchText: request.term, maxResults: 20 },
		          
		            // The success event handler will display "No match found" if no items are returned.
		            success: function (data) {
		               
		                    result = data;
		                
		                response(result);
		            }
		        });
		    }
		});
     $("#city_name").mcautocomplete({
		    // These next two options are what this plugin adds to the autocomplete widget.
		    showHeader: true,
		    columns: [
		      	    {
			      	    name: 'CITY', width: '200px',valueField: 'city_name'}, 
		      	  	
		    		
		    		],

		    // Event handler for when a list item is selected.
		    select: function (event, ui) {
		    	  this.value = (ui.item ? ui.item.city_name : '');
		    		$('#city_name').val(ui.item.city_name);
		    		$('#city_id').val(ui.item.city_id);
		    		
		    		$('#pin_code').focus();
		    		 return false;
		          
		    },

		    // The rest of the options are for configuring the ajax webservice call.
		    minLength: 1,
		    source: function (request, response) {
		        $.ajax({
		            url: '<?=base_url();?>add_manager/city_hint',
		            dataType: "json",
		            data: { searchText: request.term, maxResults: 20 },
		          
		            // The success event handler will display "No match found" if no items are returned.
		            success: function (data) {
		               
		                    result = data;
		                
		                response(result);
		            }
		        });
		    }
		});
     $(function(){
 				
 			    	   $(".select2").select2();
 			    	   $( ".date" ).datepicker( {changeMonth: true,changeYear: true,dateFormat:'yy-mm-dd'});
 			    	  
 				
 				$('#frm').validate(
 				{					
 					// Rules for form validation
 					rules:
 					{
 						category_id:{required: true},
 						customer_id:{required: true},
 						city_id:{required: true},
 						add_title:{required: true},
 						contacts:{required: true},
 						
 						
 					},
 										
 					// Messages for form validation
 					messages:
 					{
 						
 					},					
 					
 					// Do not change code below
 					errorPlacement: function(error, element)
 					{
 						error.insertAfter(element.parent());
 					}
 				});
 			});	
		$('#category_id').val(<?=@$form_data['category_id'];?>);

		
		
     </script>
		
    </body>
</html>