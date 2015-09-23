<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Collection\SiteMapCollection;

/**
 * Class SiteMapCollectionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class SiteMapCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function test()
    {
        $siteMapCollection = new SiteMapCollection();
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\AbstractCollection', $siteMapCollection);
        $this->assertInstanceOf('\SplObjectStorage', $siteMapCollection);
    }
}