<?php

namespace Evheniy\SitemapXmlBundle\Entity;

/**
 * Class VideoEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://developers.google.com/webmasters/videosearch/sitemaps
 */
class VideoEntity extends AbstractEntity
{
    protected $thumbnailLoc;
    protected $title;
    protected $description;
    protected $contentLoc;
    protected $playerLoc;
    protected $duration;
    protected $expirationDate;
    protected $rating;
    protected $viewCount;
    protected $publicationDate;
    protected $familyFriendly;
    protected $tag;
    protected $category;
    protected $restriction;
    protected $galleryLoc;
    protected $price;
    protected $requiresSubscription;
    protected $uploader;
    protected $platform;
    protected $live;

    /**
     * @param mixed $thumbnailLoc
     */
    public function setThumbnailLoc($thumbnailLoc)
    {
        $this->thumbnailLoc = $thumbnailLoc;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $contentLoc
     */
    public function setContentLoc($contentLoc)
    {
        $this->contentLoc = $contentLoc;
    }

    /**
     * @param mixed $playerLoc
     */
    public function setPlayerLoc($playerLoc)
    {
        $this->playerLoc = $playerLoc;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @param mixed $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @param mixed $viewCount
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    /**
     * @param mixed $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @param mixed $familyFriendly
     */
    public function setFamilyFriendly($familyFriendly)
    {
        $this->familyFriendly = $familyFriendly;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @param mixed $restriction
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;
    }

    /**
     * @param mixed $galleryLoc
     */
    public function setGalleryLoc($galleryLoc)
    {
        $this->galleryLoc = $galleryLoc;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $requiresSubscription
     */
    public function setRequiresSubscription($requiresSubscription)
    {
        $this->requiresSubscription = $requiresSubscription;
    }

    /**
     * @param mixed $uploader
     */
    public function setUploader($uploader)
    {
        $this->uploader = $uploader;
    }

    /**
     * @param mixed $platform
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }

    /**
     * @param mixed $live
     */
    public function setLive($live)
    {
        $this->live = $live;
    }
}