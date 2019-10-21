<?php

	$condicao = true;

	while ($condicao) {
		# code...

		$numero = rand(1, 10);

		if($numero === 3){

			echo "TRÊS!!!";
			$condicao = false;

		}

		echo $numero . "<br>";
	}



//DoWhile

$total = 150;
$desconto = 0.9;

do {

$total *= $desconto;

} while ( $total > 100);

echo $total . "<<==<br>";


?>