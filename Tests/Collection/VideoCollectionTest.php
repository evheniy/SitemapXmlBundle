<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Collection\VideoCollection;

/**
 * Class VideoCollectionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class VideoCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function test()
    {
        $videoCollection = new VideoCollection();
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\AbstractCollection', $videoCollection);
        $this->assertInstanceOf('\SplObjectStorage', $videoCollection);
    }
}