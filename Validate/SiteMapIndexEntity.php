<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\SiteMapIndexEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class SiteMapIndexEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 */
class SiteMapIndexEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @return $this
     * @throws ValidateEntityException
     */
    public function validate()
    {
        foreach ($this->siteMapCollection as $siteMapEntity) {
            $loc = $siteMapEntity->getLoc();
            $lastmod = $siteMapEntity->getLastmod();
            if (empty($loc)) {
                throw new ValidateEntityException('"Loc" field must be set!');
            }
            if (empty($lastmod)) {
                throw new ValidateEntityException('"Lastmod" field must be set!');
            }
            $siteMapEntity->validate();
        }

        return $this;
    }
}