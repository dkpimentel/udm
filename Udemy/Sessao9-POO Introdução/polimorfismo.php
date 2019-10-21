<?php
/*
Metodos com mesmo nome possuem comportamentos diferentes.
*/

abstract class Animal {


	public function falar(){

		return "Som";
	}

	public function mover(){

		return "Anda";

	}

}

class Cachorro extends Animal{

	public function falar(){

		return "Late";

	}

}

class Gato extends Animal{

	public function falar(){

		return "Mia";

	}

}

class Passaro extends Animal{

	public function falar(){

		return "Canta";

	}

	public function mover(){

		return "Voa e " . parent::mover();//parente mover ele utiliza o mover da classe Animal extendida.

	}

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "<br><hr><br>";

$garfield = new Gato();

echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "<br><hr><br>";

$ave = new Passaro();

echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";

?>