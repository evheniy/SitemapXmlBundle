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
}