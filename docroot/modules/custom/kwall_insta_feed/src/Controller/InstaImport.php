<?php

namespace Drupal\kwall_insta_feed\Controller;

use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\kwall_insta_feed\Helper\InstaHelper;

/**
 * Provides route responses for the Example module.
 */
class InstaImport extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */

  protected static $instaConfig;


  public function instaFeedImport() {

    $instaHelper = new InstaHelper();
    $instaHelper->instagramfeedsImporter();
    $element = [
      '#markup' => 'Hello, world',
    ];
    return $element;
  }

}