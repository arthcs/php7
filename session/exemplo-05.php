<?php 

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessao desabilidata";
		break;
	case PHP_SESSION_NONE:
		echo "Sessao habilita, mas nenhuma existir";
		break;
	case PHP_SESSION_ACTIVE:
		echo "Sessao habilita";
		break;
}
 ?>