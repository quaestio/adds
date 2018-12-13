<header class="header_in ">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="index.html">
							<img src="<?=base_url()?>logo.png" height="35" alt="" class="logo_sticky">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<ul id="top_menu">
						<li><a href="account.html" class="btn_add">Add Listing</a></li>
						<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
						<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
					</ul>
					<!-- /top_menu -->
					<a href="#menu" class="btn_mobile">
						<div class="hamburger hamburger--spin" id="hamburger">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</a>
					<nav id="menu" class="main-menu">
                        <ul>
                            <li><span><a href="<?=base_url()?>">Home</a></span>
                            <li><span><a href="<?=base_url()?>register">Register</a></span>
                               
                            </li>
                           
                           
                          
                           
                        </ul>
                    </nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<!-- search_mobile -->
		<div class="layer"></div>
		<div id="search_mobile">
			<a href="#" class="side_panel"><i class="icon_close"></i></a>
			<div class="custom-search-input-2">
				<div class="form-group">
					<input class="form-control" type="text" id="s_txt" name="s_txt" placeholder="What are you looking..">
					<i class="icon_search"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" id="s_city" name="s_city" placeholder="Where">
					<i class="icon_pin_alt"></i>
				</div>
				<select class="wide" name="s_cat" id="s_cat">
								<option value="All">All Categories</option>	
								<?php foreach($categories as $items)
									echo '<option value="'.$items['category_name'].'">'.$items['category_name'].'</option>';
								?>
				</select>
				
				<input type="submit" name="btnSearch" id="btnSearch" value="Search">
			</div>
		</div>
		<!-- /search_mobile -->
	</header>