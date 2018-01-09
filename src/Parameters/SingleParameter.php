<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters;

use TheIconic\Tracking\GoogleAnalytics\Traits\Indexable;

/**
 * Class SingleParameter
 *
 * A parameter is composed of a name and a value.
 *
 * @package TheIconic\Tracking\GoogleAnalytics\Parameters
 */
abstract class SingleParameter implements SingleParameterInterface
{
    use Indexable;

    /**
     * Name for a parameter in GA Measurement Protocol.
     * Its sent as the name for a query parameter in the HTTP request.
     *
     * @var string
     */
    protected $name = '';

    /**
     * Value for the parameter.
     *
     * @var mixed
     */
    protected $value;

    /**
     * Expected type of the value.
     *
     * @var string
     */
    protected $type;
  
    /**
     * Maximum length of text-type value.
     *
     * @var int
     */
    protected $length;

    /**
     * Indexes the name when necessary.
     *
     * @param $index
     */
    public function __construct($index = '')
    {
        $this->name = $this->addIndex($this->name, $index);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function setValue($value)
    {
        if (!is_null($this->type) && $this->type !== gettype($value)) {
          throw new \Exception("Value has different type then expected");
        }

        if (!is_null($this->length) && $this->length !== mb_strlen($value)) {
          throw new \Exception("Value exceeds maximum allowed length");
        }

        $this->value = $value;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue()
    {
        return $this->value;
    }
}
