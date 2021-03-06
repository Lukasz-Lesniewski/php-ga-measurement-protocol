<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters\SocialInteractions;

/**
 * Class SocialActionTarget
 *
 * @link https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters#st
 *
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters\SocialInteractions
 */
class SocialActionTarget
{
    /**
     * @inheritDoc
     *
     * @var string
     */
    protected $name = 'st';

  /**
   * @inheritDoc
   *
   * @var string
   */
  protected $type = 'string';

  /**
   * @inheritDoc
   *
   * @var int
   */
  protected $length = 2048;
}
