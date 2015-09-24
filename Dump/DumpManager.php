<?php

namespace Evheniy\SitemapXmlBundle\Dump;

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
     * @param string $path
     */
    public function setPath($path = '')
    {
        $this->path = $path;
    }

    /**
     * @param bool|false $isCarefully
     */
    public function setIsCarefully($isCarefully = false)
    {
        $this->isCarefully = $isCarefully;
    }

    /**
     *
     */
    public function dumpSiteMapIndex()
    {
        //TODO
    }

    /**
     *
     */
    public function dumpSiteMap()
    {
        //TODO
    }
}