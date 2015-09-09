$('.main-slider').slick({
  arrows: false,
  dots: true,
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
  slidesToShow: 4
});

pixelperfect.init( { 
    image: "http://localhost/dev6/wp-content/uploads/2015/09/screen.jpg",
    opacity: .5
} );