<form> 
	<!-- Sem "action" o padrão é a própria pagina, sem "method" o padrão $_GET -->
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" name="OK">

</form>

<?php 

if (isset($_GET)){

	foreach ($_GET as $key => $value) {
		echo "Nome do campo: " .$key;
		echo "<br>";
		echo "Valor do campo :" .$value;
		echo "<hr>";
	}
}

 ?>