<?php 
/*
Criar e excluir cookies

*/


/*
CRIANDO O COOKIES NO COMPUTADOR


$data = array("empresa"=>"WebProInfo");

setcookie("NOME_DO_COOKIES", json_encode($data), time() + 3600);

echo "Criado";
*/

/*
RECUPERANDO O COOKIES DO COMPUTADOR
*/

if (isset($_COOKIE["NOME_DO_COOKIES"])) {

	echo json_encode($_COOKIE);

}


 ?>