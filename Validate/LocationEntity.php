<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\LocationEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class LocationEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 * https://support.google.com/webmasters/answer/35653
 * https://support.google.com/webmasters/answer/6082207?vid=1-635786063884135235-1700809274
 * https://support.google.com/webmasters/answer/183668
 */
class LocationEntity extends Entity implements ValidateEntityInterface
{
    /**
     * Google can process only 1000 image urls for one location
     */
    const MAX_COUNT_IMAGES_FOR_LOCATION = 1000;

    /**
     * @return $this
     * @throws ValidateEntityException
     */
    public function validate()
    {
        if (empty($this->location)) {
            throw new ValidateEntityException('"Location" field must be not empty!');
        }
        if (filter_var($this->location, FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('"Location" field must be valid url!');
        }
        if (!empty($this->changefreq) && !$this->isValidChangefreq()) {
            throw new ValidateEntityException('"Changefreq" field should be in [\'always\', \'hourly\', \'daily\', \'weekly\', \'monthly\', \'yearly\', \'never\']!');
        }
        if (!empty($this->priority) && !$this->isValidPriority()) {
            throw new ValidateEntityException('"Priority" field should be between 0.0 and 1.0!');
        }
        if ($this->imageCollection->count() > self::MAX_COUNT_IMAGES_FOR_LOCATION) {
            throw new ValidateEntityException('Max count images for location is 1000!');
        }
        foreach ($this->imageCollection as $imageEntity) {
            $imageEntity->validate();
        }
        foreach ($this->videoCollection as $videoEntity) {
            $videoEntity->validate();
        }
        foreach ($this->newsCollection as $newsEntity) {
            $newsEntity->validate();
        }

        return $this;
    }

    /**
     * @return bool
     */
    protected function isValidChangefreq()
    {

        return in_array($this->changefreq, array('always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never'));
    }

    /**
     * @return bool
     */
    protected function isValidPriority()
    {

        return ($this->priority >= 0.0) && ($this->priority <= 1.0);
    }
}