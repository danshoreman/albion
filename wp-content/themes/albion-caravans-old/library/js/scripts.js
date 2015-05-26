	
/*********************
All js stuff below
*********************/
	
(function($)	{
	
	$(document).ready(function() {
	
		$(document).foundation({
      equalizer: {
         equalize_on_stack: false
      }
    });
    
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
