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
function santa_cruz_preprocess_paragraph__tabs_horizontal(&$variables)
{
  $paragraph = $variables['paragraph'];
  if ($paragraph instanceof Paragraph) {
    $acc = $paragraph->get('field_paragraphs');
    $count = $acc->count();
    $tab_hor = array();
    for ($i = 0; $i < $count; $i++) {
      $para_tab = $variables['content']['field_paragraphs'][$i]['#paragraph'];
      $tab_hor[$i]['title'] = $para_tab->get('field_title')->first()->getValue()['value'];
      $tab_hor[$i]['body'] = $para_tab->get('field_body_formatted')->first()->getValue()['value'];
    }

    $variables['field__tab_hori_array'] = $tab_hor;
  }
}

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
