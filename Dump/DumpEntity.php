<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Validate\DumpEntity as Entity;

/**
 * Class DumpEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 */
class DumpEntity extends Entity implements DumpFileInterface
{
    /**
     * @param string $filePath
     * @param string $fileContent
     */
    public function saveFile($filePath, $fileContent)
    {
        // TODO: Implement saveFile() method.
    }
}