SitemapXmlBundle
=================

News entity
-----------

News entity helps create news sitemap for [Google News][5].
You can read more about it from [Google help][12].

Methods
-------

|   Setter                   |   Getter                   |   Required   |   Description                           |
|----------------------------|----------------------------|:------------:|-----------------------------------------|
|   setPublicationName       |   getPublicationName       |       +      |   The Publication Name is the name of the news publication. It must exactly match the name as it appears on your articles in [news.google.com][6], omitting any trailing parentheticals. For example, if the name appears in Google News as "The Example Times (subscription)", you should use the name, "The Example Times".   |
|   setPublicationLanguage   |   getPublicationLanguage   |       +      |   The Publication Language is the language of your publication. It should be an [ISO 639 Language Code][7] (either 2 or 3 letters). Exception: For Chinese, please use zh-cn for Simplified Chinese or zh-tw for Traditional Chinese.   |
|   setAccess                |   getAccess                |       -      |   Possible values include "Subscription" or "Registration", describing the accessibility of the article. If the article is accessible to Google News readers without a registration or subscription, this tag should be omitted.   |
|   setGenres                |   getGenres                |       -      |   A comma-separated list of properties characterizing the content of the article, such as "PressRelease" or "UserGenerated." See [Google News content properties][8] for a list of possible values. Your content must be labeled accurately, in order to provide a consistent experience for our users.   |
|   setPublicationDate       |   getPublicationDate       |       +      |   Article publication date. Please ensure that you give the original date and time at which the article was published on your site; do not give the time at which the article was added to your Sitemap.   |
|   setTitle                 |   getTitle                 |       +      |   The title of the news article. Note: The title may be truncated for space reasons when shown on Google News. Article title tags should only include the title of the article as it appears on your site. Please make sure not to include the author name, the publication name, or publication date as part of the title tag.   |
|   setKeywords              |   getKeywords              |       -      |   A comma-separated list of keywords describing the topic of the article. Keywords may be drawn from, but are not limited to, the list of [existing Google News keywords][9].   |
|   setStockTickers          |   getStockTickers          |       -      |   A comma-separated list of up to 5 stock tickers of the companies, mutual funds, or other financial entities that are the main subject of the article. Relevant primarily for business articles. Each ticker must be prefixed by the name of its stock exchange, and must match its entry in [Google Finance][10]. For example, "NASDAQ:AMAT" (but not "NASD:AMAT"), or "BOM:500325" (but not "BOM:RIL").   |

For creating sitemap entity you should use [Service Manager][13].

Example
-------

    $newsEntity = $this->serviceManager->createNewsEntity();
    $newsEntity->setPublicationName('The Example Times (subscription)');
    $newsEntity->setPublicationLanguage('en');
    $newsEntity->setPublicationDate(new \DateTime());
    $newsEntity->setTitle('Example Times');
    
Or with all fields:

    $newsEntity = $this->serviceManager->createNewsEntity();
    $newsEntity->setPublicationName('The Example Times (subscription)');
    $newsEntity->setPublicationLanguage('en');
    $newsEntity->setPublicationDate(new \DateTime());
    $newsEntity->setTitle('Example Times');
    $newsEntity->setAccess('Registration');
    $newsEntity->setGenres('PressRelease');
    $newsEntity->setKeywords('sports, college basketball');
    $newsEntity->setStockTickers('NASDAQ:AMAT');
    
Fluent interface:

    $newsEntity = $this->serviceManager->createNewsEntity()
        ->setPublicationName('The Example Times (subscription)')
        ->setPublicationLanguage('en')
        ->setPublicationDate(new \DateTime())
        ->setTitle('Example Times')
        ->setAccess('Registration')
        ->setGenres('PressRelease')
        ->setKeywords('sports, college basketball')
        ->setStockTickers('NASDAQ:AMAT');

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
[5]:  https://partnerdash.google.com/partnerdash/d/news#p:id=pfehome
[6]:  https://news.google.com/
[7]:  http://www.loc.gov/standards/iso639-2/php/code_list.php
[8]:  https://support.google.com/news/publisher/answer/93992
[9]:  https://support.google.com/news/publisher/answer/116037
[10]:  https://www.google.com/finance
[11]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/location_entity.md
[12]:  https://support.google.com/news/publisher/answer/74288
[13]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/service_manager.md