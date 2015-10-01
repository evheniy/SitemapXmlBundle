<?php

namespace Evheniy\SitemapXmlBundle\Tests\Validate;

use Evheniy\SitemapXmlBundle\Validate\DumpEntity;

/**
 * Class DumpEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Validate
 */
class DumpEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DumpEntity
     */
    protected $dumpEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->dumpEntity = new DumpEntity();
    }

    /**
     *
     */
    public function testValidateEmptyWebDir()
    {
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', 'Empty web directory!');
        $this->dumpEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongProtocol()
    {
        $this->dumpEntity->setWebDir('test')->setProtocol('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', 'Wrong protocol!');
        $this->dumpEntity->validate();
    }

    /**
     *
     */
    public function testValidateEmptyDomain()
    {
        $this->dumpEntity->setWebDir('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', 'Empty domain!');
        $this->dumpEntity->validate();
    }

    /**
     *
     */
    public function testValidateOk()
    {
        $this->dumpEntity->setWebDir('test')->setDomain('test');
        $this->assertEquals($this->dumpEntity->validate(), $this->dumpEntity);
    }
}