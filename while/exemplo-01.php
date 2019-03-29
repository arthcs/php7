<?php 

$condicao = true;

while ($condicao){
	$numero = rand(1, 10); //um digito de 0-9

	if($numero === 3){
		echo " </br> TRÊS!";
		$condicao = false;
	}

	echo $numero . " ";
}

 ?>