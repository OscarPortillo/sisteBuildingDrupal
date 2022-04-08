<?php

namespace Drupal\search_autocomplete\Tests\Entity;

use Drupal\Tests\BrowserTestBase;

/**
 * Test uniticity when creation configurations.
 *
 * @group Search Autocomplete
 *
 * @ingroup seach_auocomplete
 */
class UnicityConfigTest extends BrowserTestBase {

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
      'description' => 'Test unicity autocompletion configurations scenario.',
      'group' => 'Search Autocomplete',
    ];
  }

  /**
   * Configuration creation should fail if ID is not unique.
   */
  public function testUniqueId() {

    // ----------------------------------------------------------------------
    // 1) Create the configuration.
    // Add new configurations.
    $this->drupalGet('admin/config/search/search_autocomplete/add');

    // Default values.
    $config_name = "testing";
    $config = [
      'label' => 'test-label',
      'selector' => 'input#edit',
    ];

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
    // 2) Create the configuration again.
    // Add new configurations.
    $this->drupalGet('admin/config/search/search_autocomplete/add');

    // Default values.
    $config_name = "testing";
    $config = [
      'label' => 'test-another',
      'selector' => 'another',
    ];

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
    $this->assertRaw(t('The machine-readable name is already in use. It must be unique.'));
  }

  /**
   * Configuration creation should fail if selector is not unique.
   */
  public function testUniqueSelector() {

    // ----------------------------------------------------------------------
    // 1) Create the configuration.
    // Add new configurations.
    $this->drupalGet('admin/config/search/search_autocomplete/add');

    // Default values.
    $config_name = "test1";
    $config = [
      'label' => 'test1',
      'selector' => 'input#edit',
    ];

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
    // 2) Create the configuration again.
    // Add new configurations.
    $this->drupalGet('admin/config/search/search_autocomplete/add');

    // Default values.
    $config_name = "test2";
    $config = [
      'label' => 'test2',
      'selector' => 'input#edit',
    ];

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
    $this->assertRaw('The selector ID must be unique.');
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
