SitemapXmlBundle
=================

Dump manager
------------

Dump manager is facade for dumping files.

You can get dump manager from [service manager][1].

Methods:

|   Method             |   Description          |
|----------------------|------------------------|
|   setEntity          |   Set dump entity      |
|   dumpSiteMapIndex   |   Dump sitemap index   |
|   dumpSiteMap        |   Dump sitemap         |

For dumping you need to create [dump entity][2] (you can get it from [service manager][1]).
After you need to create [sitemap entity][3] or [sitemap index entity][4] (if you have mare than 50 000 links, for saving more than one sitemap)

Example: 

    $serviceManager = $container->get('sitemap');

    $dumpEntity = $serviceManager->createDumpEntity();
    $dumpEntity->setWebDir(realpath($container->get('kernel')->getRootDir() . '/../web'));
    $dumpEntity->setDomain('site.com');
    
    $dumpManager = $serviceManager->createDumpManager();
    $dumpManager->setEntity($dumpEntity);
    
    
    $siteMapEntity = $serviceManager->createSiteMapEntity(); 
    $dumpEntity->setSiteMapEntity($siteMapEntity);
    $dumpManager->dumpSiteMap();
    
    OR
    
    $siteMapIndexEntity = $serviceManager->createSiteMapIndexEntity();
    $dumpEntity->setSiteMapIndexEntity($siteMapIndexEntity);
    $dumpManager->dumpSiteMapIndex();

[1]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/service_manager.md
[2]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/dump_entity.md
[3]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/sitemap_entity.md
[4]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/sitemap_index_entity.md