
(function($, root, undefined) {

  $(function() {

    'use strict';




    $('.slick_slider').slick({
      infinite: true,
      slidesToShow: 1,
      adaptiveHeight: true,
      dots: true,
      fade: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 8000, // time spent on one slide
      speed: 1400 // time to change slide
    });


    var $blurrable = $('#main, .branding');
    var $navigation_menu = $('#navigation_menu');
    var $menu_button = $('#menu_button');

    $menu_button.on('click', function() {

      $navigation_menu.toggleClass('menu_visible');
      if ($navigation_menu.hasClass('menu_visible')) {
        $blurrable.addClass('blurred_body');
      } else {
        $blurrable.removeClass('blurred_body');
      }

    });

    // if press escape key, hide menu
    $(document).on('keydown', function(e) {

      if (e.keyCode == 27) {
        $navigation_menu.removeClass('menu_visible');

      }

    })


  });

})(jQuery, this);
