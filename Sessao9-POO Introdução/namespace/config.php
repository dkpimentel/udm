<?php 

/*
Fazendo o autoload dos arquivos necessários
*/

spl_autoload_register(function($nameClass){ // Criando um função anônima

	//Acompanhado o funcionamento do código
	var_dump($nameClass);

	//nome da pasta onde fica as classes
	$dirClass = "class";
	//Colocando o endereço e o nome do arquivo filename = endereço completo
	//$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	//para linux ou mac
	$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");
	/*
	Processo do código que foi feito aciema
	Criado a variável $dirclass que recebe o nome da pasta class.
	Depois foi criado a variavél $filename que recebe o nome da pasta concatenando com a barra, $nameClass e com a extensão do arquivo .php

	*/

	if (file_exists($filename)) {//Aqui verifica se o arquivo existe

		require_once($filename);//Caso existe importe ele para o arquivo
		
	}

});

?>