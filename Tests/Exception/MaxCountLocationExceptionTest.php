<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Exception\MaxCountLocationException;

/**
 * Class MaxCountLocationExceptionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class MaxCountLocationExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws MaxCountLocationException
     */
    public function test()
    {
        $this->assertInstanceOf('\Exception', new MaxCountLocationException());
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\MaxCountLocationException');
        throw new MaxCountLocationException('test');
    }
}