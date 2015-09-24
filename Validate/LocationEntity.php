<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\LocationEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class LocationEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 */
class LocationEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @throws ValidateEntityException
     */
    public function validate()
    {
        throw new ValidateEntityException();
    }
}