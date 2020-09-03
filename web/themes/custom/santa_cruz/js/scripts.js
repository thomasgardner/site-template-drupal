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

  /**
   * Gallery Owl.
   *
   * @type {{attach: Drupal.behaviors.galleryOwl.attach}}
   */
  Drupal.behaviors.galleryOwl = {
    attach: function (context, settings) {
      var $context = $(context);
      // .profile-list, .fact-timeline, .job-posting-card-list
      $context.find('.image-gallery-carousel.owl-carousel').once('galleryOwlf').each(function () {
        $(this).owlCarousel({
          margin: 6,
          autoHeight: true,
          dots: false,
          nav: true,
          responsive: {
            0: {
              items: 1
            },
            640: {
              items: 2
            },
            1024: {
              autoWidth: true,
              autoHeight: false
            }
          }
        });
      });
      $context.find('#lightgallery').once('lightgal').each(function () {
        $(this).lightGallery({
          selector: '.lightgallery-item',
          showThumbByDefault: false,
          thumbnail: false
          //https://sachinchoolur.github.io/lightGallery/docs/api.html#lightgallery-core
        });
      });
    }
  };

  /**
   * "Job Posting Card" Carousel.
   * @type {{attach: Drupal.behaviors.jobPostingCardOwl.attach}}
   */
  Drupal.behaviors.jobPostingCardOwl = {
    attach: function (context, settings) {
      var $context = $(context);

      $context.find('.job-posting-card-list.job-card.owl-carousel').once('jobPostingCardOwl').each(function () {
        $(this).owlCarousel({
          margin: 30,
          nav: true,
          dots: false,
          items: 3,
          loop: true,
          responsive:{
            0:{
              items:1,
            },
            640:{
              items:2,
            },
            1024:{
              items:3,
              autoWidth: false,
            },
          }
        });
      });

      $context.find('.job-posting-card-list.list.owl-carousel').once('jobPostingCardOwl').each(function () {
        $(this).owlCarousel({
          margin: 30,
          nav: true,
          dots: false,
          items: 3,
          loop: true,
          responsive:{
            0:{
              items:1,
            },
            640:{
              items:1,
            },
            1024:{
              items:1,
            },
          }
        });
      });
    }
  };

  /**
   * "Historical Timeline" Carousel.
   *
   * @type {{attach: Drupal.behaviors.historicalTimelineOwl.attach}}
   */
  Drupal.behaviors.historicalTimelineOwl = {
    attach: function (context, settings) {
      var $context = $(context);
      $context.find('.fact-timeline.owl-carousel').once('historicalTimelineOwl').each(function () {
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
   * Ready Function
   */
  $(document).ready(function () {
    /** Archive Form
     *
     * @type {*|jQuery|HTMLElement}
     */
    var $ArchiveForm = $('#views-exposed-form-teaser-archive-news-archive-page');
    var labelValue = $ArchiveForm.find('.form-item-field-categories-target-id label').text();
    $ArchiveForm.find("a.filter-control").prepend(labelValue);

    $('.news-card-list .news-card:first-child, .news-card-list .news-card:nth-child(2)').wrapAll( "<div class='news-card-list split-column'></div>" );
  });

})(jQuery, Drupal, drupalSettings);
