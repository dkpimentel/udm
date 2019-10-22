<?php 

//Início: Classe usuário
class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	//Get's and Set's idUsuario
	public function getIdusuario(){return $this->idusuario;}
	public function setIdusuario($value){$this->idusuario = $value;}

	//Get's and Set's desLogin
	public function getDeslogin(){return $this->deslogin;}
	public function setDeslogin($value){$this->deslogin = $value;}

	//Get's and Set's desSenha
	public function getDessenha(){return $this->dessenha;}
	public function setDessenha($value){$this->dessenha = $value;}

	//Get's and Set's dtCadastro
	public function getDtcadastro(){return $this->dtcadastro;}
	public function setDtcadastro($value){$this->dtcadastro = $value;}


	//Inicio: Método select por id
	public function loadById($id){

		$sql = new Sql();

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE idUsuario = :ID", array(

			":ID"=>$id

		));

		if (isset($result[0])) {

			$row = $result[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));

		}



	}
	//Término: Método select por id

	//Início: Método toString
	public function __toString(){


		return json_encode(array(

			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

		));

	}
	//Término: Método toString 

}
//Término: Classe usuário

 ?>