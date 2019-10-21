<?php

require_once("config.php");

//Para utilizar o namestace do cadastro de cliente
use Cliente\Cadastro;


//Instanceando a Classe Cadastro dentro de cliente cliente\cadastro
$cad = new Cadastro();

//Setando as variaveis da classe Cadastro
$cad->setNome("David Kenny");
$cad->setEmail("contato@webproinfo.com");
$cad->setSenha("123456");

//echo "<br>" . $cad;

//Método para criado para registrar vendas
$cad->registrarVenda();

?>