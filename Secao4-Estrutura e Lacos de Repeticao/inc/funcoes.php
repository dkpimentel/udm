<?php 

//Função utilizado na aula de
//if-elseif-else
function categoriaIdade ($idade){

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($idade <= $idadeCrianca) {
	return "Criança";
}elseif ($idade > $idadeCrianca && $idade < $idadeMaior) {
	return "Adolecente";
}elseif ($idade >= $idadeMaior && $idade < $idadeMelhor) {
	return "Adulto";
}else {
	return "Idoso";
}	


}


//Funões utilizadas para aula de
//Switch case
function retornaData (){

$data = date("w");


switch ($data) {
	case 0:
	return "Domingo";
	break;

	case 1:
	return "Segunda-Feira";
	break;

	case 2:
	return "Terça-Feira";
	break;

	case 3:
	return "Quarta-Feira";
	break;

	case 4:
	return "Quinta-Feira";
	break;

	case 5:
	return "Sexta-Feira";
	break;

	case 6:
	return "Sábado";
	break;

	default:
	return "Data inválida";
	break;
	
}


}



//Funções utilizadas para aula
//FOR
function repeticao (){

for ($i=0; $i <= 10; $i++) { 
	# code...
	echo "Contagem = $i <br>";
}

}

function repeticao1 (){

for ($i=0; $i < 1000; $i+=5) { 
	 #code...

if ($i > 200 && $i < 800) continue;

if ($i === 900) break;

	echo $i . "<br>";
}


}

function anoSelecionado (){

for ($i=date("Y"); $i > date("Y")-100; $i--) { 
	# code...
	echo $i . "<br>";
}

}

//verificar porque não funcionou
function selecionaAno (){

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100; $i--) { 
	# code...
	echo 'option value = "'.$i.'"> '.$i.' </option>';
}
echo "</select>";

}


//Funções utilizadas para aula
//FOREACH
function meses1 ($meses){

foreach ($meses as $mes) {
	# code...
	echo "O mês é: " . $mes . "<br>";
}

}

//Qual a posição do array ele está
function meses2 ($meses){

// => Usado para achar o index do array
foreach ($meses as $index => $mes) {
	# code...
	echo "O Indice $index é do mês de $mes <br>";
}

}



//Funções utilizadas para de array seção 5



?>