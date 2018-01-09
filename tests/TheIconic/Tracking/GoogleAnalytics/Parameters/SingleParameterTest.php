<?php

namespace TheIconic\Tracking\GoogleAnalytics\Parameters;

use TheIconic\Tracking\GoogleAnalytics\Tests\SingleTestParameter;
use TheIconic\Tracking\GoogleAnalytics\Tests\SingleTestParameterIndexed;
use TheIconic\Tracking\GoogleAnalytics\Tests\InvalidSingleTestParameter;

class SingleParameterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SingleParameter
     */
    private $stubSingleParameter;

    /**
     * @var SingleParameter
     */
    private $stubSingleParameterIndexed;

    public function setUp()
    {
        $this->stubSingleParameter = new SingleTestParameter();
        $this->stubSingleParameterIndexed = new SingleTestParameterIndexed(2);
    }

    /**
     * @expectedException \TheIconic\Tracking\GoogleAnalytics\Exception\InvalidNameException
     */
    public function testInvalidSingleParameter()
    {
        (new InvalidSingleTestParameter);
    }

    /**
     * @expectedException \TheIconic\Tracking\GoogleAnalytics\Exception\InvalidIndexException
     */
    public function testInvalidSingleParameterIndexed()
    {
        (new SingleTestParameterIndexed());
    }

    public function testGetName()
    {
        $this->assertEquals('test', $this->stubSingleParameter->getName());
    }

    public function testGetNameIndexed()
    {
        $this->assertEquals('testi2', $this->stubSingleParameterIndexed->getName());
    }

    public function testValue()
    {
        $this->stubSingleParameter->setValue('test');

        $this->assertEquals('test', $this->stubSingleParameter->getValue());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Value exceeds maximum allowed length
     *
     * @throws \Exception
     */
    public function testValueTooLong()
    {
      $this->stubSingleParameter->setValue('too long text');
    }
}
