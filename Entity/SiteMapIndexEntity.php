<?php

namespace Evheniy\SitemapXmlBundle\Entity;

use Evheniy\SitemapXmlBundle\Collection\SiteMapCollection;

/**
 * Class SiteMapIndexEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://support.google.com/webmasters/answer/75712
 */
class SiteMapIndexEntity extends AbstractEntity
{
    /**
     * @var SiteMapCollection
     */
    protected $siteMapCollection;

    /**
     *
     */
    public function __construct()
    {
        $this->siteMapCollection = new SiteMapCollection();
    }

    /**
     * @param SiteMapEntity $siteMapEntity
     * @return $this
     */
    public function addSiteMap(SiteMapEntity $siteMapEntity)
    {
        $this->siteMapCollection->attach($siteMapEntity);

        return $this;
    }
}