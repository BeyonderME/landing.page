<?php 

require "../vendor/autoload.php";
require "../app/slim/config.php";

$app = new \Slim\App(["settings" => $config]);

require "../app/slim/dependencies-injector.php";
require "../app/slim/routes.php";

$app->run();