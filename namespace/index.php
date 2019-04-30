<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setName("Arthur");
$cad->setEmail("email.com");
$cad->setSenha("12345");

echo "<br>";

echo $cad;

echo "<br>";

$cad->registraVenda();

 ?>