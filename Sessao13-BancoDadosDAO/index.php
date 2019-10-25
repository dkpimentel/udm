<?php 

require_once("config.php");


/*
--------Retorna um usuário pelo id dele--------
$usuario = new Usuario();
$usuario->loadById(4);
echo $usuario;
*/

/*
--------Retorna uma lista de usuários--------

$lista = Usuario::getList();
echo json_encode($lista);
*/


/*
--------Carrega uma lista de usuários buscando pelo login--------

$search = Usuario::search("vid");
echo json_encode($search);
*/

/*
--------Carregar usuário utilizando login e senha--------


$usuario = new Usuario();
$usuario->login("david","45");
echo $usuario;
*/

/*
--------Inserir dados com Procedure--------
$aluno = new Usuario("aluno1","@lun02");

$aluno->insert();

echo $aluno;
*/

/*
<<<<<<< HEAD
--------
=======
--------Alterar com usuário--------

>>>>>>> b18f8fd6a52df23e1fb6bd7ab39ecccea3feed3d

*/
$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("Professor", "3321");

echo $usuario;
*/


/*
--------Deletar usuário por id--------
*/

$usuario = new Usuario();

<<<<<<< HEAD
=======
$usuario->loadById(7);

$usuario->delete();

echo $usuario;

>>>>>>> b18f8fd6a52df23e1fb6bd7ab39ecccea3feed3d
 ?>