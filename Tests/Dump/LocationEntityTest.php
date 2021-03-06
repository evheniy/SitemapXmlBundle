<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\ImageEntity;
use Evheniy\SitemapXmlBundle\Dump\LocationEntity;
use Evheniy\SitemapXmlBundle\Dump\NewsEntity;
use Evheniy\SitemapXmlBundle\Dump\VideoEntity;

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
        $this->assertRegExp('/\<url\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<\/url\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<loc\>http\:\/\/test\.com\/\<\/loc\>/', $this->locationEntity->getXml());
    }

    /**
     *
     */
    public function testLastmod()
    {
        $this->locationEntity->setLastmod(new \DateTime('2015-09-10'));
        $this->assertRegExp('/\<lastmod\>2015-09-10\<\/lastmod\>/', $this->locationEntity->getXml());
    }

    /**
     *
     */
    public function testChangefreq()
    {
        $this->locationEntity->setChangefreq('monthly');
        $this->assertRegExp('/\<changefreq\>monthly\<\/changefreq\>/', $this->locationEntity->getXml());
    }

    /**
     *
     */
    public function testPriority()
    {
        $this->locationEntity->setPriority(0.5);
        $this->assertRegExp('/\<priority\>0.5\<\/priority\>/', $this->locationEntity->getXml());
    }

    /**
     *
     */
    public function testMobile()
    {
        $this->locationEntity->setMobile(true);
        $this->assertRegExp('/\<mobile\:mobile\/\>/', $this->locationEntity->getXml());
    }

    /**
     *
     */
    public function testImageCollection()
    {
        $imageEntity = new ImageEntity();
        $imageEntity->setLocation('http://test.com/');
        $this->locationEntity->addImage($imageEntity);
        $this->assertRegExp('/\<image\:image\>\<image\:loc\>http\:\/\/test\.com\/\<\/image\:loc\>\<\/image\:image\>/', $this->locationEntity->getXml());
    }

    /**
     *
     */
    public function testVideoCollection()
    {
        $videoEntity = new VideoEntity();
        $videoEntity->setThumbnailLoc('http://test.com/video.png');
        $videoEntity->setTitle('test');
        $videoEntity->setDescription('test');
        $this->locationEntity->addVideo($videoEntity);
        $this->assertRegExp('/\<video\:video\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<video\:thumbnail\_loc\>http\:\/\/test\.com\/video\.png\<\/video\:thumbnail\_loc\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<video\:title\>test\<\/video\:title\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<video\:description\>test\<\/video\:description\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<\/video\:video\>/', $this->locationEntity->getXml());
    }

    /**
     *
     */
    public function testNewsCollection()
    {
        $newsEntity = new NewsEntity();
        $newsEntity->setPublicationName('test');
        $newsEntity->setPublicationLanguage('en');
        $this->locationEntity->addNews($newsEntity);
        $this->assertRegExp('/\<news\:news\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<news\:publication\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<news\:name\>test\<\/news\:name\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<news\:language\>en\<\/news\:language\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<\/news\:publication\>/', $this->locationEntity->getXml());
        $this->assertRegExp('/\<\/news\:news\>/', $this->locationEntity->getXml());
    }
}