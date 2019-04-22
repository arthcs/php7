<?php 

class Documento{

	private $numero;

	private function getNumero(){

		return $this->numero;
	}

	public function setNumero($a){
		$this->numero = $n;
	}

}

class CPF extends Docmumento{

	public function validar(){

		//validação do CPF
		$numeroCPF = $this->getNumero();

		//validação do CPF

		return true;
	}

}

$doc = new CPF();

$doc->setNumero("111222333-44");

 ?>