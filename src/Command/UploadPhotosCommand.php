<?php
namespace bheller\GooglePhotosUploader\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UploadPhotosCommand extends Command
{

    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'upload';

    protected function configure()
    {
        $this->setDescription('Upload all photos and videos from a directory to Google Photos')->setHelp('');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
    }
}