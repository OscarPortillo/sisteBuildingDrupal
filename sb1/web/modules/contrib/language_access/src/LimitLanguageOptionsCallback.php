<?php

namespace Drupal\language_access;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Security\TrustedCallbackInterface;

/**
 * Class that contains callbacks to alter language elements.
 */
class LimitLanguageOptionsCallback implements TrustedCallbackInterface {

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks() {
    return ['preRender'];
  }

  /**
   * Alters the language widget options. This method is used in #pre_render.
   *
   * Limits the options to those that the user is allowed to access.
   *
   * @param array $element
   *   The language form element.
   *
   * @return array
   *   The language form element.
   */
  public static function preRender(array $element): array {
    $languages = \Drupal::languageManager()->getLanguages();
    foreach (array_keys($element['#options']) as $id) {
      if (isset($languages[$id]) && !$element['#for_user']->hasPermission('access language ' . $id)) {
        unset($element['#options'][$id]);
      }
    }
    unset($element['#for_user']);
    return $element;
  }

  /**
   * Alters the language widget options. This method is used in #after_build.
   *
   * @param array $element
   *   The language form element.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The form state object.
   *
   * @return array
   *   The language form element.
   */
  public static function afterBuild(array $element, FormStateInterface $form_state): array {
    $languages = \Drupal::languageManager()->getLanguages();
    foreach (array_keys($element['value']['#options']) as $id) {
      if (isset($languages[$id]) && !$element['#for_user']->hasPermission('access language ' . $id)) {
        unset($element['value']['#options'][$id]);
      }
    }
    unset($element['#for_user']);
    return $element;
  }

}
