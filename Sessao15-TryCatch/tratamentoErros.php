<?php 

/*EXEMPLO 01

function error_handler($code, $message, $file, $line){

echo json_encode(array(

	"code"=>$code,
	"message"=>$message,
	"line"=>$line,
	"file"=>$file

));


}


set_error_handler("error_handler");


$total = 100 / 0;
*/



/*EXEMPLO 02*/

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

 ?>