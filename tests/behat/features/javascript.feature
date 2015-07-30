Feature: Javascript

  Ensure Wysiwyg Fields Javascript works as expected.

  @api @javascript
  Scenario: Create a node
    Given I am logged in as a user with the "administrator" role
    When I am at "node/add/article"
    And I click "edit-body-und-0-value" CKEditor "wysiwyg_fields-node-article-field_image" button
    Then I should see "Formatter"
