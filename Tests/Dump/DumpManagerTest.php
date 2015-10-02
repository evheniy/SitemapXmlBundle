<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\DumpEntity;
use Evheniy\SitemapXmlBundle\Dump\DumpManager;
use Evheniy\SitemapXmlBundle\Dump\SiteMapEntity;
use Evheniy\SitemapXmlBundle\Dump\SiteMapIndexEntity;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class DumpManagerTest
 * @package Evheniy\SitemapXmlBundle\Tests\Dump
 */
class DumpManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DumpManager
     */
    protected $dumpManager;
    /**
     * @var \ReflectionClass
     */
    protected $reflectionClass;

    /**
     *
     */
    public function setUp()
    {
        $this->dumpManager = new DumpManager();
        $this->reflectionClass = new \ReflectionClass('Evheniy\SitemapXmlBundle\Dump\DumpManager');
    }

    /**
     *
     */
    public function testSetEntity()
    {
        $dumpEntity = new DumpEntity();
        $this->dumpManager->setEntity($dumpEntity);
        $dumpEntityReflection = $this->reflectionClass->getProperty('dumpEntity');
        $dumpEntityReflection->setAccessible(true);
        $this->assertEquals($dumpEntityReflection->getValue($this->dumpManager), $dumpEntity);
    }

    /**
     *
     */
    public function testDumpSiteMapIndex()
    {
        $dumpSiteMapIndex = $this->reflectionClass->getMethod('dumpSiteMapIndex');
        $dumpSiteMapIndex->setAccessible(true);
        $filesystem = new Filesystem();

        $siteMapIndexEntity = new SiteMapIndexEntity();
        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapIndexEntity($siteMapIndexEntity)->setWebDir(__DIR__)->setDomain('test');
        $this->dumpManager->setEntity($dumpEntity);

        $dumpSiteMapIndex->invoke($this->dumpManager);
        $this->assertTrue($filesystem->exists(__DIR__ . '/sitemap.xml'));
        $filesystem->remove(__DIR__ . '/sitemap.xml');
    }

    /**
     *
     */
    public function testDumpSiteMap()
    {
        $dumpSiteMap = $this->reflectionClass->getMethod('dumpSiteMap');
        $dumpSiteMap->setAccessible(true);
        $filesystem = new Filesystem();

        $siteMapEntity = new SiteMapEntity();
        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapEntity($siteMapEntity)->setWebDir(__DIR__)->setDomain('test');
        $this->dumpManager->setEntity($dumpEntity);

        $dumpSiteMap->invoke($this->dumpManager);
        $this->assertTrue($filesystem->exists(__DIR__ . '/sitemap.xml'));
        $filesystem->remove(__DIR__ . '/sitemap.xml');
    }

    /**
     *
     */
    public function testValidateSiteMapIndex()
    {
        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapIndexEntity(new SiteMapIndexEntity());
        $this->dumpManager->setEntity($dumpEntity);
        $validateSiteMapIndex = $this->reflectionClass->getMethod('validateSiteMapIndex');
        $validateSiteMapIndex->setAccessible(true);
        $validateSiteMapIndex->invoke($this->dumpManager);
        $dumpEntity = new DumpEntity();
        $this->dumpManager->setEntity($dumpEntity);
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\DumpException', 'Empty SiteMapIndexEntity!');
        $validateSiteMapIndex->invoke($this->dumpManager);
    }

    /**
     *
     */
    public function testValidateSiteMap()
    {
        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapEntity(new SiteMapEntity());
        $this->dumpManager->setEntity($dumpEntity);
        $validateSiteMap = $this->reflectionClass->getMethod('validateSiteMap');
        $validateSiteMap->setAccessible(true);
        $validateSiteMap->invoke($this->dumpManager);
        $dumpEntity = new DumpEntity();
        $this->dumpManager->setEntity($dumpEntity);
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\DumpException', 'Empty SiteMapEntity!');
        $validateSiteMap->invoke($this->dumpManager);
    }

    /**
     *
     */
    public function testSetSiteMapLocation()
    {
        $siteMapEntity = new SiteMapEntity();
        $siteMapIndexEntity = new SiteMapIndexEntity();
        $siteMapIndexEntity->addSiteMap($siteMapEntity);
        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapIndexEntity($siteMapIndexEntity)->setDomain('test');
        $this->dumpManager->setEntity($dumpEntity);
        $setSiteMapLocation = $this->reflectionClass->getMethod('setSiteMapLocation');
        $setSiteMapLocation->setAccessible(true);
        $setSiteMapLocation->invoke($this->dumpManager);
        $this->assertEquals($siteMapEntity->getLoc(), 'http://test/sitemap0.xml');
        $siteMapEntity->setLoc('http://test/sitemap.xml');
        $setSiteMapLocation->invoke($this->dumpManager);
        $this->assertEquals($siteMapEntity->getLoc(), 'http://test/sitemap.xml');
    }

    /**
     *
     */
    public function testValidateAllSiteMap()
    {
        $siteMapEntity = new SiteMapEntity();
        $siteMapIndexEntity = new SiteMapIndexEntity();
        $siteMapIndexEntity->addSiteMap($siteMapEntity);
        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapIndexEntity($siteMapIndexEntity);
        $this->dumpManager->setEntity($dumpEntity);
        $validateAllSiteMap = $this->reflectionClass->getMethod('validateAllSiteMap');
        $validateAllSiteMap->setAccessible(true);
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException', '"Loc" field must be set!');
        $validateAllSiteMap->invoke($this->dumpManager);
    }

    /**
     *
     */
    public function testSaveSiteMapWithSiteMapEntity()
    {
        $saveSiteMap = $this->reflectionClass->getMethod('saveSiteMap');
        $saveSiteMap->setAccessible(true);
        $filesystem = new Filesystem();

        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapEntity(new SiteMapEntity())->setWebDir(__DIR__)->setDomain('test');
        $this->dumpManager->setEntity($dumpEntity);

        $saveSiteMap->invoke($this->dumpManager);
        $this->assertTrue($filesystem->exists(__DIR__ . '/sitemap.xml'));
        $filesystem->remove(__DIR__ . '/sitemap.xml');
    }

    /**
     *
     */
    public function testSaveSiteMapWithSiteMapEntityAndLocation()
    {
        $saveSiteMap = $this->reflectionClass->getMethod('saveSiteMap');
        $saveSiteMap->setAccessible(true);
        $filesystem = new Filesystem();

        $dumpEntity = new DumpEntity();
        $siteMapEntity = new SiteMapEntity();
        $siteMapEntity->setLoc('http://test/sitemap.xml');
        $dumpEntity->setSiteMapEntity($siteMapEntity)->setWebDir(__DIR__)->setDomain('test');
        $this->dumpManager->setEntity($dumpEntity);

        $saveSiteMap->invoke($this->dumpManager);
        $this->assertTrue($filesystem->exists(__DIR__ . '/sitemap.xml'));
        $filesystem->remove(__DIR__ . '/sitemap.xml');
    }

    /**
     *
     */
    public function testSaveSiteMapForSiteMapIndexEntity()
    {
        $saveSiteMap = $this->reflectionClass->getMethod('saveSiteMap');
        $saveSiteMap->setAccessible(true);
        $filesystem = new Filesystem();

        $siteMapIndexEntity = new SiteMapIndexEntity();
        $siteMapIndexEntity->addSiteMap(new SiteMapEntity());
        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapIndexEntity($siteMapIndexEntity)->setWebDir(__DIR__)->setDomain('test');
        $this->dumpManager->setEntity($dumpEntity);

        $setSiteMapLocation = $this->reflectionClass->getMethod('setSiteMapLocation');
        $setSiteMapLocation->setAccessible(true);
        $setSiteMapLocation->invoke($this->dumpManager);

        $saveSiteMap->invoke($this->dumpManager);
        $this->assertTrue($filesystem->exists(__DIR__ . '/sitemap0.xml'));
        $filesystem->remove(__DIR__ . '/sitemap0.xml');
    }

    /**
     *
     */
    public function testSaveSiteMapIndex()
    {
        $saveSiteMapIndex = $this->reflectionClass->getMethod('saveSiteMapIndex');
        $saveSiteMapIndex->setAccessible(true);
        $filesystem = new Filesystem();

        $siteMapIndexEntity = new SiteMapIndexEntity();
        $dumpEntity = new DumpEntity();
        $dumpEntity->setSiteMapIndexEntity($siteMapIndexEntity)->setWebDir(__DIR__)->setDomain('test');
        $this->dumpManager->setEntity($dumpEntity);

        $saveSiteMapIndex->invoke($this->dumpManager);
        $this->assertTrue($filesystem->exists(__DIR__ . '/sitemap.xml'));
        $filesystem->remove(__DIR__ . '/sitemap.xml');
    }
}