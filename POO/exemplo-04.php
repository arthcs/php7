<?php 

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro=$a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct(){ //ultima coisa a ser executada antes de liberar a memória, quando chega o fim do arquivo ou seja a última é carregada ele executa o __destruct().é chmado tambem quando usado a funcção unset();
		var_dump("DESTRUIR");

	}

	public function __toString(){ // é executado quando é dado um echo no objeto
		return $this->logradouro. ", ".$this->numero.", ".$this->cidade;
	}

}

$meuEndereco = new Endereco ("Rua tal", "123", "Porto Alegre");

var_dump($meuEndereco);

echo "<br>";

echo $meuEndereco;

echo "<br>";

unset($meuEndereco);

 ?>