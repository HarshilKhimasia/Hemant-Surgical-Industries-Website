// Services Section carousel
var nxtIcon = '<img src="assets/img/left-white-arrow.png" alt:"right">';
var prvIcon = '<img src="assets/img/red-right-arrow.png" alt:"prev">';

jQuery(document).ready(function ($) {
  let slider = $('.owl-services');
  slider.each(function () {
    $(this).owlCarousel({
      nav: false,
      loop: false,
      dots: false,
      pagination: false,
      margin: 25,
      autoHeight: false,
      stagePadding: 50,
      navText: [
        nxtIcon,
        prvIcon
      ],
      responsive: {
        0: {
          items: 1,
          stagePadding: 25,
          margin: 10,
          dots: true,
        },
        767: {
          items: 3,
          stagePadding: 25,
        },
        1000: {
          items: 3,
        },

      }
    });
  });
});










// social responsibility carousel
var nextIcon = '<img src="assets/img/left-white-arrow.png" alt:"right">';
var prevIcon = '<img src="assets/img/red-right-arrow.png" alt:"prev">';

$('.owl-social').owlCarousel({
  loop: true,
  margin: 10,
  autoplay: false,
  nav: true,
  dots: false,
  navText: [
    nextIcon,
    prevIcon
  ],
  autoWidth: true,
  responsiveClass:true,
  responsive: {
    0: {
      items: 1.5
    },

    1000: {
      items: 2.5
    },

    1440:{
      items: 2.5
    },

    1600: {
      items: 2.5
    },

    1920: {
      items: 2.5
    }
  }
});

// Products Carousel
$('.products-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

$('.products-profile-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

$('.products-contact-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

$('.products-covidcare-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

// Products Carousel

// // testimonials carousel
var nIcon = '<img src="assets/img/forward_icon-1.svg" alt:"right" class="n-right">';
var pIcon = '<img src="assets/img/forward_icon.svg" alt:"prev" class="p-right">';

$('.owl-testimonial').owlCarousel({
  loop: true,
  margin: 25,
  autoplay: false,
  nav: true,
  dots: true,
  navText: [
    nIcon,
    pIcon
  ],
  responsive: {
    0: {
      items: 1,
      margin: 30
    },

    1000: {
      items: 1.5
    }
  }
});

/**********About Us Page Start*********/

// Mission carousel Start
$('.owl-mission').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})

// Journey Carousel
// jQuery(document).ready(function($){
//   let slider = $('.owl-journey');
//   slider.each(function () {
//     $(this).owlCarousel({
//       nav: true,
//       loop:false,
//       dots: false,
//       pagination: false,
//       margin: 25,
//       autoHeight: false,
//       stagePadding: 50,
//       responsive:{
//         0:{
//           items: 1,
//           stagePadding: 0,
//           margin: 30,
//         },
//         767:{
//           items: 3,
//           stagePadding: 25,
//         },
//         1000:{
//           items: 3,
//         }
//       }
//     });
//   });
// }); 



// teams section carousel

// // testimonials carousel
var tnIcon = '<img src="assets/img/left-white-arrow.png" alt:"right">';
var tprvIcon = '<img src="assets/img/red-right-arrow.png" alt:"prev">';

$('.owl-team').owlCarousel({
  loop: true,
  margin: 20,
  autoplay: false,
  nav: true,
  dots: false,
  navText: [
    tnIcon,
    tprvIcon
  ],
  responsive: {
    0: {
      items: 1
    },

    1000: {
      items: 1
    }
  }
});

/**********About Us Page End*********/ 




// Products Page Start

var $filterCheckboxes = $('input[type="checkbox"]');
var filterFunc = function() {
  
  var selectedFilters = {};

  $filterCheckboxes.filter(':checked').each(function() {

    if (!selectedFilters.hasOwnProperty(this.name)) {
      selectedFilters[this.name] = [];
    }

    selectedFilters[this.name].push(this.value);
  });

  // create a collection containing all of the filterable elements
  var $filteredResults = $('.flower');

  // loop over the selected filter name -> (array) values pairs
  $.each(selectedFilters, function(name, filterValues) {

    // filter each .flower element
    $filteredResults = $filteredResults.filter(function() {

      var matched = false,
        currentFilterValues = $(this).data('category').split(' ');

      // loop over each category value in the current .flower's data-category
      $.each(currentFilterValues, function(_, currentFilterValue) {

        // if the current category exists in the selected filters array
        // set matched to true, and stop looping. as we're ORing in each
        // set of filters, we only need to match once

        if ($.inArray(currentFilterValue, filterValues) != -1) {
          matched = true;
          return false;
        }
      });

      // if matched is true the current .flower element is returned
      return matched;

    });
  });

  $('.flower').hide().filter($filteredResults).show();
}

$filterCheckboxes.on('change', filterFunc);

// Products Page End

// Character Limitatios in Products Page start
$(".text-box p").text(function(index, currentText) {
  var maxLength = $(this).parent().attr('data-maxlength');
  if(currentText.length >= maxLength) {
    return currentText.substr(0, maxLength) + "...";
  } else {
    return currentText
  } 
});
// Character Limitatios in Products Page end

// Products page load more start
$(function () {
  $(".col-md-4").slice(0, 6).show();
  $("body").on('click touchstart', '.load-more', function (e) {
    e.preventDefault();
    $(".col-md-4:hidden").slice(0, 6).slideDown();
    if ($(".col-md-4:hidden").length == 0) {
      $(".load-more").css('visibility', 'hidden');
    }
    $('html,body').animate({
      scrollTop: $(this).offset().top
    }, 1000);
  });
});
// Products page load more end

// inner products slider start
if ( $('.product__slider-main').length ) {
  var $slider = $('.product__slider-main')
      .on('init', function(slick) {
          $('.product__slider-main').fadeIn(1000);
      })
      .slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          autoplay: false,
          lazyLoad: 'ondemand',
          autoplaySpeed: 3000,
          asNavFor: '.product__slider-thmb'
      });

var $slider2 = $('.product__slider-thmb')
      .on('init', function(slick) {
          $('.product__slider-thmb').fadeIn(1000);
      })
      .slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          lazyLoad: 'ondemand',
          asNavFor: '.product__slider-main',
          dots: false,
          centerMode: false,
          focusOnSelect: true
      });

//remove active class from all thumbnail slides
$('.product__slider-thmb .slick-slide').removeClass('slick-active');

//set active class to first thumbnail slides
$('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');

// On before slide change match active thumbnail to current slide
$('.product__slider-main').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
var mySlideNumber = nextSlide;
$('.product__slider-thmb .slick-slide').removeClass('slick-active');
$('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
});


// init slider
require(['js-sliderWithProgressbar'], function(slider) {

$('.product__slider-main').each(function() {

  me.slider = new slider($(this), options, sliderOptions, previewSliderOptions);

  // stop slider
  //me.slider.stop();

  // start slider
  //me.slider.start(index);

  // get reference to slick slider
  //me.slider.getSlick();

});
});
var options = {
progressbarSelector    : '.bJS_progressbar'
, slideSelector        : '.bJS_slider'
, previewSlideSelector : '.bJS_previewSlider'
, progressInterval     : ''
  // add your own progressbar animation function to sync it i.e. with a video
  // function will be called if the current preview slider item (".b_previewItem") has the data-customprogressbar="true" property set
, onCustomProgressbar : function($slide, $progressbar) {}
}

// slick slider options
// see: https://kenwheeler.github.io/slick/
var sliderOptions = {
slidesToShow   : 1,
slidesToScroll : 1,
arrows         : false,
fade           : true,
autoplay       : true
}

// slick slider options
// see: https://kenwheeler.github.io/slick/
var previewSliderOptions = {
slidesToShow   : 3,
slidesToScroll : 1,
dots           : false,
focusOnSelect  : true,
centerMode     : true
}
}
// inner products image slider end

// inner products image zoom start



// inner products image zoom end


// similar products carousel end