<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\DumpEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class DumpEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 */
class DumpEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @return $this
     * @throws ValidateEntityException
     */
    public function validate()
    {
        if (empty($this->webDir)) {
            throw new ValidateEntityException('Empty web directory!');
        }
        if (!in_array($this->protocol, array('http', 'https'))) {
            throw new ValidateEntityException('Wrong protocol!');
        }
        if (empty($this->domain)) {
            throw new ValidateEntityException('Empty domain!');
        }

        return $this;
    }
}