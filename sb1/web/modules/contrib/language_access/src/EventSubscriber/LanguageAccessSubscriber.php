<?php

namespace Drupal\language_access\EventSubscriber;

use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StreamWrapper\PublicStream;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Redirect .html pages to corresponding Node page.
 */
class LanguageAccessSubscriber implements EventSubscriberInterface {

  /**
   * The current active user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * The request stack.
   *
   * @var \Symfony\Component\HttpFoundation\RequestStack
   */
  protected $requestStack;

  /**
   * Constructs LanguageAccess Subscriber.
   *
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   * @param \Drupal\Core\Language\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
   *   The request stack.
   */
  public function __construct(
    AccountInterface $current_user,
    LanguageManagerInterface $language_manager,
    RequestStack $request_stack
  ) {
    $this->currentUser = $current_user;
    $this->languageManager = $language_manager;
    $this->requestStack = $request_stack;
  }

  /**
   * Redirect pattern based url.
   *
   * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
   *   A RequestEvent instance.
   */
  public function customLanguageAccess(RequestEvent $event): void {
    $request = $this->requestStack->getCurrentRequest();
    $request_url = $request->server->get('REQUEST_URI');
    $language = $this->languageManager->getCurrentLanguage();

    // Do not execute on drush.
    if (PHP_SAPI === 'cli') {
      return;
    }

    // Do nothing on a sub request.
    if ($event->getRequestType() !== HttpKernelInterface::MASTER_REQUEST) {
      return;
    }

    if (!$this->pathIsWhitelisted($request_url)) {
      return;
    }

    // Check access to language.
    if ($this->currentUser->hasPermission('access language ' . $language->getId())) {
      return;
    }

    throw new AccessDeniedHttpException();
  }

  /**
   * Checks if the path is whitelisted.
   *
   * @param string $request_url
   *   The request URL.
   *
   * @return bool
   *   TRUE when the user can access the given URL.
   */
  public function pathIsWhitelisted(string $request_url): bool {
    $allowed_urls = [
      '/user/',
      PublicStream::basePath(),
      'sitemap.xml',
    ];

    foreach ($allowed_urls as $allowed_url) {
      if (strpos($request_url, $allowed_url) !== FALSE) {
        return FALSE;
      }
    }

    return TRUE;
  }

  /**
   * Listen to kernel.request events and call customRedirection.
   *
   * @return array
   *   Event names to listen to (key) and methods to call (value).
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = ['customLanguageAccess'];
    return $events;
  }

}
