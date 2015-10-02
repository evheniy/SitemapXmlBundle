<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Collection\NewsCollection;

/**
 * Class NewsCollectionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class NewsCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function test()
    {
        $newsCollection = new NewsCollection();
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\AbstractCollection', $newsCollection);
        $this->assertInstanceOf('\SplObjectStorage', $newsCollection);
    }
}