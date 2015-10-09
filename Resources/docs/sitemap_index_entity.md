SitemapXmlBundle
=================

Sitemap index entity
--------------------

If you have many sitemaps, you can use a sitemaps index file as a way to submit them at once.

You can read more about it from [Google help][5].

Methods:

|   Setter       |   Getter                 |   Required   |   Description                           |
|----------------|--------------------------|:------------:|-----------------------------------------|
|   addSiteMap   |   getSiteMapCollection   |       +      |   Set sitemap entity to sitemap index   |

For creating sitemap and sitemap index entities you should use [Service Manager][6].


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
[5]:  https://support.google.com/webmasters/answer/75712
[6]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/service_manager.md