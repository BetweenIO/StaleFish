<?php
namespace StaleFish\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreditsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('credits')
            ->setDescription('Get a Credit!')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('This is Stale Fish software!');
    }
}
 