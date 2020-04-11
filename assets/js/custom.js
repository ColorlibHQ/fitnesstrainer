(function ($) {
  "use strict";

  $('#datepicker').datepicker();

  $('.popup_youtube').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  $(document).ready(function() {
    $('select').niceSelect();
  });

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });


  var review = $('.client_review_part');
  if (review.length) {
    review.owlCarousel({
      items: 1,
      loop: true,
      dots: true,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: false,
      smartSpeed: 2000,
    });
  }
  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.single_page_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.single_page_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });
  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.home_menu').addClass('home_menu_fixed animated fadeInDown');
    } else {
      $('.home_menu').removeClass('home_menu_fixed animated fadeInDown');
    }
  });


  $('.slider').slick({
    slidesToShow: 1,
    speed: 1000,
    infinite: true,
    autoplay:false,
    pauseOnHover: true,
    dots: false,
    prevArrow: '<i class="slick_left flaticon-left-arrow"></i>',
    nextArrow: '<i class="slick_right flaticon-arrow-pointing-to-right"></i>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }, 
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
    ]
  });

  if ($('.img-gal').length > 0) {
		$('.img-gal').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	}
//memnu js
jQuery(document).ready(function ($) {
  $(".menu-trigger").on('click', function () {
    $(".off-canven-menu").addClass("active")
    $(".offcanvas-overlay").addClass("active")
  });
  $(".close-icon i, .offcanvas-overlay").on('click', function () {
    $(".off-canven-menu").removeClass("active")
    $(".offcanvas-overlay").removeClass("active")
  });
});
var client = $('.client_logo');
if (client.length) {
  client.owlCarousel({
    items: 6,
    loop: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    smartSpeed: 2000,
    margin: 20,
    responsive: {
      0: {
        items: 3
      },
      577: {
        items:3,
      },
      991: {
        items:5,
      },
      1200: {
        items: 6,
      }
    },
  });
}


document.addEventListener("DOMContentLoaded", function() {
  
  var progressBar = document.querySelectorAll(".progress-bar");
  var time = 1500;
  

  progressBar.forEach(function(i) {
    let label = i.children[0];
    let line = i.children[1];
    let count = 0;
    let dataCount = label.getAttribute("data-count");
    let lineCount = line.children[0];
 
    let runTime = time/dataCount;
    
    let animationLineCount = setInterval(function(){
      if(count < dataCount){
        count++;
        label.innerHTML = count + '%';
        lineCount.style.width = count + '%';
      }
    },runTime);
  });
});


  /*-------------------------------------
  Instagram Photos
  -------------------------------------*/
  function cp_instagram_photos() {
    $('.cp-instagram-photos').each(function(){
        $.instagramFeed({
            'username': $(this).data('username'),
            'container': $(this),
            'display_profile': false,
            'display_biography': false,
            'items': $(this).data('items'),
            'margin': 0
        });
        console.log( $(this) );
    });

  }
  cp_instagram_photos();

}(jQuery));