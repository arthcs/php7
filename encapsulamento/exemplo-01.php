<?php 

/**
 * 
 */
class Pessoa{

	public $nome = "Rasmus Lerdofr";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}	

}

$objeto = new Pessoa();

//echo $objeto->nome . "<br/>"; //public pode ser acessado por quer um.

//echo $objeto->idade . "<br/>";//não pode acessar um metodo protected, quem pode acessar é só quem esta dentro da própria classe, os metodos da classe, ou quem herda dessa classe.

//echo $objeto->senha . "<br/>";//private só pode ser acessado pelos metodos da classe somente.

$objeto = new Pessoa();

$objeto->verDados();

?>