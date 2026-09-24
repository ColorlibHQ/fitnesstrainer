/**
 * Fitness Trainer front-end behaviour, without jQuery.
 *
 * The plugin calls keep the options they always had; ColorlibUI provides
 * drop-in versions of the datepicker, Magnific Popup, Owl Carousel and Slick
 * that build the same markup, so the theme's stylesheets apply unchanged. The
 * grid uses WordPress core Masonry through UI.masonry. Also: the fixed menu,
 * the off-canvas menu and the skill bars.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  UI.datepicker('#datepicker');

  UI.magnific('.popup_youtube', {
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  UI.enhanceSelects('select');

  UI.masonry('.grid', {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  UI.owl('.client_review_part', {
    items: 1,
    loop: true,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    smartSpeed: 2000
  });

  // menu fixed js code: inner pages (.single_page_menu) and the home page
  // (.home_menu) each have their own fixed class.
  UI.ready(function () {
    var singlePage = UI.toElements('.single_page_menu');
    var home = UI.toElements('.home_menu');
    window.addEventListener('scroll', function () {
      var fixed = window.pageYOffset + 1 > 50;
      singlePage.forEach(function (menu) {
        if (fixed) {
          menu.classList.add('menu_fixed', 'animated', 'fadeInDown');
        } else {
          menu.classList.remove('menu_fixed', 'animated', 'fadeInDown');
        }
      });
      home.forEach(function (menu) {
        if (fixed) {
          menu.classList.add('home_menu_fixed', 'animated', 'fadeInDown');
        } else {
          menu.classList.remove('home_menu_fixed', 'animated', 'fadeInDown');
        }
      });
    }, { passive: true });
  });

  UI.slick('.slider', {
    slidesToShow: 1,
    speed: 1000,
    infinite: true,
    autoplay: false,
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
          infinite: true
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

  UI.magnific('.img-gal', {
    type: 'image',
    gallery: {
      enabled: true
    }
  });

  //memnu js
  UI.ready(function () {
    function setOpen(open) {
      UI.toElements('.off-canven-menu, .offcanvas-overlay').forEach(function (el) {
        if (open) {
          el.classList.add('active');
        } else {
          el.classList.remove('active');
        }
      });
    }
    UI.toElements('.menu-trigger').forEach(function (trigger) {
      trigger.addEventListener('click', function () { setOpen(true); });
    });
    UI.toElements('.close-icon i, .offcanvas-overlay').forEach(function (close) {
      close.addEventListener('click', function () { setOpen(false); });
    });
  });

  UI.owl('.client_logo', {
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
        items: 3
      },
      991: {
        items: 5
      },
      1200: {
        items: 6
      }
    }
  });

  // Skill bars: count the label and the bar up to the label's data-count.
  UI.ready(function () {
    var time = 1500;

    UI.toElements('.progress-bar').forEach(function (bar) {
      var label = bar.children[0];
      var line = bar.children[1];
      // Bootstrap's own .progress-bar has no label and line inside it.
      if (!label || !line || !line.children[0]) return;
      var count = 0;
      var dataCount = label.getAttribute('data-count');
      var lineCount = line.children[0];

      var runTime = time / dataCount;

      setInterval(function () {
        if (count < dataCount) {
          count++;
          label.innerHTML = count + '%';
          lineCount.style.width = count + '%';
        }
      }, runTime);
    });
  });
}());
