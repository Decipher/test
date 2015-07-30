<?php

use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Behat\Context\SnippetAcceptingContext;

/**
 * Defines application features from the specific context.
 */
class WysiwygFieldsFeatureContext extends RawDrupalContext implements SnippetAcceptingContext {
  /**
   * @BeforeFeature
   */
  public static function setup() {
    //module_enable(array('wysiwyg_fields_test'));
  }

  /**
   * @AfterFeature
   */
  public static function tearDown() {
    //module_disable(array('wysiwyg_fields_test'));
    //drupal_uninstall_modules(array('wysiwyg_fields_test'));
  }

  /**
   * @param $lambda
   *
   * @return bool
   */
  public function spin($lambda) {
    while (TRUE) {
      try {
        if ($lambda($this)) {
          return TRUE;
        }
      }
      catch (Exception $e) {
        // do nothing
      }

      sleep(1);
    }
  }

  /**
   * @param $field
   * @param $button
   *
   * @When I click :field CKEditor :button button
   *
   * @Todo Make arguments more human readable.
   */
  public function ckeditorButton($field, $button) {
    $this->getSession()
      ->getPage()
      ->find('css', "#cke_{$field} .cke_button__{$button}")
      ->click();
  }
}
