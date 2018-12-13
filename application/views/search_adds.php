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
					   <h4><strong><?=$rc?></strong> result for All listing</h4>
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
			
			<div class="row" id="AddsContent">
				
				
			</div>
			<!-- /row -->
			
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30" id="loadButton">Load more</a></p>
			
		</div>
		<!-- /container -->
		
	</main>
	<?php $this->load->view('common_includes/footer');?>
	</div>
	<!-- page -->
	
	
	<div id="toTop"></div><!-- Back to top button -->
	<script type="text/javascript"> var base_url='<?=base_url()?>';</script>
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url()?>js/common_scripts.js"></script>
	<script src="<?=base_url()?>js/functions.js"></script>
	<script src="<?=base_url()?>assets/validate.js"></script>

	
  <script type="text/javascript">
$('#s_s_cat').val('<?=$category?>');
$('#s_cat').val('<?=$category?>');

  
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


var rc=<?=$rc?>;
var offset=0;
var limit=10;
var loading=false;
var defaultBtnText = "Load More";
var buttonLoadingText = "<img src='<?=base_url()?>img/loading.gif' alt='' /> Loading..";

$(document).scroll(function(){ 
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) 
    	 if(rc > offset)
		       load_comment();
    	 else 
    		 $("#loadButton").hide();
    });
$(window).bind("load", function() {	load_comment()});
function load_comment(){
	
	$.ajax({
		url: "<?php echo base_url();?>adds/load_adds/<?=$city?>/<?=$category?>/"+offset+"/"+limit,
		type: "POST",
		data:{},
		
		dataType:'json',
		success: function(t){	
			len =Object.keys(t).length;
		
			TimeLineData="";
			//alert(len);
			for (var i = 0;  i < len; ++i) {
				TimeLineData= TimeLineData + '<div class="col-xl-4 col-lg-6 col-md-6">'+
				'<div class="strip grid">'+
					'<figure>'+
						'<a href="#0" class="wish_bt"></a>'+
						'<a href="<?=base_url()?>adds/details/'+t[i]['add_id']+'-'+t[i]['url']+'"><img src="<?=base_url()?>site_img/adds/'+t[i]['img_1']+'" class="img-fluid" alt="'+t[i]['add_title']+'"><div class="read_more"><span>Read more</span></div></a>'+
						'<small>'+t[i]['category_name']+'</small>'+
					'</figure>'+
					'<div class="wrapper">'+
						'<h3><a href="<?=base_url()?>adds/details/'+t[i]['add_id']+'-'+t[i]['url']+'" title="'+t[i]['add_title']+'">'+t[i]['add_title']+'</a></h3>'+
						'<p>'+t[i]['add_description']+'</p>'+
						'<p style="height:auto;margin-bottom:2px"><i class="ti-home"></i> '+t[i]['address_line_1']+', '+t[i]['city_name']+', '+t[i]['state_name']+', '+t[i]['country_name']+'-'+t[i]['pin_code']+'</p>'+
						'<p style="height:auto;margin-bottom:2px"><i class="ti-headphone-alt"></i> '+t[i]['contacts']+'</p>'+
						'<p style="height:auto;margin-bottom:2px"><i class="ti-email"></i> '+t[i]['email']+'</p>'+
						'<p style="height:auto;margin-bottom:2px"><i class="ti-link"></i> <a href="'+t[i]['link']+'">'+t[i]['link']+'</a></p>'+
						
						'<a class="address" href="<?=base_url()?>adds/details/'+t[i]['add_id']+'-'+t[i]['url']+'" target="_blank">Get directions</a>'+
					'</div>'+
					'<ul>'+
						'<li><span class="loc_open"><a href="" class="simple-ajax-popup" >Quick View</a></span></li>'+
						'<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>'+
					'</ul>'+
				'</div>'+
			'</div>';
			
               }//adds DETAILS
					$("#AddsContent").append(TimeLineData); 
			offset=offset+limit;
			if(rc < offset)
			 {
				 $("#loadButton").hide();
				

				 }
			},
			 complete: function(data){
				
				 loading=false;
				 offset=offset+limit;
				 
				 },
			error: function(e) {}
				});
	}


</script>
</body>
</html>