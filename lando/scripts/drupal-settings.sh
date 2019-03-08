#!/bin/bash

# Check if settings.local.php exists
if [ ! -f /app/docroot/sites/default/settings.local.php ]; then
  echo "Drupal settings: copying default settings.local.php"
  cp /app/lando/drupal/lando.settings.local.php /app/docroot/sites/default/settings.local.php
else
  echo "Drupal settings: settings.local.php exists"
fi
