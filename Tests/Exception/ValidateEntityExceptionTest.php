<?php

namespace Evheniy\SitemapXmlBundle\Tests\Exception;

use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class ValidateEntityExceptionTest
 * @package Evheniy\SitemapXmlBundle\Tests\Exception
 */
class ValidateEntityExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws ValidateEntityException
     */
    public function test()
    {
        $this->assertInstanceOf('\Exception', new ValidateEntityException());
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException');
        throw new ValidateEntityException('test');
    }
}