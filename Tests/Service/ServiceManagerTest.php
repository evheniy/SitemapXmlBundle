<?php

namespace Evheniy\SitemapXmlBundle\Tests\Service;

use Evheniy\SitemapXmlBundle\Service\ServiceManager;

/**
 * Class ServiceManagerTest
 * @package Evheniy\SitemapXmlBundle\Tests\Service
 */
class ServiceManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ServiceManager
     */
    protected $serviceManager;

    /**
     *
     */
    public function setUp()
    {
        $this->serviceManager = new ServiceManager();
    }

    /**
     *
     */
    public function testCreateSiteMapIndexEntity()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Entity\SiteMapIndexEntity', $this->serviceManager->createSiteMapIndexEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Validate\SiteMapIndexEntity', $this->serviceManager->createSiteMapIndexEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Dump\SiteMapIndexEntity', $this->serviceManager->createSiteMapIndexEntity());
    }

    /**
     *
     */
    public function testCreateSiteMapEntity()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Entity\SiteMapEntity', $this->serviceManager->createSiteMapEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Validate\SiteMapEntity', $this->serviceManager->createSiteMapEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Dump\SiteMapEntity', $this->serviceManager->createSiteMapEntity());
    }

    /**
     *
     */
    public function testCreateLocationEntity()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Entity\LocationEntity', $this->serviceManager->createLocationEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Validate\LocationEntity', $this->serviceManager->createLocationEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Dump\LocationEntity', $this->serviceManager->createLocationEntity());
    }

    /**
     *
     */
    public function testCreateImageEntity()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Entity\ImageEntity', $this->serviceManager->createImageEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Validate\ImageEntity', $this->serviceManager->createImageEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Dump\ImageEntity', $this->serviceManager->createImageEntity());
    }

    /**
     *
     */
    public function testCreateVideoEntity()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Entity\VideoEntity', $this->serviceManager->createVideoEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Validate\VideoEntity', $this->serviceManager->createVideoEntity());
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Dump\VideoEntity', $this->serviceManager->createVideoEntity());
    }

    /**
     *
     */
    public function testCreateDumpManager()
    {
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Dump\DumpManager', $this->serviceManager->createDumpManager());
    }
}