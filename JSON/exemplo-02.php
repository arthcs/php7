<?php 

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json,true); //usar o true como parametro para que seja retornado um array e não um objeto.

var_dump($data);

 ?>