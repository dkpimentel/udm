<?php

/*
Função natavia do php que consegue registrar mais de um __autoload()
*/

function incluirClasses($nomeClasse){

	if(file_exists($nomeClasse.".php") === true){
		var_dump($nomeClasse);
		require_once($nomeClasse.".php");
	}
}



spl_autoload_register("incluirClasses"); //Incluir a classe chamando a function incluirCalasses
spl_autoload_register(function($nomeClasse){//incluir o abstract em outras pastas

if(file_exists("Abstract". DIRECTORY_SEPARATOR .$nomeClasse.".php") ===true){
	/*
	Tradução do if: 
	"file_exists" verificar se o arquivo existe
	"Abstrata" nome da pasta onde está as classes abstratas
	"DIRECTORY_SEPARATOR" ele identifica o sistema operacional e coloca a / para win e \ para o linx
	"$nomeClasse" pega o nome da classe e concatena com .php
	*/
	echo "<br>";
	var_dump($nomeClasse);
	require_once("Abstract". DIRECTORY_SEPARATOR .$nomeClasse.".php");
}
});

$carro = new DelRey();

$carro->acelerar(80);

?>