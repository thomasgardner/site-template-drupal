<?php

namespace Drupal\kwall_insta_feed\Helper;

use Drupal\Component\Utility\UrlHelper;
use Drupal\node\Entity\Node;



class InstaHelper {


  /*
   *  Variable to store Instagram Feeds Configuration
   */
  protected static $instaConfig;


  public function __construct() {
    // Get Instagram configuration details & pull posts from Instagram
    self::$instaConfig = \Drupal::service('config.factory')
                                ->getEditable('kwall_insta_feed.instafeed')
                                ->getRawData();

  }

  /*
   * Import Feeds from Instagram & Create nodes
   */
  public function instagramfeedsImporter() {

    // Fetch FEEDS from Instagram
    $instaFeeds = self::fetchFeeds();

    // Now Generate nodes
    self::createInstaNodes($instaFeeds);
  }

  /*
   * Fetch Feeds from Instagram using CURL request
   */
  protected static function fetchFeeds($queryURL = NULL) {
    $feeds = [];
    if (!$queryURL) {
      $queryURL = self::getInstaURL(array('MIN_ID' => self::$instaConfig['last_min_id']));
    }

    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL            => $queryURL,
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_ENCODING       => "",
      CURLOPT_MAXREDIRS      => 10,
      CURLOPT_TIMEOUT        => 30,
      CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST  => "GET",
      CURLOPT_HTTPHEADER     => [
        "cache-control: no-cache",
        "postman-token: dd7e8676-6f29-70b0-a417-2cae7cf920f0",
      ],
    ]);

    $response = curl_exec($curl);
    $err      = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    }
    else {
      $feeds = json_decode($response);
    }
    return $feeds;
  }


  /*
   *  Create Instagram FEEDs to Nodes
   */

  protected static function createInstaNodes($instaFeeds, $totalFeedsImported = 0) {

    // Check if we have to Publish/Unpublish node while Import
    $publishStatus = self::$instaConfig['auto_publish'];
    $excludeId = self::$instaConfig['last_min_id'];
    $last_min_id = '';


    if (isset($instaFeeds->data)) {
      $feeds = $instaFeeds->data;

      // Create Instagram nodes
      foreach ($feeds as $key => $feed) {

        // Ignore Last ID we used to fetch result

        $expFeedID = explode('_', $feed->id);
        $expExcludeID = explode('_', $excludeId);
        if($expFeedID && $expExcludeID) {
          if ($expFeedID[0] <= $expExcludeID[0]) {
            continue;
          }
        }

        // Upload image & get file object
        $file = '';
        if (isset($feed->images)) {
          $file = self::getInstaImage($feed->images);
        }

        $bodyText = '';
        $title    = 'Instagram Post';
        if (isset($feed->caption->text)) {
          $bodyText = $feed->caption->text;
          $title    = substr($bodyText, 0, 25);
        }

        $node = Node::create(['type' => 'instagram']);
        $node->set('title', $title);
        //Body can now be an array with a value and a format.
        //If body field exists.
        if (isset($feed->caption->text)) {
          $body = [
            'value'  => $bodyText,
            'format' => 'full_html',
          ];
          $node->set('body', $body);
        }

        if ($file) {
          $node->set('field_insta_image', [
              'target_id' => $file->id(),
              'alt'       => '',
              'title'     => '',
            ]
          );
        }

        if (isset($feed->link)) {
          $node->set('field_insta_link', [
            'uri'     => $feed->link,
            'options' => [
              'attributes' => [
                'target' => '_blank',
              ],
            ],
          ]);
        }

        $node->set('created', date('U', $feed->created_time));
        $node->set('uid', 1);
        $node->status = $publishStatus;
        $node->enforceIsNew();
        $node->save();

        // Set Min ID for next PUll
        if ($key == 0) {
          $last_min_id = $feed->id;
          $config = \Drupal::configFactory()->getEditable('kwall_insta_feed.instafeed');
          $config->set('last_min_id', $feed->id)->save();
        }

        $totalFeedsImported++;
      }

      if(isset($instaFeeds->pagination->next_max_id)) {
        $array = [
          'min_id' => $last_min_id,
          'max_id' =>  $instaFeeds->pagination->next_max_id
        ];
        $queryURL = self::getInstaURL($array);
        $instaFeeds = self::fetchFeeds($queryURL);
        if($instaFeeds) {
          self::createInstaNodes($instaFeeds, $totalFeedsImported);
        }
      }
    }

    return $totalFeedsImported;
  }

  protected static function getInstaImage($images) {
    $url  = '';
    $file = '';
    // First check if we have standard resolution image
    if (isset($images->standard_resolution)) {
      $url = $images->standard_resolution->url;
    }
    elseif (isset($images->low_resolution)) {
      $url = $images->low_resolution->url;
    }
    elseif (isset($images->thumbnail)) {
      $url = $images->thumbnail->url;
    }
    if ($url) {
      $file = file_get_contents($url);
      if ($file) {
        $parsedUrl = parse_url($url);
        $path      = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
        if ($path) {
          $tmp      = explode('/', $path);
          $fileName = end($tmp);
          $file     = file_save_data($file, 'public://' . $fileName, FILE_EXISTS_REPLACE);
        }
        else {
          $file = file_save_data($file);
        }
      }
    }
    return $file;
  }


  protected static function getInstaURL($array){
    $queryParam = [
      'access_token' => self::$instaConfig['access_token'],
    ];
    foreach ($array as $key => $val) {
      $queryParam[$key] = $val;
    }
    $query      = UrlHelper::buildQuery($queryParam);
    $queryURL   = "https://api.instagram.com/v1/users/self/media/recent/?" . $query;

    return$queryURL;
  }
}
