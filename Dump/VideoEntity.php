<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Validate\VideoEntity as Entity;

/**
 * Class VideoEntity
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 * https://developers.google.com/webmasters/videosearch/sitemaps
 */
class VideoEntity extends Entity implements DumpEntityInterface
{
    /**
     * @return string
     */
    public function getXml()
    {
        $videoText = '<video:video>';
        $videoText .= '<video:thumbnail_loc>' . $this->thumbnailLoc . '</video:thumbnail_loc>';
        $videoText .= '<video:title>' . $this->title . '</video:title>';
        $videoText .= '<video:description>' . $this->description . '</video:description>';
        if (!empty($this->contentLoc)) {
            $videoText .= '<video:content_loc>' . $this->contentLoc . '</video:content_loc>';
        }
        if (!empty($this->playerLoc['url'])) {
            $videoText .= '<video:player_loc allow_embed="' . $this->playerLoc['allowEmbed'] ? 'yes' : 'no' . '"' . !empty($this->playerLoc['autoPlay']) ? ' autoplay="' . $this->playerLoc['autoPlay'] . '"' : '' . '>' . $this->playerLoc['url'] . '</video:player_loc>';
        }
        if (!empty($this->duration)) {
            $videoText .= '<video:duration>' . $this->duration . '</video:duration>';
        }
        if (!empty($this->expirationDate)) {
            $videoText .= '<video:expiration_date>' . $this->expirationDate->format('c') . '</video:expiration_date>';
        }
        if (!empty($this->rating)) {
            $videoText .= '<video:rating>' . $this->rating . '</video:rating>';
        }
        if (!empty($this->viewCount)) {
            $videoText .= '<video:view_count>' . $this->viewCount . '</video:view_count>';
        }
        if (!empty($this->publicationDate)) {
            $videoText .= '<video:publication_date>' . $this->publicationDate->format('c') . '</video:publication_date>';
        }
        $videoText .= '<video:family_friendly>' . ($this->familyFriendly ? 'yes' : 'no') . '</video:family_friendly>';
        if (!empty($this->tag)) {
            $videoText .= '<video:tag>' . $this->tag . '</video:tag>';
        }
        if (!empty($this->category)) {
            $videoText .= '<video:category>' . $this->category . '</video:category>';
        }
        if (!empty($this->restriction['countries'])) {
            $videoText .= '<video:restriction relationship="' . $this->restriction['relationship'] . '">' . $this->restriction['countries'] . '</video:restriction>';
        }
        if (!empty($this->galleryLoc['url'])) {
            $videoText .= '<video:gallery_loc' . !empty($this->galleryLoc['title']) ? ' title="' . $this->galleryLoc['title'] . '"' : '' . '>' . $this->galleryLoc['url'] . '</video:gallery_loc>';
        }
        if (!empty($this->price['price'])) {
            $videoText .= '<video:price currency="' . $this->price['currency'] . '">' . $this->price['price'] . '</video:price>';
        }
        $videoText .= '<video:requires_subscription>' . ($this->requiresSubscription ? 'yes' : 'no') . '</video:requires_subscription>';
        if (!empty($this->uploader['name'])) {
            $videoText .= '<video:uploader' . !empty($this->uploader['info']) ? ' info="' . $this->uploader['info'] . '"' : '' . '>' . $this->uploader['name'] . '</video:uploader>';
        }
        if (!empty($this->platform['code'])) {
            $videoText .= '<video:platform relationship="' . $this->platform['relationship'] . '">' . $this->platform['code'] . '</video:platform>';
        }
        $videoText .= '<video:live>' . ($this->live ? 'yes' : 'no') . '</video:live>';
        $videoText .= '</video:video>';

        return $videoText;
    }
}