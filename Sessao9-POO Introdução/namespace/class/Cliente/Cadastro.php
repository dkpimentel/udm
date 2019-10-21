<?php

namespace Cliente;

class Cadastro extends \Cadastro{ //Extender a classe cadastro do diretórioa anterior \

	//Método publico onde é registrado vendas
	public function registrarVenda(){

		echo "Venda registrada para o cliente " . $this->getNome();
	}


}


?>