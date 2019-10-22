<?php 

//conexão com mysql
try{

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","zhft08");

$stmt = $conn->prepare("
	INSERT INTO tb_usuarios (deslogin, dessenha) 
	VALUES (:LOGIN,:PASSWORD)
	");


$login = "David";
$password = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);


$stmt->execute();

echo "Inserido ok";

}catch (PDOException $e){
	echo $e;

	return $e;
}







 ?>