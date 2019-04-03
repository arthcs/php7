<?php 

session_id('1d26aja9k5kjvtsgtve6g9g0f4'); // recuperar sessão anteriormente aberta

require_once("config.php");

session_regenerate_id();

echo session_id(); //Gera um no id de sessão para o usuário.

echo "<br>";

var_dump($_SESSION);

?>