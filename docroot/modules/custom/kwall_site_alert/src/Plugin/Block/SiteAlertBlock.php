<?php
/**
 * @file
 * Contains \Drupal\kwall_site_alert\Plugin\Block\KwallSiteAlert.
 */
 
namespace Drupal\kwall_site_alert\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an 'alerts' block.
 *
 * @Block(
 *   id = "kwall_site_alert_block",
 *   admin_label = @Translation("Site Alert"),
 *   category = @Translation("Kwall")
 * )
 */
class SiteAlertBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
	  $total = 5;
		$dismissed = array();
		
		if (!\Drupal::service('router.admin_context')->isAdminRoute(\Drupal::routeMatch()->getRouteObject())) {
			$alert = '<div id="kwall-alerts-wrapper"><div id="kwall-alerts">';
			for ($i = 1; $i <= $total; $i++) {
			  // If active this is set.
			  if (\Drupal::config('kwall_site_alert.settings')->get('kwall_site_alert_active' . $i) &&
			      \Drupal::currentUser()->hasPermission('view kwall site alerts')) {
			    // Get variables.
			    $level = \Drupal::config('kwall_site_alert.settings')->get('kwall_site_alert_severity' . $i);
			
			    $message = \Drupal::config('kwall_site_alert.settings')->get('kwall_site_alert_message' . $i);
			
			    $alert .= '<div data-key="" data-cookie="" class="kwall-site-alert'.$i.' alert ' . $level . '" role="alert"';
			
			    // If dismissable, add 'close' button. Also add 'display:none' to the alert
			    // element to prevent it from momentarily flickering onscreen before we
			    // have a chance to hide it.
			    if (\Drupal::config('kwall_site_alert.settings')->get('kwall_site_alert_dismiss' . $i)) {
			      //$alert .= ' style="display:none;">';
			      $alert .= '><div class="container">';
			      $alert .= '<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a>';
			      $alert .= '<i class="alert-prev fa fa-chevron-left"></i>';
			      $alert .= '<i class="alert-next fa fa-chevron-right"></i>';
			    }
			    else {
			      $alert  .= '><div class="container">';
			    }
			
			    $alert .= $message['value'];
			    $alert .= '</div></div>';
			
			    // If dismissable, attach JavaScript file and configure drupalSettings.
			    if (\Drupal::config('kwall_site_alert.settings')->get('kwall_site_alert_dismiss' . $i)) {
			
			      // A random key is generated whenever an alert has changed. Pass this key
			      // to drupalSettings so that it is accessible via JavaScript.
			      $key = \Drupal::config('kwall_site_alert.settings')->get('kwall_site_alert_key' . $i);
			      
			      $dismissed['key' . $i] = $key;
			    }
			  }
		  }
		  $alert .= '</div>';
		  return array(
			  '#type' => 'markup',
	      '#markup' => $alert,
	      '#attached' => array(
		      'library' => array('kwall_site_alert/slick', 'kwall_site_alert/dismissed-cookie'),
		      'drupalSettings' => array(
	          'kwall_site_alert' => array(
	            'dismissedCookie' => $dismissed,
	          ),
	        ),
	      ),
	    );
	  }
  }
}
