(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Common tweaks for the theme.
   *
   * @type {{attach: Drupal.behaviors.slickSliderInit.attach}}
   */
  Drupal.behaviors.slickSliderInit = {
    attach: function (context, settings) {

      $(document).ready(function(){

        /*
         * Person Carousel
        */
        $('.view-id-carousels.view-display-id-block_1 > .view-content', context).once('slickSliderInit').each(function () {
          var autoplay = $(this).parents('.paragraph--type--person-carousel').data('autoplay');
          $(this).slick({
            autoplay: autoplay,
            autoplaySpeed: 4000,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 991,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });
          
        }); // END Interior Slideshow

      }); // END $(document).ready

    }
  };


})(jQuery, Drupal, drupalSettings);
