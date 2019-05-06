<?php 

$frase = "A repetição é a mãe da retenção";

echo $frase;
echo "<br>";

$palavra = "mãe";

echo "Quantas casas é preciso percorer até a palavra mãe: ";
$q = strpos($frase, $palavra);
echo $q;

echo "<br>";

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

 ?>