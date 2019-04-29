<?php 

class Cadastro{

	private $nome;
	private $email;
	private $senha;

	//get
	public function getName(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getSenha(){ // :sTring funcina somente em php7
		return $this->senha;
	}


	//set
	public function setName($nome){

		$this->nome = $nome;
	}

	public function setEmail($email){

		$this->email = $email;
	}

	public function setSenha($senha){

		$this->senha = $senha;
	}


	public function __toString(){
		return json_encode(array(
			"nome" => $this->getName(),
			"email" => $this->getEmail(),
			"senha" => $this->getSenha()
		));
	}
}

 ?>