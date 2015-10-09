SitemapXmlBundle
=================

Service manager
---------------

Service manager helps to get access for sitemap and sitemap entities

To get service manager

    $serviceManager = $this->getContainer()->get('sitemap');
    
Or

    $serviceManager = new Evheniy\SitemapXmlBundle\Service\ServiceManager(); 


Methods:

- [createSiteMapIndexEntity][1]
- [createSiteMapEntity][2]
- [createLocationEntity][3]
- [createImageEntity][4]
- [createVideoEntity][5]
- [createNewsEntity][6]
- [createDumpManager][7]
- [createDumpEntity][8]

License
-------

This bundle is under the [MIT][11] license.

[Документация на русском языке][9]

[Demo][10]

[Build a sitemap][12]

[1]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/sitemap_index_entity.md
[2]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/sitemap_entity.md
[3]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/location_entity.md
[4]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/image_entity.md
[5]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/video_entity.md
[6]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/news_entity.md
[7]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/dump_manager.md
[8]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/dump_entity.md
[9]:  http://makedev.org/articles/symfony/bundles/sitemap_xml_bundle.html
[10]:  http://makedev.org/sitemap.xml
[11]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/meta/LICENSE
[12]:  https://support.google.com/webmasters/answer/183668