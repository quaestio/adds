jQuery(document).ready(function( $ ) {

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Stick the header at top on scroll
  $("#header").sticky({topSpacing:0, zIndex: '50'});

  // Initiate the wowjs animation library
  new WOW().init();

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });


  

  // Testimonials carousel (uses the Owl Carousel library)
 

  // For use with dynamic Google maps
  if ($('#google-map').length) {
    var get_latitude = $('#google-map').data('latitude');
    var get_longitude = $('#google-map').data('longitude');

    function initialize_google_map() {
      var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
      var mapOptions = {
        zoom: 14,
        scrollwheel: false,
        center: myLatlng
      };
      var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
      var marker = new google.maps.Marker({
        position: myLatlng,
        map: map
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize_google_map);
  }
  function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
      } else {
    	  $('#LatLon').html("Geolocation is not supported by this browser.");
      }
  }
  function showPosition(position) {
      $('#LatLon').html("Latitude: " + position.coords.latitude + " Longitude: " + position.coords.longitude);
      if(position.coords.latitude!="" && position.coords.longitude !="")
          {
    		 url= "https://maps.googleapis.com/maps/api/geocode/json?latlng=22.6345486,86.7609923&result_type=country|locality&key=AIzaSyAxBq-otNeyQqfHcb0Lc8uQBoeOJJEJAdE";
              $.ajax({
          		url: url,
          		type: "GET",
          		dataType: 'json',
          		
          		success: function(data)
          		{
              		if(data.status){
          			  			for (i = 0; i < data.results[0].address_components.length; i++) 
          			
          					console.log(data.results[0].address_components[i].long_name+ "|"+
          					data.results[0].address_components[i].short_name+ "|"+
          					data.results[0].address_components[i].types[0]
          					
                  			);
          			
			                    $.ajax({
			                		url: base_url+'cc/location_info',
			                		type: "POST",
			                		dataType: 'json',
			                		data: { 'dt':data },
			                		success: function(data)
			                		{
			                			
			                    		alert(data);
			                    		
			                				
			                		},
			                		complete: function(data) {
			                			 
			            	 	       
			                			},
			                		error: function(e) 
			                		{
			                			// alert(e);
			                		} 	        
			                		        
			                  });
              		}
          				
          		},
          		complete: function(data) {
          			 
      	 	       
          			},
          		error: function(e) 
          		{
          			// alert(e);
          		} 	        
          		        
            });
          }
  }
  if(location_set=='N')
  getLocation();
});
