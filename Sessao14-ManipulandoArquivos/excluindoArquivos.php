<?php 
echo "Exemplo 01 - Criando arquivo e excluindo<br> <br>";
/*
//Criando arquivo teste.txt
$file = fopen("teste.txt", "w+");

//Fechando o arquivo aberto
fclose($file);

//Excluindo a arquivo criado
unlink("teste.txt");

echo "Excluido com sucesso";
*/


echo "Exemplo 02 - Criando pasta e excluindo <br> <br>";

//Verificando se ja existe o diretório caso não criar o diretório images
if (!is_dir("images")) mkdir("images");

//scandir lê um diretório e transform em um array
foreach (scandir("images") as $item) {
	//Neste caso sempre vem o . e o .. o if abaixo remove ele
	if(!in_array($item, array(".",".."))){

		unlink("images/" . $item);

	}
}

echo "Todos arquivos deletados!";


 ?>