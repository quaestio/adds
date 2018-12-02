   <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:quaestioindia@gmail.com">quaestioindia@gmail.com</a>
        <i class="fa fa-envelope-o"></i> <a href="mailto:quaestioindia@gmail.com">support@quaestio.in</a>
        <i class="fa fa-phone"></i> +91 9800 9700 01
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?=base_url()?>" class="scrollto"><img src="<?=base_url()?>logo.png" /></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
       <ul class="nav-menu">
       <li class="menu-active"><a href="<?=base_url()?>">Home</a></li>
       <?php 
			 
			    		foreach ($top_menu as $items)
			    		{
			    			if(sizeof($items['sub_menu'])>0)
			    			{
			    				?>
			    				<li class="menu-has-children">
							    	<a href="#"><?=$items["menu_name"]?> <span class="caret"></span></a>
							          <ul>
							          <?php 
							          foreach ($items['sub_menu'] as $subItems)
							          {?>
							            <li><a href="<?=base_url().'article/read/'.$subItems["seo_url"]?>"><?=$subItems["menu_name"]?></a></li>
							           <?php }?> 
							          </ul>
							        </li>
			    				<?php 
			    			}
			    			else 
			    			
			    			echo'<li><a href="'.base_url().'article/read/'.$items["seo_url"].'">'.$items["menu_name"].'</a></li>';
			    			
			    		}
			       
      echo'<li><a href="'.base_url().'article/read/faq">Faq</a></li>';
      echo'<li><a href="'.base_url().'contact_us">Contact Us</a></li>';
      if($this->session->userdata('customer_id'))
      {
          ?>
      
          
          
        <li class="active"><a href="<?=base_url();?>profile">Dashboard</a></li>
        <li class="active"><a href="<?=base_url();?>login/logout">Logout</a></li>
        <?php } else {?>
        <li><a class='register color-light' href='<?=base_url()?>register' title='Register'><i class='fa fa-th'></i> No account? Register</a></li>
       <li class="active"><a href="<?=base_url();?>login">Login</a></li>
     <?php } 
     
     ?>
      
     </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
