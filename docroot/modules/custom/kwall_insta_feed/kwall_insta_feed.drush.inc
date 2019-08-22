<?php

/**
 * Implements hook_drush_command().
 */

use Drupal\kwall_insta_feed\Helper\InstaHelper;

function kwall_insta_feed_drush_command() {
  $items = [];
  $items['import-insta-feeds'] = [
    'description' => 'Import Feeds from Instagram',
    'aliases' => ['kwall_insta_feed:import_feeds'],
    'callback' => 'kwall_insta_feed_import_insta_feeds',
  ];
  return $items;
}

/*
 *  Callback for drush command import-insta-feeds
 */
function kwall_insta_feed_import_insta_feeds() {
  $instaHelper = new InstaHelper();
  $totalFeedsImported = $instaHelper->instagramfeedsImporter();

  if(!$totalFeedsImported) {
    $totalFeedsImported = 'No Feed Imported';
  }else {
    $totalFeedsImported .= ' feeds Imported';
  }

  drush_print($totalFeedsImported);
}