<?php

namespace Drupal\custom_module\Plugin\Block;

use Drupal\block_content\BlockContentInterface;
use Drupal\block_content\Entity\BlockContent;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
// use Drupal\node\NodeInterface;

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
   * Subsite Logo or Title block ID.
   */
  const SUBSITE_LOGO_BLOCK_ID = 16;

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
    $block = BlockContent::load(self::SUBSITE_LOGO_BLOCK_ID);

    $linkTitle = '';
    $linkUrl = '';
    $logoUrl = '';
    $logoAlt = '';
    $logoTitle = '';
    //    $subSiteTitle = '';
    $markup = '';

    if ($block instanceof BlockContentInterface) {
      if ($block->hasField('field_link') && !$block->get('field_link')
          ->isEmpty()) {
        $link = $block->get('field_link')->first()->getValue();
        $linkTitle = $link['title'];
        $linkUrl = Url::fromUri($link['uri'])->toString();
      }
      if ($block->hasField('field_media') && !$block->get('field_media')
          ->isEmpty()) {
        $media = $block->get('field_media')
          ->first()
          ->get('entity')
          ->getTarget()
          ->getValue()
          ->get('field_media_image')
          ->first();

        $file = $media->get('entity')
          ->getTarget()
          ->getValue()
          ->getFileUri();

        $logoUrl = Url::fromUri(file_create_url($file))->toString();
        $logoAlt = $media->alt;
        $logoTitle = $media->title;
      }

      //      if ($block->hasField('field_title') && !$block->get('field_title')
      //          ->isEmpty()) {
      //        $subSiteTitle = $block->get('field_title')->getString();
      //      }
    }

    $markup = '<h1><div class="subsite-brand-container">';

    if ($logoUrl !== '') {
      $markup .= '<img class="subsite-brand" src="' . $logoUrl . '" title="' . $logoTitle . '" alt="' . $logoAlt . '">';
    }

    $markup .= '</div></h1>';

    if ($linkTitle !== '') {
      $markup .= '<a class="div" href="' . $linkUrl . '">' . $linkTitle . '</a>';
    }

    // $node = \Drupal::routeMatch()->getParameter('node');

    return [
      '#type' => 'markup',
      '#title' => $linkTitle,
      '#markup' => $markup,
      '#cache' => [
        'contexts' => ['url', 'languages'],
        // 'tags' => ['node:' . $node->id()],
      ],
    ];
  }

}
