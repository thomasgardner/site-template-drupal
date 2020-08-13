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

      $context.find('.owl-carousel').once('featureSlideshow').each(function () {
        $(this).owlCarousel({
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
      });
    }
  };

  /**
   * Subsite Navigation.
   *
   * @type {{attach: Drupal.behaviors.subSiteNavigation.attach}}
   */
  Drupal.behaviors.subSiteNavigation = {
    attach: function (context, settings) {
      var $context = $(context);

      $context.find('.sub-menu-toggle').once('addToggleAtr').each(function () {
        $(this).data('toggle', 'filter-form').attr('aria-controls', 'filter-form');
      });
    }
  };

})(jQuery, Drupal, drupalSettings);
