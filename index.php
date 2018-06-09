<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__.'/logs/monolog.log', Logger::DEBUG));

// add records to the log
$log->addWarning('Foo');
$log->addError('Bar');

echo 'Hello World';
