<?php

namespace Evheniy\SitemapXmlBundle\Tests\Validate;

use Evheniy\SitemapXmlBundle\Validate\LocationEntity;

/**
 * Class LocationEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Validate
 */
class LocationEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LocationEntity
     */
    protected $locationEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->locationEntity = new LocationEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Validate\LocationEntity');
    }

    /**
     *
     */
    public function testIsValidLastmod()
    {
        $this->locationEntity->setLastmod('test');
        $isValidLastmod = $this->reflectionClass->getMethod('isValidLastmod');
        $isValidLastmod->setAccessible(true);
        $this->assertFalse($isValidLastmod->invoke($this->locationEntity));
        $this->locationEntity->setLastmod(new \DateTime());
        $this->assertTrue($isValidLastmod->invoke($this->locationEntity));
    }

    /**
     *
     */
    public function testIsValidChangefreq()
    {
        $this->locationEntity->setChangefreq('test');
        $isValidChangefreq = $this->reflectionClass->getMethod('isValidChangefreq');
        $isValidChangefreq->setAccessible(true);
        $this->assertFalse($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('always');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('hourly');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('daily');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('weekly');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('monthly');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('yearly');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('never');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
    }

    /**
     *
     */
    public function testIsValidPriority()
    {
        $isValidPriority = $this->reflectionClass->getMethod('isValidPriority');
        $isValidPriority->setAccessible(true);
        $this->locationEntity->setPriority(0.0);
        $this->assertTrue($isValidPriority->invoke($this->locationEntity));
        $this->locationEntity->setPriority(0.5);
        $this->assertTrue($isValidPriority->invoke($this->locationEntity));
        $this->locationEntity->setPriority(1.0);
        $this->assertTrue($isValidPriority->invoke($this->locationEntity));
        $this->locationEntity->setPriority(1.01);
        $this->assertFalse($isValidPriority->invoke($this->locationEntity));
        $this->locationEntity->setPriority(-0.01);
        $this->assertFalse($isValidPriority->invoke($this->locationEntity));
    }

    public function testValidate2()
    {
        $this->markTestSkipped();
    }

    public function testValidate3()
    {
        $this->markTestSkipped();
    }
}