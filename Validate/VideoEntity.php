<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\VideoEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class VideoEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 */
class VideoEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @throws ValidateEntityException
     */
    public function validate()
    {
        throw new ValidateEntityException();
    }
}