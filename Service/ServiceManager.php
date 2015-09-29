<?php

namespace Evheniy\SitemapXmlBundle\Service;

use Evheniy\SitemapXmlBundle\Dump\DumpEntity;
use Evheniy\SitemapXmlBundle\Dump\DumpManager;
use Evheniy\SitemapXmlBundle\Dump\ImageEntity;
use Evheniy\SitemapXmlBundle\Dump\LocationEntity;
use Evheniy\SitemapXmlBundle\Dump\SiteMapEntity;
use Evheniy\SitemapXmlBundle\Dump\SiteMapIndexEntity;
use Evheniy\SitemapXmlBundle\Dump\VideoEntity;

/**
 * Class ServiceManager
 * @package Evheniy\SitemapXmlBundle\Service
 */
class ServiceManager
{
    /**
     * @return SiteMapIndexEntity
     */
    public function createSiteMapIndexEntity()
    {
        return new SiteMapIndexEntity();
    }

    /**
     * @return SiteMapEntity
     */
    public function createSiteMapEntity()
    {
        return new SiteMapEntity();
    }

    /**
     * @return LocationEntity
     */
    public function createLocationEntity()
    {
        return new LocationEntity();
    }

    /**
     * @return ImageEntity
     */
    public function createImageEntity()
    {
        return new ImageEntity();
    }

    /**
     * @return VideoEntity
     */
    public function createVideoEntity()
    {
        return new VideoEntity();
    }

    /**
     * @param string $rootDir
     *
     * @return DumpManager
     */
    public function createDumpManager($rootDir)
    {
        return new DumpManager(realpath($rootDir . '/../web'));
    }

    /**
     * @return DumpEntity
     */
    public function createDumpEntity()
    {
        return new DumpEntity();
    }
}