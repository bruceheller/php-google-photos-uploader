#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use bheller\GooglePhotosUploader\Command\UploadPhotosCommand;

$application = new Application();

$application->add(new UploadPhotosCommand());

$application->run();
