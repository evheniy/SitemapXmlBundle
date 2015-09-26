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
     * @param array $params
     *
     * @return string
     */
    public function getXml(array $params = array())
    {
        $locationText = '<url>';
        $locationText .= '<loc>' . $this->location . '</loc>';
        if (!empty($this->lastmod)) {
            $locationText .= '<lastmod>' . $this->lastmod . '</lastmod>';
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
            $locationText .= $imageEntity->toXml();
        }
        foreach ($this->videoCollection as $videoEntity) {
            $locationText .= $videoEntity->toXml();
        }
        $locationText .= '</url>';

        return $locationText;
    }
}