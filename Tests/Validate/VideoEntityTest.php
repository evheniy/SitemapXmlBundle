<?php

namespace Evheniy\SitemapXmlBundle\Tests\Validate;

use Evheniy\SitemapXmlBundle\Validate\VideoEntity;

/**
 * Class VideoEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Validate
 */
class VideoEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var VideoEntity
     */
    protected $videoEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->videoEntity = new VideoEntity();
    }

    /**
     *
     */
    public function testValidateThumbnailLoc()
    {
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"ThumbnailLoc" field must be not empty!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongThumbnailLoc()
    {
        $this->videoEntity->setThumbnailLoc('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"ThumbnailLoc" field must be valid url!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateTitle()
    {
        $this->videoEntity->setThumbnailLoc('http://site.com/video.png');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Title" field must be not empty!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateDescription()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
        ->setTitle('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Description" field must be not empty!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateContentLocAndPlayerLoc()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
        ->setDescription('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', 'You must specify at least one of "ContentLoc" or "PlayerLoc"');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateContentLoc()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', 'A URL pointing to the actual video media file. This file should be in .mpg, .mpeg, .mp4, .m4v, .mov, .wmv, .asf, .avi, .ra, .ram, .rm, .flv, or other video file format.');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateRating()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setRating(12);
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Rating" field should be between 0.0 and 1.0!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateTag()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setTag('a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Tag" field can have 32 words maximum!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateCategory()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setCategory(
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a' .
                'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a'
            );
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Category" field value should be a string no longer than 256 characters!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidatePlayerLoc()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setPlayerLoc(array('url' => 'test', 'allowEmbed' => false));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"PlayerLoc[url]" field must be valid url!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateRestrictionEmptyRelationship()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setRestriction(array('countries' => 'test'));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Restriction[relationship]" field must be "allow" or "deny"!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateRestrictionWrongRelationship()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setRestriction(array('countries' => 'test', 'relationship' => 'test'));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Restriction[relationship]" field must be "allow" or "deny"!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateRestrictionWrongCountries()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setRestriction(array('countries' => 'test', 'relationship' => 'allow'));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Restriction[countries]" field must be valid country code like "US", "GB"...');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateGalleryLoc()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setGalleryLoc(array('url' => 'test', 'title' => null));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"GalleryLoc[url]" field must be valid url!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidatePriceEmptyCurrency()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setPrice(array('price' => 123));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Price[currency]" field must be valid currency code!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidatePriceWrongCurrency()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setPrice(array('price' => 123, 'currency' => 'test'));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Price[currency]" field must be valid currency code!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateUploader()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setUploader(array('name' => 'test', 'info' => 'test'));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Uploader[info]" field must be valid url!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidatePlatformEmptyRelationship()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setPlatform(array('code' => 'test'));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Platform[relationship]" field must be "allow" or "deny"!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidatePlatformWrongRelationship()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setPlatform(array('code' => 'test', 'relationship' => 'test'));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Platform[relationship]" field must be "allow" or "deny"!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidatePlatformWrongCode()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setPlatform(array('code' => 'test', 'relationship' => 'allow'));
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Platform[code]" field must be "WEB", "MOBILE", "TV"!');
        $this->videoEntity->validate();
    }

    /**
     *
     */
    public function testValidateOk()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setContentLoc('http://site.com/video.avi')
            ->setGalleryLoc(array('url' => 'http://site.com/video.png', 'title' => null));
        $this->assertEquals($this->videoEntity->validate(), $this->videoEntity);
    }
}