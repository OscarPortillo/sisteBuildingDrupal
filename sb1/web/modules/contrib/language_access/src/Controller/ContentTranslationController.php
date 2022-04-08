<?php

namespace Drupal\language_access\Controller;

use Drupal\content_translation\Controller\ContentTranslationController as ContentTranslationControllerBase;
use Drupal\Core\Routing\RouteMatchInterface;

/**
 * Controller that overrides the content translation overview page.
 *
 * This controller adds a check to the content translation overview page, that
 * checks if the current user has access to the languages shown in the table.
 */
class ContentTranslationController extends ContentTranslationControllerBase {

  /**
   * {@inheritdoc}
   */
  public function overview(RouteMatchInterface $route_match, $entity_type_id = NULL) {
    $build = parent::overview($route_match, $entity_type_id);

    foreach ($build['content_translation_overview']['#rows'] as $row_key => $row) {
      $operations = end($row);

      foreach ($operations['data']['#links'] as $operation_link) {
        $language = $operation_link['language'] ?? $operation_link['url']->getOption('language');

        if (!$this->currentUser->hasPermission('access language ' . $language->getId())) {
          unset($build['content_translation_overview']['#rows'][$row_key]);
        }
      }
    }

    return $build;
  }

}
