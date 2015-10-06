<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\VideoEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class VideoEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 * https://developers.google.com/webmasters/videosearch/sitemaps
 */
class VideoEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @return $this
     * @throws ValidateEntityException
     */
    public function validate()
    {
        if (empty($this->thumbnailLoc)) {
            throw new ValidateEntityException('"ThumbnailLoc" field must be not empty!');
        }
        if (filter_var($this->thumbnailLoc, FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('"ThumbnailLoc" field must be valid url!');
        }
        if (empty($this->title)) {
            throw new ValidateEntityException('"Title" field must be not empty!');
        }
        if (empty($this->description)) {
            throw new ValidateEntityException('"Description" field must be not empty!');
        }
        if (empty($this->contentLoc) && empty($this->playerLoc)) {
            throw new ValidateEntityException('You must specify at least one of "ContentLoc" or "PlayerLoc"');
        }
        if (!empty($this->contentLoc) && filter_var($this->contentLoc, FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('A URL pointing to the actual video media file. This file should be in .mpg, .mpeg, .mp4, .m4v, .mov, .wmv, .asf, .avi, .ra, .ram, .rm, .flv, or other video file format.');
        }
        if (!empty($this->playerLoc) && filter_var($this->playerLoc, FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('"PlayerLoc" field must be valid url!');
        }

        return $this;
    }
}