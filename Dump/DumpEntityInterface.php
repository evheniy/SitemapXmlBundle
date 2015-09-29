<?php

namespace Evheniy\SitemapXmlBundle\Dump;

/**
 * Interface DumpEntityInterface
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 */
interface DumpEntityInterface
{
    /**
     * @return string
     */
    public function getXml();
}