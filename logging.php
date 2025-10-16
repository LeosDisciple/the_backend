<?php

echo "Let's do some logging!";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Dotenv\Dotenv;

require 'vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Read environment variables (with defaults)
$appEnv = $_ENV['APP_ENV'] ?? 'prod';
$logPath = $_ENV['LOG_PATH'] ?? __DIR__ . '/app.log';

// Choose log level based on environment
$logLevel = ($appEnv === 'dev') ? Logger::DEBUG : Logger::WARNING;

// Create logger
$log = new Logger('myapp');
$log->pushHandler(new StreamHandler($logPath, $logLevel));

// Log messages
$log->info('User logged in', ['username' => 'johnnyboy!']);
$log->warning('Low disk space');
$log->error('Could not connect to database');

?>