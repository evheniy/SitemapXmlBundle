<?php

namespace Evheniy\SitemapXmlBundle\Service;

use Evheniy\SitemapXmlBundle\Dump\DumpManager;
use Evheniy\SitemapXmlBundle\Validate\ImageEntity;
use Evheniy\SitemapXmlBundle\Validate\LocationEntity;
use Evheniy\SitemapXmlBundle\Validate\SiteMapEntity;
use Evheniy\SitemapXmlBundle\Validate\SiteMapIndexEntity;
use Evheniy\SitemapXmlBundle\Validate\VideoEntity;

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
     * @return DumpManager
     */
    public function createDumpManager()
    {
        return new DumpManager();
    }
}