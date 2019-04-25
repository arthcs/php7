<?php 

interface Veiculo {


	public function acelerar ($velocidade);
	public function frenar ($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{// para implementar mais de uma interface basta colocar virgula a cada interface que for implementada

	public function acelerar($velocidade){ // o nome não precisa ser o mesmo, os paramentros que realmente precisam ser iguais.
		echo "O veículo acelerou até " . $velocidade;
		echo "O veículo frenou até ". $velocidade;
	}

	public function trocarMarcha($marcha){
	}

	public function frenar($velocidade){
		echo "O veículo engatou a marcha ". $marcha;
	}
}

/**
 * 
 */
class DelRay extends Automovel
{

	public function empurrar(){

	}

}

$carro = new Automovel();

$carro->acelerar(200);


?>