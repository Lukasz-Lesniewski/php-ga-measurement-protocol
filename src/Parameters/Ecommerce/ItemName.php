<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters\Ecommerce;

use TheIconic\Tracking\GoogleAnalytics\Parameters\SingleParameter;

/**
 * Class ItemName
 *
 * @link https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters#in
 *
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters\Ecommerce
 */
class ItemName extends SingleParameter
{
    /**
     * @inheritDoc
     *
     * @var string
     */
    protected $name = 'in';

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
