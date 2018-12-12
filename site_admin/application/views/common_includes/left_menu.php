<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=base_url();?>logo.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?=$this->session->userdata('emp_name');?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> <?=$this->session->userdata('designation');?></a>
            </div>
        </div>
      
        <!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
		<li class="active"><a href="<?=base_url();?>home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		<li class="active"><a href="<?=base_url();?>menu"><i class="fa fa-dashboard"></i> <span>Site Menus</span></a></li>
		<li class="active"><a href="<?=base_url();?>categories"><i class="fa fa-dashboard"></i> <span>Add Categories</span></a></li>
		<li class="treeview"><a href="#"><i class="fa fa-globe"></i><span>GEO Locations</span><i class="fa pull-right fa-angle-down"></i></a>
        	<ul class="treeview-menu">
        			<li><a href="<?=base_url();?>countries"><i class="fa fa-th"></i> <span>Countries</span></a></li>
        			<li><a href="<?=base_url();?>states"><i class="fa fa-th"></i><span>States</span></a></li>
        			<li><a href="<?=base_url();?>cities"><i class="fa fa-th"></i><span>Cities</span></a></li>
        		</ul>
        	</li>
    	<li class="active"><a href="<?=base_url();?>article"><i	class="fa fa-dashboard"></i> <span>Articles</span></a></li>
    	<li class="active"><a href="<?=base_url();?>customers"><i	class="fa fa-dashboard"></i> <span>Customers</span></a></li>
    	<li class="active"><a href="<?=base_url();?>add_manager/add_list"><i	class="fa fa-dashboard"></i> <span>Add Manager</span></a></li>
    	<li class="active"><a href="<?=base_url();?>emp"><i	class="fa fa-user"></i> <span>Employees</span></a></li>
    	<li class="active"><a href="<?=base_url();?>enquiry"><i	class="fa fa-dashboard"></i> <span>Enquiry List</span></a></li>
	 </ul>
	</section>
        <!-- /.sidebar -->
</aside>