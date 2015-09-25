<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\LocationEntity;

/**
 * Class LocationEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Entity
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
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Entity\LocationEntity');
    }

    /**
     *
     */
    public function testConstruct()
    {
        $imageCollection = $this->reflectionClass->getProperty('imageCollection');
        $imageCollection->setAccessible(true);
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\ImageCollection', $imageCollection->getValue($this->locationEntity));
        $videoCollection = $this->reflectionClass->getProperty('videoCollection');
        $videoCollection->setAccessible(true);
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\VideoCollection', $videoCollection->getValue($this->locationEntity));
    }

    /**
     *
     */
    public function testGetLocation()
    {
        $testValue = 'testLocation';
        $location = $this->reflectionClass->getProperty('location');
        $location->setAccessible(true);
        $location->setValue($this->locationEntity, $testValue);
        $this->assertEquals($this->locationEntity->getLocation(), $testValue);
    }

    /**
     *
     */
    public function testSetLocation()
    {
        $testValue = 'testLocation';
        $this->locationEntity->setLocation($testValue);
        $location = $this->reflectionClass->getProperty('location');
        $location->setAccessible(true);
        $this->assertEquals($location->getValue($this->locationEntity), $testValue);
        $this->assertEquals($this->locationEntity->getLocation(), $testValue);
    }

    /**
     *
     */
    public function testGetChangefreq()
    {
        $testValue = 'testChangefreq';
        $changefreq = $this->reflectionClass->getProperty('changefreq');
        $changefreq->setAccessible(true);
        $changefreq->setValue($this->locationEntity, $testValue);
        $this->assertEquals($this->locationEntity->getChangefreq(), $testValue);
    }

    /**
     *
     */
    public function testSetChangefreq()
    {
        $testValue = 'testChangefreq';
        $this->locationEntity->setChangefreq($testValue);
        $changefreq = $this->reflectionClass->getProperty('changefreq');
        $changefreq->setAccessible(true);
        $this->assertEquals($changefreq->getValue($this->locationEntity), $testValue);
        $this->assertEquals($this->locationEntity->getChangefreq(), $testValue);
    }

    /**
     *
     */
    public function testGetPriority()
    {
        $testValue = 'testPriority';
        $priority = $this->reflectionClass->getProperty('priority');
        $priority->setAccessible(true);
        $priority->setValue($this->locationEntity, $testValue);
        $this->assertEquals($this->locationEntity->getPriority(), $testValue);
    }

    /**
     *
     */
    public function testSetPriority()
    {
        $testValue = 'testPriority';
        $this->locationEntity->setPriority($testValue);
        $priority = $this->reflectionClass->getProperty('priority');
        $priority->setAccessible(true);
        $this->assertEquals($priority->getValue($this->locationEntity), $testValue);
        $this->assertEquals($this->locationEntity->getPriority(), $testValue);
    }

    /**
     *
     */
    public function testGetLastmod()
    {
        $testValue = 'testLastmod';
        $lastmod = $this->reflectionClass->getProperty('lastmod');
        $lastmod->setAccessible(true);
        $lastmod->setValue($this->locationEntity, $testValue);
        $this->assertEquals($this->locationEntity->getLastmod(), $testValue);
    }

    /**
     *
     */
    public function testSetLastmod()
    {
        $testValue = 'testLastmod';
        $this->locationEntity->setLastmod($testValue);
        $lastmod = $this->reflectionClass->getProperty('lastmod');
        $lastmod->setAccessible(true);
        $this->assertEquals($lastmod->getValue($this->locationEntity), $testValue);
        $this->assertEquals($this->locationEntity->getLastmod(), $testValue);
    }

    /**
     *
     */
    public function testAddImage()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testAddVideo()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testIsMobile()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testSetMobile()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testGetImageCollection()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testGetVideoCollection()
    {
        $this->markTestSkipped();
    }
}