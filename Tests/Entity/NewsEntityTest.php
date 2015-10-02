<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\NewsEntity;

/**
 * Class NewsEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Entity
 */
class NewsEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NewsEntity
     */
    protected $newsEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->newsEntity = new NewsEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Entity\NewsEntity');
    }

    /**
     *
     */
    public function testGetPublicationName()
    {
        $testValue = 'testPublicationName';
        $publicationName = $this->reflectionClass->getProperty('publicationName');
        $publicationName->setAccessible(true);
        $publicationName->setValue($this->newsEntity, $testValue);
        $this->assertEquals($this->newsEntity->getPublicationName(), $testValue);
    }

    /**
     *
     */
    public function testSetPublicationName()
    {
        $testValue = 'testPublicationName';
        $this->newsEntity->setPublicationName($testValue);
        $publicationName = $this->reflectionClass->getProperty('publicationName');
        $publicationName->setAccessible(true);
        $this->assertEquals($publicationName->getValue($this->newsEntity), $testValue);
        $this->assertEquals($this->newsEntity->getPublicationName(), $testValue);
    }

    /**
     *
     */
    public function testGetPublicationLanguage()
    {
        $testValue = 'testPublicationLanguage';
        $publicationLanguage = $this->reflectionClass->getProperty('publicationLanguage');
        $publicationLanguage->setAccessible(true);
        $publicationLanguage->setValue($this->newsEntity, $testValue);
        $this->assertEquals($this->newsEntity->getPublicationLanguage(), $testValue);
    }

    /**
     *
     */
    public function testSetPublicationLanguage()
    {
        $testValue = 'testPublicationLanguage';
        $this->newsEntity->setPublicationLanguage($testValue);
        $publicationLanguage = $this->reflectionClass->getProperty('publicationLanguage');
        $publicationLanguage->setAccessible(true);
        $this->assertEquals($publicationLanguage->getValue($this->newsEntity), $testValue);
        $this->assertEquals($this->newsEntity->getPublicationLanguage(), $testValue);
    }

    /**
     *
     */
    public function testGetAccess()
    {
        $testValue = 'testAccess';
        $access = $this->reflectionClass->getProperty('access');
        $access->setAccessible(true);
        $access->setValue($this->newsEntity, $testValue);
        $this->assertEquals($this->newsEntity->getAccess(), $testValue);
    }

    /**
     *
     */
    public function testSetAccess()
    {
        $testValue = 'testAccess';
        $this->newsEntity->setAccess($testValue);
        $access = $this->reflectionClass->getProperty('access');
        $access->setAccessible(true);
        $this->assertEquals($access->getValue($this->newsEntity), $testValue);
        $this->assertEquals($this->newsEntity->getAccess(), $testValue);
    }

    /**
     *
     */
    public function testGetGenres()
    {
        $testValue = 'testGenres';
        $genres = $this->reflectionClass->getProperty('genres');
        $genres->setAccessible(true);
        $genres->setValue($this->newsEntity, $testValue);
        $this->assertEquals($this->newsEntity->getGenres(), $testValue);
    }

    /**
     *
     */
    public function testSetGenres()
    {
        $testValue = 'testGenres';
        $this->newsEntity->setGenres($testValue);
        $genres = $this->reflectionClass->getProperty('genres');
        $genres->setAccessible(true);
        $this->assertEquals($genres->getValue($this->newsEntity), $testValue);
        $this->assertEquals($this->newsEntity->getGenres(), $testValue);
    }

    /**
     *
     */
    public function testGetPublicationDate()
    {
        $testValue = new \DateTime();
        $publicationDate = $this->reflectionClass->getProperty('publicationDate');
        $publicationDate->setAccessible(true);
        $publicationDate->setValue($this->newsEntity, $testValue);
        $this->assertEquals($this->newsEntity->getPublicationDate(), $testValue);
    }

    /**
     *
     */
    public function testSetPublicationDate()
    {
        $testValue = new \DateTime();
        $this->newsEntity->setPublicationDate($testValue);
        $publicationDate = $this->reflectionClass->getProperty('publicationDate');
        $publicationDate->setAccessible(true);
        $this->assertEquals($publicationDate->getValue($this->newsEntity), $testValue);
        $this->assertEquals($this->newsEntity->getPublicationDate(), $testValue);
    }

    /**
     *
     */
    public function testGetTitle()
    {
        $testValue = 'testTitle';
        $title = $this->reflectionClass->getProperty('title');
        $title->setAccessible(true);
        $title->setValue($this->newsEntity, $testValue);
        $this->assertEquals($this->newsEntity->getTitle(), $testValue);
    }

    /**
     *
     */
    public function testSetTitle()
    {
        $testValue = 'testTitle';
        $this->newsEntity->setTitle($testValue);
        $title = $this->reflectionClass->getProperty('title');
        $title->setAccessible(true);
        $this->assertEquals($title->getValue($this->newsEntity), $testValue);
        $this->assertEquals($this->newsEntity->getTitle(), $testValue);
    }

    /**
     *
     */
    public function testGetKeywords()
    {
        $testValue = 'testKeywords';
        $keywords = $this->reflectionClass->getProperty('keywords');
        $keywords->setAccessible(true);
        $keywords->setValue($this->newsEntity, $testValue);
        $this->assertEquals($this->newsEntity->getKeywords(), $testValue);
    }

    /**
     *
     */
    public function testSetKeywords()
    {
        $testValue = 'testKeywords';
        $this->newsEntity->setKeywords($testValue);
        $keywords = $this->reflectionClass->getProperty('keywords');
        $keywords->setAccessible(true);
        $this->assertEquals($keywords->getValue($this->newsEntity), $testValue);
        $this->assertEquals($this->newsEntity->getKeywords(), $testValue);
    }

    /**
     *
     */
    public function testGetStockTickers()
    {
        $testValue = 'testStockTickers';
        $stockTickers = $this->reflectionClass->getProperty('stockTickers');
        $stockTickers->setAccessible(true);
        $stockTickers->setValue($this->newsEntity, $testValue);
        $this->assertEquals($this->newsEntity->getStockTickers(), $testValue);
    }

    /**
     *
     */
    public function testSetStockTickers()
    {
        $testValue = 'testStockTickers';
        $this->newsEntity->setStockTickers($testValue);
        $stockTickers = $this->reflectionClass->getProperty('stockTickers');
        $stockTickers->setAccessible(true);
        $this->assertEquals($stockTickers->getValue($this->newsEntity), $testValue);
        $this->assertEquals($this->newsEntity->getStockTickers(), $testValue);
    }
}