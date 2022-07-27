<?php

namespace Drupal\adimeo_dco\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "same_type_event_block",
 *   admin_label = @Translation("Same type event"),
 *   category = @Translation("adimeo_dco")
 * )
 */
class SameTypeEventBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $build = [];
    $build['events'] = [
      '#type' => 'view',
      '#name' => 'events'
    ];
    return $build;
  }

  /**
   * @return int
   */
  public function getCacheMaxAge() {
    return 0;
  }

}
