<?php

namespace TheIconic\Tracking\GoogleAnalytics\Tests;

use TheIconic\Tracking\GoogleAnalytics\Parameters\SingleParameter;

class SingleTestParameter extends SingleParameter
{
    protected $name = 'test';
    protected $type = 'string';
    protected $length = 5;
}
