new WOW().init();

$(function () {
  'use strict'

  $('.navbar-toggler').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})

$(function () {
  'use strict'

  $('.scroll-link').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})


// menu hambuger
$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $('.nav-link').addClass('fixed-color');
  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $('.nav-link').removeClass('fixed-color');

    }
  }
});

WebFont.load({
  google: {
    families: ['Montserrat:300,400,500,600,700,900', 'Muli:300,400,500,600,700,900']
  }
});


$(window).scroll(function() {
  if ($(this).scrollTop()) {
      $('.js-gotop').fadeIn();
  } else {
      $('.js-gotop').fadeOut();
  }
});

$(".js-gotop").click(function() {
  $("html, body").animate({scrollTop: 0}, 1000);
});

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a.scroll-link").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      event.preventDefault();
      
      // Store hash
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 'slow', function(){
        window.location.hash = hash;
      });
    }
  });
});

$(document).ready(function() {
  $('#toscana-slider').on('init', function(e, slick) {
      var $firstAnimatingElements = $('div.main-slider__item:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);    
  });

  $('#toscana-slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('div.main-slider__item[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);    
  });

  $('.main-slider').slick({
    infinite: true,
    fade: true,
    cssEase: 'linear',
    autoplay:true,
    autoplaySpeed: 5000
  });

  function doAnimations(elements) {
    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    elements.each(function() {
      var $this = $(this);
      var $animationDelay = $this.data('delay');
      var $animationType = 'animated ' + $this.data('animation');
      $this.css({
        'animation-delay': $animationDelay,
        '-webkit-animation-delay': $animationDelay
      });
      $this.addClass($animationType).one(animationEndEvents, function() {
        $this.removeClass($animationType);
      });
    });
  }
});

// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() <= 767)) {
    $('.navbar').addClass('fixed-top');

  } else {
    $('.navbar').removeClass('fixed-top');

  }
});








$(document).ready(function() {
  var $slider = $('.main-productfull__content');
  var $progressBar = $('.progress');
  var $progressBarLabel = $( '.slider__label' );
  
  $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
    var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
    
    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc );
    
    $progressBarLabel.text( calc + '% completed' );
  });
  
  $slider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 400,
    arrows:false
  });  
});