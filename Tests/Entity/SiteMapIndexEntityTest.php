<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\SiteMapEntity;
use Evheniy\SitemapXmlBundle\Entity\SiteMapIndexEntity;

/**
 * Class SiteMapIndexEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Entity
 */
class SiteMapIndexEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SiteMapIndexEntity
     */
    protected $siteMapIndexEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapIndexEntity = new SiteMapIndexEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Entity\SiteMapIndexEntity');
    }

    /**
     *
     */
    public function testConstruct()
    {
        $siteMapCollection = $this->reflectionClass->getProperty('siteMapCollection');
        $siteMapCollection->setAccessible(true);
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\SiteMapCollection', $siteMapCollection->getValue($this->siteMapIndexEntity));
    }

    /**
     *
     */
    public function testAddSiteMap()
    {
        $siteMapEntity = new SiteMapEntity();
        $this->siteMapIndexEntity->addSiteMap($siteMapEntity);
        $siteMapCollection = $this->reflectionClass->getProperty('siteMapCollection');
        $siteMapCollection->setAccessible(true);
        $collection = $siteMapCollection->getValue($this->siteMapIndexEntity);
        $this->assertTrue($collection->contains($siteMapEntity));
    }

    /**
     *
     */
    public function testGetSiteMapCollection()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Collection\SiteMapCollection', $this->siteMapIndexEntity->getSiteMapCollection());
        $siteMapCollection = $this->reflectionClass->getProperty('siteMapCollection');
        $siteMapCollection->setAccessible(true);
        $this->assertEquals($siteMapCollection->getValue($this->siteMapIndexEntity), $this->siteMapIndexEntity->getSiteMapCollection());
    }
}