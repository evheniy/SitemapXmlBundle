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
     * @var array
     */
    protected $playerLoc = array('url' => null, 'allowEmbed' => false, 'autoPlay' => null);
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
     * @var array
     */
    protected $restriction = array('countries' => null, 'relationship' => 'allow');
    /**
     * @var array
     */
    protected $galleryLoc = array('url' => null, 'title' => null);
    /**
     * @var array
     */
    protected $price = array('price' => null, 'currency' => null);
    /**
     * @var boolean
     */
    protected $requiresSubscription = true;
    /**
     * @var array
     */
    protected $uploader = array('name' => null, 'info' => null);
    /**
     * @var array
     */
    protected $platform = array('code' => null, 'relationship' => 'allow');
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
     * @return array
     */
    public function getPlayerLoc()
    {
        return $this->playerLoc;
    }

    /**
     * @param array $playerLoc
     * @return $this
     */
    public function setPlayerLoc(array $playerLoc)
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
        $this->familyFriendly = (bool) $familyFriendly;

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
     * @return array
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * @param array $restriction
     * @return $this
     */
    public function setRestriction(array $restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }

    /**
     * @return array
     */
    public function getGalleryLoc()
    {
        return $this->galleryLoc;
    }

    /**
     * @param array $galleryLoc
     * @return $this
     */
    public function setGalleryLoc(array $galleryLoc)
    {
        $this->galleryLoc = $galleryLoc;

        return $this;
    }

    /**
     * @return array
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param array $price
     * @return $this
     */
    public function setPrice(array $price)
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
        $this->requiresSubscription = (bool) $requiresSubscription;

        return $this;
    }

    /**
     * @return array
     */
    public function getUploader()
    {
        return $this->uploader;
    }

    /**
     * @param array $uploader
     * @return $this
     */
    public function setUploader(array $uploader)
    {
        $this->uploader = $uploader;

        return $this;
    }

    /**
     * @return array
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param array $platform
     * @return $this
     */
    public function setPlatform(array $platform)
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
        $this->live = (bool) $live;

        return $this;
    }
}