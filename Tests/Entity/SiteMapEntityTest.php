<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\SiteMapEntity;

/**
 * Class SiteMapEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Entity
 */
class SiteMapEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SiteMapEntity
     */
    protected $siteMapEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->siteMapEntity = new SiteMapEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Entity\SiteMapEntity');
    }

    /**
     *
     */
    public function testConstruct()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testAddLocation()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testGetLocation()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testGetLoc()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testSetLoc()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testGetLastmod()
    {
        $this->markTestSkipped();
    }

    /**
     *
     */
    public function testSetLastmod()
    {
        $this->markTestSkipped();
    }
}