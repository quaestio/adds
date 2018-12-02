<footer id="footer">
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-lg-4 wow bounceInRight animated">
			<!-- Contact Us -->
			<div ><h4 class="color-sea">Contact Us</h4></div> 
			<address class="md-margin-bottom-40">
							Near Kali Mandir<br />
						Kadamkanan, Jhargram<br />
						Pin:721507<br />
							<span>P: <a href="callto://9800970001">9800970001</a> </span><br>
							
							Email: <a href="sales@quaestio.in" class="">sales@quaestio.in</a><br>
							Email: <a href="quaestioindia@gmail.com" class="">quaestioindia@gmail.com</a>
						</address>
			<!-- End Contact Us -->
			
				
		</div>
	<div class="col-xs-12 col-sm-4 col-lg-4 wow bounceInUp animated">
	
		
		<!-- Social Links -->
			<div class="social-icon">
				<ul>
					<li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
					<li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
					<li><a class="youtube" href=""><i class="fa fa-youtube"></i></a></li>
					<li><a class="dribble" href=""><i class="fa fa-globe"></i></a></li>
					<li><a class="rss" href=""><i class="fa fa-rss"></i></a></li>
				</ul>
			</div>
			<!-- End Social Links -->
	</div>
	<div class="col-xs-12 col-sm-4 col-lg-4 wow bounceInLeft animated">
	 <div class="headline"><h4>Links</h4></div> 
	 <div class="footer-service">
			 <ul class="link-list">
                <li><a href="<?=base_url()?>article/read/about-us" title="About Us">About Us</a></li>
                <li><a href="<?=base_url()?>contact_us" title="Contact Us">Contact Us</a></li>
                <li><a href="<?=base_url()?>article/read/terms-and-conditions" title="Terms and condition">Terms and condition</a></li>
                <li><a href="<?=base_url()?>article/read/delivery-and-shipping-policy" title="Delivery and shipping policy" >Delivery and shipping policy</a></li>
                <li><a href="<?=base_url()?>article/read/privacy-policy" title="Privacy policy">Privacy policy</a></li>
                <li><a href="<?=base_url()?>article/read/refund-and-cancellation" title="Refund and cancellation">Refund and cancellation</a></li>
                 
              </ul>
	</div>
	

	
	
	</div>

</div>
</div>
<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">                     
						<p class="">
							2014 &copy; Your Ogr Name. ALL Rights Reserved. 
							<a href="<?=base_url()?>article/read/privacy_policy" title="Privacy Policy">Privacy Policy</a> | <a href="<?=base_url()?>article/read/terms_and_conditions"  title="Terms and Conditions">Terms &amp; Conditions </a>
						
						</p>
						<p style="font-size:70%">
							location:<?=$this->session->userdata('g_locality')?>, <?=$this->session->userdata('g_district')?>, <?=$this->session->userdata('g_state')?>, <?=$this->session->userdata('g_country')?>-<?=$this->session->userdata('g_zip')?> 
							
						</p>
					</div>
					
				</div>
			</div> 
		</div>
		</footer>
		<script>
		var base_url='<?=base_url()?>';
		var location_set='<?=$this->session->userdata('g_country')==""?'N':'Y'?>';

		</script>