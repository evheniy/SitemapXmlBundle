<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\ImageEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class ImageEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 */
class ImageEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @throws ValidateEntityException
     */
    public function validate()
    {
        throw new ValidateEntityException();
    }
}