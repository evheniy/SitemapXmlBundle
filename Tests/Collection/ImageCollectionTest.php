<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Collection\ImageCollection;

/**
 * Class ImageCollectionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class ImageCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function test()
    {
        $imageCollection = new ImageCollection();
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\AbstractCollection', $imageCollection);
        $this->assertInstanceOf('\SplObjectStorage', $imageCollection);
    }
}