<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Validate\SiteMapEntity as Entity;

/**
 * Class SiteMapEntity
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 * https://support.google.com/webmasters/answer/183668
 */
class SiteMapEntity extends Entity implements DumpEntityInterface
{
    /**
     * @return string
     */
    public function getXml()
    {
        $siteMapText = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $siteMapText .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">';
        foreach ($this->locationCollection as $locationEntity) {
            $siteMapText .= $locationEntity->getXml();
        }
        $siteMapText .= '</urlset>';

        return $siteMapText;
    }
}