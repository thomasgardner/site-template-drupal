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
      var $context = $(context),
        $subMenuToggleLinks = $context.find('a.sub-menu-toggle');

      $subMenuToggleLinks.on('click', function (event) {
        event.preventDefault();
      });

      $subMenuToggleLinks.once('addToggleAttributes').each(function () {
        $(this).attr({
          'data-toggle': 'filter-form',
          'aria-controls': 'filter-form'
        }).wrapInner('<strong></strong>');
      });
    }
  };

  /**
   * Step By Step Grid paragraph.
   *
   * @type {{attach: Drupal.behaviors.stepByStepGridParagraph.attach}}
   */
  Drupal.behaviors.stepByStepGridParagraph = {
    attach: function (context, settings) {
      var $context = $(context),
        $steps = $context.find('.paragraph--type--step-grid .step');

      $steps.once('stepByStepGridParagraph').each(function (index) {
        $(this).find('.unit').text(index + 1);
      });

    }
  };

})(jQuery, Drupal, drupalSettings);
