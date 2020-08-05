<?php

/**
 * @file
 * Theme and preprocess functions for blocks.
 */

use Drupal\block\Entity\Block;

/**
 * Implements hook_preprocess_HOOK().
 */
//function pacificsource_preprocess_block(&$variables)
//{
//
//}

/**
 * Implements hook_theme_suggestions_HOOK_alter().
 */
function pacificsource_theme_suggestions_block_alter(array &$suggestions, array &$variables)
{
  $block = $variables['elements'];
  if (isset($block['#id'])) {
    $region = Block::load($block['#id'])->getRegion();

    foreach ($suggestions as $suggestion) {
      $suggestions[] = $suggestion . '__' . $region;
    }
  }
}
