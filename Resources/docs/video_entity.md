SitemapXmlBundle
=================

Video entity
------------

You can use the Google Video extension to the Sitemap protocol to give Google information about video content on your site. You can create a new video Sitemap or add video information to an existing Sitemap.

You can read more about it from [Google help][5].

Methods
-------

|   Setter                    |   Getter                   |   Required   |   Description                           |
|-----------------------------|----------------------------|:------------:|-----------------------------------------|
|   setThumbnailLoc           |   getThumbnailLoc          |       +      |   A URL pointing to the video thumbnail image file. Images must be at least 160x90 pixels and at most 1920x1080 pixels. We recommend images in .jpg, .png, or. gif formats.   |
|   setTitle                  |   getTitle                 |       +      |   The title of the video. Maximum 100 characters. All HTML entities should be escaped or wrapped in a [CDATA block][7].   |
|   setDescription            |   getDescription           |       +      |   The description of the video. Maximum 2048 characters. All HTML entities should be escaped or wrapped in a [CDATA block][7].   |
|   setContentLoc             |   getContentLoc            |       +      |   You must specify at least one of player_loc or content_loc. A URL pointing to the actual video media file. This file should be in .mpg, .mpeg, .mp4, .m4v, .mov, .wmv, .asf, .avi, .ra, .ram, .rm, .flv, or other video file format.   |
|   setPlayerLoc              |   getPlayerLoc             |       +      |   You must specify at least one of player_loc or content_loc. A URL pointing to a player for a **specific** video. Usually this is the information in the src element of an <embed> tag and should not be the same as the content of the <loc> tag. The optional attribute allow_embed specifies whether Google can embed the video in search results. Allowed values are Yes or No. The optional attribute autoplay has a user-defined string (in the example above, ap=1) that Google may append (if appropriate) to the flashvars parameter to enable autoplay of the video. For example: <embed src="http://www.example.com/videoplayer.swf?video=123" autoplay="ap=1"/>. Example player URL for Dailymotion: http://www.dailymotion.com/swf/x1o2g   |
|   setDuration               |   getDuration              |       -      |   The duration of the video in seconds. Value must be between 0 and 28800 (8 hours).   |
|   setExpirationDate         |   getExpirationDate        |       -      |   The date after which the video will no longer be available. Don't supply this information if your video does not expire.   |
|   setRating                 |   getRating                |       -      |   The rating of the video. Allowed values are float numbers in the range 0.0 to 5.0.   |
|   setViewCount              |   getViewCount             |       -      |   The number of times the video has been viewed.   |
|   setPublicationDate        |   getPublicationDate       |       -      |   The date the video was first published   |
|   setFamilyFriendly         |   isFamilyFriendly         |       -      |   No if the video should be available only to users with SafeSearch turned off.   |
|   setTag                    |   getTag                   |       -      |   A tag associated with the video. Tags are generally very short descriptions of key concepts associated with a video or piece of content. A single video could have several tags, although it might belong to only one category. For example, a video about grilling food may belong in the Grilling category, but could be tagged "steak", "meat", "summer", and "outdoor".   |
|   setCategory               |   getCategory              |       -      |   The video's category. For example, cooking. The value should be a string no longer than 256 characters. In general, categories are broad groupings of content by subject. Usually a video will belong to a single category. For example, a site about cooking could have categories for Broiling, Baking, and Grilling.   |
|   setRestriction            |   getRestriction           |       -      |   A space-delimited list of countries where the video may or may not be played. Allowed values are country codes in [ISO 3166 format][8].    |
|   setGalleryLoc             |   getGalleryLoc            |       -      |   A link to the gallery (collection of videos) in which this video appears.   |
|   setPrice                  |   getPrice                 |       -      |   The price to download or view the video. Do not use this tag for free videos. The **required attribute** currency specifies the currency in [ISO 4217 format][9]. The optional attribute type specifies the purchase option. Allowed values are rent and own. If this is not specified, the default value is own. The optional attribute resolution specifies the purchased resolution. Allows values are HD and SD.   |
|   setRequiresSubscription   |   isRequiresSubscription   |       -      |   Indicates whether a subscription (either paid or free) is required to view the video. Allowed values are yes or no.   |
|   setUploader               |   getUploader              |       -      |   The video uploader's name.   |
|   setPlatform               |   getPlatform              |       -      |   A list of space-delimited platforms where the video may or may not be played. Allowed values are web, mobile, and tv. The **required attribute** relationship specifies whether the video is restricted or permitted for the specified platforms. Allowed values are allow or deny.   |
|   setLive                   |   isLive                   |       -      |   Indicates whether the video is a live stream. Allowed values are yes or no.   |

For creating sitemap entity you should use [Service Manager][6].

Example
-------


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
[5]:  https://developers.google.com/webmasters/videosearch/sitemaps
[6]:  https://github.com/evheniy/SitemapXmlBundle/blob/master/Resources/docs/service_manager.md
[7]:  https://en.wikipedia.org/wiki/CDATA
[8]:  https://en.wikipedia.org/wiki/ISO_3166
[9]:  https://en.wikipedia.org/wiki/ISO_4217