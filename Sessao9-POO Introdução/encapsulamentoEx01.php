<?php

class Pessoa {

	/*
	Variáveis públicas, podem ser chamadas de fora da classe
	*/
	public 		$nome 	= "Rasmus Lerdorf"; // Variavel pública

	/*
	Variáveis protegidas, só podem ser acessadas de dentro da classe ou extendidas
	*/
	protected 	$idade 	= 48;				// Variavél protegida

	/*
	Variáveis privadas, nem as classes que erdam podem acessar
	*/
	private 	$senha 	= "123456";			// Variavél privada

	public function verDados (){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}


}


class Programador extends Pessoa{


}


$objeto = new Programador();

echo $objeto->nome;
echo $objeto->verDados();

?>