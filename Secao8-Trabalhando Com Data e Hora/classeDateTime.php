<?php
require_once("inc/funcoes.php");
/*
Classe Date Time
Geralmente é usado essa classe pois é e melhor opção, as demais vistas foi mais para conhecimento
*/

//Instanceando 
$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s")."<br>";

/*
Neste caso estamos instanceando um DateInterval para ser calculado uma quantidade de dias no DateTime. P15D === Mais 15 dias
*/
$periodo = new DateInterval("P15D");


//Adicionando a variavel com 15 dias a mais na data
$dt -> add($periodo);

echo $dt->format("d/m/Y H:i:s")."<br>";


?>