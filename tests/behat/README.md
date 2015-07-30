php composer.phar install

export BASE_URL="http://wf.ld";
export DRUPAL_ROOT="/Users/stuartclark/Sites/Aegir/drupal-7.37";
export BEHAT_PARAMS='{"extensions":{"Behat\\MinkExtension":{"base_url":"'$BASE_URL'"},"Drupal\\DrupalExtension":{"drupal":{"drupal_root":"'$DRUPAL_ROOT'"}}}}';
./vendor/bin/behat
