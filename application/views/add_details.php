<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>DETAILS.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?=base_url()?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?=base_url()?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?=base_url()?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?=base_url()?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?=base_url()?>img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/style.css" rel="stylesheet">
	<link href="<?=base_url()?>css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=base_url()?>css/custom.css" rel="stylesheet">
	
	<style>
        html,
        body {
            height: 100%;
        }
    </style>

</head>

<body>
	
	<div id="page">
		
	<header class="header_in map_view">
		<?php $this->load->view('common_includes/header_common');?>
		<!-- /container -->		
	</header>
	<!-- /header -->
	
	<main>
		<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-5 content-left order-md-last order-sm-last order-last">
			<div id="results_map_view">
		   <div class="container-fluid">
			   <div class="row">
				   <div class="col-10">
					   <h4><strong>145</strong> result for All listing</h4>
				   </div>
				   <div class="col-2">
					   <a href="#0" class="search_mob btn_search_mobile map_view"></a> <!-- /open search panel -->
						
				   </div>
			   </div>
			   <!-- /row -->
				<div class="search_mob_wp">
					<div class="custom-search-input-2 map_view">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="What are you looking for...">
							<i class="icon_search"></i>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Where">
							<i class="icon_pin_alt"></i>
						</div>
						<select class="wide">
							<option>All Categories</option>	
							<option>Shops</option>
							<option>Hotels</option>
							<option>Restaurants</option>
							<option>Bars</option>
							<option>Events</option>
							<option>Fitness</option>
						</select>
						<input type="submit" value="Search">
					</div>
				</div>
				<!-- /search_mobile -->
		   </div>
		   <!-- /container -->
	   </div>
	   <!-- /results -->
		
		<div class="filters_listing version_3">
			<div class="container-fluid">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Popular</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Latest</label>
						</div>
					</li>
					<li><a class="btn_filt_map" data-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="filters" data-text-swap="Less filters" data-text-original="More filters">More filters</a></li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
				
		
		<!-- /Filters -->
				
				
						<div class="col-md-12">
							<div class="strip grid">
								<figure>
									<a href="javascript:void()" class="wish_bt"></a>
									<a href="javascript:void()"><img src="<?=base_url();?>site_img/adds/<?=$add_details['img_1']?>" class="img-fluid" alt="<?=$add_details['add_title']?>">
										
									</a>
									<small><?=$add_details['category_name']?></small>
								</figure>
								<div class="wrapper">
									<h3><?=$add_details['add_title']?></h3>
									
									<p style="height:auto;margin-bottom:2px"><?=$add_details['add_description']?></p>
									<p style="height:auto;margin-bottom:2px"><i class="ti-home"></i> <?=$add_details['address_line_1']?>, <?=$add_details['city_name']?>, <?=$add_details['state_name']?>, <?=$add_details['country_name']?>-<?=$add_details['pin_code']?></p>
									<p style="height:auto;margin-bottom:2px"><i class="ti-headphone-alt"></i> <a href="tel:<?=$add_details['contacts']?>" target="_new"><?=$add_details['contacts']?></a></p>
									<p style="height:auto;margin-bottom:2px"><i class="ti-email"></i> <a href="<?=$add_details['link']?>" target="_new"><?=$add_details['link']?></a></p>
									
								</div>
								<ul>
									<li><span class="loc_open">Now Open</span></li>
									<li>
										<div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
									</li>
								</ul>
							</div>
						</div>
					
				
				
				
			</div>
			<!-- /content-left-->

			<div class="col-lg-7 map-right">
				<div id="map_right_listing"></div>
				<!-- map-->
			</div>
			<!-- /map-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->
	</main>
	
	<!--/main-->
	</div>
	<?php $this->load->view('common_includes/footer');?>
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url()?>js/common_scripts.js"></script>
	<script src="<?=base_url()?>js/functions.js"></script>
	<script src="<?=base_url()?>assets/validate.js"></script>
	
	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="<?=base_url()?>js/markerclusterer.js"></script>
	<script src="<?=base_url()?>js/listing_map.js"></script>
	<script src="<?=base_url()?>js/infobox.js"></script> 
  
</body>
</html>