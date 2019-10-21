<?php 

//conexão com mysql
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

//conexão com sql
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","root","pass");



$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);

//echo json_encode($results);

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		
		echo "<strong>" . $key . ":</strong>" . $value . "<br>";
	}

	echo "<br><hr><br>";
}

 ?>
