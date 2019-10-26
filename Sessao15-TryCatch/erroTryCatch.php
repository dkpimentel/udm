<?php 

/*EXEMPLO 01

try {
	
	throw new Exception("Houve um erro", 400);	


} catch (Exception $e) {

	echo json_encode(array(

		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()

	));
	
}
*/

/*EXEMPLO 02*/	

function trataNome($name){

	if (!$name) {

		throw new Exception("Nenhum nome foi informado", 1);
		
	}

	echo ucfirst($name) . "<br>";

}

try {

	//trataNome("Joao");
	trataNome("");
	
} catch (Exception $e) {

	echo $e->getMessage();
	
} finally{

	echo "Executou o Try";

}


 ?>