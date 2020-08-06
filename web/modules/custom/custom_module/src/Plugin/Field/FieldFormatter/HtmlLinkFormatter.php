<?php

namespace Drupal\custom_module\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\ala\Plugin\Field\FieldFormatter\AdvanceLinkFormatter;
use Drupal\Core\Render\Markup;

/**
 * Plugin implementation of the 'HtmlLinkFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "html_link",
 *   label = @Translation("Html Link"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class HtmlLinkFormatter extends AdvanceLinkFormatter {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements = parent::viewElements($items, $langcode);

    foreach ($elements as &$element) {
      $element['#title'] = Markup::create($element['#title']);
    }

    return $elements;
  }

}
