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
            $loc     = $siteMapEntity->getLoc();
            if (empty($loc)) {
                throw new ValidateEntityException('"Loc" field must be set!');
            }
            $siteMapEntity->validate();
        }

        return $this;
    }
}