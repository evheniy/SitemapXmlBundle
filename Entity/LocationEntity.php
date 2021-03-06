<?php

namespace Evheniy\SitemapXmlBundle\Entity;

use Evheniy\SitemapXmlBundle\Collection\ImageCollection;
use Evheniy\SitemapXmlBundle\Collection\VideoCollection;
use Evheniy\SitemapXmlBundle\Collection\NewsCollection;

/**
 * Class LocationEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://support.google.com/webmasters/answer/35653
 * https://support.google.com/webmasters/answer/6082207
 */
class LocationEntity extends AbstractEntity
{
    /**
     * @var string
     */
    protected $location;
    /**
     * @var \DateTime
     */
    protected $lastmod;
    /**
     * @var string
     */
    protected $changefreq;
    /**
     * @var double
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
     * @var NewsCollection
     */
    protected $newsCollection;

    /**
     *
     */
    public function __construct()
    {
        $this->imageCollection = new ImageCollection();
        $this->videoCollection = new VideoCollection();
        $this->newsCollection = new NewsCollection();
        $this->lastmod = new \DateTime();
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
        $this->location = $location;

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
     * @return double
     */
    public function getPriority()
    {

        return $this->priority;
    }

    /**
     * @param double $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastmod()
    {

        return $this->lastmod;
    }

    /**
     * @param \DateTime $lastmod
     * @return $this
     */
    public function setLastmod(\DateTime $lastmod)
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
     * @param NewsEntity $newsEntity
     * @return $this
     */
    public function addNews(NewsEntity $newsEntity)
    {
        $this->newsCollection->attach($newsEntity);

        return $this;
    }

    /**
     * @return bool
     */
    public function isMobile()
    {

        return $this->isMobile;
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

    /**
     * @return NewsCollection
     */
    public function getNewsCollection()
    {
        return $this->newsCollection;
    }
}