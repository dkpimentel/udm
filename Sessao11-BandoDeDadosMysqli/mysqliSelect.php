<?php 

//Criando uma conexão com banco
$conn = new mysqli("127.0.0.1","root","","dbphp7");

//Verificando se a conexão está tudo ok
if ($conn->connect_error){

	echo "Erro: " . $conn->connect_error;

}


$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {
	
	array_push($data, $row);
	
}

echo json_encode($data);


?>