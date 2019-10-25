<?php 

/*
Criando um diretório caso ele não existe
*/
$name = "images";
//Verifica se não é um diretório
if (!is_dir($name)) {
	//Criar diretórios
	mkdir($name);
	echo "Diretório criado com sucesso";


}else {

	//Remove diretórios
	//rmdir($name);
	echo "Diretório já existente, foi deletado";

}


 ?>