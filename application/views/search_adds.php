<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>SPARKER | Premium directory and listings template by Ansonika.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?=base_url()?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="<?=base_url()?>image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/style.css" rel="stylesheet">
	<link href="<?=base_url()?>css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=base_url()?>css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
	<?php $this->load->view('common_includes/header_all')?>
	<!-- /header -->
	
	<main>
		<div id="results">
		   <div class="container">
			   <div class="row">
				   <div class="col-lg-3 col-md-4 col-10">
					   <h4><strong>145</strong> result for All listing</h4>
				   </div>
				   <div class="col-lg-9 col-md-8 col-2">
					   <a href="#0" class="side_panel btn_search_mobile"></a> <!-- /open search panel -->
						<div class="row no-gutters custom-search-input-2 inner">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text"  id="s_s_txt" name="s_s_txt"  placeholder="What are you looking for...">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" id="s_s_city" name="s_s_city" placeholder="Where">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide" name="s_s_cat" id="s_s_cat">
								<option value="All">All Categories</option>	
								<?php foreach($categories as $items)
									echo '<option value="'.$items['category_name'].'">'.$items['category_name'].'</option>';
								?>
				</select>
				
							</div>
							<div class="col-lg-1">
								<input type="submit" name="btnSearchComp" id="btnSearchComp" value="Search">
							</div>
						</div>
				   </div>
			   </div>
			   <!-- /row -->
		   </div>
		   <!-- /container -->
	   </div>
		
	   	<!-- /results -->		
		<div class="filters_listing sticky_horizontal">
			<div class="container">
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
					<li><a class="btn_filt" data-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="filters" data-text-swap="Less filters" data-text-original="More filters">More filters</a></li>
					<li>
						<div class="layout_view">
							<a href="#0" class="active"><i class="icon-th"></i></a>
							<a href="listing-2.html"><i class="icon-th-list"></i></a>
							<a href="list-map.html"><i class="icon-map"></i></a>
						</div>
					</li>
					<li>
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- /Map -->
		
		<div class="collapse" id="filters">
			<div class="container margin_30_5">
				<div class="row">
					<div class="col-md-4">
						<h6>Rating</h6>
						<ul>
							<li>
								<label class="container_check">Superb 9+ <small>25</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Very Good 8+ <small>133</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Good 7+ <small>32</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Pleasant 6+ <small>12</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h6>Tags</h6>
						<ul>
							<li>
								<label class="container_check">Wireless Internet <small>12</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Smoking Allowed <small>11</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Wheelchair Accesible <small>23</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Parking <small>56</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="add_bottom_30">
						<h6>Distance</h6>
							<div class="distance"> Radius around selected destination <span></span> km</div>
							<input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /Filters -->

		<div class="container margin_60_35">
			
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="strip grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="detail-restaurant.html"><img src="img/location_1.jpg" class="img-fluid" alt=""><div class="read_more"><span>Read more</span></div></a>
							<small>Restaurant</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">Da Alfredo</a></h3>
							<small>27 Old Gloucester St</small>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">Now Open</span></li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="strip grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="detail-restaurant.html"><img src="img/location_2.jpg" class="img-fluid" alt=""><div class="read_more"><span>Read more</span></div></a>
							<small>Bar</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">Limon Bar</a></h3>
							<small>438 Rush Green Road, Romford</small>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">Now Open</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="strip grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="detail-shop.html"><img src="img/location_3.jpg" class="img-fluid" alt=""><div class="read_more"><span>Read more</span></div></a>
							<small>Shop</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-shop.html">Mary Boutique</a></h3>
							<small>43 Stephen Road, Bexleyheath</small>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_closed">Now Closed</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="strip grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="detail-restaurant.html"><img src="img/location_4.jpg" class="img-fluid" alt=""><div class="read_more"><span>Read more</span></div></a>
							<small>Bar</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">Garden Bar</a></h3>
							<small>40 Beechwood Road, Sanderstead</small>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_closed">Now Closed</span></li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="strip grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="detail-hotel.html"><img src="img/location_5.jpg" class="img-fluid" alt=""><div class="read_more"><span>Read more</span></div></a>
							<small>Hotel</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-hotel.html">Mariott Hotel</a></h3>
							<small>213 Malden Road, New Malden</small>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">Now Open</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="strip grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="detail-restaurant.html"><img src="img/location_6.jpg" class="img-fluid" alt=""><div class="read_more"><span>Read more</span></div></a>
							<small>Event</small>
						</figure>
						<div class="wrapper">
							<h3><a href="detail-restaurant.html">Six Pistols</a></h3>
							<small>Coverdale Road, Willesden</small>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a>
						</div>
						<ul>
							<li><span class="loc_open">Now Open</span></li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.8</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /strip grid -->
			</div>
			<!-- /row -->
			
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
			
		</div>
		<!-- /container -->
		
	</main>
	<?php $this->load->view('common_includes/footer');?>
	</div>
	<!-- page -->
	
	
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url()?>js/common_scripts.js"></script>
	<script src="<?=base_url()?>js/functions.js"></script>
	<script src="<?=base_url()?>assets/validate.js"></script>

	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="<?=base_url()?>js/markerclusterer.js"></script>
	<script src="<?=base_url()?>js/map.js"></script>
	<script src="<?=base_url()?>js/infobox.js"></script>
  <script type="text/javascript">
$('#btnSearch').click(function(e){
	e.preventDefault();
	var s_txt =$('#s_txt').val()==""?'All':$('#s_txt').val();
	var s_city =$('#s_city').val()==""?'All':$('#s_city').val();
	var s_cat =$('#s_cat').val()==""?'All':$('#s_cat').val();
	location.href='<?=base_url()?>adds/search_adds/'+s_city.replace(/ /g,"_")+'/'+s_cat.replace(/ /g,"_")+'?q='+s_txt;

	
});
$('#btnSearchComp').click(function(e){
	e.preventDefault();
	var s_txt =$('#s_s_txt').val()==""?'All':$('#s_s_txt').val();
	var s_city =$('#s_s_city').val()==""?'All':$('#s_s_city').val();
	var s_cat =$('#s_s_cat').val()==""?'All':$('#s_s_cat').val();
	location.href='<?=base_url()?>adds/search_adds/'+s_city.replace(/ /g,"_")+'/'+s_cat.replace(/ /g,"_")+'?q='+s_txt;

	
});


</script>
</body>
</html>