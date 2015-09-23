<?php

namespace Evheniy\SitemapXmlBundle\DumpDecorator;

use Evheniy\SitemapXmlBundle\Entity\AbstractEntity;

/**
 * Class AbstractDumpDecorator
 * @package Evheniy\SitemapXmlBundle\DumpDecorator
 */
abstract class AbstractDumpDecorator extends AbstractEntity
{
    /**
     * @return mixed
     */
    abstract public function dump();
    //TODO: required fields check
}