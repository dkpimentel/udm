<?php

/*

Após o acesso a página de exemploSession.php será exibido o nome na tela.

*/
/*Disponibiliza toda parte do arquivo config.php
*/
require_once ("config.php");

//Apaga a variavel ou todas se não colocar o nome, ele limpa mas você ainda continua no site
//session_unset($_SESSION["nome"]);


//Outro comando e o destroy ele elimita tudo do seu usuário do site, quando você atualizar ele identifica como um novo acesso no servidor
//session_destroy($_SESSION["nome"]);

echo $_SESSION["nome"];


?>