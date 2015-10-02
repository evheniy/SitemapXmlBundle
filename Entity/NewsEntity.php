<?php

namespace Evheniy\SitemapXmlBundle\Entity;

/**
 * Class NewsEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 * https://support.google.com/news/publisher/answer/74288
 */
class NewsEntity extends AbstractEntity
{
    /**
     * @var string
     */
    protected $publicationName;
    /**
     * @var string
     */
    protected $publicationLanguage;
    /**
     * @var string
     */
    protected $access;
    /**
     * @var string
     */
    protected $genres;
    /**
     * @var \DateTime
     */
    protected $publicationDate;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $keywords;
    /**
     * @var string
     */
    protected $stockTickers;

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
    public function getPublicationName()
    {
        return $this->publicationName;
    }

    /**
     * @param string $publicationName
     * @return $this
     */
    public function setPublicationName($publicationName)
    {
        $this->publicationName = $publicationName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublicationLanguage()
    {
        return $this->publicationLanguage;
    }

    /**
     * @param string $publicationLanguage
     * @return $this
     */
    public function setPublicationLanguage($publicationLanguage)
    {
        $this->publicationLanguage = $publicationLanguage;

        return $this;

    }

    /**
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param string $access
     * @return $this
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * @return string
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param string $genres
     * @return $this
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;

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
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

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
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @return string
     */
    public function getStockTickers()
    {
        return $this->stockTickers;
    }

    /**
     * @param string $stockTickers
     * @return $this
     */
    public function setStockTickers($stockTickers)
    {
        $this->stockTickers = $stockTickers;

        return $this;
    }
}