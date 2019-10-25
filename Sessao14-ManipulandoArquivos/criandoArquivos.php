<?php 

/*
  A função fopen() pede dois paramentros strings
  1º É o caminho do arquivo
  2º Como quer usar, ler, alterar remover etc...
  O w+ cria um novo conteúdo, ele zera casa tenha algo e rescreve
  O a+ movo o ponteiro para o final e adiciona mais conteúdo
*/
$file = fopen("log.txt","a+");//Como o arquivo não existe ele vai ser criado

/*
  Essa função server para escrever dentro do arquivo
  Ela também precisa de dois parametros
  1º Qual é o arquivo $file
  2º Quais dados vão para dentro do arquivo
*/
fwrite($file, "Hoje é " . date("d/m/Y" . "\r\n"));

/*
  Essa função fecha o arquivo e mostra que foi finalizado a escrita
*/
fclose($file);


echo "Arquivo criado com sucesso!";


 ?>