<?php

namespace Drupal\language_access\Plugin\LanguageNegotiation;

use Drupal\Component\Utility\UserAgent;
use Drupal\language\Plugin\LanguageNegotiation\LanguageNegotiationBrowser;
use Symfony\Component\HttpFoundation\Request;

/**
 * Alternate language browser plugin that checks access to the languages.
 *
 * @see \Drupal\language\Plugin\LanguageNegotiation\LanguageNegotiationBrowser
 */
class LanguageAccessNegotiationBrowser extends LanguageNegotiationBrowser {

  /**
   * {@inheritdoc}
   */
  public function getLangcode(Request $request = NULL) {
    $langcode = NULL;

    if ($this->languageManager && $request && $request->server->get('HTTP_ACCEPT_LANGUAGE')) {
      $http_accept_language = $request->server->get('HTTP_ACCEPT_LANGUAGE');
      $langcodes = array_keys($this->languageManager->getLanguages());
      foreach ($langcodes as $langcode) {
        if (!$this->currentUser->hasPermission('access language ' . $langcode)) {
          $langcodes = array_diff($langcodes, [$langcode]);
        }
      }
      $mappings = $this->config->get('language.mappings')->get('map');
      $langcode = UserAgent::getBestMatchingLangcode($http_accept_language, $langcodes, $mappings);
    }

    // Internal page cache with multiple languages and browser negotiation
    // could lead to wrong cached sites. Therefore disabling the internal page
    // cache.
    // @todo Solve more elegantly in https://www.drupal.org/node/2430335.
    $this->pageCacheKillSwitch->trigger();

    return $langcode;
  }

}
