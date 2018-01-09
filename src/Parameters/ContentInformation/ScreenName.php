<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters\ContentInformation;

use TheIconic\Tracking\GoogleAnalytics\Parameters\SingleParameter;

/**
 * Class ScreenName
 *
 * @link https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters#cd
 *
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters\ContentInformation
 */
class ScreenName extends SingleParameter
{
    /**
     * @inheritDoc
     *
     * @var string
     */
    protected $name = 'cd';

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
