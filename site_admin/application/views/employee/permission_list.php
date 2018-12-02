<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>City List</title>
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

<!-- Site wrapper -->
<div class="wrapper">

  <?php $this->load->view('includes/header');?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php $this->load->view('includes/left');?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>  Home   <small>Everything starts here</small></h1>
      
    </section>

    <!-- Main content -->
     <section class="content clearfix">
					
                    <div class="row">
                        <div class="col-xs-12">
                        <form name="frm" method="post">
                            <div class="box"> 
                               <div class="box-header">
                                    <h3 class="box-title">User Permission</h3>
                               </div>
                               <div class="box-body table-responsive">
                               <p class=text-red">Administrator have all the rights, Set If user</p>
                                   <table class="table table-bordered table-hover">
	                                   	<tr>
		                                   	<td>MODULE NAME</td>
		                                   	<td>CAN VIEW</td>
		                                   	<td>CAN ADD</td>
		                                   	<td>CAN EDIT</td>
		                                   	<td>CAN DELETE</td>
		                                 
	                                   
	                                   	</tr>
	                                   	<tr>
		                                   	<td>Admin Users<input type="hidden" value="user" name="user" /></td>
		                                   	<td><input type="checkbox" name="uv" value="1" class="flat-red" <?= permission(@$user,'view');?>></td>
		                                   	<td><input type="checkbox" name="ua" value="1" class="flat-red" <?= permission(@$user,'add');?>></td>
		                                   	<td><input type="checkbox" name="ue" value="1" class="flat-red" <?= permission(@$user,'edit');?>></td>
		                                   	<td><input type="checkbox" name="ud" value="1" class="flat-red" <?= permission(@$user,'delete');?>></td>
		                                   	
	                                  	</tr>
	                                   	<tr>
		                                   	<td>Organization<input type="hidden" value="Organization" name="Organization"/></td>
		                                   	<td><input type="checkbox" name="ov" value="1" class="flat-red" <?= permission(@$Organization,'view');?>></td>
		                                   	<td><input type="checkbox" name="oa" value="1" class="flat-red" <?= permission(@$Organization,'add');?>></td>
		                                   	<td><input type="checkbox" name="oe" value="1" class="flat-red" <?= permission(@$Organization,'edit');?>></td>
		                                   	<td><input type="checkbox" name="od" value="1" class="flat-red" <?= permission(@$Organization,'delete');?>></td>
		                                   
	                                  	</tr>
	                                   	<tr>
		                                   	<td>Bank Information<input type="hidden" value="Bank" name="Bank"/></td>
		                                   	<td><input type="checkbox" name="Bankv" value="1" class="flat-red" <?= permission(@$Bank,'view');?>></td>
		                                   	<td><input type="checkbox" name="Banka" value="1" class="flat-red" <?= permission(@$Bank,'add');?>></td>
		                                   	<td><input type="checkbox" name="Banke" value="1" class="flat-red" <?= permission(@$Bank,'edit');?>></td>
		                                   	<td><input type="checkbox" name="Bankd" value="1" class="flat-red" <?= permission(@$Bank,'delete');?>></td>
		                                   
	                                  	</tr>
	                                   	<tr>
		                                   	<td>Supplier Information<input type="hidden" value="Supplier" name="Supplier"/></td>
		                                   	<td><input type="checkbox" name="Supplierv" value="1" class="flat-red" <?= permission(@$Supplier,'view');?>></td>
		                                   	<td><input type="checkbox" name="Suppliera" value="1" class="flat-red" <?= permission(@$Supplier,'add');?>></td>
		                                   	<td><input type="checkbox" name="Suppliere" value="1" class="flat-red" <?= permission(@$Supplier,'edit');?>></td>
		                                   	<td><input type="checkbox" name="Supplierd" value="1" class="flat-red" <?= permission(@$Supplier,'delete');?>></td>
		                                   
	                                  	</tr>
	                                 <?php if($this->session->userdata('packageType')=="D" || $this->session->userdata('packageType')=="A"){?>
	                                   	<tr>
		                                   	<td>Retailers Information<input type="hidden" value="Retailer" name="Retailer"/></td>
		                                   	<td><input type="checkbox" name="Retailerv" value="1" class="flat-red" <?= permission(@$Retailer,'view');?>></td>
		                                   	<td><input type="checkbox" name="Retailera" value="1" class="flat-red" <?= permission(@$Retailer,'add');?>></td>
		                                   	<td><input type="checkbox" name="Retailere" value="1" class="flat-red" <?= permission(@$Retailer,'edit');?>></td>
		                                   	<td><input type="checkbox" name="Retailerd" value="1" class="flat-red" <?= permission(@$Retailer,'delete');?>></td>
		                                   
	                                  	</tr>
	                                  	<?php }?>
	                                 <?php if($this->session->userdata('packageType')=="R" || $this->session->userdata('packageType')=="A"){?>
	                                   	<tr>
		                                   	<td>Counter Sale<input type="hidden" value="CounterSale" name="CounterSale" /></td>
		                                   	<td><input type="checkbox" name="CounterSalev" value="1" class="flat-red" <?= permission(@$CounterSale,'view');?>></td>
		                                   	<td><input type="checkbox" name="CounterSalea" value="1" class="flat-red" <?= permission(@$CounterSale,'add');?>></td>
		                                   	<td><input type="checkbox" name="CounterSalee" value="1" class="flat-red" <?= permission(@$CounterSale,'edit');?>></td>
		                                   	<td><input type="checkbox" name="CounterSaled" value="1" class="flat-red" <?= permission(@$CounterSale,'delete');?>></td>
		                             	</tr>
	                                  	<?php }?>
	                                   	<tr>
		                                   	<td>Product Informtion<input type="hidden" value="Product" name="Product"  /></td>
		                                   	<td><input type="checkbox" name="Productv" value="1" class="flat-red" <?= permission(@$Product,'view');?>></td>
		                                   	<td><input type="checkbox" name="Producta" value="1" class="flat-red" <?= permission(@$Product,'add');?>></td>
		                                   	<td><input type="checkbox" name="Producte" value="1" class="flat-red" <?= permission(@$Product,'edit');?>></td>
		                                   	<td><input type="checkbox" name="Productd" value="1" class="flat-red" <?= permission(@$Product,'delete');?>></td>
		                                   
	                                  	</tr>
	                                   	
	                                   	<tr>
		                                   	<td>Stock<input type="hidden" value="Stock" name="Stock"/></td>
		                                   	<td><input type="checkbox" name="Stockv" value="1" class="flat-red" <?= permission(@$Stock,'view');?>></td>
		                                   	<td><input type="checkbox" name="Stocka" value="1" class="flat-red" <?= permission(@$Stock,'add');?>></td>
		                                   	<td><input type="checkbox" name="Stocke" value="1" class="flat-red" <?= permission(@$Stock,'edit');?>></td>
		                                   	<td><input type="checkbox" name="Stockd" value="1" class="flat-red" <?= permission(@$Stock,'delete');?>></td>
		                                   	
	                                  	</tr>
	                                  	<tr>
		                                   	<td>Purchase<input type="hidden" value="Purchase" name="Purchase" /></td>
		                                   	<td><input type="checkbox" name="Purchasev" value="1" class="flat-red" <?= permission(@$Purchase,'view');?>></td>
		                                   	<td><input type="checkbox" name="Purchasea" value="1" class="flat-red" <?= permission(@$Purchase,'add');?>></td>
		                                   	<td><input type="checkbox" name="Purchasee" value="1" class="flat-red" <?= permission(@$Purchase,'edit');?>></td>
		                                   	<td><input type="checkbox" name="Purchased" value="1" class="flat-red" <?= permission(@$Purchase,'delete');?>></td>
		                                  
	                                  	</tr>
	                                  	<tr>
		                                   	<td>Debit Note<input type="hidden" value="DebitNote" name="DebitNote" /></td>
		                                   	<td><input type="checkbox" name="DebitNotev" value="1" class="flat-red" <?= permission(@$DebitNote,'view');?>></td>
		                                   	<td><input type="checkbox" name="DebitNotea" value="1" class="flat-red" <?= permission(@$DebitNote,'add');?>></td>
		                                   	<td><input type="checkbox" name="DebitNotee" value="1" class="flat-red" <?= permission(@$DebitNote,'edit');?>></td>
		                                   	<td><input type="checkbox" name="DebitNoted" value="1" class="flat-red" <?= permission(@$DebitNote,'delete');?>></td>
		                                  
	                                  	</tr>
	                                   	<tr>
		                                   	<td>Purchase Payment<input type="hidden" value="PurchasePayment" name="PurchasePayment" /></td>
		                                   	<td><input type="checkbox" name="PurchasePaymentv" value="1" class="flat-red" <?= permission(@$PurchasePayment,'view');?>></td>
		                                   	<td><input type="checkbox" name="PurchasePaymenta" value="1" class="flat-red" <?= permission(@$PurchasePayment,'add');?>></td>
		                                   	<td><input type="checkbox" name="PurchasePaymente" value="1" class="flat-red" <?= permission(@$PurchasePayment,'edit');?>></td>
		                                   	<td><input type="checkbox" name="PurchasePaymentd" value="1" class="flat-red" <?= permission(@$PurchasePayment,'delete');?>></td>
		                                   	
	                                  	</tr>
	                                   	
	                                   	<tr>
		                                   	<td>Sales<input type="hidden" value="Sales" name="Sales" /></td>
		                                   	<td><input type="checkbox" name="Salesv" value="1" class="flat-red" <?= permission(@$Sales,'view');?>></td>
		                                   	<td><input type="checkbox" name="Salesa" value="1" class="flat-red" <?= permission(@$Sales,'add');?>></td>
		                                   	<td><input type="checkbox" name="Salese" value="1" class="flat-red" <?= permission(@$Sales,'edit');?>></td>
		                                   	<td><input type="checkbox" name="Salesd" value="1" class="flat-red" <?= permission(@$Sales,'delete');?>></td>
		                             	</tr>
	                                   	<tr>
		                                   	<td>Sales Return(CREDIT NOTE)<input type="hidden" value="SalesReturnCN" name="SalesReturnCN" /></td>
		                                   	<td><input type="checkbox" name="SalesReturnCNv" value="1" class="flat-red" <?= permission(@$SalesReturnCN,'view');?>></td>
		                                   	<td><input type="checkbox" name="SalesReturnCNa" value="1" class="flat-red" <?= permission(@$SalesReturnCN,'add');?>></td>
		                                   	<td><input type="checkbox" name="SalesReturnCNe" value="1" class="flat-red" <?= permission(@$SalesReturnCN,'edit');?>></td>
		                                   	<td><input type="checkbox" name="SalesReturnCNd" value="1" class="flat-red" <?= permission(@$SalesReturnCN,'delete');?>></td>
		                             	</tr>
	                                   	<tr>
		                                   	<td>Sales Collection<input type="hidden" value="SalesCollection" name="SalesCollection" /></td>
		                                   	<td><input type="checkbox" name="SalesCollectionv" value="1" class="flat-red" <?= permission(@$SalesCollection,'view');?>></td>
		                                   	<td><input type="checkbox" name="SalesCollectiona" value="1" class="flat-red" <?= permission(@$SalesCollection,'add');?>></td>
		                                   	<td><input type="checkbox" name="SalesCollectione" value="1" class="flat-red" <?= permission(@$SalesCollection,'edit');?>></td>
		                                   	<td><input type="checkbox" name="SalesCollectiond" value="1" class="flat-red" <?= permission(@$SalesCollection,'delete');?>></td>
		                             	</tr>
	                                   	<tr>
		                                   	<td>Gst Assesment<input type="hidden" value="GstAssesment" name="GstAssesment" /></td>
		                                   	<td><input type="checkbox" name="GstAssesmentv" value="1" class="flat-red" <?= permission(@$GstAssesment,'view');?>></td>
		                                   	<td><input type="checkbox" name="GstAssesmenta" value="1" class="flat-red" <?= permission(@$GstAssesment,'add');?>></td>
		                                   	<td><input type="checkbox" name="GstAssesmente" value="1" class="flat-red" <?= permission(@$GstAssesment,'edit');?>></td>
		                                   	<td><input type="checkbox" name="GstAssesmentd" value="1" class="flat-red" <?= permission(@$GstAssesment,'delete');?>></td>
		                             	</tr>
                                   <tr>
                                   <td><b>ACCOUNTING</b></td>
                                   </tr>
                                   		<tr>
		                                   	<td>BANK WITHDRAWAL AND DEPOSIT<input type="hidden" value="bankWD" name="bankWD" /></td>
		                                   	<td><input type="checkbox" name="bankWDv" value="1" class="flat-red" <?= permission(@$bankWD,'view');?>></td>
		                                   	<td><input type="checkbox" name="bankWDa" value="1" class="flat-red" <?= permission(@$bankWD,'add');?>></td>
		                                   	<td><input type="checkbox" name="bankWDe" value="1" class="flat-red" <?= permission(@$bankWD,'edit');?>></td>
		                                   	<td><input type="checkbox" name="bankWDd" value="1" class="flat-red" <?= permission(@$bankWD,'delete');?>></td>
		                             	</tr>
                                   		<tr>
		                                   	<td>ACCOUNTING LEDGER<input type="hidden" value="Ledger" name="Ledger" /></td>
		                                   	<td><input type="checkbox" name="Ledgerv" value="1" class="flat-red" <?= permission(@$Ledger,'view');?>></td>
		                                   	<td><input type="checkbox" name="Ledgera" value="1" class="flat-red" <?= permission(@$Ledger,'add');?>></td>
		                                   	<td><input type="checkbox" name="Ledgere" value="1" class="flat-red" <?= permission(@$Ledger,'edit');?>></td>
		                                   	<td><input type="checkbox" name="Ledgerd" value="1" class="flat-red" <?= permission(@$Ledger,'delete');?>></td>
		                             	</tr>
                                   		<tr>
		                                   	<td>TRIAL BALANCE<input type="hidden" value="TrialBalance" name="TrialBalance" /></td>
		                                   	<td><input type="checkbox" name="TrialBalancev" value="1" class="flat-red" <?= permission(@$TrialBalance,'view');?>></td>
		                                   	<td><input type="checkbox" name="TrialBalancea" value="1" class="flat-red" <?= permission(@$TrialBalance,'add');?>></td>
		                                   	<td><input type="checkbox" name="TrialBalancee" value="1" class="flat-red" <?= permission(@$TrialBalance,'edit');?>></td>
		                                   	<td></td>
		                             	</tr>
                                   		<tr>
		                                   	<td>BALANCE SHEET<input type="hidden" value="BalanceSheet" name="BalanceSheet" /></td>
		                                   	<td><input type="checkbox" name="BalanceSheetv" value="1" class="flat-red" <?= permission(@$BalanceSheet,'view');?>></td>
		                                   	<td><input type="checkbox" name="BalanceSheeta" value="1" class="flat-red" <?= permission(@$BalanceSheet,'add');?>></td>
		                                   	<td><input type="checkbox" name="BalanceSheete" value="1" class="flat-red" <?= permission(@$BalanceSheet,'edit');?>></td>
		                                   	<td></td>
		                             	</tr>
                                   </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <input type="submit" name="btnSUB" class="btn btn-success" value="Update">
                               </div>
                            </div><!-- /.box -->
                           </form>
                        </div>
                    </div>      
                              
                </section><!-- /.content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('includes/footer');?>

 
 
</div>
 <script src="<?=base_url();?>plugins/jQuery/jQuery-2.2.0.min.js"></script>
 <!-- Bootstrap 3.3.6 -->
<script src="<?=base_url();?>plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>js/app.min.js"></script>
 

</body>
</html>
