<?php

/**
 * @file
 * Local development override configuration feature.
 *
 * To activate this feature, copy and rename it such that its path plus
 * filename is 'sites/default/settings.local.php'. Then, go to the bottom of
 * 'sites/default/settings.php' and uncomment the commented lines that mention
 * 'settings.local.php'.
 *
 * If you are using a site name in the path, such as 'sites/example.com', copy
 * this file to 'sites/example.com/settings.local.php', and uncomment the lines
 * at the bottom of 'sites/example.com/settings.php'.
 */

/**
 * Assertions
 */
assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();

/**
 * Enable local development services.
 */
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

/**
 * Show all error messages, with backtrace information.
 */
$config['system.logging']['error_level'] = 'verbose';

/**
 * Disable CSS and JS aggregation.
 */
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

/**
 * Disable the render cache (this includes the page cache).
 */
$settings['cache']['bins']['render'] = 'cache.backend.null';

/**
 * Disable Dynamic Page Cache.
 */
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

/**
 * Allow test modules and themes to be installed.
 */
$settings['extension_discovery_scan_tests'] = TRUE;

/**
 * Enable access to rebuild.php.
 */
$settings['skip_permissions_hardening'] = TRUE;

/**
 * MCCD Settings.
 */
$config['system.site']['name'] = 'LOCAL DEVELOPMENT';
$config['system.performance']['cache']['page']['max_age'] = 0;
$config['dblog.settings']['row_limit'] = 10000;
$config['system.performance']['css']['gzip'] = FALSE;
$config['system.performance']['js']['gzip'] = FALSE;
$config['system.performance']['response']['gzip'] = FALSE;
// Turn off cron
$config['system.cron']['threshold']['autorun'] = 0;

// Fix file system.
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = 'sites/default/files/private';

// Temp path, Windows OR MAC.
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  $config['system.file']['path']['temporary'] = 'C:\Windows\temp';
}
else {
  $config['system.file']['path']['temporary'] = '/tmp';
}

// Set up trusted_host_pattern for devdesktop.
$settings['trusted_host_patterns'][] = '^.*\.dd$';
$settings['trusted_host_patterns'][] = '^.*\.test$';
$settings['trusted_host_patterns'][] = '^.*\.lndo.site$';
$settings['trusted_host_patterns'][] = '^.*\.localtunnel.me$';


// Set the install profile if one is not already set
if (!isset($settings['install_profile'])) {
  $settings['install_profile'] = 'standard';
}

// @TODO
unset($config_directories['vcs']);

// Lando database settings
if (getenv('LANDO_INFO')) {
  $lando_info = json_decode(getenv('LANDO_INFO'), TRUE);
  $databases['default']['default'] = [
    'driver' => 'mysql',
    'database' => $lando_info['database']['creds']['database'],
    'username' => $lando_info['database']['creds']['user'],
    'password' => $lando_info['database']['creds']['password'],
    'host' => $lando_info['database']['internal_connection']['host'],
    'port' => $lando_info['database']['internal_connection']['port'],
  ];
}
