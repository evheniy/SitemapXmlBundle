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
    public function testValidate()
    {
        $this->setExpectedException('Evheniy\SitemapXmlBundle\Exception\ValidateEntityException');
        $this->newsEntity->validate();
    }
}