(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Common tweaks for the theme.
   *
   * @type {{attach: Drupal.behaviors.flexSliderInit.attach}}
   */
  Drupal.behaviors.commnTweaks = {
    attach: function (context, settings) {


      /**
       * background image paralax effect
      **/
      if ( $('.full-width-img-section').length ) {
        if ( !$('.full-width-img-section').hasClass('init') ) {
          $('.full-width-img-section').css({
            'background-position':'center center'
          })
        } else {
          $(window).once('parallaxInit').on('load', function(){
            var controller = new ScrollMagic.Controller(),
                $scroll_duration = $(window).height() + $('.full-width-img-section.init').outerHeight();
    
          	// build scene
          	var scene = new ScrollMagic.Scene({triggerElement: ".full-width-img-section.init", duration: $scroll_duration, triggerHook: 'onEnter'})
          					.addTo(controller)
          					// .addIndicators() // remove for production
          					.on("progress", function (e) {
          						$(".full-width-img-section.init").css('background-position', 'center ' + (e.progress.toFixed(2) * 50) + '%');
          					});
          });
        }
      }


      $(document).ready(function(){

        /*
         * Hero Banner
         */
        $('.hero-banner-img-section', context).once('setHeroBannerImg').each(function(){
          var bg_img_url = $(this).data('bg-img');
          $(this).css({
            'background-image':'url('+bg_img_url+')',
            'background-size':'cover',
            'background-position':'center top'
          })
        });

        /*
         * Featured Article Background Image
         */
        $('.view-id-article_view.view-display-id-attachment_1 .featured-post-wrap', context).once('setFeaturedArticleImage').each(function(){
          var bg_img = $(this).data('featured-article');
        	$(this).parents('.featured-news-grid.view-display-id-block_1 .attachment').css({
          	'background-image':'url('+bg_img+')',
          	'background-size':'cover',
          	'background-position':'center center'
          });
        });

        /*
         * Featured Article Background Image
         */
        $('.view-id-event_view.view-display-id-attachment_1 .featured-event-wrap', context).once('setFeaturedArticleImage').each(function(){
          var bg_img = $(this).data('featured-event');
        	$(this).parents('.featured-events-grid.view-display-id-block_3 .attachment').css({
          	'background-image':'url('+bg_img+')',
          	'background-size':'cover',
          	'background-position':'center center'
          });
        });

      });





    }
  };


  /**
   * Common tweaks for the theme.
   *
   * @type {{attach: Drupal.behaviors.sidebarAccordionInit.attach}}
   */
  Drupal.behaviors.sidebarAccordionInit = {
    attach: function (context, settings) {

      /*
       * Sidebar Accordion Toggle
       */
      var $sidebar_menu = $('.sidebar-menu-block', context);
      // Sidebar navigation toggle.
      $(document).ready(function(){
        $sidebar_menu.once('sidebarAccordionInit').each(function () {
          // Open active submenu.
          $(this).find('.expanded.dropdown.active').addClass('open');
          var $toggler = $(this).find('.expanded.dropdown-item .fa');

          $toggler.on('click', function () {
            $(this).toggleClass('fa-angle-down fa-angle-up');
            $(this).parent('li').toggleClass('toggled');
            $(this).siblings($(this).attr('data-toggle')).slideToggle();
          });
          //  Toggle on 'Enter' keypress
          $toggler.keypress(function(e){
            if ( e.keyCode == 13 ) {
              $(this).toggleClass('fa-angle-down fa-angle-up');
              $(this).parent('li').toggleClass('toggled');
              $(this).siblings($(this).attr('data-toggle')).slideToggle();
            }
          });        
        });

        $sidebar_menu.find('.is-active').once('sidebarAccordionInit').each(function(){
        	var $parents = $(this).parents('.dropdown-menu-list'),
            	$is_active = $(this).parent('.dropdown-item');
        	$parents.siblings('.fa-angle-down').toggleClass('fa-angle-down fa-angle-up');
        	$parents.slideDown();
          $is_active.children('.fa-angle-down').toggleClass('fa-angle-down fa-angle-up');
          $is_active.addClass('toggled').children('.dropdown-menu-list').slideDown();
        });


      });// END $(document)ready

    }
  };


})(jQuery, Drupal, drupalSettings);
