$(document).ready(function() {
  $('.navbar-toggler').on('click', function() {
    $('.menu').toggleClass('open');
    $('.navbar-toggler').toggleClass('collapsed');
    if ($('.menu').hasClass("open")) {
      $(".menu .links").css({
        "opacity":"0",
        "display":"block",
      }).show().animate({opacity:1});
    } else {
      $(".menu .links").css({
        "opacity":"1",
        "display":"none",
      }).hide().animate({opacity:0});
    }
    //$('.item-navbar').toggleClass('animated fadeInDown');
  });
});

$(document).on('scroll', function(){
  if ($('.overlay').hasClass('open')) {
    //$('.overlay').removeClass('open');
    $('.navbar-toggler').addClass('collapsed');
  }
});

$(".blue").click(
  function () {
    $(".blue").removeClass('active');
    $(this).toggleClass('active');
    var texto = $(this).attr("data-text");
    $("#text-shipping p").text(texto);
  }
);

$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();

  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
});