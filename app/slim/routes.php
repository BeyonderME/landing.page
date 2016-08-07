<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get("/", function(Request $request, Response $response) {
	$response = $this->view->render($response, "index.php");
	return $response;
});
$app->post("/", function(Request $request, Response $response) {
	$data = $request->getParsedBody();
	$email = $data['email'];
	
	$this->logger->addInfo("Requisição recebida de $email");
	$response->getBody()->write("Requisição recebida de $email");

	return $response;
});
$app->get("/hello/{name}", function(Request $request, Response $response) {
	$name = $request->getAttribute('name');
	
	$this->logger->addInfo("Requição Hello World, $name!");
	$response->getBody()->write("Hello World, $name");
	
	return $response;
});