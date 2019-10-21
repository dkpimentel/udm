<?php

	//Função utilizada na aula de constantes array
	function ipServidor (){

	//Definindo o valor da constante
	define("SERVIDOR", "127.0.0.1");

	//Retornando na tela o valor inserido
	return SERVIDOR;


	}

	function bancoDeDados (){

	//Exemplo definindo constantes de banco
	//Ip, User, Pass, Banco.
	define("BANCO_DE_DADOS", [
		'127.0.0.1',
		'root',
		'pass',
		'cursoUdemy'
	]);

	return BANCO_DE_DADOS;

	}


?>