<?php

namespace Evheniy\SitemapXmlBundle\Dump;

use Evheniy\SitemapXmlBundle\Validate\NewsEntity as Entity;

/**
 * Class NewsEntity
 *
 * @package Evheniy\SitemapXmlBundle\Dump
 * https://support.google.com/news/publisher/answer/74288
 */
class NewsEntity extends Entity implements DumpEntityInterface
{
    /**
     * @return string
     */
    public function getXml()
    {
        $newsText = '<news:news>';
        $newsText .= '<news:publication>';
        $newsText .= '<news:name>' . $this->publicationName . '</news:name>';
        $newsText .= '<news:language>' . $this->publicationLanguage . '</news:language>';
        $newsText .= '</news:publication>';
        if (!empty($this->access)) {
            $newsText .= '<news:access>' . $this->access . '</news:access>';
        }
        if (!empty($this->genres)) {
            $newsText .= '<news:genres>' . $this->genres . '</news:genres>';
        }
        if (!empty($this->publicationDate)) {
            $newsText .= '<news:publication_date>' . $this->publicationDate->format('c') . '</news:publication_date>';
        }
        if (!empty($this->title)) {
            $newsText .= '<news:title>' . $this->title . '</news:title>';
        }
        if (!empty($this->keywords)) {
            $newsText .= '<news:keywords>' . $this->keywords . '</news:keywords>';
        }
        if (!empty($this->stockTickers)) {
            $newsText .= '<news:stock_tickers>' . $this->stockTickers . '</news:stock_tickers>';
        }
        $newsText .= '</news:news>';

        return $newsText;
    }
}