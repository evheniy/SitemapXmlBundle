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
    protected function setEntity(DumpEntity $dumpEntity)
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
                    '/' .
                    $this->dumpEntity->getPath() .
                    '/' .
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
        $this->dumpEntity->getSiteMapIndexEntity()->validate();
    }

    /**
     *
     */
    protected function saveSiteMap()
    {
        foreach ($this->dumpEntity->getSiteMapIndexEntity()->getSiteMapCollection() as $siteMapEntity) {
            $this->saveFile($siteMapEntity->getLoc(), $siteMapEntity->getXml());
        }

    }

    /**
     *
     */
    protected function saveSiteMapIndex()
    {
        $this->saveFile($this->dumpEntity->getPath() . '/' . 'sitemap.xml', $this->dumpEntity->getSiteMapIndexEntity()->getXml());
    }

    /**
     * @param string $filePath
     * @param string $fileContent
     */
    protected function saveFile($filePath, $fileContent)
    {
        $filePath;
        $fileContent;
        //TODO save file
    }

    //TODO DumpEntity, DumpValidation, FileSaver...
}