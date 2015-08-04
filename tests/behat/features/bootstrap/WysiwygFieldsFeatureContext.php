<?php

use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Testwork\Hook\Scope\BeforeSuiteScope;

/**
 * Defines application features from the specific context.
 */
class WysiwygFieldsFeatureContext extends RawDrupalContext implements SnippetAcceptingContext {
  /**
   * @BeforeSuite
   */
  public static function setup() {
    module_enable(array('wysiwyg_fields_test'));
  }

  /**
   * @AfterSuite
   */
  public static function tearDown() {
    module_disable(array('wysiwyg_fields_test'));
    drupal_uninstall_modules(array('wysiwyg_fields_test'));
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
