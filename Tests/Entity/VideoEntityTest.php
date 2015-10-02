<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\VideoEntity;

/**
 * Class VideoEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Entity
 */
class VideoEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var VideoEntity
     */
    protected $videoEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->videoEntity = new VideoEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Entity\VideoEntity');
    }

    /**
     *
     */
    public function testGetThumbnailLoc()
    {
        $testValue = 'testThumbnailLoc';
        $thumbnailLoc = $this->reflectionClass->getProperty('thumbnailLoc');
        $thumbnailLoc->setAccessible(true);
        $thumbnailLoc->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getThumbnailLoc(), $testValue);
    }

    /**
     *
     */
    public function testSetThumbnailLoc()
    {
        $testValue = 'testThumbnailLoc';
        $this->videoEntity->setThumbnailLoc($testValue);
        $thumbnailLoc = $this->reflectionClass->getProperty('thumbnailLoc');
        $thumbnailLoc->setAccessible(true);
        $this->assertEquals($thumbnailLoc->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getThumbnailLoc(), $testValue);
    }

    /**
     *
     */
    public function testGetTitle()
    {
        $testValue = 'testTitle';
        $title = $this->reflectionClass->getProperty('title');
        $title->setAccessible(true);
        $title->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getTitle(), $testValue);
    }

    /**
     *
     */
    public function testSetTitle()
    {
        $testValue = 'testTitle';
        $this->videoEntity->setTitle($testValue);
        $title = $this->reflectionClass->getProperty('title');
        $title->setAccessible(true);
        $this->assertEquals($title->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getTitle(), $testValue);
    }

    /**
     *
     */
    public function testGetDescription()
    {
        $testValue = 'testDescription';
        $description = $this->reflectionClass->getProperty('description');
        $description->setAccessible(true);
        $description->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getDescription(), $testValue);
    }

    /**
     *
     */
    public function testSetDescription()
    {
        $testValue = 'testDescription';
        $this->videoEntity->setDescription($testValue);
        $description = $this->reflectionClass->getProperty('description');
        $description->setAccessible(true);
        $this->assertEquals($description->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getDescription(), $testValue);
    }

    /**
     *
     */
    public function testGetContentLoc()
    {
        $testValue = 'testContentLoc';
        $contentLoc = $this->reflectionClass->getProperty('contentLoc');
        $contentLoc->setAccessible(true);
        $contentLoc->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getContentLoc(), $testValue);
    }

    /**
     *
     */
    public function testSetContentLoc()
    {
        $testValue = 'testContentLoc';
        $this->videoEntity->setContentLoc($testValue);
        $contentLoc = $this->reflectionClass->getProperty('contentLoc');
        $contentLoc->setAccessible(true);
        $this->assertEquals($contentLoc->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getContentLoc(), $testValue);
    }

    /**
     *
     */
    public function testGetPlayerLoc()
    {
        $testValue = 'testPlayerLoc';
        $playerLoc = $this->reflectionClass->getProperty('playerLoc');
        $playerLoc->setAccessible(true);
        $playerLoc->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getPlayerLoc(), $testValue);
    }

    /**
     *
     */
    public function testSetPlayerLoc()
    {
        $testValue = 'testPlayerLoc';
        $this->videoEntity->setPlayerLoc($testValue);
        $playerLoc = $this->reflectionClass->getProperty('playerLoc');
        $playerLoc->setAccessible(true);
        $this->assertEquals($playerLoc->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getPlayerLoc(), $testValue);
    }

    /**
     *
     */
    public function testGetDuration()
    {
        $testValue = 'testDuration';
        $duration = $this->reflectionClass->getProperty('duration');
        $duration->setAccessible(true);
        $duration->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getDuration(), $testValue);
    }

    /**
     *
     */
    public function testSetDuration()
    {
        $testValue = 'testDuration';
        $this->videoEntity->setDuration($testValue);
        $duration = $this->reflectionClass->getProperty('duration');
        $duration->setAccessible(true);
        $this->assertEquals($duration->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getDuration(), $testValue);
    }

    /**
     *
     */
    public function testGetExpirationDate()
    {
        $testValue = new \DateTime();
        $expirationDate = $this->reflectionClass->getProperty('expirationDate');
        $expirationDate->setAccessible(true);
        $expirationDate->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getExpirationDate(), $testValue);
    }

    /**
     *
     */
    public function testSetExpirationDate()
    {
        $testValue = new \DateTime();
        $this->videoEntity->setExpirationDate($testValue);
        $expirationDate = $this->reflectionClass->getProperty('expirationDate');
        $expirationDate->setAccessible(true);
        $this->assertEquals($expirationDate->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getExpirationDate(), $testValue);
    }

    /**
     *
     */
    public function testGetRating()
    {
        $testValue = 'testRating';
        $rating = $this->reflectionClass->getProperty('rating');
        $rating->setAccessible(true);
        $rating->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getRating(), $testValue);
    }

    /**
     *
     */
    public function testSetRating()
    {
        $testValue = 'testRating';
        $this->videoEntity->setRating($testValue);
        $rating = $this->reflectionClass->getProperty('rating');
        $rating->setAccessible(true);
        $this->assertEquals($rating->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getRating(), $testValue);
    }

    /**
     *
     */
    public function testGetViewCount()
    {
        $testValue = 'testViewCount';
        $viewCount = $this->reflectionClass->getProperty('viewCount');
        $viewCount->setAccessible(true);
        $viewCount->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getViewCount(), $testValue);
    }

    /**
     *
     */
    public function testSetViewCount()
    {
        $testValue = 'testViewCount';
        $this->videoEntity->setViewCount($testValue);
        $viewCount = $this->reflectionClass->getProperty('viewCount');
        $viewCount->setAccessible(true);
        $this->assertEquals($viewCount->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getViewCount(), $testValue);
    }

    /**
     *
     */
    public function testGetPublicationDate()
    {
        $testValue = new \DateTime();
        $publicationDate = $this->reflectionClass->getProperty('publicationDate');
        $publicationDate->setAccessible(true);
        $publicationDate->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getPublicationDate(), $testValue);
    }

    /**
     *
     */
    public function testSetPublicationDate()
    {
        $testValue = new \DateTime();
        $this->videoEntity->setPublicationDate($testValue);
        $publicationDate = $this->reflectionClass->getProperty('publicationDate');
        $publicationDate->setAccessible(true);
        $this->assertEquals($publicationDate->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getPublicationDate(), $testValue);
    }

    /**
     *
     */
    public function testGetFamilyFriendly()
    {
        $testValue = 'testFamilyFriendly';
        $familyFriendly = $this->reflectionClass->getProperty('familyFriendly');
        $familyFriendly->setAccessible(true);
        $familyFriendly->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getFamilyFriendly(), $testValue);
    }

    /**
     *
     */
    public function testSetFamilyFriendly()
    {
        $testValue = 'testFamilyFriendly';
        $this->videoEntity->setFamilyFriendly($testValue);
        $familyFriendly = $this->reflectionClass->getProperty('familyFriendly');
        $familyFriendly->setAccessible(true);
        $this->assertEquals($familyFriendly->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getFamilyFriendly(), $testValue);
    }

    /**
     *
     */
    public function testGetTag()
    {
        $testValue = 'testTag';
        $tag = $this->reflectionClass->getProperty('tag');
        $tag->setAccessible(true);
        $tag->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getTag(), $testValue);
    }

    /**
     *
     */
    public function testSetTag()
    {
        $testValue = 'testTag';
        $this->videoEntity->setTag($testValue);
        $tag = $this->reflectionClass->getProperty('tag');
        $tag->setAccessible(true);
        $this->assertEquals($tag->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getTag(), $testValue);
    }

    /**
     *
     */
    public function testGetCategory()
    {
        $testValue = 'testCategory';
        $category = $this->reflectionClass->getProperty('category');
        $category->setAccessible(true);
        $category->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getCategory(), $testValue);
    }

    /**
     *
     */
    public function testSetCategory()
    {
        $testValue = 'testCategory';
        $this->videoEntity->setCategory($testValue);
        $category = $this->reflectionClass->getProperty('category');
        $category->setAccessible(true);
        $this->assertEquals($category->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getCategory(), $testValue);
    }

    /**
     *
     */
    public function testGetRestriction()
    {
        $testValue = 'testRestriction';
        $restriction = $this->reflectionClass->getProperty('restriction');
        $restriction->setAccessible(true);
        $restriction->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getRestriction(), $testValue);
    }

    /**
     *
     */
    public function testSetRestriction()
    {
        $testValue = 'testRestriction';
        $this->videoEntity->setRestriction($testValue);
        $restriction = $this->reflectionClass->getProperty('restriction');
        $restriction->setAccessible(true);
        $this->assertEquals($restriction->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getRestriction(), $testValue);
    }

    /**
     *
     */
    public function testGetGalleryLoc()
    {
        $testValue = 'testGalleryLoc';
        $galleryLoc = $this->reflectionClass->getProperty('galleryLoc');
        $galleryLoc->setAccessible(true);
        $galleryLoc->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getGalleryLoc(), $testValue);
    }

    /**
     *
     */
    public function testSetGalleryLoc()
    {
        $testValue = 'testGalleryLoc';
        $this->videoEntity->setGalleryLoc($testValue);
        $galleryLoc = $this->reflectionClass->getProperty('galleryLoc');
        $galleryLoc->setAccessible(true);
        $this->assertEquals($galleryLoc->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getGalleryLoc(), $testValue);
    }

    /**
     *
     */
    public function testGetPrice()
    {
        $testValue = 'testPrice';
        $price = $this->reflectionClass->getProperty('price');
        $price->setAccessible(true);
        $price->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getPrice(), $testValue);
    }

    /**
     *
     */
    public function testSetPrice()
    {
        $testValue = 'testPrice';
        $this->videoEntity->setPrice($testValue);
        $price = $this->reflectionClass->getProperty('price');
        $price->setAccessible(true);
        $this->assertEquals($price->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getPrice(), $testValue);
    }

    /**
     *
     */
    public function testGetRequiresSubscription()
    {
        $testValue = 'testRequiresSubscription';
        $requiresSubscription = $this->reflectionClass->getProperty('requiresSubscription');
        $requiresSubscription->setAccessible(true);
        $requiresSubscription->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getRequiresSubscription(), $testValue);
    }

    /**
     *
     */
    public function testSetRequiresSubscription()
    {
        $testValue = 'testRequiresSubscription';
        $this->videoEntity->setRequiresSubscription($testValue);
        $requiresSubscription = $this->reflectionClass->getProperty('requiresSubscription');
        $requiresSubscription->setAccessible(true);
        $this->assertEquals($requiresSubscription->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getRequiresSubscription(), $testValue);
    }

    /**
     *
     */
    public function testGetUploader()
    {
        $testValue = 'testUploader';
        $uploader = $this->reflectionClass->getProperty('uploader');
        $uploader->setAccessible(true);
        $uploader->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getUploader(), $testValue);
    }

    /**
     *
     */
    public function testSetUploader()
    {
        $testValue = 'testUploader';
        $this->videoEntity->setUploader($testValue);
        $uploader = $this->reflectionClass->getProperty('uploader');
        $uploader->setAccessible(true);
        $this->assertEquals($uploader->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getUploader(), $testValue);
    }

    /**
     *
     */
    public function testGetPlatform()
    {
        $testValue = 'testPlatform';
        $platform = $this->reflectionClass->getProperty('platform');
        $platform->setAccessible(true);
        $platform->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getPlatform(), $testValue);
    }

    /**
     *
     */
    public function testSetPlatform()
    {
        $testValue = 'testPlatform';
        $this->videoEntity->setPlatform($testValue);
        $platform = $this->reflectionClass->getProperty('platform');
        $platform->setAccessible(true);
        $this->assertEquals($platform->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getPlatform(), $testValue);
    }

    /**
     *
     */
    public function testGetLive()
    {
        $testValue = 'testLive';
        $live = $this->reflectionClass->getProperty('live');
        $live->setAccessible(true);
        $live->setValue($this->videoEntity, $testValue);
        $this->assertEquals($this->videoEntity->getLive(), $testValue);
    }

    /**
     *
     */
    public function testSetLive()
    {
        $testValue = 'testLive';
        $this->videoEntity->setLive($testValue);
        $live = $this->reflectionClass->getProperty('live');
        $live->setAccessible(true);
        $this->assertEquals($live->getValue($this->videoEntity), $testValue);
        $this->assertEquals($this->videoEntity->getLive(), $testValue);
    }
}