<?php 

//conexão com mysql
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");


$stmt = $conn->prepare("
	UPDATE tb_usuarios 
	SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");


$login = "José";
$password = "3321";
$id = "1";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);



$stmt->execute();


echo "Dados alterados com sucesso";


 ?>