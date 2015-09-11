$('.main-slider').slick({
  arrows: false,
  dots: true,
  fade: true,
  cssEase: 'linear',
  slidesToShow: 1
});

$('.portfolio-slider').slick({
  arrows: true,
  dots: false,
  slidesToShow: 1
});

$('.testimonial-slider').slick({
  arrows: true,
  dots: false,
  slidesToShow: 1
});

$('.group-slider').slick({
  arrows: false,
  dots: false,
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        infinite: true,
        arrows: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        infinite: true,
        arrows: true,
        dots: false
      }
    }
  ]
});

$('.projects-slider').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: false,
 asNavFor: '.projects-thumbnails',
});

$('.projects-thumbnails').slick({
 slidesToShow: 4,
 slidesToScroll: 1,
 asNavFor: '.projects-slider',
 dots: false,
 arrows: true,
 focusOnSelect: true
});

$('.projects-thumbnails .slide').removeClass('slick-active');

$('.projects-thumbnails .slide').eq(0).addClass('slick-active');

$(function() {
  $('#menu-menu li a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$( ".navbar-toggle" ).click(function() {
  $( ".nav-main" ).toggleClass( "display-on" );
});

    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(51.478069,0.090096),
            zoom: 16,
            zoomControl: false,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            scaleControl: false,
            scrollwheel: true,
            panControl: false,
            streetViewControl: false,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        }
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['WpGeeks', 'undefined', 'undefined', 'undefined', 'undefined', 51.4779361, 0.08624269999995704, 'http://localhost/dev6/wp-content/uploads/2015/09/161.png']
        ];
        for (i = 0; i < locations.length; i++) {
      if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
      if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
      if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';     }

}