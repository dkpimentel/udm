<?php 


$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);


$filenema = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filenema)) {


	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filenema, "w+");

	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);

}

rename(
	$dir1 . DIRECTORY_SEPARATOR . $filenema, //Origem
	$dir2 . DIRECTORY_SEPARATOR . $filenema  //Destino
	);


 ?>