<?php

/*
Todos métodos mágicos começam com (__)
*/

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;


	public function getLogradouro(){ return $this->logradouro;}
	public function setLogradouro($logradouro){ $this->logradouro = $logradouro;}

	public function getNumero(){ return $this->numero;}
	public function setNumero($numero){ $this->numero = $numero;}

	public function getcidade(){ return $this->cidade;}
	public function setCidade($cidade){ $this->cidade = $cidade;}

	//podemos criar um metodo construtor para já passar os 3 atributos
	public function __construct($a, $b, $c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	//também existe o métod destruct
	public function __destruct(){

		//unset($this->logradouro, $this->numero, $this->cidade);
		var_dump("__destruct");

	}

	//também exite o metodo contrutor toString para converter para string
	public function __toString(){

		return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;

	}

}


$meuendereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

//echo "Cidade: " . $meuendereco->getCidade() . "<br>";
//echo "Endereço: " . $meuendereco->getLogradouro() . " " . "Nº: " . $meuendereco->getNumero() . "<br>";

//var_dump($meuendereco);


//echo $meuendereco . "<br>";

echo $meuendereco->getCidade() . "<br>";


?>