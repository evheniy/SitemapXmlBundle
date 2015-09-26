<?php

namespace Evheniy\SitemapXmlBundle\Tests\Validate;

use Evheniy\SitemapXmlBundle\Validate\SiteMapEntity;
use Evheniy\SitemapXmlBundle\Validate\SiteMapIndexEntity;

/**
 * Class SiteMapIndexEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Validate
 */
class SiteMapIndexEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SiteMapIndexEntity
     */
    protected $siteMapIndexEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapIndexEntity = new SiteMapIndexEntity();
    }

    /**
     *
     */
    public function testValidateEmptySiteMapEntityLoc()
    {
        $siteMap = new SiteMapEntity();
        $this->siteMapIndexEntity->addSiteMap($siteMap);
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Loc" field must be set!');
        $this->siteMapIndexEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongSiteMapEntityLoc()
    {
        $siteMap = new SiteMapEntity();
        $siteMap->setLoc('test');
        $this->siteMapIndexEntity->addSiteMap($siteMap);
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Loc" field must be valid url!');
        $this->siteMapIndexEntity->validate();
    }

    /**
     *
     */
    public function testValidateOk()
    {
        $siteMap = new SiteMapEntity();
        $siteMap->setLoc('http://test.com/');
        $this->siteMapIndexEntity->addSiteMap($siteMap);
        $this->assertEquals($this->siteMapIndexEntity->validate(), $this->siteMapIndexEntity);
    }
}