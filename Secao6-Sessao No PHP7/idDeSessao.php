<?php 

//Para recuperar o id bata utilizar a função abaixo

session_id('dd2bcdff5c7962a6866ac88a014b3869');


require_once("config.php");

//Função que retor o id do usuário da sessão

//echo session_id();

//Nessa opção vamos regerar um novo id de seção, isso é interessante para evitar ataques rackers roubando id de seão de usuário e efetuando compras alheias, para ajudar a proteger é sempre bom ter um https/ ssl instalado, pois o ssl criptografa esse id de sessão.

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>