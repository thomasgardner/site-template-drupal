<?php

/**
 * @file
 * Theme and preprocess functions for paragraphs.
 */

use Drupal\node\NodeInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\taxonomy\Entity\Term;
use Drupal\node\Entity\Node;


/**
 * Implements hook_preprocess_HOOK().
 */
function santa_cruz_preprocess_paragraph__content_with_media(&$variables)
{
  $paragraph = $variables['paragraph'];
  if ($paragraph instanceof Paragraph) {
    if ($paragraph->hasField('field_media_position') && !$paragraph->field_media_position->isEmpty()) {
      $variables['field__media_position_rawvalue'] = $paragraph->get('field_media_position')->first()->getValue()['value'];
      $variables['field__media_position_class'] = 'left wave-pattern haltered blue';
      if ($paragraph->get('field_media_position')->first()->getValue()['value'] == "left") {
        $variables['field__media_position_class'] = 'right';
      }
    }
  }
}
