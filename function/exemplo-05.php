<?php 

 $a=10;

function trocaValor(&$b){ //"&" é passagem de parametro por referencia, ponteiro.
	//variavel é diferente de parametro de função;
	$b += 50;

	return $b;
}

echo trocaValor($a);
echo "<br>";

echo trocaValor($a);
echo "<br>";

echo $a;

 ?>