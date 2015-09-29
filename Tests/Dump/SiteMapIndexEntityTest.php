<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\SiteMapEntity;
use Evheniy\SitemapXmlBundle\Dump\SiteMapIndexEntity;

/**
 * Class SiteMapIndexEntityTest
 *
 * @package Evheniy\SitemapXmlBundle\Tests\Dump
 */
class SiteMapIndexEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SiteMapIndexEntity
     */
    protected $siteMapIndexEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapIndexEntity = new SiteMapIndexEntity();
    }

    /**
     *
     */
    public function testDump()
    {
        $this->assertRegExp('/\<\?xml version\=\"1\.0\" encoding\=\"UTF\-8\"\?\>/', $this->siteMapIndexEntity ->getXml());
        $this->assertRegExp('/\<sitemapindex xmlns\=\"http\:\/\/www\.sitemaps\.org\/schemas\/sitemap\/0\.9\"\>/', $this->siteMapIndexEntity ->getXml());
        $this->assertRegExp('/\<\/sitemapindex\>/', $this->siteMapIndexEntity ->getXml());
    }

    /**
     *
     */
    public function testDumpSiteMap()
    {
        $siteMapEntity = new SiteMapEntity();
        $siteMapEntity->setLoc('http://test.com/sitemap1.xml');
        $siteMapEntity->setLastmod(new \DateTime('2015-09-10'));
        $this->siteMapIndexEntity->addSiteMap($siteMapEntity);
        $this->assertRegExp('/\<sitemap\>\<loc\>http\:\/\/test\.com\/sitemap1\.xml\<\/loc\>\<lastmod\>2015\-09\-10\<\/lastmod\>\<\/sitemap\>/', $this->siteMapIndexEntity ->getXml());
    }
}