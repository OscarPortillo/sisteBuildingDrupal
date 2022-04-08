<?php

namespace Drupal\language_access\EventSubscriber;

use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Routing\RouteSubscriberBase;
use Drupal\Core\Routing\RoutingEvents;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * A route subscriber to alter the content translation overview route.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * The module handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * RouteSubscriber constructor.
   *
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler service.
   */
  public function __construct(ModuleHandlerInterface $module_handler) {
    $this->moduleHandler = $module_handler;
  }

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    if (!$this->moduleHandler->moduleExists('content_translation')) {
      return;
    }

    $entity_types = \Drupal::service('content_translation.manager')->getSupportedEntityTypes();
    foreach ($entity_types as $entity_type) {
      $route = $collection->get(sprintf('entity.%s.content_translation_overview', $entity_type->id()));
      if ($route instanceof Route) {
        $route->setDefault('_controller', 'Drupal\language_access\Controller\ContentTranslationController::overview');
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events = parent::getSubscribedEvents();
    // ContentTranslationRouteSubscriber::onAlterRoutes has a priority of -210.
    $events[RoutingEvents::ALTER] = ['onAlterRoutes', -220];
    return $events;
  }

}
