<?php
/*
Funções anônimas
Muitas das vezes essa função server para ex: uma conversão de vídeo que demora muito, a função php chama o shell faz a conversão e assim que terminar ele envia para o php, banco, tela ou onde for definido que o processo terminou.

require_once("inc/funcoes.php");


function test($callback){

	//processo lento

	$callback();

}

test(test(){
	echo "Terminou";
});*/

//Variavel com uma função
$fn = function($a){
	var_dump($a);
};

$fn ("oi");

?>