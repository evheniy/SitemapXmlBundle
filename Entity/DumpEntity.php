<?php

namespace Evheniy\SitemapXmlBundle\Entity;

/**
 * Class DumpEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 */
class DumpEntity extends AbstractEntity
{
    /**
     * @var string
     */
    protected $webDir;
    /**
     * @var string
     */
    protected $path = '';
    /**
     * @var bool
     */
    protected $isCarefully = false;
    /**
     * @var string
     */
    protected $protocol = 'http';
    /**
     * @var string
     */
    protected $domain;
    /**
     * @var SiteMapIndexEntity
     */
    protected $siteMapIndexEntity;
    /**
     * @var SiteMapEntity
     */
    protected $siteMapEntity;

    /**
     * @param string $webDir
     * @return $this
     */
    public function setWebDir($webDir)
    {
        $this->webDir = $webDir;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebDir()
    {

        return $this->webDir;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path = '')
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {

        return $this->path;
    }

    /**
     * @param bool|false $isCarefully
     *
     * @return $this
     */
    public function setCarefully($isCarefully = false)
    {
        $this->isCarefully = $isCarefully;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCarefully()
    {

        return $this->isCarefully;
    }

    /**
     * @param string $protocol
     *
     * @return $this
     */
    public function setProtocol($protocol = 'http')
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {

        return $this->protocol;
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param SiteMapIndexEntity $siteMapIndexEntity
     *
     * @return $this
     */
    public function setSiteMapIndexEntity(SiteMapIndexEntity $siteMapIndexEntity)
    {
        $this->siteMapIndexEntity = $siteMapIndexEntity;

        return $this;
    }

    /**
     * @return SiteMapIndexEntity
     */
    public function getSiteMapIndexEntity()
    {

        return $this->siteMapIndexEntity;
    }

    /**
     * @param SiteMapEntity $siteMapEntity
     *
     * @return $this
     */
    public function setSiteMapEntity(SiteMapEntity $siteMapEntity)
    {
        $this->siteMapEntity = $siteMapEntity;

        return $this;
    }

    /**
     * @return SiteMapEntity
     */
    public function getSiteMapEntity()
    {

        return $this->siteMapEntity;
    }
}