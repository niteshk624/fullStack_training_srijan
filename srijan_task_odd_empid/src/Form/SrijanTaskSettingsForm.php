<?php

namespace Drupal\srijan_task\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provide configuration setting form to add id.
 */
class SrijanTaskSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'srijan_task.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'srijan_task_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('srijan_task.settings');
    $form['id'] = [
      '#type' => 'number',
      '#title' => $this->t('ID'),
      '#description' => $this->t('Enter ID to be embed on all pages and on block'),
      '#default_value' => $config->get('id'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('srijan_task.settings')
      ->set('id', $form_state->getValue('id'))
      ->save();

    $id = $form_state->getValue('id');
    $this->messenger()->addMessage($this->t('You have entered id: %id.', ['%id' => $id]));

  }

}
