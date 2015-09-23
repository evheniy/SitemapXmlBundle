<?php

namespace Evheniy\SitemapXmlBundle\Entity;

use Evheniy\SitemapXmlBundle\Collection\ImageCollection;
use Evheniy\SitemapXmlBundle\Collection\VideoCollection;
use Evheniy\SitemapXmlBundle\Exception\MaxCountImageException;

/**
 * Class LocationEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://support.google.com/webmasters/answer/35653
 * https://support.google.com/webmasters/answer/6082207?vid=1-635786063884135235-1700809274
 */
class LocationEntity extends AbstractEntity
{
    /**
     *  Google can check only 50 000 location in one siteMap
     */
    const MAX_COUNT_FOR_SITE_MAP = 50000;
    /**
     * @var string
     */
    protected $location;
    /**
     * @var bool
     */
    protected $isMobile = false;
    /**
     * @var ImageCollection
     */
    protected $imageCollection;
    /**
     * @var VideoCollection
     */
    protected $videoCollection;

    /**
     *
     */
    public function __construct()
    {
        $this->imageCollection = new ImageCollection();
        $this->videoCollection = new VideoCollection();
    }

    /**
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = rawurlencode($location);

        return $this;
    }

    /**
     * @param ImageEntity $imageEntity
     * @return $this
     * @throws MaxCountImageException
     */
    public function addImage(ImageEntity $imageEntity)
    {
        if ($this->imageCollection->count() >= ImageEntity::MAX_COUNT_FOR_LOCATION) {
            throw new MaxCountImageException();
        }
        $this->imageCollection->attach($imageEntity);

        return $this;
    }

    /**
     * @param VideoEntity $videoEntity
     * @return $this
     */
    public function addVideo(VideoEntity $videoEntity)
    {
        $this->videoCollection->attach($videoEntity);

        return $this;
    }

    /**
     * @param bool|false $isMobile
     * @return $this
     */
    public function setMobile($isMobile = false)
    {
        $this->isMobile = $isMobile;

        return $this;
    }
}