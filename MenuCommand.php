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

        $choice = $io->choice('What you want to do', ['A' => 'item 1', 'B' => 'item 2', 'C' => 'item 4']);

        $method = 'method' . $choice;

        $this->$method();

        return null;
    }

    private function methodA()
    {
        echo "method A\n\n";
    }

    private function methodB()
    {
        echo "method B\n\n";
    }

    private function methodC()
    {
        echo "method C\n\n";
    }
}
