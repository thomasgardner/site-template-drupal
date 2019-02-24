(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Common tweaks for the theme.
   *
   * @type {{attach: Drupal.behaviors.slickSliderInit.attach}}
   */
  Drupal.behaviors.academicIsotopeInit = {
    attach: function (context, settings) {

      $(document).ready(function(){

        /*
         * Academic Isotope Filter
        */
        // init Isotope
        var $grid = $('.view-academics > .view-content').isotope({
          itemSelector: '.grid-item',
          layoutMode: 'fitRows'
        });
        // bind filter button click
        $('.view-academic-filter-taxonomy-terms .filter-toggle').on( 'click', function() {
          var filterValue = $( this ).data('tid');
          // use filterFn if matches value
          $grid.isotope({ filter: filterValue });
        });


      }); // END $(document).ready

    }
  };


})(jQuery, Drupal, drupalSettings);
