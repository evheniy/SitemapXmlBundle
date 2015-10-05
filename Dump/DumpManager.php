<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Exception\DumpException;

/**
 * Class DumpManager
 * @package Evheniy\SitemapXmlBundle\Dump
 */
class DumpManager
{
    /**
     * @var DumpEntity
     */
    protected $dumpEntity;

    /**
     * @param DumpEntity $dumpEntity
     * @return $this
     */
    public function setEntity(DumpEntity $dumpEntity)
    {
        $this->dumpEntity = $dumpEntity;

        return $this;
    }

    /**
     * @throws DumpException
     */
    public function dumpSiteMapIndex()
    {
        $this->dumpEntity->validate();
        $this->setSiteMapLocation();
        $this->validateSiteMapIndex();
        $this->validateAllSiteMap();
        $this->saveSiteMap();
        $this->saveSiteMapIndex();
    }

    /**
     * @throws DumpException
     */
    public function dumpSiteMap()
    {
        $this->dumpEntity->validate();
        $this->validateSiteMap();
        $this->saveSiteMap();
    }

    /**
     * @throws DumpException
     */
    protected function validateSiteMapIndex()
    {
        $siteMapIndexEntity = $this->dumpEntity->getSiteMapIndexEntity();
        if (empty($siteMapIndexEntity)) {
            throw new DumpException('Empty SiteMapIndexEntity!');
        }
    }

    /**
     * @throws DumpException
     */
    protected function validateSiteMap()
    {
        $siteMapEntity = $this->dumpEntity->getSiteMapEntity();
        if (empty($siteMapEntity)) {
            throw new DumpException('Empty SiteMapEntity!');
        }
    }

    /**
     *
     */
    protected function setSiteMapLocation()
    {
        $siteMapIndexEntity = $this->dumpEntity->getSiteMapIndexEntity();
        $counter = 0;
        foreach ($siteMapIndexEntity->getSiteMapCollection() as $siteMapEntity) {
            $loc = $siteMapEntity->getLoc();
            if (empty($loc)) {
                $siteMapEntity->setLoc(
                    $this->dumpEntity->getProtocol() .
                    '://' .
                    $this->dumpEntity->getDomain() .
                    ($this->dumpEntity->getPath() !== '' ? '/' . $this->dumpEntity->getPath() . '/' : '/') .
                    'sitemap' .
                    $counter++ .
                    '.xml'
                );
            }
        }
    }

    /**
     * @throws \Evheniy\SitemapXmlBundle\Exception\ValidateEntityException
     */
    protected function validateAllSiteMap()
    {
        $siteMapEntity = $this->dumpEntity->getSiteMapEntity();
        $siteMapIndexEntity = $this->dumpEntity->getSiteMapIndexEntity();
        if (!empty($siteMapEntity)) {
            $siteMapEntity->validate();
        } elseif (!empty($siteMapIndexEntity)) {
            $siteMapIndexEntity->validate();
        }
    }

    /**
     *
     */
    protected function saveSiteMap()
    {
        $siteMapEntity = $this->dumpEntity->getSiteMapEntity();
        $siteMapIndexEntity = $this->dumpEntity->getSiteMapIndexEntity();
        if (!empty($siteMapEntity)) {
            $location = $siteMapEntity->getLoc();
            if (empty($location)) {
                $this->dumpEntity->saveFile(
                    $this->dumpEntity->getWebDir().
                    '/' .
                    ($this->dumpEntity->getPath() !== '' ? '/' . $this->dumpEntity->getPath() . '/' : '/') .
                    'sitemap.xml',
                    $siteMapEntity->getXml()
                );
            } else {
                $location = explode($this->dumpEntity->getDomain() . '/', $location);
                $location = $this->dumpEntity->getWebDir(). '/' . $location[1];
                $this->dumpEntity->saveFile($location, $siteMapEntity->getXml());
            }
        } elseif (!empty($siteMapIndexEntity)) {
            foreach ($siteMapIndexEntity->getSiteMapCollection() as $siteMapEntity) {
                $location = explode($this->dumpEntity->getDomain() . '/', $siteMapEntity->getLoc());
                $location = $this->dumpEntity->getWebDir(). '/' . $location[1];
                $this->dumpEntity->saveFile($location, $siteMapEntity->getXml());
            }
        }
    }

    /**
     *
     */
    protected function saveSiteMapIndex()
    {
        $this->dumpEntity->saveFile(
            $this->dumpEntity->getWebDir().
            '/' .
            ($this->dumpEntity->getPath() !== '' ? '/' . $this->dumpEntity->getPath() . '/' : '/') .
            'sitemap.xml',
            $this->dumpEntity->getSiteMapIndexEntity()->getXml()
        );
    }
}