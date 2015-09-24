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
     * @throws ValidateEntityException
     */
    public function validate()
    {
        throw new ValidateEntityException();
    }
}