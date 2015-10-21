SitemapXmlBundle
=================

Dump entity
-----------

Dump entity helps with dumping sitemap to file in project web directory.

Methods
-------

|   Setter                  |   Getter                  |   Required   |   Description                                                                                                                                                       |
|---------------------------|---------------------------|:------------:|---------------------------------------------------------------------------------------------------------------------------------------------------------------------|
|   setWebDir               |   getWebDir               |       +      |   For dumping sitemap.xml to web (open) directory. For example: $dumpEntity -> setWebDir( realpath( $container -> get('kernel') -> getRootDir() . '/../web' ));     |
|   setPath                 |   getPath                 |       -      |   Path inside web directory. For example: web/**sitemaps**/sitemap.xml                                                                                              |
|   setCarefully            |   isCarefully             |       -      |   If true: check if sitemap file and path exist. If exist it throws exception, if not: just creates directory and overwrite file                                    |
|   setProtocol             |   getProtocol             |       -      |   Protocol **http** or **https**. Default: `http`                                                                                                                   |
|   setDomain               |   getDomain               |       +      |   Example: $dumpEntity->setDomain('site.com');                                                                                                                      |
|   setSiteMapIndexEntity   |   getSiteMapIndexEntity   |       -      |   Sitemap index entity for dumping                                                                                                                                  |
|   setSiteMapEntity        |   getSiteMapEntity        |       -      |   Sitemap entity for dumping                                                                                                                                        |

Domain and protocol use for generating sitemap urls inside sitemap index if [sitemap entity location][5] is empty.

Example
-------

    $dumpEntity = $this->serviceManager->createDumpEntity();
    $dumpEntity->setWebDir(realpath($container->get('kernel')->getRootDir() . '/../web'));
    
Or with all fields:
    
    $dumpEntity = $this->serviceManager->createDumpEntity();
    $dumpEntity->setWebDir(realpath($container->get('kernel')->getRootDir() . '/../web'));
    $dumpEntity->setPath('/sitemap');
    $dumpEntity->setCarefully(true);
    $dumpEntity->setProtocol('https');
    $dumpEntity->setDomain('site.com');
    
    $dumpEntity->setSiteMapEntity($siteMapEntity);
    or
    $dumpEntity->setSiteMapIndexEntity($siteMapIndexEntity);
    
Fluent interface:
    
    $dumpEntity = $this->serviceManager->createDumpEntity()
        ->setWebDir(realpath($container->get('kernel')->getRootDir() . '/../web'))
        ->setPath('/sitemap')
        ->setCarefully(true)
        ->setProtocol('https')
        ->setDomain('site.com')
        ->setSiteMapEntity($siteMapEntity);

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
[5]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/sitemap_entity.md
