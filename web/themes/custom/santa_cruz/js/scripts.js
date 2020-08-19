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

      $context.find('.featured-slideshow.owl-carousel').once('featureSlideshow').each(function () {
        $(this).owlCarousel({
          autoHeight: true,
          nav: true,
          dots: false,
          responsive: {
            0: {
              items: 1
            },
            900: {
              items: 3
            }
          }
        });
      });
    }
  };

  /**
   * Profile Owl.
   *
   * @type {{attach: Drupal.behaviors.profileOwl.attach}}
   */
  Drupal.behaviors.profileOwl = {
    attach: function (context, settings) {
      var $context = $(context);
      // .profile-list, .fact-timeline, .job-posting-card-list
      $context.find('.profile-list.owl-carousel').once('profileOwl').each(function () {
        $(this).owlCarousel({
          margin: 30,
          nav: true,
          dots: false,
          items: 3,
          loop: true,
          responsive: {
            0: {
              items: 1
            },
            640: {
              items: 2
            },
            1024: {
              items: 3,
              autoWidth: false
            }
          }
        });
      });
    }
  };

  // $(".image-gallery-carousel").owlCarousel({
  //   margin: 6,
  //   autoHeight:true,
  //   dots: false,
  //   nav: true,
  //   responsive:{
  //     0:{
  //       items:1
  //     },
  //     640:{
  //       items:2
  //     },
  //     1024:{
  //       autoWidth:true,
  //       autoHeight:false
  //     },
  //   }
  // });


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

})(jQuery, Drupal, drupalSettings);
