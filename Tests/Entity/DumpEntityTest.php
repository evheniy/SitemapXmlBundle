<?php

namespace Evheniy\SitemapXmlBundle\Tests\Entity;

use Evheniy\SitemapXmlBundle\Entity\DumpEntity;
use Evheniy\SitemapXmlBundle\Entity\SiteMapEntity;
use Evheniy\SitemapXmlBundle\Entity\SiteMapIndexEntity;

/**
 * Class DumpEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Entity
 */
class DumpEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DumpEntity
     */
    protected $dumpEntity;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->dumpEntity = new DumpEntity();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Entity\DumpEntity');
    }

    /**
     *
     */
    public function testSetWebDir()
    {
        $testValue = 'testWebDir';
        $this->dumpEntity->setWebDir($testValue);
        $webDir = $this->reflectionClass->getProperty('webDir');
        $webDir->setAccessible(true);
        $this->assertEquals($webDir->getValue($this->dumpEntity), $testValue);
        $this->assertEquals($this->dumpEntity->getWebDir(), $testValue);
    }

    /**
     *
     */
    public function testGetWebDir()
    {
        $testValue = 'testWebDir';
        $webDir = $this->reflectionClass->getProperty('webDir');
        $webDir->setAccessible(true);
        $webDir->setValue($this->dumpEntity, $testValue);
        $this->assertEquals($this->dumpEntity->getWebDir(), $testValue);
    }

    /**
     *
     */
    public function testSetPath()
    {
        $testValue = 'testPath';
        $this->dumpEntity->setPath($testValue);
        $path = $this->reflectionClass->getProperty('path');
        $path->setAccessible(true);
        $this->assertEquals($path->getValue($this->dumpEntity), $testValue);
        $this->assertEquals($this->dumpEntity->getPath(), $testValue);
    }

    /**
     *
     */
    public function testGetPath()
    {
        $testValue = 'testPath';
        $path = $this->reflectionClass->getProperty('path');
        $path->setAccessible(true);
        $path->setValue($this->dumpEntity, $testValue);
        $this->assertEquals($this->dumpEntity->getPath(), $testValue);
    }

    /**
     *
     */
    public function testSetCarefully()
    {
        $this->dumpEntity->setCarefully(true);
        $isCarefully = $this->reflectionClass->getProperty('isCarefully');
        $isCarefully->setAccessible(true);
        $this->assertTrue($isCarefully->getValue($this->dumpEntity));
        $this->assertTrue($this->dumpEntity->isCarefully());
        $this->dumpEntity->setCarefully(false);
        $this->assertFalse($isCarefully->getValue($this->dumpEntity));
        $this->assertFalse($this->dumpEntity->isCarefully());
    }

    /**
     *
     */
    public function testIsCarefully()
    {
        $isCarefully = $this->reflectionClass->getProperty('isCarefully');
        $isCarefully->setAccessible(true);
        $isCarefully->setValue($this->dumpEntity, true);
        $this->assertTrue($this->dumpEntity->isCarefully());
        $isCarefully->setValue($this->dumpEntity, false);
        $this->assertFalse($this->dumpEntity->isCarefully());
    }

    /**
     *
     */
    public function testSetProtocol()
    {
        $testValue = 'testProtocol';
        $this->dumpEntity->setProtocol($testValue);
        $protocol = $this->reflectionClass->getProperty('protocol');
        $protocol->setAccessible(true);
        $this->assertEquals($protocol->getValue($this->dumpEntity), $testValue);
        $this->assertEquals($this->dumpEntity->getProtocol(), $testValue);
    }

    /**
     *
     */
    public function testGetProtocol()
    {
        $testValue = 'testProtocol';
        $protocol = $this->reflectionClass->getProperty('protocol');
        $protocol->setAccessible(true);
        $protocol->setValue($this->dumpEntity, $testValue);
        $this->assertEquals($this->dumpEntity->getProtocol(), $testValue);
    }

    /**
     *
     */
    public function testSetDomain()
    {
        $testValue = 'testDomain';
        $this->dumpEntity->setDomain($testValue);
        $domain = $this->reflectionClass->getProperty('domain');
        $domain->setAccessible(true);
        $this->assertEquals($domain->getValue($this->dumpEntity), $testValue);
        $this->assertEquals($this->dumpEntity->getDomain(), $testValue);
    }

    /**
     *
     */
    public function testGetDomain()
    {
        $testValue = 'testDomain';
        $domain = $this->reflectionClass->getProperty('domain');
        $domain->setAccessible(true);
        $domain->setValue($this->dumpEntity, $testValue);
        $this->assertEquals($this->dumpEntity->getDomain(), $testValue);
    }

    /**
     *
     */
    public function testSetSiteMapIndexEntity()
    {
        $siteMapIndexEntity = new SiteMapIndexEntity();
        $this->dumpEntity->setSiteMapIndexEntity($siteMapIndexEntity);
        $siteMapReflection = $this->reflectionClass->getProperty('siteMapIndexEntity');
        $siteMapReflection->setAccessible(true);
        $this->assertEquals($siteMapReflection->getValue($this->dumpEntity), $siteMapIndexEntity);
        $this->assertEquals($this->dumpEntity->getSiteMapIndexEntity(), $siteMapIndexEntity);
    }

    /**
     *
     */
    public function testGetSiteMapIndexEntity()
    {
        $siteMapIndexEntity = new SiteMapIndexEntity();
        $siteMapReflection = $this->reflectionClass->getProperty('siteMapIndexEntity');
        $siteMapReflection->setAccessible(true);
        $siteMapReflection->setValue($this->dumpEntity, $siteMapIndexEntity);
        $this->assertEquals($this->dumpEntity->getSiteMapIndexEntity(), $siteMapIndexEntity);
    }

    /**
     *
     */
    public function testSetSiteMapEntity()
    {
        $siteMapEntity = new SiteMapEntity();
        $this->dumpEntity->setSiteMapEntity($siteMapEntity);
        $siteMapReflection = $this->reflectionClass->getProperty('siteMapEntity');
        $siteMapReflection->setAccessible(true);
        $this->assertEquals($siteMapReflection->getValue($this->dumpEntity), $siteMapEntity);
        $this->assertEquals($this->dumpEntity->getSiteMapEntity(), $siteMapEntity);
    }

    /**
     *
     */
    public function testGetSiteMapEntity()
    {
        $siteMapEntity = new SiteMapEntity();
        $siteMapReflection = $this->reflectionClass->getProperty('siteMapEntity');
        $siteMapReflection->setAccessible(true);
        $siteMapReflection->setValue($this->dumpEntity, $siteMapEntity);
        $this->assertEquals($this->dumpEntity->getSiteMapEntity(), $siteMapEntity);
    }
}