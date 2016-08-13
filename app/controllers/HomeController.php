<?php
/**
 * Description of HomeController
 *
 * @author julianchaos
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController {
	
	/* ATTRIBUTES */
	private $_container;
	private $_conn;

	
	/* GETTERS & SETTERS */
	private function getContainer() {
		return $this->_container;
	}
	private function setContainer($container) {
		$this->_container = $container;
	}
	
	private function getConn()	{
		if(is_null($this->_conn))
		{
			$conn = $this->createDatabaseConnection();
			$this->setConn($conn);
		}
		
		return $this->_conn;
	}
	private function setConn($conn)	{
		$this->_conn = $conn;
	}
	

	/* Methods */
	public function __construct(Slim\Container $container) {
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
		$response = $this->getContainer()->view->render($response, "index.php");
		return $response;
	}
	public function recebeFormSubmit(Request $request, Response $response) {
		$data = $request->getParsedBody();
		$email = $data['email'];

		$this->getContainer()->logger->addInfo("Requisição recebida de $email");
		$response->getBody()->write("Requisição recebida de $email");

		return $response;
	}

}
