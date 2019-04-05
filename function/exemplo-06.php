<?php 

$pessoa = array(
	'nome'=>'João',
	'idade'=> 20
);

foreach ($pessoa as &$value) { //alterar o valor direto no array

	if(gettype($value) === 'integer') $value += 10;// compara com tipos

	echo $value.'<br>';
}

print_r($pessoa);

 ?>