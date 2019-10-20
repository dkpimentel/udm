<?php

class Pessoa{

	/*
	Atributos fora do método escreve normal com $nome
	*/
	public $nome;//Atributo

	public function falar(){//Método

		/*
		Para acessar o atributo nome dentro do método utiliza-se $this-> atributo sem o $, o $ neste caso é substituido pelo $this->
		*/
		return "Menu nome é " . $this->nome;
		/*
		$this é utilizada sempre dentro do método, ela é uma variável para isso.
		*/

	}

}

$david = new Pessoa();//Instanceando Pessoa
$david -> nome = "David Kenny"; // Atribuindo nome da pessoa
echo $david -> falar();




?>