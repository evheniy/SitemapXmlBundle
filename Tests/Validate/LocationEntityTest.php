<?php

namespace Evheniy\SitemapXmlBundle\Tests\Validate;

use Evheniy\SitemapXmlBundle\Validate\ImageEntity;
use Evheniy\SitemapXmlBundle\Validate\LocationEntity;
use Evheniy\SitemapXmlBundle\Validate\NewsEntity;
use Evheniy\SitemapXmlBundle\Validate\VideoEntity;

/**
 * Class LocationEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Validate
 */
class LocationEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LocationEntity
     */
    protected $locationEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->locationEntity = new LocationEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Validate\LocationEntity');
    }

    /**
     *
     */
    public function testIsValidChangefreq()
    {
        $this->locationEntity->setChangefreq('test');
        $isValidChangefreq = $this->reflectionClass->getMethod('isValidChangefreq');
        $isValidChangefreq->setAccessible(true);
        $this->assertFalse($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('always');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('hourly');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('daily');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('weekly');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('monthly');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('yearly');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
        $this->locationEntity->setChangefreq('never');
        $this->assertTrue($isValidChangefreq->invoke($this->locationEntity));
    }

    /**
     *
     */
    public function testIsValidPriority()
    {
        $isValidPriority = $this->reflectionClass->getMethod('isValidPriority');
        $isValidPriority->setAccessible(true);
        $this->locationEntity->setPriority(0.0);
        $this->assertTrue($isValidPriority->invoke($this->locationEntity));
        $this->locationEntity->setPriority(0.5);
        $this->assertTrue($isValidPriority->invoke($this->locationEntity));
        $this->locationEntity->setPriority(1.0);
        $this->assertTrue($isValidPriority->invoke($this->locationEntity));
        $this->locationEntity->setPriority(1.01);
        $this->assertFalse($isValidPriority->invoke($this->locationEntity));
        $this->locationEntity->setPriority(-0.01);
        $this->assertFalse($isValidPriority->invoke($this->locationEntity));
    }

    /**
     *
     */
    public function testValidateEmptyLocation()
    {
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Location" field must be not empty!');
        $this->locationEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongLocation()
    {
        $this->locationEntity->setLocation('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Location" field must be valid url!');
        $this->locationEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongChangefreq()
    {
        $this->locationEntity
            ->setLocation('http://test.com/')
            ->setLastmod(new \DateTime())
            ->setChangefreq('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Changefreq" field should be in [\'always\', \'hourly\', \'daily\', \'weekly\', \'monthly\', \'yearly\', \'never\']!');
        $this->locationEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongPriority()
    {
        $this->locationEntity
            ->setLocation('http://test.com/')
            ->setLastmod(new \DateTime())
            ->setChangefreq('always')
            ->setPriority(125);
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Priority" field should be between 0.0 and 1.0!');
        $this->locationEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongImageCollectionCount()
    {
        $this->locationEntity
            ->setLocation('http://test.com/')
            ->setLastmod(new \DateTime())
            ->setChangefreq('always')
            ->setPriority(0.5);
        for ($i = 0; $i < LocationEntity::MAX_COUNT_IMAGES_FOR_LOCATION + 1; $i++) {
            $this->locationEntity->addImage(new ImageEntity());
        }
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', 'Max count images for location is ' . LocationEntity::MAX_COUNT_IMAGES_FOR_LOCATION . '!');
        $this->locationEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongImage()
    {
        $this->locationEntity
            ->setLocation('http://test.com/')
            ->setLastmod(new \DateTime())
            ->setChangefreq('always')
            ->setPriority(0.5)
            ->addImage(new ImageEntity());
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Loc" field must be not empty!');
        $this->locationEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongVideo()
    {
        $this->locationEntity
            ->setLocation('http://test.com/')
            ->setLastmod(new \DateTime())
            ->setChangefreq('always')
            ->setPriority(0.5)
            ->addVideo(new VideoEntity());
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"ThumbnailLoc" field must be not empty!');
        $this->locationEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongNews()
    {
        $this->locationEntity
            ->setLocation('http://test.com/')
            ->setLastmod(new \DateTime())
            ->setChangefreq('always')
            ->setPriority(0.5)
            ->addNews(new NewsEntity());
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Title" field must be not empty!');
        $this->locationEntity->validate();
    }

    /**
     *
     */
    public function testValidateOk()
    {
        $image = new ImageEntity();
        $image->setLocation('http://test.com/image.png');
        $video = new VideoEntity();
        $video->setThumbnailLoc('http://test.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://test.com/video.avi');
        $news = new NewsEntity();
        $news->setTitle('test')
            ->setPublicationName('test')
            ->setPublicationLanguage('en')
            ->setAccess('Subscription')
            ->setGenres('PressRelease');
        $this->locationEntity
            ->setLocation('http://test.com/')
            ->setLastmod(new \DateTime())
            ->setChangefreq('always')
            ->setPriority(0.5)
            ->addImage($image)
            ->addVideo($video)
            ->addNews($news);
        $this->assertEquals($this->locationEntity->validate(), $this->locationEntity);
    }

}