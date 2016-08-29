<?php require "../vendor/autoload.php" ?>
<?php require "../app/slim/config.php" ?>
<?php

$app = new \Slim\App(["settings" => $config]);

/* Dependency Injector */
$container = $app->getContainer();
$container['logger'] = function($container) {
	$logger = new \Monolog\Logger("my_logger");
	$file_handler = new \Monolog\Handler\StreamHandler("../landing.page.logs/app.log");
	$logger->pushHandler($file_handler);
	return $logger;
};
$container['view'] = new \Slim\Views\PhpRenderer("../app/templates/");

/* Routes */
$app->get("/", "app\controllers\HomeController:renderHome");
$app->post("/", "app\controllers\HomeController:recebeFormSubmit")->setName('submitBackend');

$app->run();