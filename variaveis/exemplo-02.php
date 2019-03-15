<?php

$nome = "Arthur";
$sobrenome = "Silveira";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

exit();

unset($nome);

echo $nome;
if(isset($nome)){
	echo $nome;
}else{
	echo "não setado!";
}
?>