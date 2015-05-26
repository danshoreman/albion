	
/*********************
All js stuff below
*********************/
	
(function($)	{
	
	$(document).ready(function() {
	
		$(document).foundation();
    
    $('.toggle').click(function(){
			$('.main-menu').slideToggle('fast');
		});
		
		// On window resize reset menu to ensure nav displays
		var menu = $('.main-menu'); 
		$(window).on('resize', function(){     
		    if(!$(".toggle").is(":visible") && !menu.is(':visible'))
		    {
		      menu.css({'display':''});   
		    }
		});
    
    
    $('.bxslider').bxSlider({
	    controls: false,
	    mode: 'fade'
    });
    
    
    equalheight = function(container){
	
		var currentTallest = 0,
		     currentRowStart = 0,
		     rowDivs = new Array(),
		     $el,
		     topPosition = 0;
		 $(container).each(function() {
		
		   $el = $(this);
		   $($el).height('auto')
		   topPostion = $el.position().top;
		
		   if (currentRowStart != topPostion) {
		     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		       rowDivs[currentDiv].height(currentTallest);
		     }
		     rowDivs.length = 0; // empty the array
		     currentRowStart = topPostion;
		     currentTallest = $el.height();
		     rowDivs.push($el);
		   } else {
		     rowDivs.push($el);
		     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		  }
		   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		     rowDivs[currentDiv].height(currentTallest);
		   }
		 });
		}
		
		$(window).load(function() {
		  equalheight('.shop-wrap .product');
		  equalheight('#latest .product-list');
		});
		
		
		$(window).resize(function(){
		  equalheight('.shop-wrap .product');
		  equalheight('#latest .product-list');
		});

	});

})(jQuery);


function initialize() {
  var myLatlng = new google.maps.LatLng(53.83463,-1.719202);
  var mapOptions = {
    zoom: 15,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
