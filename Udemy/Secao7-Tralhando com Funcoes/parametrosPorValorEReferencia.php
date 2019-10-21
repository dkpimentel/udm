<?php 
/*
Diferença entre passagem de parâmentro e passagem de referencia.



*/

require_once ("inc/funcoes.php");

$a = 10;


echo $a;

echo "<br>";

echo trocaValor($a);

/*Se na minha função trocaValor eu
 passei só o parametro $a o valor
 deste echo será 10 pois a função
 não altera o valor da variavel,
 já se eu passei como referente
 adicionando o &$a na função, agora
 o meu echo valerá 60 pois desta
 forma eu altero a variavel também.
*/
echo "<br>".$a;

?>