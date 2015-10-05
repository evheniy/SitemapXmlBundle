SitemapXmlBundle
=================

This bundle provides sitemap.xml generator for Symfony2

Installation
------------

    $ composer require evheniy/sitemap-xml-bundle "1.*"

Or add to composer.json

    "evheniy/sitemap-xml-bundle": "1.*"

AppKernel:

    public function registerBundles()
        {
            $bundles = array(
                ...
                new Evheniy\SitemapXmlBundle\SitemapXmlBundle(),
                new AppBundle\AppBundle(),
                ...
            );
            ...
    ...

You should set bundle before main bundle (in our example it's AppBundle) and extend SiteMapDumpCommand ( setEntities() method )

    <?php

    namespace AppBundle\Command;

    use Evheniy\SitemapXmlBundle\Command\SiteMapDumpCommand as Command;

    class SiteMapDumpCommand extends Command
    {
        protected function setEntities()
        {
            $this->siteMapIndexEntity = $this->serviceManager->createSiteMapIndexEntity();
            $this->dumpEntity->setDomain('site.com');
            $this->siteMapIndexEntity
                ->addSiteMap(
                    $this->serviceManager->createSiteMapEntity()
                        ->addLocation(
                            $this->serviceManager->createLocationEntity()
                                ->setLocation('http://site.com/page1.html')
                                ->setLastmod(new \DateTime())
                        )
                        ->addLocation(
                            $this->serviceManager->createLocationEntity()
                                ->setLocation('http://site.com/page2.html')
                                ->setLastmod(new \DateTime())
                                ->addImage(
                                    $this->serviceManager->createImageEntity()
                                        ->setLocation('http://site.com/logo.png')
                                        ->setTitle('Logo')
                                )
                        )
                );
        }
    }

The last step

    app/console sitemap:dump

Documentation
-------------



License
-------

This bundle is under the [MIT][3] license.

[Документация на русском языке][1]

[Demo][2] - Open page, then turn off network and update page

[Build a sitemap][4]

[1]:  http://makedev.org/articles/symfony/bundles/sitemap_xml_bundle.html
[2]:  http://makedev.org/sitemap.xml
[3]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/meta/LICENSE
[4]:  https://support.google.com/webmasters/answer/183668
