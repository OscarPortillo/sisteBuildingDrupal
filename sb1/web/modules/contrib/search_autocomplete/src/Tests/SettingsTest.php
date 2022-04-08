<?php

namespace Drupal\search_autocomplete\Tests;

use Drupal\Tests\BrowserTestBase;

/**
 * Test search_autocomplete settings.
 *
 * @group Search Autocomplete
 *
 * @ingroup seach_auocomplete
 */
class SettingsTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['node', 'search_autocomplete'];

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => 'Search Autocomplete settings test.',
      'description' => 'Test the Search Autocomplete settings page.',
      'group' => 'Search Autocomplete',
    ];
  }

  /**
   * Check that Search Autocomplete module installs properly.
   *
   * 1) Check the default settings value : configs are activated,
   * admin_helper is FALSE
   *
   * 2) Desactivate all available configurations and reverse settings.
   *
   * 3) Check that all default configurations are desactivate,
   *    and settings are toogled.
   *
   */
  public function testInstallModule() {

    // Open admin UI.
    $this->drupalGet('/admin/config/search/search_autocomplete');

    // ----------------------------------------------------------------------
    // 1) Check the default settings value : configs are activated,
    // admin_helper is FALSE.
    $this->assertFieldChecked('edit-configs-search-block-enabled', 'Default config search_block is activated.');
    $this->assertNoFieldChecked('edit-admin-helper', 'Admin helper tool is disabled.');

    // ----------------------------------------------------------------------
    // 2) Desactivate all available configurations and reverse settings.
    $edit = [
      'configs[search_block][enabled]' => FALSE,
      'admin_helper' => TRUE,
    ];
    $this->drupalPostForm(NULL, $edit, 'Save changes');

    // 3) Check that all default configurations are desactivate,
    // and settings are toogled.
    $this->assertNoFieldChecked('edit-configs-search-block-enabled', 'Default config search_block is disabled.');
    $this->assertFieldChecked('edit-admin-helper', 'Admin helper tool is activated.');
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $admin_user = $this->drupalCreateUser(['administer search autocomplete']);
    $this->drupalLogin($admin_user);
  }

}
