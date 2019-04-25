<?php 

interface Veiculo {


	public function acelerar ($velocidade);
	public function frenar ($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo{// para implementar mais de uma interface basta colocar virgula a cada interface que for implementada

	public function acelerar($velocidade){ // o nome não precisa ser o mesmo, os paramentros que realmente precisam ser iguais.
		echo "O veículo acelerou até" . $velocidade;
	}

	public function frenar($velocidade){
		echo "O veículo frenou até ". $velocidade;
	}

	public function trocarMarcha($marcha){
		echo "O veículo engatou a marcha ". $marcha;
	}
}

$carro =new Civic();
$carro->trocarMarcha(1);
 ?>