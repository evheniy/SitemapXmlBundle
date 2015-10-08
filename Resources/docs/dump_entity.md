SitemapXmlBundle
=================

DumpEntity
----------

Dump entity helps with dumping sitemap to file in project web directory.

Methods:

|   Setter                  |   Getter                  |   Required   |   Description                                                                                                                                                       |
|---------------------------|---------------------------|:------------:|---------------------------------------------------------------------------------------------------------------------------------------------------------------------|
|   setWebDir               |   getWebDir               |       +      |   For dumping sitemap.xml to web (open) directory. For example: $de->setWebDir( realpath( $container -> get('kernel') -> getRootDir() . '/../web' ));               |
|   setPath                 |   getPath                 |       -      |   Path inside web directory. For example: **web/sitemaps/sitemap.xml**                                                                                              |
|   setCarefully            |   isCarefully             |       -      |   If true: check if sitemap file and path exist. If exist it throws exception, if not: just creates directory and overwrite file                                    |
|   setProtocol             |   getProtocol             |       -      |   Protocol **http** or **https**. Default: `http`                                                                                                                             |
|   setDomain               |   getDomain               |       +      |   Example: $de->setDomain('site.com');                                                                                                                      |
|   setSiteMapIndexEntity   |   getSiteMapIndexEntity   |       -      |   Sitemap index entity for dumping                                                                                                                                  |
|   setSiteMapEntity        |   getSiteMapEntity        |       -      |   Sitemap entity for dumping                                                                                                                                        |

Domain and protocol use for generating sitemap urls inside sitemap index if [$sitemapEntity location][1] is empty.

[1]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/sitemap_entity.md