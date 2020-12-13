<?php

namespace Drupal\srijan_task\Plugin\Block;

use Drupal\user\Entity\User;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'SrijanTaskBlock' block.
 *
 * @Block(
 *  id = "srijan_task_block",
 *  admin_label = @Translation("Srijan task block"),
 * )
 */
class SrijanTaskBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $id = \Drupal::config('srijan_task.settings')->get('id');
    $build = [
      '#theme' => 'srijan_task_block',
      '#id' => $id,
      '#attached' => [
        'drupalSettings' => ['id' => $id],
        'library' => 'srijan_task/srijan_task_assets',
      ],
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    $is_admin = User::load(\Drupal::currentUser()->id())
      ->hasRole('administrator');
    return AccessResult::allowedIf($is_admin);
  }

}
