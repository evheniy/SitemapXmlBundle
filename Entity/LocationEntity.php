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
     * @return string
     */
    public function getLocation()
    {

        return $this->location;
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
     * @return string
     */
    public function getChangefreq()
    {

        return $this->changefreq;
    }

    /**
     * @param string $changefreq
     * @return $this
     */
    public function setChangefreq($changefreq)
    {
        $this->changefreq = $changefreq;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriority()
    {

        return $this->priority;
    }

    /**
     * @param string $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastmod()
    {

        return $this->lastmod;
    }

    /**
     * @param string $lastmod
     * @return $this
     */
    public function setLastmod($lastmod)
    {
        $this->lastmod = $lastmod;

        return $this;
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
     * @return bool
     */
    public function getIsMobile()
    {

        return $this->isMobile;
    }

    /**
     * @param bool|false $isMobile
     * @return $this
     */
    public function setIsMobile($isMobile = false)
    {
        $this->isMobile = $isMobile;

        return $this;
    }

    /**
     * @return ImageCollection
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @return VideoCollection
     */
    public function getVideoCollection()
    {
        return $this->videoCollection;
    }
}