#!/bin/bash

# Create aliases dir or remove existing aliases
if [ -d ~/.drush/site-aliases ]; then
  rm ~/.drush/site-aliases/*.aliases.drushrc.php
else
  mkdir -p ~/.drush/site-aliases
fi

# Set up links to DevDesktop aliases
echo -n "Drush aliases (DevDesktop)..."
if [ -d /user/.acquia/DevDesktop/Drush/Aliases ]; then
  echo "creating links"
  for drush_alias in /user/.acquia/DevDesktop/Drush/Aliases/*.aliases.drushrc.php; do
    ln -s "$drush_alias" ~/.drush/site-aliases/$(basename "$drush_alias")
  done
else
  echo "none found (woohoo!)"
fi

# Set up links to ~/.drush aliases
echo -n "Drush aliases (~/.drush)..."
if [ -d /user/.drush ]; then
  echo "creating links"
  for drush_alias in /user/.drush/*.aliases.drushrc.php; do
    ln -s "$drush_alias" ~/.drush/site-aliases/$(basename "$drush_alias")
  done
else
  echo "none found"
fi
