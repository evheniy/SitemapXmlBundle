<?php

namespace Evheniy\SitemapXmlBundle\Entity;

use Evheniy\SitemapXmlBundle\Collection\ImageCollection;
use Evheniy\SitemapXmlBundle\Collection\VideoCollection;

/**
 * Class LocationEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://support.google.com/webmasters/answer/35653
 * https://support.google.com/webmasters/answer/6082207?vid=1-635786063884135235-1700809274
 */
class LocationEntity extends AbstractEntity
{
    /**
     * @var string
     */
    protected $location;
    /**
     * @var string
     */
    protected $lastmod;
    /**
     * @var string
     */
    protected $changefreq;
    /**
     * @var string
     */
    protected $priority;
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
     * @param string $changefreq
     */
    public function setChangefreq($changefreq)
    {
        $this->changefreq = $changefreq;
    }

    /**
     * @param string $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @param string $lastmod
     */
    public function setLastmod($lastmod)
    {
        $this->lastmod = $lastmod;
    }

    /**
     * @param ImageEntity $imageEntity
     * @return $this
     */
    public function addImage(ImageEntity $imageEntity)
    {
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