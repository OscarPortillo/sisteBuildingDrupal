<?php

namespace Drupal\Tests\language_access\Functional;

use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\language\Entity\ContentLanguageSettings;
use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\taxonomy\Traits\TaxonomyTestTrait;

/**
 * Base class used to simplify language access testing.
 *
 * @group language_access
 *
 * @package Drupal\Tests\language_access\Functional
 */
abstract class LanguageAccessTestBase extends BrowserTestBase {

  use TaxonomyTestTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'block_content',
    'content_translation',
    'language_access',
    'node',
    'path',
    'image',
    'taxonomy',
    'user',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * The role storage.
   *
   * @var \Drupal\user\RoleStorage
   */
  protected $roleStorage;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The content translation manager.
   *
   * @var \Drupal\content_translation\ContentTranslationManagerInterface
   */
  protected $contentTranslationManager;

  /**
   * A user entity that has access to the EN language.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $userEn;

  /**
   * A user entity that has access to the NL language.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $userNl;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->entityTypeManager = $this->container->get('entity_type.manager');
    $this->contentTranslationManager = $this->container->get('content_translation.manager');

    $this->drupalCreateContentType(['type' => 'page']);
    $this->config('system.site')->set('page.front', '/node')->save();

    // Create NL language.
    ConfigurableLanguage::createFromLangcode('nl')->save();

    // Set the language path prefixes.
    $this->config('language.negotiation')->set('url', [
      'source' => 'path_prefix',
      'prefixes' => [
        'en' => 'en',
        'nl' => 'nl',
      ],
    ])->save();

    // Turn on content translation for pages.
    $config = ContentLanguageSettings::loadByEntityTypeBundle('node', 'page');
    $config->setDefaultLangcode('en')
      ->setLanguageAlterable(TRUE)
      ->save();

    $this->contentTranslationManager->setEnabled('node', 'page', TRUE);

    $node = $this->drupalCreateNode(['type' => 'page', 'path' => '/test-en']);
    $node->addTranslation('nl', [
      'title' => $this->randomMachineName(),
      'path' => '/test-nl',
    ])->save();

    // Create a taxonomy vocabulary and make it translatable.
    $vocabulary = $this->entityTypeManager
      ->getStorage('taxonomy_vocabulary')
      ->create([
        'vid' => 'tags',
        'name' => 'Tags',
      ]);
    $vocabulary->save();

    $config = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', 'tags');
    $config->setDefaultLangcode('en')
      ->setLanguageAlterable(TRUE)
      ->save();

    $this->contentTranslationManager->setEnabled('taxonomy_term', 'tags', TRUE);

    $term = $this->createTerm($vocabulary, ['langcode' => 'en']);
    $term->addTranslation('nl', ['name' => $this->randomMachineName()])->save();

    // Create a content block type and make it translatable.
    $this->entityTypeManager->getStorage('block_content_type')->create([
      'id' => 'basic',
      'label' => 'Basic',
    ])->save();

    $config = ContentLanguageSettings::loadByEntityTypeBundle('block_content', 'basic');
    $config->setDefaultLangcode('en')
      ->setLanguageAlterable(TRUE)
      ->save();

    $this->contentTranslationManager->setEnabled('block_content', 'basic', TRUE);

    // Access to the default language.
    $this->roleStorage = $this->container->get('entity_type.manager')->getStorage('user_role');
    $authenticated_role = $this->roleStorage->load('authenticated');
    $authenticated_role->revokePermission('access language en');
    $authenticated_role->grantPermission('translate any entity');
    $authenticated_role->grantPermission('edit any page content');
    $authenticated_role->grantPermission('administer blocks');
    $authenticated_role->grantPermission('create page content');
    $authenticated_role->grantPermission('create terms in tags');
    $authenticated_role->grantPermission('administer users');
    $authenticated_role->grantPermission('administer taxonomy');
    $authenticated_role->save();

    $this->userEn = $this->createUser(['access language en']);
    $this->userNl = $this->createUser(['access language nl']);
  }

}
