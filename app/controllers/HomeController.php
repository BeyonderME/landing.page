<?php
namespace app\controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController {
	
	/* ATTRIBUTES */
	private $_container;

	
	/* GETTERS & SETTERS */
	private function getContainer() {
		return $this->_container;
	}
	private function setContainer($container) {
		$this->_container = $container;
	}


	/* Methods */
	public function __construct(\Slim\Container $container) {
		$this->setContainer($container);
	}
	private function createDatabaseConnection() {
		$container = $this->getContainer();
		$db = $container['settings']['db'];

		$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['dbname']) or die ('Erro ao conectar-se: ' . mysqli_connect_error() );
		mysqli_set_charset($conn, "utf8");

		return $conn;
	}

	
	/* Callback Methods */
	public function renderHome(Request $request, Response $response) {
		$router = $this->getContainer()->router;
		$response = $this->getContainer()->view->render($response, "index.php", ["router"=>$router]);
		return $response;
	}
	public function recebeFormSubmit(Request $request, Response $response) {
		$data = $request->getParsedBody();
		
		$submissao = new \app\models\Submissao($this->getContainer());
		$submissao->setEmail($data['email']);
		
		$saveResponse = $submissao->save();

		$response = $response->withJson($saveResponse);
		return $response;

	}

}
