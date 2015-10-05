<?php

namespace Evheniy\SitemapXmlBundle\Tests\Command;

use Evheniy\SitemapXmlBundle\Command\SiteMapDumpCommand;

/**
 * Class SiteMapDumpCommandTest
 * @package Evheniy\SitemapXmlBundle\Tests\Command
 */
class SiteMapDumpCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SiteMapDumpCommand
     */
    protected $siteMapDumpCommand;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapDumpCommand = new SiteMapDumpCommand();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Command\SiteMapDumpCommand');
    }

    /**
     *
     */
    public function testConfigure()
    {
        $this->assertEquals('sitemap:dump', $this->siteMapDumpCommand->getName());
        $this->assertEquals('Dumping sitemap.xml', $this->siteMapDumpCommand->getDescription());
        $this->assertNotEmpty($this->siteMapDumpCommand->getDefinition()->getArgument('carefully'));
        $this->assertEquals('Check for existing files and directories', $this->siteMapDumpCommand->getDefinition()->getArgument('carefully')->getDescription());
    }

    /**
     *
     */
    public function testExecute()
    {
        $this->markTestIncomplete();
    }

    /**
     *
     */
    public function testInitialize()
    {
        $this->markTestIncomplete();
    }

    /**
     *
     */
    public function testSetEntities()
    {
        $this->markTestIncomplete();
    }
}