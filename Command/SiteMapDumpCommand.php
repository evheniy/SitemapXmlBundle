<?php

namespace Evheniy\SitemapXmlBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

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
     *
     */
    protected function configure()
    {
        $this
            ->setName('sitemap:dump')
            ->setDescription('Dumping sitemap.xml')
            ->addArgument('carefully', null, 'Check for existing files and directories');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dumpManager = $this->serviceManager->createDumpManager();
        $dumpEntity = $this->serviceManager->createDumpEntity();
        //TODO $dumpEntity->setCarefully($input->getArgument('isCarefully'));
        $dumpEntity->setWebDir(realpath($this->getContainer()->get('kernel')->getRootDir() . '/../web'));
        $dumpManager->setEntity($dumpEntity);
        //TODO add check isCarefully
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);

        return 0;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $input;
        $output;
        $this->serviceManager = $this->getContainer()->get('sitemap');
        $this->setEntities();
    }

    /**
     *
     */
    protected function setEntities()
    {
        $this->siteMapIndexEntity = $this->serviceManager->createSiteMapIndexEntity();
        $this->siteMapEntity = $this->serviceManager->createSiteMapEntity();
    }
}
