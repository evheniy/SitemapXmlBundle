<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\ImageEntity;

/**
 * Class ImageEntityTest
 *
 * @package Evheniy\SitemapXmlBundle\Tests\Dump
 */
class ImageEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ImageEntity
     */
    protected $imageEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->imageEntity = new ImageEntity();
        $this->imageEntity->setLocation('http://test.com/');

    }

    /**
     *
     */
    public function testLocation()
    {
        $this->assertRegExp('/\<image\:image\>/', $this->imageEntity ->getXml());
        $this->assertRegExp('/\<\/image\:image\>/', $this->imageEntity ->getXml());
        $this->assertRegExp('/\<image\:loc\>http\:\/\/test\.com\/\<\/image\:loc\>/', $this->imageEntity ->getXml());
    }

    /**
     *
     */
    public function testCaption()
    {
        $this->imageEntity->setCaption('caption');
        $this->assertRegExp('/\<image\:caption\>caption\<\/image\:caption\>/', $this->imageEntity ->getXml());
    }

    /**
     *
     */
    public function testGeoLocation()
    {
        $this->imageEntity->setGeoLocation('GeoLocation');
        $this->assertRegExp('/\<image\:geo_location\>GeoLocation\<\/image\:geo_location\>/', $this->imageEntity ->getXml());
    }

    /**
     *
     */
    public function testTitle()
    {
        $this->imageEntity->setTitle('Title');
        $this->assertRegExp('/\<image\:title\>Title\<\/image\:title\>/', $this->imageEntity ->getXml());
    }

    /**
     *
     */
    public function testLicense()
    {
        $this->imageEntity->setLicense('License');
        $this->assertRegExp('/\<image\:license\>License\<\/image\:license\>/', $this->imageEntity ->getXml());
    }
}