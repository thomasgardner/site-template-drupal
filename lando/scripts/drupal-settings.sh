#!/bin/bash

# Check if settings.local.php exists
if [ ! -f /app/docroot/sites/default/settings.local.php ]; then
  echo "Drupal settings: copying default settings.local.php"
  cp /app/lando/drupal/lando.settings.local.php /app/docroot/sites/default/settings.local.php
else
  echo "Drupal settings: settings.local.php exists"
fi
#TODO: Copy over public and private files into site
rsync -aq --ignore-existing /app/install/public/ /app/docroot/sites/default/files/ --exclude php
mkdir -p /app/docroot/sites/default/files/private
rsync -aq --ignore-existing /app/install/private/ /app/docroot/sites/default/files/private/
#TODO: Letsencrypt https?

#install db
