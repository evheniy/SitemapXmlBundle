<?php

namespace Evheniy\SitemapXmlBundle\Collection;

use Evheniy\SitemapXmlBundle\Entity\SiteMapIndexEntity;

/**
 * Class SiteMapIndexCollection
 * @package Evheniy\SitemapXmlBundle\Collection
 * https://support.google.com/webmasters/answer/75712
 */
class SiteMapIndexCollection extends AbstractCollection
{
    /**
     * @param SiteMapIndexEntity $siteMapIndexEntity
     */
    public function addSiteMap(SiteMapIndexEntity $siteMapIndexEntity)
    {
        $this->attach($siteMapIndexEntity);
    }
}