php composer.phar install

export BASE_URL='http://wf.ld';
export DRUPAL_ROOT='/Users/stuartclark/Sites/Aegir/drupal-7.37';
export DRUSH_ALIAS='wf.ld';
export BEHAT_PARAMS='{"extensions":{"Behat\\MinkExtension":{"base_url":"'$BASE_URL'","files_path":"'$DRUPAL_ROOT'"},"Drupal\\DrupalExtension":{"drupal":{"drupal_root":"'$DRUPAL_ROOT'"},"drush":{"alias":"'$DRUSH_ALIAS'"}}}}';
./vendor/bin/behat
