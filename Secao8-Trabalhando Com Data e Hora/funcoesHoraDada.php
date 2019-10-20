<?php 
require_once("inc/funcoes.php");

/*
Funções data e hora do php7
*/

//função date
echo date("d/m/Y H:i:s")."<br>";

//timestamp
echo time()."<br>";


//Descobrindo o timestamp de uma data
$ts = strtotime("1986-05-14");

echo date("l, d/m/Y", $ts)."<br>";

//Tradução de mês e semana e portugués
//setlocale
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

echo ucwords (strftime("%A, dia %d de %B de %Y H:i:s"));






?>