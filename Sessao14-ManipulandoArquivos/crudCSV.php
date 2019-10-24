<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//echo json_encode($usuarios);

//Criando um array
$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));	//ucfirst primeira letra maiuscula
}

/*
  Criando o arquivo e colocando o cabeçalho

  Entendendo o código
  Variavel $file é igual ao retorno da função fopen
  fopen espera 2 parametros, nome do arquivo ( caso não existe ele cria ), a opção do ponteiro, w+ para usar no inicio e rescrever tudo ou a+ para escrever do final sem apagar
*/
$file = fopen("usuarios.csv", "w+");

/*
 a função implode espera 2 parametros 
 1º É um string, o que você quer colocar para dividir um item do outro dentro do array

 2º É o array que você quer aplicar
*/

 /*
  Agora será utilizado a função para escrita
  A função implode separa o array utilizando , ou outro separador
  */

  fwrite ($file, implode(",", $headers)."\r\n");

/*
  Depois de feito o cabeçalho agora vamos alimentar a planilha com os dados
*/
foreach ($usuarios as $row) {// linhas

	$data = array();

	foreach ($row as $key => $value) { //clonunas
		
		array_push($data, $value);

	}

	fwrite($file, implode(",", $data)."\r\n");


}


/*
  Agora será fechado o arquivo
*/

fclose($file);

 ?>