<?php

namespace Drupal\custom_module\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\node\NodeInterface;

/**
 * Provides the block for displaying Site Title in the header.
 *
 * @Block(
 *   id = "custom_module_site_title_variant_three_desktop",
 *   admin_label = @Translation("Site Title - Variant #3 Desktop"),
 *   category = @Translation("SITE Custom Block"),
 *   forms = {
 *     "settings_tray" = FALSE,
 *   },
 * )
 */
class SiteTitleVariantThreeDesktopBlock extends BlockBase {

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

    $subTitle = 'Engineering Division'; // TODO: make empty value by default.

    if ($node instanceof NodeInterface) {
      // TODO: Find division title in any way.
      //  Also need to find a link...
      //  Find logo.
      if ($node->hasField('field_subtitle')
        && !$node->get('field_subtitle')->isEmpty()) {
        $subTitle = $node->get('field_subtitle')->getString();
      }

      $markup = '<h1><div class="subsite-brand-container">
                    <img class="subsite-brand" src="http://www.creative-preview.com/styleguide/dist/assets/img/content/baskin-logo-normal.png" alt="Custom Logo Example">
                </div></h1><a class="div" href="javascript:void(0)">' . $subTitle . '</a>';

      return [
        '#type' => 'markup',
        '#title' => $subTitle,
        '#markup' => $markup,
        '#cache' => [
          'contexts' => ['url', 'languages'],
          'tags' => ['node:' . $node->id()],
        ],
      ];

    }
  }

}
