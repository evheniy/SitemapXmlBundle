SitemapXmlBundle
=================

Sitemap entity
--------------

Sitemap entity helps to create single sitemap.
You can read more about it from [Google help][4] and [Standard sitemap protocol][8]

Methods
-------

|   Setter        |   Getter                  |   Description                                                                         |
|-----------------|---------------------------|---------------------------------------------------------------------------------------|
|   addLocation   |   getLocationCollection   |   Adding [location entity][5]                                                         |
|   setLoc        |   getLoc                  |   For using in [sitemap index][6]. Manual url for sitemap.xml file                    |
|   setLastmod    |   getLastmod              |   For using in [sitemap index][6]. Manual last modification date for sitemap.xml file |

For creating sitemap entity you should use [Service Manager][5].

Example
-------

    $siteMapEntity = $this->serviceManager->createSiteMapEntity();
    $siteMapEntity->addLocation($locationEntity);
    
Or for using in sitemap index:

    $siteMapEntity = $this->serviceManager->createSiteMapEntity();
    $siteMapEntity->addLocation($locationEntity);
    $siteMapEntity->setLoc('http://test.com/sitemap/sitemap_blog.xml');
    $siteMapEntity->setLastmod(new \DateTime());
    
    $siteMapIndexEntity = $this->serviceManager->createSiteMapIndexEntity();
    $siteMapIndexEntity->addSiteMap($siteMapEntity);
    
Fluent interface:

    $siteMapIndexEntity = $this->serviceManager->createSiteMapIndexEntity();
    $siteMapIndexEntity->addSiteMap(
        $this->serviceManager->createSiteMapEntity()
            ->addLocation($locationEntity)
            ->setLoc('http://test.com/sitemap/sitemap_blog.xml')
            ->setLastmod(new \DateTime())
    );

License
-------

This bundle is under the [MIT][3] license.

[Документация на русском языке][1]

[Demo][2]

[Build a sitemap][4]

[1]:  http://makedev.org/articles/symfony/bundles/sitemap_xml_bundle.html
[2]:  http://makedev.org/sitemap.xml
[3]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/meta/LICENSE
[4]:  https://support.google.com/webmasters/answer/183668
[5]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/location_entity.md
[6]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/sitemap_index_entity.md
[7]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/service_manager.md
[8]:  http://www.sitemaps.org/protocol.html