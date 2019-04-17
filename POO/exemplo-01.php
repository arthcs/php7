<?php 

class Pessoa{

	public $nome; // atributo

	public function falar(){// Método

		return "O meu nome é ".$this->nome; // atributo dentro do método deve usar $this, fora do método é uma variavel normal

	}

}

$arthur = new Pessoa();

$arthur->nome = "Arthur Cunha Silveira";

echo $arthur->falar();

 ?>