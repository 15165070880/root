<?php

include_once 'vendor/autoload.php';

$md5 = new demo\indexController;

echo $md5->index('123');
