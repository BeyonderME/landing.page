<?php
namespace app\models;

class Submissao extends Model{
	//Atributos
	private $_id;
	private $_email;
	private $_datacriacao;
	
	
	//Getters & Setters
	function getId() {
		return $this->_id;
	}
	function getEmail() {
		return $this->_email;
	}
	function getDatacriacao() {
		return $this->_datacriacao;
	}

	function setId($id) {
		$this->_id = $id;
	}
	public function setEmail($email) {
		if(is_bool(filter_var($email, FILTER_VALIDATE_EMAIL))) {
			$this->logError("Tentativa de input com valor de email inválido: $email");
			$email = false;
		}
		$this->_email = $email;
	}
	function setDatacriacao($datacriacao) {
		$this->_datacriacao = $datacriacao;
	}


	//Methods
	public function save() {
		$response = array('success'=>true, 'message'=>null);

		if(is_string($this->getEmail())) {
			$conn = $this->getConn();

			$query = "INSERT INTO submissoes (email) VALUES ('{$this->getEmail()}');";
			$response['success'] = mysqli_query($conn, $query);
			if(!$response['success']) {
				$response['message'] = mysqli_error($conn);
				$this->logError($response['message']);
			}
		}

		return $response;
	}
}
