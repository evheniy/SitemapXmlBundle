<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Collection\LocationCollection;

/**
 * Class LocationCollectionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class LocationCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function test()
    {
        $locationCollection = new LocationCollection();
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\AbstractCollection', $locationCollection);
        $this->assertInstanceOf('\SplObjectStorage', $locationCollection);
    }
}