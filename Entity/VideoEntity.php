<?php

namespace Evheniy\SitemapXmlBundle\Entity;

/**
 * Class VideoEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://developers.google.com/webmasters/videosearch/sitemaps
 */
class VideoEntity extends AbstractEntity
{
    /**
     * @var string
     */
    protected $thumbnailLoc;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $contentLoc;
    /**
     * @var string
     */
    protected $playerLoc;
    /**
     * @var string
     */
    protected $duration;
    /**
     * @var \DateTime
     */
    protected $expirationDate;
    /**
     * @var string
     */
    protected $rating;
    /**
     * @var string
     */
    protected $viewCount;
    /**
     * @var \DateTime
     */
    protected $publicationDate;
    /**
     * @var boolean
     */
    protected $familyFriendly = true;
    /**
     * @var string
     */
    protected $tag;
    /**
     * @var string
     */
    protected $category;
    /**
     * @var string
     */
    protected $restriction;
    /**
     * @var string
     */
    protected $galleryLoc;
    /**
     * @var string
     */
    protected $price;
    /**
     * @var boolean
     */
    protected $requiresSubscription = true;
    /**
     * @var string
     */
    protected $uploader;
    /**
     * @var string
     */
    protected $platform;
    /**
     * @var boolean
     */
    protected $live = false;
    /**
     *
     */
    public function __construct()
    {
        $this->publicationDate = new \DateTime();
    }

    /**
     * @return string
     */
    public function getThumbnailLoc()
    {
        return $this->thumbnailLoc;
    }

    /**
     * @param string $thumbnailLoc
     * @return $this
     */
    public function setThumbnailLoc($thumbnailLoc)
    {
        $this->thumbnailLoc = $thumbnailLoc;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentLoc()
    {
        return $this->contentLoc;
    }

    /**
     * @param string $contentLoc
     * @return $this
     */
    public function setContentLoc($contentLoc)
    {
        $this->contentLoc = $contentLoc;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlayerLoc()
    {
        return $this->playerLoc;
    }

    /**
     * @param string $playerLoc
     * @return $this
     */
    public function setPlayerLoc($playerLoc)
    {
        $this->playerLoc = $playerLoc;

        return $this;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTime $expirationDate
     * @return $this
     */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     * @return $this
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return string
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }

    /**
     * @param string $viewCount
     * @return $this
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param \DateTime $publicationDate
     * @return $this
     */
    public function setPublicationDate(\DateTime $publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isFamilyFriendly()
    {
        return $this->familyFriendly;
    }

    /**
     * @param boolean $familyFriendly
     * @return $this
     */
    public function setFamilyFriendly($familyFriendly = true)
    {
        $this->familyFriendly = boolval($familyFriendly);

        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return string
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * @param string $restriction
     * @return $this
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }

    /**
     * @return string
     */
    public function getGalleryLoc()
    {
        return $this->galleryLoc;
    }

    /**
     * @param string $galleryLoc
     * @return $this
     */
    public function setGalleryLoc($galleryLoc)
    {
        $this->galleryLoc = $galleryLoc;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isRequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    /**
     * @param boolean $requiresSubscription
     * @return $this
     */
    public function setRequiresSubscription($requiresSubscription = true)
    {
        $this->requiresSubscription = boolval($requiresSubscription);

        return $this;
    }

    /**
     * @return string
     */
    public function getUploader()
    {
        return $this->uploader;
    }

    /**
     * @param string $uploader
     * @return $this
     */
    public function setUploader($uploader)
    {
        $this->uploader = $uploader;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isLive()
    {
        return $this->live;
    }

    /**
     * @param boolean $live
     * @return $this
     */
    public function setLive($live = false)
    {
        $this->live = boolval($live);

        return $this;
    }
}