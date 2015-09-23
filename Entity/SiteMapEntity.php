<?php

namespace Evheniy\SitemapXmlBundle\Entity;

use Evheniy\SitemapXmlBundle\Collection\LocationCollection;
use Evheniy\SitemapXmlBundle\Exception\MaxCountLocationException;

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
     *
     */
    public function __construct()
    {
        $this->locationCollection = new LocationCollection();
    }

    /**
     * @param LocationEntity $locationEntity
     * @return $this
     * @throws MaxCountLocationException
     */
    public function addLocation(LocationEntity $locationEntity)
    {
        if ($this->locationCollection->count() >= LocationEntity::MAX_COUNT_FOR_SITE_MAP) {
            throw new MaxCountLocationException();
        }
        $this->locationCollection->attach($locationEntity);

        return $this;
    }
}