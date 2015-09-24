<?php

namespace Evheniy\SitemapXmlBundle\Entity;

use Evheniy\SitemapXmlBundle\Collection\LocationCollection;

/**
 * Class SiteMapEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://support.google.com/webmasters/answer/183668
 */
class SiteMapEntity extends AbstractEntity
{
    /**
     * @var LocationCollection
     */
    protected $locationCollection;
    /**
     * @var string
     */
    protected $loc;
    /**
     * @var \DateTime
     */
    protected $lastmod;

    /**
     *
     */
    public function __construct()
    {
        $this->lastmod = new \DateTime();
        $this->locationCollection = new LocationCollection();
    }

    /**
     * @param LocationEntity $locationEntity
     * @return $this
     */
    public function addLocation(LocationEntity $locationEntity)
    {
        $this->locationCollection->attach($locationEntity);

        return $this;
    }

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
     * @param \DateTime $dateTime
     * @return $this
     */
    public function setLastmod(\DateTime $dateTime)
    {
        $this->lastmod = $dateTime;

        return $this;
    }
}