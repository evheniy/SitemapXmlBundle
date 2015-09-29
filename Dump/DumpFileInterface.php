<?php

namespace Evheniy\SitemapXmlBundle\Dump;

/**
 * Interface DumpFileInterface
 * @package Evheniy\SitemapXmlBundle\Dump
 */
interface DumpFileInterface
{
    /**
     * @param string $filePath
     * @param string $fileContent
     */
    public function saveFile($filePath, $fileContent);
}