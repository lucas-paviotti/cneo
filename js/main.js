$(document).ready(function() {
  $('.navbar .navbar-toggler').on('click', function() {
    $('.navbar .menu').toggleClass('open');
    $('.navbar .navbar-toggler').toggleClass('collapsed');
    if ($('.navbar .menu').hasClass("open")) {
      $('.navbar .menu .links li').addClass('animate__animated animate__ animate__fadeInDown');
      $('.navbar .menu-text').removeClass('animate__animated animate__ animate__fadeInDown');
    } else {
      $('.navbar .menu .links li').removeClass('animate__animated animate__ animate__fadeInDown');
      $('.navbar .menu-text').addClass('animate__animated animate__ animate__fadeInDown');
    }
  });
});

$(document).ready(function() {
  $('nav .navbar-toggler').on('click', function() {
    $('nav .menu').toggleClass('open');
    $('nav .navbar-toggler').toggleClass('collapsed');
    if ($('nav .menu').hasClass("open")) {
      $('nav .menu .links li').addClass('animate__animated animate__ animate__fadeInDown');
      $('nav .menu-text').removeClass('animate__animated animate__ animate__fadeInDown');
    } else {
      $('nav .menu .links li').removeClass('animate__animated animate__ animate__fadeInDown');
    }
  });
});

$(document).on('scroll', function(){
  if ($('nav .menu').hasClass('open')) {
    $('nav .menu').removeClass('open');
    $('nav .navbar-toggler').addClass('collapsed');
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

$('a[href*="#"]:not([href="#"])').click(function() {
  if ($(window).width() < 575) {
    var offset = -250; // <-- change the value here
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
          $('html, body').animate({
              scrollTop: target.offset().top + offset
          }, 600);
          return false;
      }
    }
  }
  else {
    var offset = -150; // <-- change the value here
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
          $('html, body').animate({
              scrollTop: target.offset().top + offset
          }, 600);
          return false;
      }
    }
  }
});