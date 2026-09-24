/**
 * Martine front-end behaviour, without jQuery.
 *
 * The plugin calls keep the options they always had; ColorlibUI provides
 * drop-in versions of Owl Carousel, Magnific Popup, AjaxChimp and the
 * datepicker (Gijgo before) that build the same markup, so the theme's
 * stylesheets apply unchanged.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  UI.owl('.client_review_slider', {
    items: 3,
    loop: true,
    dots: false,
    autoplay: true,
    margin: 40,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: true,
    navText: [
      '<i class="ti-angle-left"></i>',
      '<i class="ti-angle-right"></i>'
    ],
    responsive: {
      0: { items: 1, nav: false },
      576: { items: 2, nav: false },
      768: { items: 2, nav: false },
      991: { items: 3, nav: true }
    }
  });

  UI.owl('.event_slider', {
    items: 1,
    loop: true,
    dots: false,
    autoplay: true,
    margin: 40,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: true,
    navText: [
      '<i class="ti-angle-left"></i>',
      '<i class="ti-angle-right"></i>'
    ],
    responsive: {
      0: { nav: false },
      600: { nav: false },
      991: { nav: true }
    }
  });

  UI.enhanceSelects('.nc_select');

  UI.datepicker('#datepicker_1, #datepicker_2, #datepicker_3, #datepicker_4, #datepicker_5, #datepicker_6');

  UI.magnific('.gallery_img', {
    type: 'image',
    gallery: { enabled: true }
  });

  UI.magnific('.popup-youtube, .popup-vimeo', {
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  // menu fixed js code
  window.addEventListener('scroll', function () {
    var fixed = window.pageYOffset + 1 > 50;
    UI.toElements('.main_menu_iner').forEach(function (menu) {
      menu.classList.toggle('menu_fixed', fixed);
      menu.classList.toggle('animated', fixed);
      menu.classList.toggle('fadeInDown', fixed);
    });
  }, { passive: true });

  //------- Mailchimp js --------//
  UI.ajaxChimp('#mc_embed_signup form');
}());
