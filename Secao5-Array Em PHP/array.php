****************************************************
<BR>
AULA - ESTRUTURA DE ARRAY
<BR>
****************************************************
<BR><BR>

<?php 
require_once "inc/funcoesArray.php";



$frutas = array("laranja", "abacaxi", "melancia");

print_r($frutas);

echo "<br><br><hr>";

?>

<?php 
//array bidimencional
$carros [0] [0] = "GM";
$carros [0] [1] = "Cobalt";
$carros [0] [2] = "Onix";
$carros [0] [3] = "Camaro";

$carros [1] [0] = "Ford";
$carros [1] [1] = "Fiesta";
$carros [1] [2] = "Fusion";
$carros [1] [3] = "Eco Sport";

echo $carros [0] [3] . "<br> <br> <hr>";

echo end($carros [1]) . "<br><br><hr>";


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

print_r($pessoas);

?>