****************************************************
<BR>
AULA - ESTRUTURA DE ARRAY JSON
<BR>
****************************************************
<BR><BR>

<?php 
require_once "inc/funcoesArray.php";

//Modelo de array bidimencional
$pessoas = array();

array_push($pessoas, array(
	'nome'=>'David', 
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Galucio', 
	'idade'=>25
));

//print_r($pessoas);
//Array para json
echo json_encode($pessoas);

echo "<br><br><hr>";


$json = '[{"nome":"David","idade":20},{"nome":"Galucio","idade":25}]';

//json para Array
$data = json_decode($json, true);

var_dump($data)


?>