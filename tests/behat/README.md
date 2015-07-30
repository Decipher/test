php composer.phar install

export BASE_URL="http://wf.ld";
export BEHAT_PARAMS='{"extensions":{"Behat\\MinkExtension":{"base_url":"' + BASE_URL + '"},"Drupal\\DrupalExtension":{"drupal":{"drupal_root":"CHANGE_THIS"}}}}'
export BEHAT_PARAMS='{"extensions":{"Behat\\MinkExtension":{"base_url":"http://wf.ld"},"Drupal\\DrupalExtension":{"drupal":{"drupal_root":"/Users/stuartclark/Sites/Aegir/drupal-7.37"}}}}'
bin/behat
