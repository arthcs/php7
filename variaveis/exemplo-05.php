<?php

$nome = 'Arthur';

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){
	$nome = "Jonh";
	echo "<br>".$nome." agora no teste2";
}

teste();
teste2();
?>