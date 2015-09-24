<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Interface ValidateEntityInterface
 * @package Evheniy\SitemapXmlBundle\Validate
 */
interface ValidateEntityInterface
{
    /**
     * @throws ValidateEntityException
     */
    public function validate();
}