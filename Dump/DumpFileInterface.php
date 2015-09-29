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
     *
     * @return $this
     */
    public function saveFile($filePath, $fileContent);
}