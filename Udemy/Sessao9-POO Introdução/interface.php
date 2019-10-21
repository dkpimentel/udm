<?php

/*
Para que serve a interface
Resumidamente serve para organizar o código

quando vocês vai fazer algum código para se comunicar com algo.
é uma obrigação para que seja exigido um padrão

*/

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}


class Civic implements Veiculo{

	public function acelerar($velocidade){
		echo "O veículo acelerou até " . $velocidade . " km/h";
	}

	public function frenar ($velocidade){
		echo "O veiculo frenou até " . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha){
		echo "O veículo engatou a marcha " . $marcha;
	}

}

$carro = new Civic();

$carro->acelerar(180);

?>