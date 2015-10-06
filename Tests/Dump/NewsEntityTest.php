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
        $this->newsEntity->setPublicationName('test');
        $this->newsEntity->setPublicationLanguage('en');
    }

    /**
     *
     */
    public function testDumpPublication()
    {
        $this->assertRegExp('/\<news\:news\>/', $this->newsEntity->getXml());
        $this->assertRegExp('/\<news\:publication\>/', $this->newsEntity->getXml());
        $this->assertRegExp('/\<news\:name\>test\<\/news\:name\>/', $this->newsEntity->getXml());
        $this->assertRegExp('/\<news\:language\>en\<\/news\:language\>/', $this->newsEntity->getXml());
        $this->assertRegExp('/\<\/news\:publication\>/', $this->newsEntity->getXml());
        $this->assertRegExp('/\<\/news\:news\>/', $this->newsEntity->getXml());
    }

    /**
     *
     */
    public function testDumpAccess()
    {
        $this->newsEntity->setAccess('test');
        $this->assertRegExp('/\<news\:access\>test\<\/news\:access\>/', $this->newsEntity->getXml());
    }

    /**
     *
     */
    public function testDumpGenres()
    {
        $this->newsEntity->setGenres('test');
        $this->assertRegExp('/\<news\:genres\>test\<\/news\:genres\>/', $this->newsEntity->getXml());
    }

    /**
     *
     */
    public function testDumpPublicationDate()
    {
        $this->newsEntity->setPublicationDate(new \DateTime('2015-09-10T00:00:00+03:00'));
        $this->assertRegExp('/\<news\:publication\_date\>2015\-09\-10T00\:00\:00\+03\:00\<\/news\:publication\_date\>/', $this->newsEntity->getXml());
    }

    /**
     *
     */
    public function testDumpTitle()
    {
        $this->newsEntity->setTitle('test');
        $this->assertRegExp('/\<news\:title\>test\<\/news\:title\>/', $this->newsEntity->getXml());
    }

    /**
     *
     */
    public function testDumpKeywords()
    {
        $this->newsEntity->setKeywords('test');
        $this->assertRegExp('/\<news\:keywords\>test\<\/news\:keywords\>/', $this->newsEntity->getXml());
    }

    /**
     *
     */
    public function testDumpStockTickers()
    {
        $this->newsEntity->setStockTickers('test');
        $this->assertRegExp('/\<news\:stock_tickers\>test\<\/news\:stock_tickers\>/', $this->newsEntity->getXml());
    }
}