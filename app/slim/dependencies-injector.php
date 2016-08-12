<?php
$container = $app->getContainer();
$container['logger'] = function($container) {
	$logger = new \Monolog\Logger("my_logger");
	$file_handler = new \Monolog\Handler\StreamHandler("../landing.page.logs/app.log");
	$logger->pushHandler($file_handler);
	return $logger;
};
$container['db'] = function($container) {
	$db = $container['settings']['db'];
	$pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'], $db['user'], $db['pass']);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};
$container['view'] = new \Slim\Views\PhpRenderer("../app/templates/");