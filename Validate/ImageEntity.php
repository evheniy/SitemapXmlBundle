<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\ImageEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class ImageEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 * https://support.google.com/webmasters/answer/178636?vid=1-635786063884135235-1700809274
 */
class ImageEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @return $this
     * @throws ValidateEntityException
     */
    public function validate()
    {
        if (empty($this->loc)) {
            throw new ValidateEntityException('"Loc" field must be not empty!');
        }
        if (filter_var($this->loc, FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('"Loc" field must be valid url!');
        }
        if (!empty($this->license) && filter_var($this->license, FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('"License" field should be valid url!');
        }

        return $this;
    }
}