<?php 
//include tenta funcionar mesmo com problemas no arquivo, se não encontrar ele busca na pasta padrão includ path do PHP
//include "inc/exemplo-01.php";

//require exige que o arquivo esteja funcionando corretamenta para rodar
//require "inc/exemplo-01.php";

//irá chamar somente uma vez, mesmo que declarado duas vezes.
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
 
$resultado = somar(10,20);

echo $resultado;

 ?>