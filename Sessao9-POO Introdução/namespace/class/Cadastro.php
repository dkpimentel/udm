<?php 

/*
Para as melhores práticas nome da classe é igual o do arquivo
*/

class Cadastro {

	private $nome;
	private $email;
	private $senha;

	//Get's and Set's variável Nome
	public function getNome ():string{return $this->nome;}
	public function setNome ($nome){$this->nome = $nome;}


	//Get's and Set's variável E-Mail
	public function getEmail ():string{return $this->email;}
	public function setEmail ($email){$this->email = $email;}

	//Get's and Set's variável Senha
	public function getSenha ():string{return $this->senha;}
	public function setSenha ($senha){$this->senha = $senha;}


	//Método toString
	public function __toString (){

		//Criando um json enconde => ele é um array que pode ver
		return json_encode (array(
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));

	}


}



?>