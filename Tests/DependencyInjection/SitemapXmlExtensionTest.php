<?php

namespace Evheniy\SitemapXmlBundle\Tests\DependencyInjection;

use Evheniy\SitemapXmlBundle\DependencyInjection\SitemapXmlExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class SitemapXmlExtensionTest
 * @package Evheniy\SitemapXmlBundle\Tests\DependencyInjection
 */
class SitemapXmlExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SitemapXmlExtension
     */
    private $extension;
    /**
     * @var ContainerBuilder
     */
    private $container;
    /**
     *
     */
    protected function setUp()
    {
        $this->extension = new SitemapXmlExtension();
        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
    }
    /**
     * Test empty config
     */
    public function testLoad()
    {
        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();
        $this->assertInstanceOf(
            'Evheniy\SitemapXmlBundle\Service\ServiceManager',
            $this->container->get('sitemap')
        );
    }
    /**
     *
     */
    public function testGetAlias()
    {
        $this->assertEquals($this->extension->getAlias(), 'sitemap_xml');
    }
}