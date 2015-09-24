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
     * @throws ValidateEntityException
     */
    public function validate()
    {
        //TODO 50 000 locations per sitemap
        throw new ValidateEntityException();
    }
}