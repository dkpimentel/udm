<?php 

/*
	No exemplo anterior vimos arquivos txt e csv separados por virgua, porém se existir alguma imagem virá milhares de linha e colunas, pois são binários
*/
	
	$filename = "logo.png";

	//file_get_contents retorna tudo sobre o arquivo, porém em binários
	//para converter para string utilize a função base64_encode
	$base64 = base64_encode(file_get_contents($filename));

	$fileinfo = new finfo(FILEINFO_MIME_TYPE);


	$mimetype = $fileinfo->file($filename);


	$base64encode =  "data:" . $mimetype . ";base64," . $base64;


 ?>

 <a href="<?=$base64encode?>" target="_bralnk">Link Para Imagem</a>

 <br><br>
 <img src="<?=$base64encode?>">