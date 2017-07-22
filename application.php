#!/usr/bin/env php
<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/MenuCommand.php';

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new MenuCommand());
$application->run();
