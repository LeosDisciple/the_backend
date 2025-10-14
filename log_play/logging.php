<?php

echo "LogPlay";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require 'vendor/autoload.php';

// Create a logger instance
$log = new Logger('app');

// Add a handler (write logs to app.log)
$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::DEBUG));

// Log messages
$log->info('User logged in', ['username' => 'john']);
$log->warning('Low disk space');
$log->error('Could not connect to database');

?>