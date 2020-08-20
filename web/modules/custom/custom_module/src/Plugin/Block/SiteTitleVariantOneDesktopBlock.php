<?php

namespace Drupal\custom_module\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\node\NodeInterface;

/**
 * Provides the block for displaying Site Title in the header.
 *
 * @Block(
 *   id = "custom_module_site_title_variant_one_desktop",
 *   admin_label = @Translation("Site Title - Variant #1 Desktop"),
 *   category = @Translation("SITE Custom Block"),
 *   forms = {
 *     "settings_tray" = FALSE,
 *   },
 * )
 */
class SiteTitleVariantOneDesktopBlock extends BlockBase {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   */
  public function access(AccountInterface $account, $return_as_object = FALSE) {
    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $node = \Drupal::routeMatch()->getParameter('node');

    if ($node instanceof NodeInterface) {
      $title = $node->getTitle();

      // TODO: Find subtitle or division in any way.
      //  Also need to find a link...
      if ($node->hasField('field_subtitle')
        && !$node->get('field_subtitle')->isEmpty()) {
        $subTitle = $node->get('field_subtitle')->getString();
      }

      // TODO: Find the link and aria-label in any way.
      $markup = '<a href="#" aria-label=""><h1>' . $title . '</h1></a>';

      return [
        '#type' => 'markup',
        '#title' => $title,
        '#markup' => $markup,
        '#cache' => [
          'contexts' => ['url', 'languages'],
          'tags' => ['node:' . $node->id()],
        ],
      ];

    }
  }

}
