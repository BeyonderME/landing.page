<?php
namespace app\models;

class Model {
	//Attributes
	private $_container;
	private $_conn;
	
	
	//Getters & Setters
	protected function getContainer() {
		return $this->_container;
	}
	protected function getConn() {
		if(is_null($this->_conn))
		{
			$conn = $this->createDatabaseConnection();
			$this->setConn($conn);
		}

		return $this->_conn;
	}

	private function setContainer($container) {
		$this->_container = $container;
	}
	private function setConn($conn) {
		$this->_conn = $conn;
	}

	
	//Methods
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
	protected function logError($message) {
		$this->getContainer()->logger->addInfo($message);
	}
}
