<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Exception\MaxCountImageException;

/**
 * Class MaxCountImageExceptionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class MaxCountImageExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws MaxCountImageException
     */
    public function test()
    {
        $this->assertInstanceOf('\Exception', new MaxCountImageException());
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\MaxCountImageException');
        throw new MaxCountImageException('test');
    }
}