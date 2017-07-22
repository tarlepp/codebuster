<?php
declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MenuCommand extends Command
{
    public function __construct($name = null)
    {
        parent::__construct('menu');

        $this->setDescription('Menu Command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): ?int
    {
        $io = new SymfonyStyle($input, $output);

        $io->choice('What you want to do', ['item 1', 'item 2', 'item 4']);

        return null;
    }
}
