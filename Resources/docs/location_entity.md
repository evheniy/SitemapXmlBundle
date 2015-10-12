SitemapXmlBundle
=================

Location entity
---------------

Location entity helps to add one location to sitemap. Location entity can have [images][7], [videos][6] and [news][8] entities;

You can read more about it from [Google help][4] and [Standard sitemap protocol][11].

Methods
-------

|   Setter          |   Getter               |   Required   |   Description                                                    |
|-------------------|------------------------|:------------:|------------------------------------------------------------------|
|   setLocation     |   getLocation          |       +      |   URL of the page. This URL must begin with the protocol (such as http) and end with a trailing slash, if your web server requires it. This value must be less than 2,048 characters.   |
|   setChangefreq   |   getChangefreq        |       -      |   How frequently the page is likely to change. This value provides general information to search engines and may not correlate exactly to how often they crawl the page. Valid values are: always, hourly, daily, weekly, monthly, yearly, never   |
|   setPriority     |   getPriority          |       -      |   The priority of this URL relative to other URLs on your site. Valid values range from 0.0 to 1.0.   |
|   setLastmod      |   getLastmod           |       -      |   The date of last modification of the file. Default **Today**   |
|   setMobile       |   isMobile             |       -      |   Read **Feature phone sitemaps**                                |
|   addImage        |   getImageCollection   |       -      |   Adding [image entity][7]                                       |
|   addVideo        |   getVideoCollection   |       -      |   Adding [video entity][6]                                       |
|   addNews         |   getNewsCollection    |       -      |   Adding [news entity][8]                                        |


Sitemap extensions for additional media types
---------------------------------------------

Google supports extended sitemap syntax for the following media types. 
Use these extensions to describe video files, images, and other hard-to-parse content on your site to improve indexing.

- [Video][6]
- [Images][7]
- [News][8]

For creating all kind of entities you should use [Service Manager][5].

Feature phone sitemaps
----------------------

You can create a mobile sitemap for feature phones using the sitemap protocol along with an additional tag and namespace requirement. 
You can create a separate sitemap listing your video content, or you can add information about your video content to an existing sitemap—whichever is more convenient for you.

You should **not** create a feature phone sitemap unless you have a specific **feature phone version** of a page designed for feature phones (non-smartphones).

[Read more][9]

[Using non-alphanumeric characters in Sitemap URLs][10]

Example
-------

    $locationEntity = $this->serviceManager->createLocationEntity();
    $locationEntity->setLocation('http://test.com/');
    
Or with all fields:

    $locationEntity = $this->serviceManager->createLocationEntity();
    $locationEntity->setLocation('http://test.com/');
    $locationEntity->setChangefreq('always');
    $locationEntity->setPriority(0.5);
    $locationEntity->setLastmod(new \DateTime());
    $locationEntity->setMobile(false);
    $locationEntity->addImage($imageEntity);
    $locationEntity->addVideo($videoEntity);
    $locationEntity->addNews($newsEntity);
    
Fluent interface:

    $locationEntity = $this->serviceManager->createLocationEntity()
        ->setLocation('http://test.com/')
        ->setChangefreq('always')
        ->setPriority(0.5)
        ->setLastmod(new \DateTime())
        ->setMobile(false)
        ->addImage($imageEntity)
        ->addVideo($videoEntity)
        ->addNews($newsEntity);

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
[5]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/service_manager.md
[6]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/video_entity.md
[7]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/image_entity.md
[8]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/news_entity.md
[9]:  https://support.google.com/webmasters/answer/6082207
[10]:  https://support.google.com/webmasters/answer/35653
[11]:  http://www.sitemaps.org/protocol.html