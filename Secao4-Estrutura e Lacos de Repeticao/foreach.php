****************************************************
<BR>
AULA 1 - ESTRUTURA DE REPETIÇÃO FOREACH
<BR>
****************************************************
<BR><BR>

<?php 
require_once "inc/funcoes.php";


$meses = array (

	"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setrembro", "Outrubro", "Novembro", "Dezembro"

);

//meses2($meses);


?>

<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">

</form>

<?php

if (isset($_GET)){

	foreach ($_GET as $key => $value) {
		# code...

		echo "Nome do campo: " . $key . "<br>";
		
		echo "Valor do campo: " . $value;

		echo "<hr>";
	}
}

?>