<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\SiteMapEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class SiteMapEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 */
class SiteMapEntity extends Entity implements ValidateEntityInterface
{
    /**
     * Google can process only 50 000 urls for one sitemap
     * if more - use sitemap index
     */
    const MAX_COUNT_LOCATIONS_FOR_SITEMAP = 50000;

    /**
     * @throws ValidateEntityException
     */
    public function validate()
    {
        if ($this->locationCollection->count() > self::MAX_COUNT_LOCATIONS_FOR_SITEMAP) {
            throw new ValidateEntityException('Max count locations for sitemap is 50 000!');
        }
        foreach ($this->locationCollection as $locationEntity) {
            $locationEntity->validate();
        }

        return $this;
    }
}