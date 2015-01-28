<?php
namespace StaleFish;

use Symfony\Component\Console\Application as BaseApplication;
use StaleFish\Command;

class Application extends BaseApplication
{
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();

        $commands[] = new Command\CreditsCommand();

        return $commands;
    }

}
 