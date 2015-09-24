<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\ImageEntity;

/**
 * Class ImageEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Entity
 */
class ImageEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ImageEntity
     */
    protected $imageEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->imageEntity = new ImageEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Entity\ImageEntity');
    }

    /**
     *
     */
    public function testGetLocation()
    {
        $testValue = 'testLocation';
        $loc = $this->reflectionClass->getProperty('loc');
        $loc->setAccessible(true);
        $loc->setValue($this->imageEntity, $testValue);
        $this->assertEquals($this->imageEntity->getLocation(), $testValue);
    }

    /**
     *
     */
    public function testSetLocation()
    {
        $testValue = 'testLocation';
        $this->imageEntity->setLocation($testValue);
        $loc = $this->reflectionClass->getProperty('loc');
        $loc->setAccessible(true);
        $this->assertEquals($loc->getValue($this->imageEntity), $testValue);
        $this->assertEquals($this->imageEntity->getLocation(), $testValue);
    }

    /**
     *
     */
    public function testGetCaption()
    {
        $testValue = 'testCaption';
        $caption = $this->reflectionClass->getProperty('caption');
        $caption->setAccessible(true);
        $caption->setValue($this->imageEntity, $testValue);
        $this->assertEquals($this->imageEntity->getCaption(), $testValue);
    }

    /**
     *
     */
    public function testSetCaption()
    {
        $testValue = 'testCaption';
        $this->imageEntity->setCaption($testValue);
        $caption = $this->reflectionClass->getProperty('caption');
        $caption->setAccessible(true);
        $this->assertEquals($caption->getValue($this->imageEntity), $testValue);
        $this->assertEquals($this->imageEntity->getCaption(), $testValue);
    }

    /**
     *
     */
    public function testGetGeoLocation()
    {
        $testValue = 'testGeoLocation';
        $geoLocation = $this->reflectionClass->getProperty('geoLocation');
        $geoLocation->setAccessible(true);
        $geoLocation->setValue($this->imageEntity, $testValue);
        $this->assertEquals($this->imageEntity->getGeoLocation(), $testValue);
    }

    /**
     *
     */
    public function testSetGeoLocation()
    {
        $testValue = 'testGeoLocation';
        $this->imageEntity->setGeoLocation($testValue);
        $geoLocation = $this->reflectionClass->getProperty('geoLocation');
        $geoLocation->setAccessible(true);
        $this->assertEquals($geoLocation->getValue($this->imageEntity), $testValue);
        $this->assertEquals($this->imageEntity->getGeoLocation(), $testValue);
    }

    /**
     *
     */
    public function testGetTitle()
    {
        $testValue = 'testTitle';
        $title = $this->reflectionClass->getProperty('title');
        $title->setAccessible(true);
        $title->setValue($this->imageEntity, $testValue);
        $this->assertEquals($this->imageEntity->getTitle(), $testValue);
    }

    /**
     *
     */
    public function testSetTitle()
    {
        $testValue = 'testTitle';
        $this->imageEntity->setTitle($testValue);
        $title = $this->reflectionClass->getProperty('geoLocation');
        $title->setAccessible(true);
        $this->assertEquals($title->getValue($this->imageEntity), $testValue);
        $this->assertEquals($this->imageEntity->getTitle(), $testValue);
    }

    /**
     *
     */
    public function testGetLicense()
    {
        $testValue = 'testTitle';
        $license = $this->reflectionClass->getProperty('license');
        $license->setAccessible(true);
        $license->setValue($this->imageEntity, $testValue);
        $this->assertEquals($this->imageEntity->getLicense(), $testValue);
    }

    /**
     *
     */
    public function testSetLicense()
    {
        $testValue = 'testTitle';
        $this->imageEntity->setLicense($testValue);
        $license = $this->reflectionClass->getProperty('license');
        $license->setAccessible(true);
        $this->assertEquals($license->getValue($this->imageEntity), $testValue);
        $this->assertEquals($this->imageEntity->getLicense(), $testValue);
    }
}