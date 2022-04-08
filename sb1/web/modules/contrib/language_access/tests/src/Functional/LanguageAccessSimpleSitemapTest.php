<?php

namespace Drupal\Tests\language_access\Functional;

use Drupal\simple_sitemap\Queue\QueueWorker;
use Drupal\user\Entity\Role;

/**
 * Test language access in combination with simple_sitemap.
 *
 * @group language_access
 *
 * @package Drupal\Tests\language_access\Functional
 */
class LanguageAccessSimpleSitemapTest extends LanguageAccessTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'simple_sitemap',
  ];

  /**
   * Simple sitemap generator.
   *
   * @var \Drupal\simple_sitemap\Simplesitemap
   */
  protected $generator;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->generator = $this->container->get('simple_sitemap.generator');
    $this->generator->setBundleSettings('node', 'page', [
      'index' => TRUE,
      'priority' => 0.5,
      'changefreq' => 'hourly',
    ]);
  }

  /**
   * Test that URL's are hidden in the sitemap.
   */
  public function testSimpleSitemap() {
    // By default, the anonymous user has access to the default language (en).
    $this->generator->generateSitemap(QueueWorker::GENERATE_TYPE_BACKEND);
    $this->drupalGet('sitemap.xml');
    $this->assertSession()->responseContains('/test-en');
    $this->assertSession()->responseNotContains('/test-nl');

    // Revoke permission to EN and grant permission to NL.
    $anonymous_role = Role::load('anonymous');
    $anonymous_role->revokePermission('access language en');
    $anonymous_role->grantPermission('access language nl');
    $anonymous_role->save();

    // Check that only NL URL's are now available.
    $this->generator->generateSitemap(QueueWorker::GENERATE_TYPE_BACKEND);
    $this->drupalGet('sitemap.xml');
    $this->assertSession()->responseContains('/test-nl');
    $this->assertSession()->responseNotContains('/test-en');
  }

}
