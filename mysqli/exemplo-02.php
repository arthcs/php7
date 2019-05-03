<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
	echo "Error".$conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//Enquanto puder fazer isso, enquanto houver dados atribua a $row
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {//Com paramentro MYSQLI_ASSOC os indices se tornam os nomes das tabelas
//while ($row = $result->fetch_array()) {//fetch_array tras um array com indice numerio e nome da coluna
//while ($row = $result->fetch_assoc()) {//Já tras os indices como o nome das colundas
	
	array_push($data, $row);
	//var_dump($row);

}

echo json_encode($data);
?>