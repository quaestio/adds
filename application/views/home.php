<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Post local facility like Doctors, Departmental Stores, Hotels, Restaurants, Cars and many more">
    <meta name="author" content="Ansonika">
    <title>Want A Facility | Local Facility Search | Post A Facility | Find anything in your Locality.</title>

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
		
	<?php $this->load->view('common_includes/header');?>
	<!-- /header -->
	
	<main class="pattern">
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>I want A ......!</h3>
					<p>Discover top rated facilities around your locality</p>
					<form method="post">
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" id="s_txt" name="s_txt"  placeholder="I want A...">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<input class="form-control" type="text" id="s_city" name="s_city" placeholder="In my City">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide" name="s_cat" id="s_cat">
								<option value="All">All Categories</option>	
								<?php foreach($categories as $items)
									echo '<option value="'.$items['category_name'].'">'.$items['category_name'].'</option>';
								?>
									
									
								</select>
							</div>
							<div class="col-lg-2">
								<input type="submit" name="btnSearch" id="btnSearch" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->
		
		<div class="main_categories">
			<div class="container">
				<ul class="clearfix">
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-shop"></i>
							<h3>Shops</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-lodging"></i>
							<h3>Hotels</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-restaurant"></i>
							<h3>Restaurants</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-bar"></i>
							<h3>Bars</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-dot-3"></i>
							<h3>More</h3>
						</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /main_categories -->
		
		<div class="container margin_60_35">
			<div class="main_title_3">
				<span></span>
				<h2>Famous Stores</h2>
				<p>This are the famous stores in your Locality</p>
				<a href="grid-listings-filterscol.html">See all</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="detail-shop.html" class="grid_item small">
						<figure>
							<img src="img/shop_1.jpg" alt="">
							<div class="info">
								<h3>Victoria Secretes</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-shop.html" class="grid_item small">
						<figure>
							<img src="img/shop_2.jpg" alt="">
							<div class="info">
								<h3>Louis Vuitton</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-shop.html" class="grid_item small">
						<figure>
							<img src="img/shop_3.jpg" alt="">
							<div class="info">
								<h3>Burberry</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-shop.html" class="grid_item small">
						<figure>
							<img src="img/shop_4.jpg" alt="">
							<div class="info">
								<h3>Pinko</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
			<!-- /row -->
			
			<div class="main_title_3">
				<span></span>
				<h2>Popular Hotels</h2>
				<p>Here are some Hotels in Your Locality</p>
				<a href="grid-listings-filterscol.html">See all</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="detail-hotel.html" class="grid_item small">
						<figure>
							<img src="img/hotel_1.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Mariott</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-hotel.html" class="grid_item small">
						<figure>
							<img src="img/hotel_2.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Concorde</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-hotel.html" class="grid_item small">
						<figure>
							<img src="img/hotel_3.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel La Defanse</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-hotel.html" class="grid_item small">
						<figure>
							<img src="img/hotel_4.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Carlton</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
			<!-- /row -->
			
			<div class="main_title_3">
				<span></span>
				<h2>Top Restaurants</h2>
				<p>Book Top Restaurants in Your Locality.</p>
				<a href="grid-listings-filterscol.html">See all</a>
			</div>
			<div class="row ">
				<div class="col-lg-3 col-sm-6">
					<a href="detail-restaurant.html" class="grid_item small">
						<figure>
							<img src="img/restaurant_1.jpg" alt="">
							<div class="info">
								<h3>Da Alfredo</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-restaurant.html" class="grid_item small">
						<figure>
							<img src="img/restaurant_2.jpg" alt="">
							<div class="info">
								<h3>Bistroter</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-restaurant.html" class="grid_item small">
						<figure>
							<img src="img/restaurant_3.jpg" alt="">
							<div class="info">
								<h3>Da Luigi</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="detail-restaurant.html" class="grid_item small">
						<figure>
							<img src="img/restaurant_4.jpg" alt="">
							<div class="info">
								<h3>Marco King</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
		<div class="call_section">
			<div class="wrapper">
				<div class="container margin_80_55">
					<div class="main_title_2">
						<span><em></em></span>
						<h2>How it Works</h2>
						<p>Register and place your adds and know your Place .</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-search"></i>
								<h3>Search Facilities</h3>
								<p>Select your City, Select category and get the list of facility in your locality.</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>View Location Info</h3>
								<p>See the details and see the direction from your facility. Get it on map</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Book, Reach or Call</h3>
								<p>Get the booking no and website. Ring the phone and book it</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5s"><a href="<?=base_url()?>register" class="btn_1 rounded">Register Now</a></p>
				</div>
				<canvas id="hero-canvas" width="1920" height="1080"></canvas>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
		
			
		<!-- /container -->
	</main>
	<!-- /main -->

	<?php $this->load->view('common_includes/footer');?>
	<!--/footer-->
	</div>
	
	
	<div id="toTop"></div><!-- Back to top button -->
	<script type="text/javascript"> var base_url='<?=base_url()?>';</script>
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url()?>js/common_scripts.js"></script>
	<script src="<?=base_url()?>js/functions.js"></script>
	<script src="<?=base_url()?>assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?=base_url()?>js/animated_canvas_min.js"></script>
<script type="text/javascript">
$('#btnSearch').click(function(e){
	e.preventDefault();
	var s_txt =$('#s_txt').val()==""?'All':$('#s_txt').val();
	var s_city =$('#s_city').val()==""?'All':$('#s_city').val();
	var s_cat =$('#s_cat').val()==""?'All':$('#s_cat').val();
	location.href='<?=base_url()?>adds/search_adds/'+s_city.replace(/ /g,"_")+'/'+s_cat+'?q='+s_txt;

	
});


</script>
</body>
</html>