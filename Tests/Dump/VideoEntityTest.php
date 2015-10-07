<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\VideoEntity;

/**
 * Class VideoEntityTest
 *
 * @package Evheniy\SitemapXmlBundle\Tests\Dump
 */
class VideoEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var VideoEntity
     */
    protected $videoEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->videoEntity = new VideoEntity();
        $this->videoEntity->setThumbnailLoc('http://test.com/video.png');
        $this->videoEntity->setTitle('test');
        $this->videoEntity->setDescription('test');
    }

    /**
     *
     */
    public function testDump()
    {
        $this->assertRegExp('/\<video\:video\>/', $this->videoEntity->getXml());
        $this->assertRegExp('/\<video\:thumbnail\_loc\>http\:\/\/test\.com\/video\.png\<\/video\:thumbnail\_loc\>/', $this->videoEntity->getXml());
        $this->assertRegExp('/\<video\:title\>test\<\/video\:title\>/', $this->videoEntity->getXml());
        $this->assertRegExp('/\<video\:description\>test\<\/video\:description\>/', $this->videoEntity->getXml());
        $this->assertRegExp('/\<video\:family\_friendly\>yes\<\/video\:family\_friendly\>/', $this->videoEntity->getXml());
        $this->assertRegExp('/\<video\:requires\_subscription\>yes\<\/video\:requires\_subscription\>/', $this->videoEntity->getXml());
        $this->assertRegExp('/\<video\:live\>no\<\/video\:live\>/', $this->videoEntity->getXml());
        $this->assertRegExp('/\<\/video\:video\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpContentLoc()
    {
        $this->videoEntity->setContentLoc('http://test.com/');
        $this->assertRegExp('/\<video\:content\_loc\>http\:\/\/test\.com\/\<\/video\:content\_loc\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpPlayerLoc()
    {
        $this->videoEntity->setPlayerLoc(array('url' => 'http://test.com/'));
        $this->assertRegExp('/\<video\:player\_loc>http\:\/\/test\.com\/\<\/video\:player\_loc\>/', $this->videoEntity->getXml());
        $this->videoEntity->setPlayerLoc(array('url' => 'http://test.com/', 'allowEmbed' => true));
        $this->assertRegExp('/\<video\:player\_loc allow\_embed\=\"yes\"\>http\:\/\/test\.com\/\<\/video\:player\_loc\>/', $this->videoEntity->getXml());
        $this->videoEntity->setPlayerLoc(array('url' => 'http://test.com/', 'allowEmbed' => false));
        $this->assertRegExp('/\<video\:player\_loc\ allow\_embed\=\"no\"\>http\:\/\/test\.com\/\<\/video\:player\_loc\>/', $this->videoEntity->getXml());
        $this->videoEntity->setPlayerLoc(array('url' => 'http://test.com/', 'allowEmbed' => false, 'autoPlay' => 'a1'));
        $this->assertRegExp('/\<video\:player\_loc\ allow\_embed\=\"no\"\ autoplay\=\"a1\"\>http\:\/\/test\.com\/\<\/video\:player\_loc\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpDuration()
    {
        $this->videoEntity->setDuration(123);
        $this->assertRegExp('/\<video\:duration\>123\<\/video\:duration\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpExpirationDate()
    {
        $this->videoEntity->setExpirationDate(new \DateTime('2015-09-10T00:00:00+03:00'));
        $this->assertRegExp('/\<video\:expiration\_date\>2015\-09\-10T00\:00\:00\+03\:00\<\/video\:expiration\_date\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpRating()
    {
        $this->videoEntity->setRating(4.0);
        $this->assertRegExp('/\<video\:rating\>4\.0\<\/video\:rating\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpViewCount()
    {
        $this->videoEntity->setViewCount(10);
        $this->assertRegExp('/\<video\:view\_count\>10\<\/video\:view\_count\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpPublicationDate()
    {
        $this->videoEntity->setPublicationDate(new \DateTime('2015-09-10T00:00:00+03:00'));
        $this->assertRegExp('/\<video\:publication\_date\>2015\-09\-10T00\:00\:00\+03\:00\<\/video\:publication\_date\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpTag()
    {
        $this->videoEntity->setTag('test');
        $this->assertRegExp('/\<video\:tag\>test\<\/video\:tag\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpCategory()
    {
        $this->videoEntity->setCategory('test');
        $this->assertRegExp('/\<video\:category\>test\<\/video\:category\>/', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpRestriction()
    {
        $this->markTestIncomplete();
        $this->assertRegExp('//', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpGalleryLoc()
    {
        $this->markTestIncomplete();
        $this->assertRegExp('//', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpPrice()
    {
        $this->markTestIncomplete();
        $this->assertRegExp('//', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpUploader()
    {
        $this->markTestIncomplete();
        $this->assertRegExp('//', $this->videoEntity->getXml());
    }

    /**
     *
     */
    public function testDumpPlatform()
    {
        $this->markTestIncomplete();
        $this->assertRegExp('//', $this->videoEntity->getXml());
    }
}