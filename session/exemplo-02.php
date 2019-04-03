<?php 

require_once("config.php");

session_unset($_SESSION['nome']);// destroi a variável de sessão 'nome', quando sem parametro apaga todas as variveis da session.

unset($_SESSION['nome']);

echo $_SESSION['nome'];

session_destroy(); // destroi completamente a sessão

 ?>

 No exemplo-02.php criado nesta aula, os professores mostram a função session_unset($_SESSION['nome'])
Entretanto, isso pode gerar um erro em seu código pois essa função não espera parâmetros. Ela libera todas as variáveis de sessão
Para excluir uma variável específica, devemos executar unset($_SESSION['nome'])
Bons estudos a todos :)