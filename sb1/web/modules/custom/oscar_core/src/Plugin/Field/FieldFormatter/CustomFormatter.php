<?php

namespace Drupal\oscar_core\Plugin\Field\FieldFormatter;

use Drupal\Core\Form\FormStateInterface;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter;
/**
 * Plugin implementation of the 'image' formatter.
 *
 * @FieldFormatter(
 *   id = "custom_formatter",
 *   label = @Translation("Custom Formatter"),
 *   field_types = {
 *     "image"
 *   },
 *   quickedit = {
 *     "editor" = "image"
 *   }
 * )
 */
class CustomFormatter extends ImageFormatter {

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    parent::defaultSettings();


  }

}
