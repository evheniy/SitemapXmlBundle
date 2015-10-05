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
    public function testValidatePlayerLoc()
    {
        $this->videoEntity
            ->setThumbnailLoc('http://site.com/video.png')
            ->setTitle('test')
            ->setDescription('test')
            ->setPlayerLoc('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"PlayerLoc" field must be valid url!');
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
            ->setContentLoc('http://site.com/video.avi');
        $this->assertEquals($this->videoEntity->validate(), $this->videoEntity);
    }
}