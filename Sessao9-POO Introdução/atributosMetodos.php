<?php
//Ínicio: Classe Carro
class Carro {

	private $modelo;
	private $motor;
	private $ano;

	//Getters and Setters variavel Modelo
	public function getModelo(){ 
		return $this->modelo;
	}

	public function setModelo($modelo){ 
		$this->modelo = $modelo;
	}


	//Getters and Setters variavel Motor
	public function getMotor():float{ 
		return $this->motor;
	}

	public function setMotor($motor){ 
		$this->motor = $motor;
	}


	//Getters and Setters variavel Ano
	public function getAno():int{ 
		return $this->ano;
	}

	public function setAno($ano){ 
		$this->ano = $ano;
	}


	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);

	}

}
//Término: Classe Carro


//Criar uma variavel e instanciar a classe carro

$gol = new Carro();

$gol->setModelo("Gol GT");
$gol->setMotor("2.0");
$gol->setAno("2010");

print_r($gol->exibir());
echo "<br>";
var_dump($gol->exibir());


?>