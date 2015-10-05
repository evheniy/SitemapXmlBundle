<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\ImageEntity;
use Evheniy\SitemapXmlBundle\Dump\LocationEntity;

/**
 * Class LocationEntityTest
 *
 * @package Evheniy\SitemapXmlBundle\Tests\Dump
 */
class LocationEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LocationEntity
     */
    protected $locationEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->locationEntity = new LocationEntity();
        $this->locationEntity->setLocation('http://test.com/');
    }

    /**
     *
     */
    public function testLocation()
    {
        $this->assertRegExp('/\<url\>/', $this->locationEntity ->getXml());
        $this->assertRegExp('/\<\/url\>/', $this->locationEntity ->getXml());
        $this->assertRegExp('/\<loc\>http\:\/\/test\.com\/\<\/loc\>/', $this->locationEntity ->getXml());
    }

    /**
     *
     */
    public function testLastmod()
    {
        $this->locationEntity->setLastmod(new \DateTime('2015-09-10'));
        $this->assertRegExp('/\<lastmod\>2015-09-10\<\/lastmod\>/', $this->locationEntity ->getXml());
    }

    /**
     *
     */
    public function testChangefreq()
    {
        $this->locationEntity->setChangefreq('monthly');
        $this->assertRegExp('/\<changefreq\>monthly\<\/changefreq\>/', $this->locationEntity ->getXml());
    }

    /**
     *
     */
    public function testPriority()
    {
        $this->locationEntity->setPriority(0.5);
        $this->assertRegExp('/\<priority\>0.5\<\/priority\>/', $this->locationEntity ->getXml());
    }

    /**
     *
     */
    public function testMobile()
    {
        $this->locationEntity->setMobile(true);
        $this->assertRegExp('/\<mobile\:mobile\/\>/', $this->locationEntity ->getXml());
    }

    /**
     *
     */
    public function testImageCollection()
    {
        $imageEntity = new ImageEntity();
        $imageEntity->setLocation('http://test.com/');
        $this->locationEntity->addImage($imageEntity);
        $this->assertRegExp('/\<image\:image\>\<image\:loc\>http\:\/\/test\.com\/\<\/image\:loc\>\<\/image\:image\>/', $this->locationEntity ->getXml());
    }

    /**
     *
     */
    public function testVideoCollection()
    {
        $this->markTestIncomplete();
    }

    /**
     *
     */
    public function testNewsCollection()
    {
        $this->markTestIncomplete();
    }
}