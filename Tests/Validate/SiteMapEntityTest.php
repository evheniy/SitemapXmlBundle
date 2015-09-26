<?php

namespace Evheniy\SitemapXmlBundle\Tests\Validate;

use Evheniy\SitemapXmlBundle\Validate\LocationEntity;
use Evheniy\SitemapXmlBundle\Validate\SiteMapEntity;

/**
 * Class SiteMapEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Validate
 */
class SiteMapEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SiteMapEntity
     */
    protected $siteMapEntity;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapEntity = new SiteMapEntity();
    }

    /**
     *
     */
    public function testValidateLocationCollectionCount()
    {
        for ($i = 0; $i < SiteMapEntity::MAX_COUNT_LOCATIONS_FOR_SITEMAP + 1; $i++) {
            $this->siteMapEntity->addLocation(new LocationEntity());
        }
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', 'Max count locations for sitemap is ' . SiteMapEntity::MAX_COUNT_LOCATIONS_FOR_SITEMAP . '!');
        $this->siteMapEntity->validate();
    }

    /**
     *
     */
    public function testValidateWrongLocation()
    {
        $this->siteMapEntity->addLocation(new LocationEntity());
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Location" field must be not empty!');
        $this->siteMapEntity->validate();
    }

    /**
     *
     */
    public function testValidateOk()
    {
        $this->assertEquals($this->siteMapEntity->validate(), $this->siteMapEntity);
    }
}