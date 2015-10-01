<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Exception\DumpException;
use Evheniy\SitemapXmlBundle\Validate\DumpEntity as Entity;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class DumpEntity
 * @package Evheniy\SitemapXmlBundle\Entity
 */
class DumpEntity extends Entity implements DumpFileInterface
{
    /**
     * @param string $filePath
     * @param string $fileContent
     * @return $this
     * @throws DumpException
     */
    public function saveFile($filePath, $fileContent)
    {
        $filesystem = new Filesystem();
        if ($this->isCarefully && $filesystem->exists($filePath)) {
            throw new DumpException('File "' . $filePath . '" already exists!');
        }
        if ($this->isCarefully && !$filesystem->exists(dirname($filePath))) {
            throw new DumpException('Directory "' . dirname($filePath) . '" does not exist!');
        }
        try {
            $filesystem->mkdir(dirname($filePath));
        } catch (\Exception $e) {
            throw new DumpException($e->getMessage());
        }
        $filesystem->dumpFile($filePath, $fileContent);

        return $this;
    }
}