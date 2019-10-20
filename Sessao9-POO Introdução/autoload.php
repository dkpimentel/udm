<?php

/*
Autoload server para não termos que ficar dando require_once em todos os lugares.

Foi criado os arquivos 

DelRey.php
Abstratic Automovel.php
Interface Veiculo.php

Onde DelRey.php extend uma classe abstrata que é o Automovel.php que por sua ver implementa a interface Veiculo.php

*/

function __autoload($nomeClasse){

	var_dump($nomeClasse);
	require_once("$nomeClasse.php");

}

$carro = new DelRey();

$carro->acelerar(80);

?>