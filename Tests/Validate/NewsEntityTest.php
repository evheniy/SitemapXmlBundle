<?php

namespace Evheniy\SitemapXmlBundle\Tests\Validate;

use Evheniy\SitemapXmlBundle\Validate\NewsEntity;

/**
 * Class NewsEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Validate
 */
class NewsEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NewsEntity
     */
    protected $newsEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->newsEntity = new NewsEntity();
    }

    /**
     *
     */
    public function testValidateTitle()
    {
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Title" field must be not empty!');
        $this->newsEntity->validate();
    }

    /**
     *
     */
    public function testValidatePublicationName()
    {
        $this->newsEntity->setTitle('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"PublicationName" field must be not empty!');
        $this->newsEntity->validate();
    }

    /**
     *
     */
    public function testValidateEmptyPublicationLanguage()
    {
        $this->newsEntity->setTitle('test')
            ->setPublicationName('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"PublicationLanguage" field must be not empty!');
        $this->newsEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongPublicationLanguage()
    {
        $this->newsEntity->setTitle('test')
            ->setPublicationName('test')
            ->setPublicationLanguage('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"PublicationLanguage" field must be not empty!');
        $this->newsEntity->validate();
    }

    /**
     *
     */
    public function testValidateAccess()
    {
        $this->newsEntity->setTitle('test')
            ->setPublicationName('test')
            ->setPublicationLanguage('en')
            ->setAccess('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Access" field must be "Subscription" or "Registration"!');
        $this->newsEntity->validate();
    }

    /**
     *
     */
    public function testValidateGenres()
    {
        $this->newsEntity->setTitle('test')
            ->setPublicationName('test')
            ->setPublicationLanguage('en')
            ->setAccess('Subscription')
            ->setGenres('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Genres" field must contain ("PressRelease", "Satire", "Blog", "OpEd", "Opinion", "UserGenerated")!');
        $this->newsEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongGenres()
    {
        $this->newsEntity->setTitle('test')
            ->setPublicationName('test')
            ->setPublicationLanguage('en')
            ->setAccess('Subscription')
            ->setGenres('PressRelease, Satire, Blog, OpEd, Opinion, UserGenerated1');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Genres" field must contain ("PressRelease", "Satire", "Blog", "OpEd", "Opinion", "UserGenerated")!');
        $this->newsEntity->validate();
    }

    /**
     *
     */
    public function testValidateOk()
    {
        $this->newsEntity->setTitle('test')
            ->setPublicationName('test')
            ->setPublicationLanguage('en')
            ->setAccess('Subscription')
            ->setGenres('PressRelease, Satire, Blog, OpEd, Opinion, UserGenerated');
        $this->assertEquals($this->newsEntity->validate(), $this->newsEntity);
    }
}