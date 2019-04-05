<?php 

function ola($texto, $periodo="Bom dia"){ //é possivel definir um valor padrão.
	//parametro sem um valor padrão sempre devem ser colocados a esquerda

	return "olá $texto! $periodo! <br>";

}


echo ola("mundo");
echo ola("", "Boa Noite");
echo ola("Arthur", "Boa Tarde");
echo ola("Silveira", "");



 ?>