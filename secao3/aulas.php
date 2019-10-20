<BR><BR>
****************************************************
<BR>
***********AULA 1 - VARIAVEIS**********************
<BR>
****************************************************
<BR><BR>

<?php 

//AULA 1 - VARIAVEIS **************************************

//Variaveis começa com $
$nome = "David";
//echo imprime texto ou variáveis
echo $nome;
echo "<br/>";


//Ver o tipo de variavel na tela
var_dump($nome);

?>

<BR><BR>
****************************************************
<BR>
***********AULA 2 - TIPOS DE DADOS****************
<BR>
****************************************************
<BR><BR>

<?php

//AULA 2 - TIPOS DE DADOS *********************************

/*
Sempre utilizar o padrão de variavel Camel Case
As variaveis são case sensytive
Variavei não podem começar com número nem caracteres especiais salvo o underline
*/

$anoNascimento = 1990;


//Como apagar variavel
$nome = "David";

echo $nome;
echo "<br/>";

//comando para zerar a variavel destruir da memória
unset($nome);

//verifica se a variavel foi definida e exibe caso tenha algo nela
if (isset($nome)){
echo $nome;
}

/*
 Posso utilizar a variavel nome pois ela foi destruida da memória ou seja apagada.
 Agora vamos aprender a concatenar.
*/
$nome = "David";
$sobrenome = "Kenny";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
unset($nome, $sobrenome, $nomeCompleto);

/*
 Tipos de dados no php básicos
 */
$nome = "David"; //String
$site = 'www.davidkenny.com.br'; //String
$ano = 1990; // Int
$slario = 5500.99; // Flutuante
$bloqueado = false; // Booleano
echo "<br/><br/>";

/*
 Tipos de dados no php data
 */
$frutas = array("Abacaxi","Manga","Laranja");

echo $frutas[1];
echo "<br/><br/>";

$nascimento = new DateTime();
//var_dump($nascimento);


/*
 Tipos de dados no php especiais
 */

 //Tipo resource
$arquivo = fopen("aulas.php", "r");
var_dump($arquivo);

/*
Tipo nulo e vazio
Null ele não exite valor nenhum já o vazio ele foi iniciado existe algo dentro dele.
*/
$nulo = NULL;

echo "Acessei no not normal";
unset($nome);

?>

<BR><BR>
****************************************************
<BR>
***********AULA 3 - VARIÁVEIS PRÉ-DEFINIDAS *******
<BR>
****************************************************
<BR><BR>

<?php 

//Variavéis super globais

/* 
	minha url + passagem de parametros via get
	ex: localhost/Udemy/secao3/aulas.php?variavelDaUrl=123

*/
$nome = $_GET["variavelDaUrl"];
var_dump($nome);
echo "<br/><br/>";

//Todo resultado é string para converter para número se necessário segue, vou zerar a variavel e pega-la como inteiro

unset($nome); // zero a variavél

$nome = (int)$_GET["variavelDaUrl"]; //acrescento o (int)
echo "<br/><br/>";

var_dump($nome); // mostra os valores
unset($nome);

//pegando o ip
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
echo "<br/><br/>";


//Exemplos
$nome = $_SERVER["SCRIPT_NAME"];
echo $nome;
unset($nome);

?>

<BR><BR>
****************************************************
<BR>
***********AULA 4 - ESCOPO DE VARIÁVEIS ***********
<BR>
****************************************************
<BR><BR>

<?php 
/*
	Variável globais
*/

$nome = "Glaucio"; // variavel global

function teste(){
//Para utilizar a variavel global dentro da função preciso declarar o global
	global $nome;
	echo $nome;
	echo "<br/>";
	unset($nome);
}

function teste2(){
//A variavel $nome não é a global apenas a local da função
	$nome = "João";
	echo $nome . " " . "Agora no teste2";
	unset($nome);
}

teste();
teste2();

?>

<BR><BR>
****************************************************
<BR>
***********AULA 5 - Operadores**********************
<BR>
****************************************************
<BR><BR>

<?php 
/*
 Operadores de atribuição
*/

$nome = "David"; // Operador de atribuição =

echo $nome . "operador de string";// Operador para mescalar string .
echo "<br/>";

$nome .= " Mais algo";//Variavel vai ter o mesmo valor mais algo .=
echo $nome;

echo "<br/>";
//Valores de atriuição e adção
$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

$valorTotal *= .9; // mostrando 90% do valor

echo $valorTotal;

echo "<br/><br/>";

/*
	Operadores aritiméticos
*/

$a = 10;
$b = 2;

echo $a + $b;
echo "<br/><br/>";


/*
	Operadores Comparação
*/

$c = 30;
$d = 55;

var_dump($c > $d);
echo "<br>";

var_dump($c < $d);
echo "<br>";

var_dump($c == $d);// esse == compara só interiro valores
echo "<br>";

var_dump($c === $d);// esse === compara só identidade
echo "<br>";


var_dump($c != $d);// esse === compara só identidade
echo "<br>";

/*
	Novos operadores do php7
*/

$f = 50;

$g = 35;

var_dump($f <=> $g);
echo "<br>";

$k = NULL;
$l = NULL;
$p = 10;

echo $k ?? $l ?? $p;

echo "<br>";

/*
	Operadores de incremento e decremento
*/
$e = 10;

echo $e++;//soma mais um
echo "<br>";

echo $e;


/*
	Ordem de operadores

	**

*/

?>



<BR><BR>
****************************************************
<BR>
***********AULA 6 - Strings***********************
<BR>
****************************************************
<BR><BR>

<?php 
unset($nome);
/*
 Trabalhando com strings
*/

/*
Diferença entre "" e ''
"" o sisteme verifica se possui algum variavel dentro e converte
'' o sistema já trata tudo como string exemplo dos echo abaixo
*/

$nome = "David";
$nome2 = 'Kenny';

var_dump($nome, $nome2);

echo "<br> $nome <br>"; // Aspas duplas aceita variavel
echo '$nome2  <br>'; // Aspas simples só aceita strings

echo "<br><br><br>";

unset($nome2, $nome);

//Convertendo textos para maiúsculas, minusculas e letra maiusculas

$nome = "david kenny pimentel";
echo "$nome -> Texto original <br><br>";

$nome = strtoupper($nome); //Converter para tudo maiuscula
echo "$nome -> Tudo maiuscula.<br><br> ";

$nome = strtolower($nome); // Converter par tudo minuscula
echo "$nome -> Tudo minuscula <br><br>";

$nome =  ucfirst($nome);//Converter só a primeira para maiusculas
echo "$nome -> Primeira maiuscula <br><br>";

$nome =  ucwords($nome);//Converter todas iniciasi para maiusculas
echo "$nome -> Primeiras maiusculas <br><br>";
unset($nome);

//Trocando letras
echo "Trocando letras <br><br>";

$empresa = "WebProInfo";

$empresa = str_replace("o", "0", $empresa);

echo $empresa;
echo "<br><br><br>";
unset($empresa);
//Procurar qualquer coisa na frase

$frase = "A repetição é mãe da retenção";//fraze

$q = strpos ($frase, "mãe"); // Procura em qual posição está pesquisa
echo $q . "<br><b>";

$texto = substr($frase, 0, $q);//captura o texto até a palavra informada
echo "$texto <br><br>";


echo "<br><br><br><br><br>";
 ?>


<BR><BR>
****************************************************
<BR>
***********AULA 7 - ARQUIVOS COM INCLUDE***********
<BR>
****************************************************
<BR><BR>

<?php 
unset($nome);
/*
 Trabalhando com INCLUDE
 Neste parte criei u arquivo chamado funcoes.php onde utilizaremos para chamar a função de soma.
*/

 include "funcoes.php";//fazendo o include do arquivo onde esta as funções que serão utilizadas

/*
	Próximo modelo vamos utilizar a arquivo de função em uma outra pasta onde fica o caminho inc/fucoes1.php e caso a pasta esteja a cima utiliza ../inc/funcoes1.php caso este 2 pastas acima ../../ só que neste caso é melhor revisar a estrutura
*/
 require_once "inc/funcoes1.php";
 require_once "inc/funcoes1.php";

 /*
	Diferença entre o include e require
	require => Ele obriga que o arquivo existe e que esteje funcionando corretamente, ele para a execução com erro fatal.

	include => ele tenta dar continuidade mesmo que o arquivo não exite ou esteja com algum problema, o iclude também tem uma vantagem de pesquisar o arquivo de funcoes.php nos diretórios e faz o include

	Obs: Melhor utilizar o require que ele exigie que o código esteja sendo usado corretamente, já o include seria mais em uma intranet onde é definido o path de includes padrão para equipe de desenvolvedores.
	Também é bom utilizar para evitar que o require com o mesmo arquivo seja chamado mais de uma vez para não da erro utiliza-se o require_once sempre.

 */

$num1 = 10;
$num2 = 20;

$resultado = somar1($num1, $num2);// Fução soma está dentro do arquivo de funções "funcoes.php"

echo $resultado;

 ?>









<?php
 echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
 ?>