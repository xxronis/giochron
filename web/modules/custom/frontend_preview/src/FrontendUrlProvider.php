<?php

declare(strict_types=1);

namespace Drupal\frontend_preview;

use Drupal\Core\Site\Settings;

/**
 * Provides the frontend URL from settings.php.
 */
class FrontendUrlProvider {

  public function __construct(
    protected Settings $settings,
  ) {}

  /**
   * Gets the frontend URL, with no trailing slash.
   */
  public function getFrontendUrl(): ?string {
    $url = $this->settings->get('frontend_url');
    return $url ? rtrim($url, '/') : NULL;
  }

}
