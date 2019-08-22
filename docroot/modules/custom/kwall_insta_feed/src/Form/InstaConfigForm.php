<?php

namespace Drupal\kwall_insta_feed\Form;

use Drupal\Core\Ajax\RedirectCommand;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Url;
use Drupal\kwall_insta_feed\Helper\InstaHelper;


/**
 * Class InstaConfigForm.
 */
class InstaConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'insta_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $config = $this->config('kwall_insta_feed.instafeed');

    $form['message'] = [
      '#type' => 'markup',
      '#markup' => '<div class="result_message"></div>'
    ];

    $form['client_id']         = [
      '#type'          => 'textfield',
      '#title'         => $this->t('Client ID'),
      '#description'   => $this->t('Instagram Client ID'),
      '#required'      => TRUE,
      '#default_value' => $config->get('client_id'),
    ];
    $form['client_secret_key'] = [
      '#type'          => 'textfield',
      '#title'         => $this->t('Client Secret Key'),
      '#description'   => $this->t('Instagram Client Secret Key.'),
      '#required'      => TRUE,
      '#default_value' => $config->get('client_secret_key'),
    ];

    $form['access_token'] = [
      '#type'          => 'textfield',
      '#title'         => $this->t('Access Token'),
      '#description'   => $this->t('Instagram access_token to fetch data.'),
      '#required'      => TRUE,
      '#default_value' => $config->get('access_token'),
    ];

    $form['auto_publish'] = [
      '#type'          => 'checkbox',
      '#title'         => $this->t('Auto Publish'),
      '#default_value' => $config->get('auto_publish'),
    ];

    $form['last_min_id'] = [
      '#type'          => 'hidden',
      '#title'         => $this->t('Last Insta Import ID'),
      '#default_value' => $config->get('last_min_id'),
    ];


    $form['actions']['#type']  = 'actions';
    $form['actions']['submit'] = [
      '#type'        => 'submit',
      '#value'       => $this->t('Save configuration'),
      '#button_type' => 'primary',
      '#submit'      => ['::submitForm'],
    ];
    $form['actions']['import_feeds'] = [
      '#type'        => 'submit',
      '#value'       => $this->t('Import Instagram Feeds'),
      '#button_type' => 'primary',
      '#ajax' => [
        'callback'      => '::importInstaFeedsManually',
        'progress' => [
          'type' => 'throbber',
        ]
      ]
    ];

    $form['#theme'] = 'system_config_form';

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $config = $this->config('kwall_insta_feed.instafeed');
    $config
      ->set('client_id', $form_state->getValue('client_id'))
      ->set('client_secret_key', $form_state->getValue('client_secret_key'))
      ->set('access_token', $form_state->getValue('access_token'))
      ->set('auto_publish', $form_state->getValue('auto_publish'))
      ->set('last_min_id', $form_state->getValue('last_min_id'))
      ->save();

    drupal_set_message($this->t('configuration saved successfully!.'));
  }

  public function importInstaFeedsManually(array &$form, FormStateInterface $form_state) {

    $instaHelper = new InstaHelper();
    $totalFeedsImported = $instaHelper->instagramfeedsImporter();

    if(!$totalFeedsImported) {
      $totalFeedsImported = 'No Feed Imported';
    }else {
      $totalFeedsImported .= ' feeds Imported';
    }

//    $response = new AjaxResponse();
//    $response->addCommand(
//      new HtmlCommand(
//        '.result_message',
//        $totalFeedsImported)
//    );
//    return $response;

    drupal_set_message($totalFeedsImported, 'status');
    $currentURL = Url::fromRoute('<current>');
    $response = new AjaxResponse();
    $response->addCommand(new RedirectCommand($currentURL->toString()));
    return $response;
  }


  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'kwall_insta_feed.instafeed',
    ];
  }
}
