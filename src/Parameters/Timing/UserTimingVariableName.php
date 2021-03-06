<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters\Timing;

use TheIconic\Tracking\GoogleAnalytics\Parameters\SingleParameter;

/**
 * Class UserTimingVariableName
 *
 * @link https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters#utv
 *
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters\Timing
 */
class UserTimingVariableName extends SingleParameter
{
    /**
     * @inheritDoc
     *
     * @var string
     */
    protected $name = 'utv';

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
  protected $length = 500;
}
