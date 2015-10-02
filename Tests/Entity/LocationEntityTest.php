<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\ImageEntity;
use Evheniy\SitemapXmlBundle\Entity\VideoEntity;
use Evheniy\SitemapXmlBundle\Entity\NewsEntity;
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
        $testValue = new \DateTime();
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
        $testValue = new \DateTime();
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
        $imageEntity = new ImageEntity();
        $this->locationEntity->addImage($imageEntity);
        $imageCollection = $this->reflectionClass->getProperty('imageCollection');
        $imageCollection->setAccessible(true);
        $collection = $imageCollection->getValue($this->locationEntity);
        $this->assertTrue($collection->contains($imageEntity));
    }

    /**
     *
     */
    public function testAddVideo()
    {
        $videoEntity = new VideoEntity();
        $this->locationEntity->addVideo($videoEntity);
        $videoCollection = $this->reflectionClass->getProperty('videoCollection');
        $videoCollection->setAccessible(true);
        $collection = $videoCollection->getValue($this->locationEntity);
        $this->assertTrue($collection->contains($videoEntity));
    }

    /**
     *
     */
    public function testAddNews()
    {
        $newsEntity = new NewsEntity();
        $this->locationEntity->addNews($newsEntity);
        $newsCollection = $this->reflectionClass->getProperty('newsCollection');
        $newsCollection->setAccessible(true);
        $collection = $newsCollection->getValue($this->locationEntity);
        $this->assertTrue($collection->contains($newsEntity));
    }

    /**
     *
     */
    public function testIsMobile()
    {
        $isMobile = $this->reflectionClass->getProperty('isMobile');
        $isMobile->setAccessible(true);
        $isMobile->setValue($this->locationEntity, true);
        $this->assertTrue($this->locationEntity->isMobile());
        $isMobile->setValue($this->locationEntity, false);
        $this->assertFalse($this->locationEntity->isMobile());
    }

    /**
     *
     */
    public function testSetMobile()
    {
        $this->locationEntity->setMobile(true);
        $isMobile = $this->reflectionClass->getProperty('isMobile');
        $isMobile->setAccessible(true);
        $this->assertTrue($isMobile->getValue($this->locationEntity));
        $this->assertTrue($this->locationEntity->isMobile());
        $this->locationEntity->setMobile(false);
        $this->assertFalse($isMobile->getValue($this->locationEntity));
        $this->assertFalse($this->locationEntity->isMobile());
    }

    /**
     *
     */
    public function testGetImageCollection()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\ImageCollection', $this->locationEntity->getImageCollection());
        $imageCollection = $this->reflectionClass->getProperty('imageCollection');
        $imageCollection->setAccessible(true);
        $this->assertEquals($imageCollection->getValue($this->locationEntity), $this->locationEntity->getImageCollection());
    }

    /**
     *
     */
    public function testGetVideoCollection()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\VideoCollection', $this->locationEntity->getVideoCollection());
        $videoCollection = $this->reflectionClass->getProperty('videoCollection');
        $videoCollection->setAccessible(true);
        $this->assertEquals($videoCollection->getValue($this->locationEntity), $this->locationEntity->getVideoCollection());
    }

    /**
     *
     */
    public function testGetNewsCollection()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\NewsCollection', $this->locationEntity->getNewsCollection());
        $newsCollection = $this->reflectionClass->getProperty('newsCollection');
        $newsCollection->setAccessible(true);
        $this->assertEquals($newsCollection->getValue($this->locationEntity), $this->locationEntity->getNewsCollection());
    }
}