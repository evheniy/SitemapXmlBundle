<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Exception\DumpException;

/**
 * Class DumpxceptionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class DumpExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws DumpException
     */
    public function test()
    {
        $this->assertInstanceOf('\Exception', new DumpException());
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\DumpException');
        throw new DumpException('test');
    }
}