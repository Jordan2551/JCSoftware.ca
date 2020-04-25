
$(document).ready(function() {

  $(".hb-button").on('click', function(){
    $("nav ul").toggleClass('show');
  });

  $('nav > ul > li> a').on('click', function(){
    if($('.hb-button').css('display') != "none"){
      $("nav ul").toggleClass('show');
    }
  });

  $(window).on("hashchange", function() { scrollBy(0, -130) });


});
