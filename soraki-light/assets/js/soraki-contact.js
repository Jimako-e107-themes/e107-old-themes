examples = {
    initContactUsMap: function(){
        var myLatlng = new google.maps.LatLng(44.433530, 26.093928);
        var mapOptions = {
          zoom: 14,
          center: myLatlng,
          scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
        }
        var map = new google.maps.Map(document.getElementById("contactUsMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Hello World!"
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
        }
}


var parallax_map;
$().ready(function(){
    responsive = $(window).width();

    examples.initContactUsMap();
    
    if (responsive >= 768){
        parallax_map = $('.parallax').find('.big-map');
        
        $(window).on('scroll',function(){           
            parallax();
            gsdk.checkScrollForTransparentNavbar();
        });
    }
    
});        

var parallax = function() {
    var current_scroll = $(this).scrollTop();
    
    oVal = ($(window).scrollTop() / 3); 
    parallax_map.css('top',oVal);
}; 