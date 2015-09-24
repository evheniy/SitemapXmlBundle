<?php

namespace Evheniy\SitemapXmlBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

/**
 * Class SitemapXmlExtension
 * @package Evheniy\SitemapXmlBundle\DependencyInjection
 */
class SitemapXmlExtension extends Extension
{
    /**
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configs;
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
    /**
     * @return string
     */
    public function getAlias()
    {
        return 'sitemap_xml';
    }
}