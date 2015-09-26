<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Validate\ImageEntity as Entity;

/**
 * Class ImageEntity
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 * https://support.google.com/webmasters/answer/178636?vid=1-635786063884135235-1700809274
 */
class ImageEntity extends Entity implements DumpEntityInterface
{
    /**
     * @param array $params
     *
     * @return string
     */
    public function getXml(array $params = array())
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