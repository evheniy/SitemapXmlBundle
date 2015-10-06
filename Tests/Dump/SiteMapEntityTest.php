<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\LocationEntity;
use Evheniy\SitemapXmlBundle\Dump\SiteMapEntity;

/**
 * Class SiteMapEntityTest
 *
 * @package Evheniy\SitemapXmlBundle\Tests\Dump
 */
class SiteMapEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SiteMapEntity
     */
    protected $siteMapEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapEntity = new SiteMapEntity();
    }

    /**
     *
     */
    public function testDump()
    {
        $this->assertRegExp('/\<\?xml version\=\"1\.0\" encoding\=\"UTF\-8\"\?\>/', $this->siteMapEntity->getXml());
        $this->assertRegExp('/\<urlset xmlns\=\"http\:\/\/www\.sitemaps\.org\/schemas\/sitemap\/0\.9\" xmlns\:image\=\"http\:\/\/www\.google\.com\/schemas\/sitemap\-image\/1\.1\" xmlns\:video\=\"http\:\/\/www\.google\.com\/schemas\/sitemap\-video\/1\.1\" xmlns\:news\=\"http\:\/\/www\.google\.com\/schemas\/sitemap\-news\/0\.9\"\>/', $this->siteMapEntity->getXml());
        $this->assertRegExp('/\<\/urlset\>/', $this->siteMapEntity->getXml());
    }

    /**
     *
     */
    public function testDumpLocation()
    {
        $locationEntity = new LocationEntity();
        $locationEntity->setLocation('http://test.com/');
        $locationEntity->setLastmod(new \DateTime('2015-09-10'));
        $this->siteMapEntity->addLocation($locationEntity);
        $this->assertRegExp('/\<url\>\<loc\>http\:\/\/test\.com\/\<\/loc\>\<lastmod\>2015\-09\-10\<\/lastmod\>\<\/url\>/', $this->siteMapEntity->getXml());
    }
}