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
     * @param array $params
     *
     * @return string
     */
    public function getXml(array $params = array());
}