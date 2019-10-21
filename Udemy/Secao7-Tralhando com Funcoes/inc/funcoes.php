<?php 

//Essa seria uma rotina
function ola (){


echo "Olá mundo. <br>";


}


//Essa uma função
function ola1 (){

	return "Olá mundo. <br>";

}


/*
Aula de paramentro
*/
function ola2 ($nome){

	return "Olá " . $nome;

}

//Função generica que pode receber vários argumentos
function ola3(){

	$argumentos = func_get_args();

	return $argumentos;

}

/*
Alua de Paramentros por valor e referencia
*/
//passagem de paramentro por referentecia é quando coloco & junto ao paramentro, desta forma eu também altero a variavel do local onde foi chamada.
function trocaValor (&$a){

	$a += 50;

	return $a;

}

/*
Aula de funções
(...) ao utilizar ele converte todos parametros para inteiros e permite que seja um array.
*/
function soma (int ...$valores){

	//função do php que ja soma o array sem
	//precisar utilizar um foreach
	return array_sum($valores);

}

//Definindo o tipo de retorno da função
function soma1 (int ...$valores):string{

	//função do php que ja soma o array sem
	//precisar utilizar um foreach
	return array_sum($valores);

}


/*
Funções recursisvas
*/
function exibe ($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe ($cargo['subordinados']);

		}

		$html .= "</li>";


	}

	$html .= '</ul>';

	return $html;

}


/*
Aula de funções anônimas
*/


?>