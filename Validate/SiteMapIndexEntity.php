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
            if (filter_var($loc, FILTER_VALIDATE_URL) === false) {
                throw new ValidateEntityException('"Loc" field must be valid url!');
            }
            $siteMapEntity->validate();
        }

        return $this;
    }
}