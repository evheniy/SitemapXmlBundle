<?php

namespace Evheniy\SitemapXmlBundle\Tests\Dump;

use Evheniy\SitemapXmlBundle\Dump\DumpEntity;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class DumpEntityTest
 * @package Evheniy\SitemapXmlBundle\Tests\Dump
 */
class DumpEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DumpEntity
     */
    protected $dumpEntity;
    /**
     * @var Filesystem
     */
    protected $filesystem;
    /**
     * @var string
     */
    protected $filePath;

    /**
     *
     */
    public function setUp()
    {
        $this->dumpEntity = new DumpEntity();
        $this->filesystem = new Filesystem();
        $this->filePath = __DIR__ . '/test.xml';
    }

    /**
     *
     */
    public function tearDown()
    {
        if ($this->filesystem->exists($this->filePath)) {
            $this->filesystem->remove($this->filePath);
        }
    }

    /**
     *
     */
    public function testFileExists()
    {
        $this->dumpEntity->setCarefully(true);
        $this->filesystem->dumpFile($this->filePath, 'test');
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\DumpException', 'File "' . $this->filePath . '" already exists!');
        $this->dumpEntity->saveFile($this->filePath, 'test');

    }

    /**
     *
     */
    public function testDirExists()
    {
        $this->dumpEntity->setCarefully(true);
        $this->filePath = __DIR__ . '/test/test.xml';
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\DumpException', 'Directory "' . dirname($this->filePath) . '" does not exist!');
        $this->dumpEntity->saveFile($this->filePath, 'test');
    }

    /**
     *
     */
    public function testNewDir()
    {
        $this->dumpEntity->setCarefully(false);
        $this->filePath = '/test/test.xml';
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\DumpException');
        $this->dumpEntity->saveFile($this->filePath, 'test');
    }

    /**
     *
     */
    public function testSavingFile()
    {
        $this->dumpEntity->setCarefully(false);
        $this->dumpEntity->saveFile($this->filePath, 'test');
        $this->assertTrue($this->filesystem->exists($this->filePath));
        $this->assertEquals('test', file_get_contents($this->filePath));
    }
}