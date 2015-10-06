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
        if (!empty($this->playerLoc)) {
            $videoText .= '<video:player_loc>' . $this->playerLoc . '</video:player_loc>';
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
        $videoText .= '<video:family_friendly>' . $this->familyFriendly ? 'yes' : 'no' . '</video:family_friendly>';
        if (!empty($this->tag)) {
            $videoText .= '<video:tag>' . $this->tag . '</video:tag>';
        }
        if (!empty($this->category)) {
            $videoText .= '<video:category>' . $this->category . '</video:category>';
        }
        if (!empty($this->restriction)) {
            $videoText .= '<video:restriction relationship="allow">' . $this->restriction . '</video:restriction>';
        }
        if (!empty($this->galleryLoc)) {
            $videoText .= '<video:gallery_loc>' . $this->galleryLoc . '</video:gallery_loc>';
        }
        if (!empty($this->price)) {
            $videoText .= '<video:price>' . $this->price . '</video:price>';
        }
        $videoText .= '<video:requires_subscription>' . $this->requiresSubscription ? 'yes' : 'no' . '</video:requires_subscription>';
        if (!empty($this->uploader)) {
            $videoText .= '<video:uploader>' . $this->uploader . '</video:uploader>';
        }
        if (!empty($this->platform)) {
            $videoText .= '<video:platform>' . $this->platform . '</video:platform>';
        }
        $videoText .= '<video:live>' . $this->live ? 'yes' : 'no' . '</video:live>';
        $videoText .= '</video:video>';

        return $videoText;
    }
}