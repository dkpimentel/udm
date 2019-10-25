<?php 


$filename = "usuarios.csv";

if (file_exists($filename)){

	//Abrindo o arquivo sómente leitura utilizando o "r"
	$file = fopen($filename, "r");

	//Função fgets pega a primeira linha do arquivo
	//A função explode pega uma string separada por "," e converte e array
	$headers = explode(",", fgets($file));

	//Variavel para os dados das linhas
	$data = array();

	while ($row = fgets($file)) { //Faça enquanto tiver dados nas linhas
		
		//As linhas também estão com "," precisa convertar em array
		$rowData = explode(",", $row);

		$linha = array();

		for ($i = 0; $i < count($headers); $i++){

			$linha[$headers[$i]] = $rowData[$i];

		}

		array_push($data, $linha);

	}

	fclose($file);

	echo json_encode($data);
}


 ?>