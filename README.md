DRUPAL 8 Starter site for internal EDU and client projects. 

TODO: list what features and modules / etc exist here. 


- Prerequisites - 
1. Have docker installed and a personal docker account setup
2. Have Lando installed
3. Learn some basic Lando commands and info from the website
4. Be ready to have some serious fun! 

-- How to run locally  --
1. Download or pull down a copy of this codebase locally
2. in the base directory in your terminal or command prompt in windows run: 
    lando start - starts and/or downloads containers
                - Lots of stuff will happen, the scripts run and the files are placed from install into the sites/default/files/ respectively
                - When done, if successful a list of links to Drupal, Solr, PhpMyAdmin are listed and you can visit the links after then next command.
    lando db-import install/database/install.sql (a staged database file for installation)
    lando drush uli --root=/app/docroot (relative to the containers docroot for drupal)
    
Now you'll have a login to the site, and the site will resolve locally. 

WANT TO MAKE A SECOND SITE? I bet you do. All you need to do is copy the codebase and change all references to "template" within the file .lando.yml (hidden) within the base directory and then run the process above. This will allow lando start to run on a new name of your choice. Any questions please ask. 
