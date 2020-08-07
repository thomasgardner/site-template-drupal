/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Use for short things.
   *
   * @type {{attach: Drupal.behaviors.common.attach}}
   */
  Drupal.behaviors.common = {
    attach: function (context, settings) {

    }
  };

  /**
   * Featured Slideshow.
   *
   * @type {{attach: Drupal.behaviors.featureSlideshow.attach}}
   */
  Drupal.behaviors.featureSlideshow = {
    attach: function (context, settings) {
      var $context = $(context);

      $context.find('.owl-carousel', context).owlCarousel({
        autoHeight: true,
        nav: true,
        dots: false,
        responsive: {
          0: {
            items: 1
          },
          900: {
            items: 2
          }
        }
      });
    }
  };


})(jQuery, Drupal, drupalSettings);
