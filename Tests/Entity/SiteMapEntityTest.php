<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\LocationEntity;
use Evheniy\SitemapXmlBundle\Entity\SiteMapEntity;

/**
 * Class SiteMapEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Entity
 */
class SiteMapEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SiteMapEntity
     */
    protected $siteMapEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapEntity = new SiteMapEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Entity\SiteMapEntity');
    }

    /**
     *
     */
    public function testConstruct()
    {
        $lastmod = $this->reflectionClass->getProperty('lastmod');
        $lastmod->setAccessible(true);
        $this->assertInstanceOf('DateTime', $lastmod->getValue($this->siteMapEntity));
        $locationCollection = $this->reflectionClass->getProperty('locationCollection');
        $locationCollection->setAccessible(true);
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\LocationCollection', $locationCollection->getValue($this->siteMapEntity));
    }

    /**
     *
     */
    public function testAddLocation()
    {
        $locationEntity = new LocationEntity();
        $this->siteMapEntity->addLocation($locationEntity);
        $locationCollection = $this->reflectionClass->getProperty('locationCollection');
        $locationCollection->setAccessible(true);
        $collection = $locationCollection->getValue($this->siteMapEntity);
        $this->assertTrue($collection->contains($locationEntity));
    }

    /**
     *
     */
    public function testGetLocationCollection()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\LocationCollection', $this->siteMapEntity->getLocationCollection());
        $locationCollection = $this->reflectionClass->getProperty('locationCollection');
        $locationCollection->setAccessible(true);
        $this->assertEquals($locationCollection->getValue($this->siteMapEntity), $this->siteMapEntity->getLocationCollection());
    }

    /**
     *
     */
    public function testGetLoc()
    {
        $testValue = 'testLoc';
        $loc = $this->reflectionClass->getProperty('loc');
        $loc->setAccessible(true);
        $loc->setValue($this->siteMapEntity, $testValue);
        $this->assertEquals($this->siteMapEntity->getLoc(), $testValue);
    }

    /**
     *
     */
    public function testSetLoc()
    {
        $testValue = 'testLoc';
        $this->siteMapEntity->setLoc($testValue);
        $loc = $this->reflectionClass->getProperty('loc');
        $loc->setAccessible(true);
        $this->assertEquals($loc->getValue($this->siteMapEntity), $testValue);
        $this->assertEquals($this->siteMapEntity->getLoc(), $testValue);
    }

    /**
     *
     */
    public function testGetLastmod()
    {
        $testValue = new \DateTime();
        $lastmod = $this->reflectionClass->getProperty('lastmod');
        $lastmod->setAccessible(true);
        $lastmod->setValue($this->siteMapEntity, $testValue);
        $this->assertEquals($this->siteMapEntity->getLastmod(), $testValue);
    }

    /**
     *
     */
    public function testSetLastmod()
    {
        $testValue = new \DateTime();
        $this->siteMapEntity->setLastmod($testValue);
        $lastmod = $this->reflectionClass->getProperty('lastmod');
        $lastmod->setAccessible(true);
        $this->assertEquals($lastmod->getValue($this->siteMapEntity), $testValue);
        $this->assertEquals($this->siteMapEntity->getLastmod(), $testValue);
    }
}