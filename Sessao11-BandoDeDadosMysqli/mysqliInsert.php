<?php 

//Criando uma conexão com banco
$conn = new mysqli("127.0.0.1","root","","dbphp7");

//Verificando se a conexão está tudo ok
if ($conn->connect_error){

	echo "Erro: " . $conn->connect_error;

}

//Preparando um comando para ser enviado para o banco
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

//Preparando os valores da ?,?, no comando abaixo é utilizado o ss pois são duas strings

$login = "user";
$pass = "12345";

$stmt->bind_param("ss",$login,$pass);

//Executar o Statement $stmt
$stmt->execute();


//O Statement já fica preparado caso precise criar outro usuário
$login = "root";
$senha = "ajsdlf";

$stmt->execute();







?>