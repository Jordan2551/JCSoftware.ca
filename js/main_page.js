$(document).ready(function() {

  $('.skill-carousel').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    speed: 1000,
    autoplaySpeed: 7000,
    slidesToShow: 8,
    slidesToScroll: 8,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.website-carousel').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      speed: 1000,
      autoplaySpeed: 7000,
      fade: true,
      cssEase: 'linear'
  });

  $('.clients-carousel').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      speed: 1000,
      autoplaySpeed: 5000,
      fade: true,
      cssEase: 'linear'
  });
  $(".arrow-down").mouseover(function(event) {
    $(this).prop('src', "http://jcsoftware.ca/wp-content/themes/jcsoftware/img/arrow-down-hover.png");
  });
  $(".arrow-down").mouseleave(function(event) {
    $(this).prop('src', "http://jcsoftware.ca/wp-content/themes/jcsoftware/img/arrow-down-idle.png");
  });
  $(".about-img").mouseover(function(event) {
    $(this).prop('src', "http://jcsoftware.ca/wp-content/themes/jcsoftware/img/jordan1B.png");
  });
  $(".about-img").mouseleave(function(event) {
    $(this).prop('src', "http://jcsoftware.ca/wp-content/themes/jcsoftware/img/jordan1W.png");
  });

});
