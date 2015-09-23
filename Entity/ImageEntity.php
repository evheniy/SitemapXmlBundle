<?php

namespace Evheniy\SitemapXmlBundle\Entity;

/**
 * Class ImageEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://support.google.com/webmasters/answer/178636?vid=1-635786063884135235-1700809274
 */
class ImageEntity extends AbstractEntity
{
    /**
     * Google can check only 1000 image url for one location
     */
    const MAX_COUNT_FOR_LOCATION = 1000;

    /**
     * @var string
     */
    protected $loc;
    /**
     * @var string
     */
    protected $caption;
    /**
     * @var string
     */
    protected $geoLocation;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $license;

    /**
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->loc = $location;

        return $this;
    }

    /**
     * @param string $caption
     * @return $this
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * @param string $geoLocation
     * Example: place of photo (country, city...)
     * @return $this
     */
    public function setGeoLocation($geoLocation)
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $license
     * @return $this
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }
}