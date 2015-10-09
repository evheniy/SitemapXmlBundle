<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Validate\ImageEntity as Entity;

/**
 * Class ImageEntity
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 * https://support.google.com/webmasters/answer/178636
 */
class ImageEntity extends Entity implements DumpEntityInterface
{
    /**
     * @return string
     */
    public function getXml()
    {
        $imageText = '<image:image>';
        $imageText .= '<image:loc>' . $this->loc . '</image:loc>';
        if (!empty($this->caption)) {
            $imageText .= '<image:caption>' . $this->caption . '</image:caption>';
        }
        if (!empty($this->geoLocation)) {
            $imageText .= '<image:geo_location>' . $this->geoLocation . '</image:geo_location>';
        }
        if (!empty($this->title)) {
            $imageText .= '<image:title>' . $this->title . '</image:title>';
        }
        if (!empty($this->license)) {
            $imageText .= '<image:license>' . $this->license . '</image:license>';
        }
        $imageText .= '</image:image>';

        return $imageText;
    }
}