<?php

require_once 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('O')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;

