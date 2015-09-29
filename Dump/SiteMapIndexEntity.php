<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Validate\SiteMapIndexEntity as Entity;

/**
 * Class SiteMapIndexEntity
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 * https://support.google.com/webmasters/answer/75712
 */
class SiteMapIndexEntity extends Entity implements DumpEntityInterface
{
    /**
     * @return string
     */
    public function getXml()
    {
        $siteMapIndexText = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $siteMapIndexText .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach ($this->siteMapCollection as $siteMapEntity) {
            $siteMapIndexText .= '<sitemap>';
            $siteMapIndexText .= '<loc>' . $siteMapEntity->getLoc() . '</loc>';
            $siteMapIndexText .= '<lastmod>' . $siteMapEntity->getLastmod()->format('Y-m-d') . '</lastmod>';
            $siteMapIndexText .= '</sitemap>';
        }
        $siteMapIndexText .= '</sitemapindex>';

        return $siteMapIndexText;
    }
}