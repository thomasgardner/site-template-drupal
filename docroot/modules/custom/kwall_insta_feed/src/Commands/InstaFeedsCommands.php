<?php

namespace Drupal\kwall_insta_feed\Commands;

use Drush\Commands\DrushCommands;
use Drupal\kwall_insta_feed\Helper\InstaHelper;

/**
 *
 * In addition to a commandfile like this one, you need a drush.services.yml
 * in root of your module.
 *
 * See these files for an example of injecting Drupal services:
 *   - http://cgit.drupalcode.org/devel/tree/src/Commands/DevelCommands.php
 *   - http://cgit.drupalcode.org/devel/tree/drush.services.yml
 */
class InstaFeedsCommands extends DrushCommands {

  /**
   * Echos back hello with the argument provided.
   *
   * @command kwall_insta_feed:import_feeds
   * @aliases import_insta_feeds
   * @usage kwall_insta_feed:import_feeds
   *   Display 'Hello World!' and a message.
   */
  public function import_feeds() {
    $instaHelper = new InstaHelper();
    $totalFeedsImported = $instaHelper->instagramfeedsImporter();

    if(!$totalFeedsImported) {
      $totalFeedsImported = 'No Feed Imported';
    }else {
      $totalFeedsImported .= ' feeds Imported';
    }

    drush_print($totalFeedsImported);
  }
}