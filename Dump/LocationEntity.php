<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Validate\LocationEntity as Entity;

/**
 * Class LocationEntity
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 * https://support.google.com/webmasters/answer/183668
 * https://support.google.com/webmasters/answer/6082207?vid=1-635786063884135235-1700809274
 */
class LocationEntity extends Entity implements DumpEntityInterface
{
    /**
     * @return string
     */
    public function getXml()
    {
        $locationText = '<url>';
        $locationText .= '<loc>' . $this->location . '</loc>';
        if (!empty($this->lastmod)) {
            $locationText .= '<lastmod>' . $this->lastmod->format('Y-m-d') . '</lastmod>';
        }
        if (!empty($this->changefreq)) {
            $locationText .= '<changefreq>' . $this->changefreq . '</changefreq>';
        }
        if (!empty($this->priority)) {
            $locationText .= '<priority>' . $this->priority . '</priority>';
        }
        if ($this->isMobile) {
            $locationText .= '<mobile:mobile/>';
        }
        foreach ($this->imageCollection as $imageEntity) {
            $locationText .= $imageEntity->getXml();
        }
        foreach ($this->videoCollection as $videoEntity) {
            $locationText .= $videoEntity->getXml();
        }
        foreach ($this->newsCollection as $newsEntity) {
            $locationText .= $newsEntity->getXml();
        }
        $locationText .= '</url>';

        return $locationText;
    }
}