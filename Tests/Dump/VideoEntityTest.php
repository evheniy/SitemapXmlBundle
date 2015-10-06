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
        $this->assertRegExp('/\<\/video\:video\>/', $this->videoEntity->getXml());
    }
}