<?php

namespace Evheniy\SitemapXmlBundle\Dump;

/**
 * Interface DumpEntityInterface
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 */
interface DumpEntityInterface
{
    public function dump(array $params = array());
}