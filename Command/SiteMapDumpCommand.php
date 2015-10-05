<?php

namespace Evheniy\SitemapXmlBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Evheniy\SitemapXmlBundle\Dump\DumpEntity;

/**
 * Class SiteMapDumpCommand
 *
 * @package Evheniy\SitemapXmlBundle\Command
 */
class SiteMapDumpCommand extends ContainerAwareCommand
{
    /**
     * @var \Evheniy\SitemapXmlBundle\Service\ServiceManager
     */
    protected $serviceManager;
    /**
     * @var \Evheniy\SitemapXmlBundle\Dump\SiteMapIndexEntity
     */
    protected $siteMapIndexEntity;
    /**
     * @var \Evheniy\SitemapXmlBundle\Dump\SiteMapEntity
     */
    protected $siteMapEntity;
    /**
     * @var DumpEntity
     */
    protected $dumpEntity;

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('sitemap:dump')
            ->setDescription('Dumping sitemap.xml')
            ->addArgument('carefully', null, 'Check for existing files and directories', false);
    }

    /**
     *
     */
    protected function setEntities()
    {
        $this->siteMapIndexEntity = $this->serviceManager->createSiteMapIndexEntity();
        $this->dumpEntity->setDomain('site.com');
        //Just example
        //You must extend this method and add your data!
        $this->siteMapIndexEntity
            ->addSiteMap(
                $this->serviceManager->createSiteMapEntity()
                    ->addLocation(
                        $this->serviceManager->createLocationEntity()
                            ->setLocation('http://site.com/page1.html')
                            ->setLastmod(new \DateTime())
                    )
                    ->addLocation(
                        $this->serviceManager->createLocationEntity()
                            ->setLocation('http://site.com/page2.html')
                            ->setLastmod(new \DateTime())
                            ->addImage(
                                $this->serviceManager->createImageEntity()
                                    ->setLocation('http://site.com/logo.png')
                                    ->setTitle('Logo')
                            )
                    )
            );
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<comment>Start dumping...</comment>');
        $this->serviceManager = $this->getContainer()->get('sitemap');
        $this->dumpEntity = $this->serviceManager->createDumpEntity()
            ->setCarefully($input->hasArgument('carefully') ? $input->getArgument('carefully') : false)
            ->setWebDir(realpath($this->getContainer()->get('kernel')->getRootDir() . '/../web'));
        $this->setEntities();
        $dumpManager = $this->serviceManager->createDumpManager();

        if (!empty($this->siteMapEntity)) {
            $this->dumpEntity->setSiteMapEntity($this->siteMapEntity);
        }
        if (!empty($this->siteMapIndexEntity)) {
            $this->dumpEntity->setSiteMapIndexEntity($this->siteMapIndexEntity);
        }
        $dumpManager->setEntity($this->dumpEntity);
        if (!empty($this->siteMapEntity)) {
            $dumpManager->dumpSiteMap();
        }
        if (!empty($this->siteMapIndexEntity)) {
            $dumpManager->dumpSiteMapIndex();
        }
        $output->writeln('<info>Done</info>');

        return 0;
    }
}
