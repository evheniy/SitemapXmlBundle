<?php

namespace Evheniy\SitemapXmlBundle\Dump;
use Evheniy\SitemapXmlBundle\Exception\DumpException;

/**
 * Class DumpManager
 * @package Evheniy\SitemapXmlBundle\Dump
 */
class DumpManager
{
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
     * @param string $protocol
     *
     * @return $this
     * @throws DumpException
     */
    public function setProtocol($protocol = 'http')
    {
        if (!in_array($protocol, array('http', 'https'))) {
            throw new DumpException('Wrong protocol!');
        }
        $this->protocol = $protocol;

        return $this;
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
     * @param SiteMapIndexEntity $siteMapIndexEntity
     *
     * @throws DumpException
     */
    public function dump(SiteMapIndexEntity $siteMapIndexEntity)
    {
        if (empty($this->domain)) {
            throw new DumpException('Empty domain!');
        }
        $siteMapIndexEntity->getXml();
    }
}