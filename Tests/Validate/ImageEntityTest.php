<?php

namespace Evheniy\SitemapXmlBundle\Tests\Validate;

use Evheniy\SitemapXmlBundle\Validate\ImageEntity;

/**
 * Class ImageEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Validate
 */
class ImageEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ImageEntity
     */
    protected $imageEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->imageEntity = new ImageEntity();
    }

    /**
     *
     */
    public function testValidateEmptyLoc()
    {
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Loc" field must be not empty!');
        $this->imageEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongLoc()
    {
        $this->imageEntity->setLocation('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Loc" field must be valid url!');
        $this->imageEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongLicense()
    {
        $this->imageEntity
            ->setLocation('http://test.com/')
            ->setLicense('test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"License" field should be valid url!');
        $this->imageEntity->validate();
    }

    /**
     *
     */
    public function testValidateOk()
    {
        $this->imageEntity
            ->setLocation('http://test.com/')
            ->setLicense('http://test.com/license.pdf');
        $this->assertEquals($this->imageEntity->validate(), $this->imageEntity);
    }
}