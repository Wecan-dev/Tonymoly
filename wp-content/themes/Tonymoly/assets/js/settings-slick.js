$('.main-categories__content').slick({
  infinite: true,
  slidesToShow: 2,
  centerMode: true,
  speed: 500,
  cssEase: 'linear',
  centerPadding: '60px',
  slidesToScroll: 1,
  arrows: false,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0',
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        centerPadding: '0px',
        centerMode:true,

      }
    },
    {
      breakpoint: 480,
      settings: {
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        speed: 500,
        cssEase: 'linear',
        centerPadding: '105px',
        slidesToScroll: 1,
        arrows: false
      }
    }
  ]
});


$('.main-product__content').slick({
  infinite: true,
  autoplay: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  dots: false,
  arrows:false,
  fade: true,
  cssEase: 'linear',
  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000
      }
    }
  ]
});



$('.main-categoriesAll__content').slick({
  infinite: true,
  autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows:false,
  fade: true,
  cssEase: 'linear',
  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000
      }
    }
  ]
});

$('.main-tv__content').slick({
  infinite: true,
  slidesToShow: 2,
  centerMode: true,
  speed: 500,
  cssEase: 'linear',
  centerPadding: '60px',
  slidesToScroll: 1,
  arrows: false,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0',
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        centerPadding: '0px',
        centerMode:true,

      }
    },
    {
      breakpoint: 480,
      settings: {
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        speed: 500,
        cssEase: 'linear',
        centerPadding: '25px',
        slidesToScroll: 1,
        arrows: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});