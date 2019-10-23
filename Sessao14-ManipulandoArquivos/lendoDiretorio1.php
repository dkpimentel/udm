<?php 

//Lendo todos arquivos do diretório
$images = scandir("images");

$data = array();

//echo json_encode($images);
//var_dump($images);

foreach ($images as $img) {

	if (!in_array($img, array(".", ".."))) {
		
		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/Sessao14-ManipulandoArquivos/".$filename;

		array_push($data, $info);

	}

}

		echo json_encode($data);

 ?>