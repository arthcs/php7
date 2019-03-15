<?php

$nome = "Teste";
$site = 'www.teste.com.br';

$ano = 1997;
$salario = 5500.99;
$bloqueado = false;

////////////////

$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
///////////////////

$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);

?>