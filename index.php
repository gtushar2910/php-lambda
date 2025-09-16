<?php

require __DIR__ . '/vendor/autoload.php';

use Bref\Event\Http\FpmHandler;

// Point to your actual application entry file:
$handler = new FpmHandler('index1.php');
$handler->run();
?>