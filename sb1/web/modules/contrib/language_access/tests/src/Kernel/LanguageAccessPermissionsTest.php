<?php

namespace Drupal\Tests\language_access\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\language_access\LanguageAccessPermissions;

/**
 * Test the LanguageAccessPermissions class.
 *
 * @group language_access
 *
 * @coversDefaultClass \Drupal\language_access\LanguageAccessPermissions
 */
class LanguageAccessPermissionsTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'language_access',
    'language',
    'system',
  ];

  /**
   * The language permission callback.
   *
   * @var \Drupal\language_access\LanguageAccessPermissions
   */
  protected $languageAccessPermissions;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->languageAccessPermissions = LanguageAccessPermissions::create($this->container);
  }

  /**
   * Test the permissions created by LanguageAccessPermissions.
   *
   * @covers ::permissions
   */
  public function testPermissions() {
    $this->assertEquals([
      'access language en',
    ], array_keys($this->languageAccessPermissions->permissions()));

    ConfigurableLanguage::createFromLangcode('nl')->save();

    $this->assertEquals([
      'access language nl',
      'access language en',
    ], array_keys($this->languageAccessPermissions->permissions()));

    ConfigurableLanguage::load('nl')->delete();

    $this->assertEquals([
      'access language en',
    ], array_keys($this->languageAccessPermissions->permissions()));
  }

}
