<?php 

require_once("config.php");

$cad = new Cadastro();

$cad->setName("Arthur");
$cad->setEmail("email.com");
$cad->setSenha("12345");

echo $cad;

 ?>