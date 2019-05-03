<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
	echo "Error".$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

// como bind_param recebe os parametros por referência as váriaveis podem ser passadas depois de chamar o método

//é possovil adicionar várias registro desse modo.

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();
 ?>