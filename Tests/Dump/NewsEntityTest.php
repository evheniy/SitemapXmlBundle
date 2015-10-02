<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\NewsEntity;

/**
 * Class NewsEntityTest
 *
 * @package Evheniy\SitemapXmlBundle\Tests\Dump
 */
class NewsEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NewsEntity
     */
    protected $newsEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->newsEntity = new NewsEntity();
    }

    /**
     *
     */
    public function testDump()
    {
        $this->markTestIncomplete();
    }
}