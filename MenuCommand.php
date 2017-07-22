<?php
declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MenuCommand extends Command
{
    /**
     * @var SymfonyStyle
     */
    private $io;

    public function __construct($name = null)
    {
        parent::__construct('menu');

        $this->setDescription('Menu Command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): ?int
    {
        $this->io = new SymfonyStyle($input, $output);

        $choice = $this->io->choice('What you want to do', ['A' => 'item 1', 'B' => 'item 2', 'C' => 'item 4']);

        $method = 'method' . $choice;

        $this->$method();

        return null;
    }

    private function methodA()
    {
        $this->io->writeln('Method A');
        $this->io->ask('some question for A');
    }

    private function methodB()
    {
        $this->io->writeln('Method B');
        $this->io->ask('some question for B');
    }

    private function methodC()
    {
        $this->io->writeln('Method C');
        $this->io->ask('some question for C');
    }
}
