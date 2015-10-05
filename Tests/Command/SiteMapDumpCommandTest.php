<?php

namespace Evheniy\SitemapXmlBundle\Tests\Command;

use Evheniy\SitemapXmlBundle\Command\SiteMapDumpCommand;
use Evheniy\SitemapXmlBundle\DependencyInjection\SitemapXmlExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\StreamOutput;
use Symfony\Component\Filesystem\Filesystem;
use Evheniy\SitemapXmlBundle\Dump\SiteMapEntity;

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
     * @var Filesystem
     */
    protected $filesystem;
    /**
     * @var string
     */
    protected $path;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapDumpCommand = new SiteMapDumpCommand();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Command\SiteMapDumpCommand');

        $this->path = __DIR__ . '/../web';
        $this->filesystem = new Filesystem();
        $this->filesystem->mkdir($this->path);

        $kernel = $this->getMock('Symfony\Component\HttpKernel\KernelInterface');
        $kernel->method('getRootDir')->willReturn(__DIR__);
        $extension = new SitemapXmlExtension();
        $container = new ContainerBuilder();
        $container->set('kernel', $kernel);
        $container->registerExtension($extension);
        $container->loadFromExtension($extension->getAlias());
        $container->compile();
        $this->siteMapDumpCommand->setContainer($container);
    }

    /**
     *
     */
    public function tearDown()
    {
        if ($this->filesystem->exists($this->path)) {
            $this->filesystem->remove($this->path);
        }
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
        $this->assertFalse($this->siteMapDumpCommand->getDefinition()->getArgument('carefully')->getDefault());
    }

    /**
     *
     */
    public function testSetEntities()
    {
        $method = $this->reflectionClass->getMethod('execute');
        $method->setAccessible(true);
        $output = new StreamOutput(fopen('php://memory', 'w', false));
        $method->invoke($this->siteMapDumpCommand, new ArrayInput(array()), $output);

        $siteMapIndexEntity = $this->reflectionClass->getProperty('siteMapIndexEntity');
        $siteMapIndexEntity->setAccessible(true);
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Dump\SiteMapIndexEntity', $siteMapIndexEntity->getValue($this->siteMapDumpCommand));

        $dumpEntity = $this->reflectionClass->getProperty('dumpEntity');
        $dumpEntity->setAccessible(true);
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Dump\DumpEntity', $dumpEntity->getValue($this->siteMapDumpCommand));
        $this->assertTrue($this->filesystem->exists($this->path . '/sitemap.xml'));
        rewind($output->getStream());
        $this->assertRegExp('/Done/', stream_get_contents($output->getStream()));
    }

    /**
     *
     */
    public function testExecute()
    {
        $siteMapEntity = $this->reflectionClass->getProperty('siteMapEntity');
        $siteMapEntity->setAccessible(true);
        $siteMapEntity->setValue($this->siteMapDumpCommand, new SiteMapEntity());

        $method = $this->reflectionClass->getMethod('execute');
        $method->setAccessible(true);
        $output = new StreamOutput(fopen('php://memory', 'w', false));
        $method->invoke($this->siteMapDumpCommand, new ArrayInput(array()), $output);

        $serviceManager = $this->reflectionClass->getProperty('serviceManager');
        $serviceManager->setAccessible(true);
        $this->assertInstanceOf('Evheniy\SitemapXmlBundle\Service\ServiceManager', $serviceManager->getValue($this->siteMapDumpCommand));
        $this->assertTrue($this->filesystem->exists($this->path . '/sitemap.xml'));
        rewind($output->getStream());
        $this->assertRegExp('/Done/', stream_get_contents($output->getStream()));
    }
}