<?php

namespace Drupal\search_autocomplete\Tests\Entity;

use Drupal\Tests\BrowserTestBase;

/**
 * Test special cases of configurations.
 *
 * @group Search Autocomplete
 *
 * @ingroup seach_auocomplete
 */
class NoSelectorConfigTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['node', 'search_autocomplete'];

  public $adminUser;

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => 'Test Autocompletion Configuration test.',
      'description' => 'Test special autocompletion configurations scenario.',
      'group' => 'Search Autocomplete',
    ];
  }

  /**
   * Test addition with default values from URL.
   */
  public function testAdditionFromUrl() {

    // Add new from URL.
    $options = [
      'query' => [
        'label' => 'test label',
        'selector' => 'input#edit',
      ],
    ];
    $this->drupalGet('admin/config/search/search_autocomplete/add', $options);

    $config_name = "testing_from_url";
    $config = [
      'label' => 'test label',
      'selector' => 'input#edit',
      'minChar' => 3,
      'maxSuggestions' => 10,
      'autoSubmit' => TRUE,
      'autoRedirect' => TRUE,
      'noResultLabel' => 'No results found for [search-phrase]. Click to perform full search.',
      'noResultValue' => '[search-phrase]',
      'noResultLink' => '',
      'moreResultsLabel' => 'View all results for [search-phrase].',
      'moreResultsValue' => '[search-phrase]',
      'moreResultsLink' => '',
      'source' => 'autocompletion_callbacks_nodes::nodes_autocompletion_callback',
      'theme' => 'basic-blue.css',
    ];

    // Check fields.
    $this->assertFieldByName('label', $config['label']);
    $this->assertFieldByName('selector', $config['selector']);

    // Click Add new button.
    $this->drupalPostForm(
      NULL,
      [
        'label' => $config['label'],
        'id' => $config_name,
        'selector' => $config['selector'],
      ],
      'Create Autocompletion Configuration'
    );

    // ----------------------------------------------------------------------
    // 2) Verify that add redirect to edit page.
    $this->assertUrl('/admin/config/search/search_autocomplete/manage/' . $config_name);

    // ----------------------------------------------------------------------
    // 3) Verify that default add configuration values are inserted.
    $this->assertFieldByName('label', $config['label']);
    $this->assertFieldByName('selector', $config['selector']);
    $this->assertFieldByName('minChar', $config['minChar']);
    $this->assertFieldByName('maxSuggestions', $config['maxSuggestions']);
    $this->assertFieldByName('autoSubmit', $config['autoSubmit']);
    $this->assertFieldByName('autoRedirect', $config['autoRedirect']);
    $this->assertFieldByName('noResultLabel', $config['noResultLabel']);
    $this->assertFieldByName('noResultValue', $config['noResultValue']);
    $this->assertFieldByName('noResultLink', $config['noResultLink']);
    $this->assertFieldByName('moreResultsLabel', $config['moreResultsLabel']);
    $this->assertFieldByName('moreResultsValue', $config['moreResultsValue']);
    $this->assertFieldByName('moreResultsLink', $config['moreResultsLink']);
    $this->assertFieldByName('source', $config['source']);
    $this->assertOptionSelected('edit-theme', $config['theme']);

  }

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->adminUser = $this->drupalCreateUser(['administer search autocomplete']);
    $this->drupalLogin($this->adminUser);
  }

}
