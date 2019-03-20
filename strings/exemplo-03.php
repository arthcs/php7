<?php 

$empresa = "Hcode";

//str replace paramentros, 'o que procura', "pelo que trocar", "em quem trocar"
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

 ?>