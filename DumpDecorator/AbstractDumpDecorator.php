<?php

namespace Evheniy\SitemapXmlBundle\DumpDecorator;

use Evheniy\SitemapXmlBundle\Entity\AbstractEntity;

/**
 * Class AbstractDumpDecorator
 * @package Evheniy\SitemapXmlBundle\DumpDecorator
 */
abstract class AbstractDumpDecorator extends AbstractEntity
{
    abstract public function dump();
    //TODO: required fields check
}