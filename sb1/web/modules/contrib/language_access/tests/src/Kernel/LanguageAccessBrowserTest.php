<?php

namespace Drupal\Tests\language_access\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\language_access\Plugin\LanguageNegotiation\LanguageAccessNegotiationBrowser;
use Drupal\Tests\user\Traits\UserCreationTrait;
use Symfony\Component\HttpFoundation\Request;

/**
 * Test language access browser test.
 *
 * @group language_access
 */
class LanguageAccessBrowserTest extends KernelTestBase {

  use UserCreationTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'language_access',
    'language',
    'system',
    'user',
  ];

  /**
   * The language negotiator.
   *
   * @var \Drupal\language\LanguageNegotiatorInterface
   */
  protected $languageNegotiator;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->installConfig(['user']);
    $this->installSchema('system', ['sequences']);
    $this->installEntitySchema('user');

    // Create a user. This user will have ID 1. This will prevent the tests from
    // creating a user with ID 1 which will always have all permissions.
    $this->createUser();

    $this->languageNegotiator = $this->container->get('language_negotiator');

    // Create languages.
    ConfigurableLanguage::createFromLangcode('nl')->save();
    ConfigurableLanguage::createFromLangcode('fr')->save();
  }

  /**
   * Test language access browser negotiation.
   *
   * @dataProvider browserLanguageNegotiationDataProvider
   */
  public function testBrowserLanguageNegotiation(string $expected, array $user_permissions, $http_accept_language) {
    /** @var \Drupal\language_access\Plugin\LanguageNegotiation\LanguageAccessNegotiationBrowser $browser_negotiation_method */
    $this->languageNegotiator->setCurrentUser($this->createUser($user_permissions));
    $browser_negotiation_method = $this->languageNegotiator->getNegotiationMethodInstance('language-browser');
    $this->assertInstanceOf(LanguageAccessNegotiationBrowser::class, $browser_negotiation_method);

    $request = new Request([], [], [], [], [], ['HTTP_ACCEPT_LANGUAGE' => $http_accept_language]);
    $this->assertEquals($expected, $browser_negotiation_method->getLangcode($request));
  }

  /**
   * Provides test cases for testBrowserLanguageNegotiation().
   *
   * @see testBrowserLanguageNegotiation
   */
  public function browserLanguageNegotiationDataProvider() {
    return [
      [
        'nl',
        ['access language nl'],
        'nl-BE,fr-FR;q=0.5',
      ],
      [
        'fr',
        ['access language fr'],
        'nl-BE,fr-FR;q=0.5',
      ],
      [
        'nl',
        ['access language fr', 'access language nl'],
        'nl-BE,fr-FR;q=0.5',
      ],
    ];
  }

}
