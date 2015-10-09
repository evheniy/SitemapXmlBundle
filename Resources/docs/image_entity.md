SitemapXmlBundle
=================

Image entity
------------

Follow Webmaster Guidelines and best practices for publishing images to increase the likelihood that your images can be found in Image Search results.
Additionally, you can use Google image extensions for sitemaps to give Google more information about the images available on your pages.
Image sitemap information helps Google discover images that we might not otherwise find (such as images your site reaches with JavaScript code), and allows you to indicate images on your site that you want Google to crawl and index.

You can read more about it from [Google help][5].

Methods
-------

|   Setter           |   Getter           |   Required   |   Description                           |
|--------------------|--------------------|:------------:|-----------------------------------------|
|   setLocation      |   getLocation      |       +      |   The URL of the image. In some cases, the image URL may not be on the same domain as your main site. This is fine, as long as both domains are verified in Search Console. If, for example, you use a content delivery network such as Google Sites to host your images, make sure that the hosting site is verified in Search Console. In addition, make sure that your robots.txt file doesn’t disallow the crawling of any content you want indexed.   |
|   setCaption       |   getCaption       |       -      |   The caption of the image.             |
|   setGeoLocation   |   getGeoLocation   |       -      |   The geographic location of the image. For example: **Limerick, Ireland**   |
|   setTitle         |   getTitle         |       -      |   The title of the image.               |
|   setLicense       |   getLicense       |       -      |   A URL to the license of the image.    |

For creating image entity you should use [Service Manager][6].

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