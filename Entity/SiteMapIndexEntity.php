<?php

namespace Evheniy\SitemapXmlBundle\Entity;

/**
 * Class SiteMapIndexEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://support.google.com/webmasters/answer/75712
 */
class SiteMapIndexEntity extends AbstractEntity
{
    /**
     * @var SiteMapEntity
     */
    protected $siteMapEntity;

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
    }

    /**
     * @param SiteMapEntity $siteMap
     * @return $this
     */
    public function setSiteMap(SiteMapEntity $siteMap)
    {
        $this->siteMapEntity = $siteMap;

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