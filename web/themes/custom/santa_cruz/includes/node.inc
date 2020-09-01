<?php

/**
 * @file
 * Theme and preprocess functions for nodes.
 */
use Drupal\views\Views;

/**
 * Implements template_preprocess_NODE().
 */
function santa_cruz_preprocess_node(&$variables) {
  $nodeobj = $variables['node'];
  if ($nodeobj->hasField('field_categories') && !$nodeobj->get('field_categories')->isEmpty()) {
    $cat_id = $nodeobj->get('field_categories')->first()->getValue()['target_id'];
    $args = [$cat_id];
    $view = Views::getView('related_content_grid');
    if (is_object($view)) {
      $view->setArguments($args);
      $view->setDisplay('related_content_block');
      $view->preExecute();
      $view->execute();
      $variables['relatedcontentgrid'] = $view->buildRenderable('related_content_block', $args);
    }
  }
}
