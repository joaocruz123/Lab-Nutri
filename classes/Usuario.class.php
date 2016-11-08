<?php

class Login extends Conexao {

	private $login;
	private $senha;

	public function setLogin($login){
		$this->login = $login;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getSenha(){
		return $this->senha;
	}


	public function logar(){
		$pdo = parent::getDB();

		$logar = $pdo->prepare("SELECT * FROM usuario WHERE subNomeUser = ? AND senhaUser = ? ");
		$logar->bindValue(1, $this->getLogin());
		$logar->bindValue(2, $this->getSenha());
		$logar->execute();
		if ($logar->rowCount() == 1):
			$dados = $logar->fetch(PDO::FETCH_OBJ);
			$_SESSION['administrador'] = $dados->subNomeUser;
			$_SESSION['logado'] = true;
			return true;
		else:
			echo "Erro";
		endif;
	}

	public static function deslogar() {
		if(isset($_SESSION['logado'])):
			unset($_SESSION['logado']);
			session_destroy();
			header("Location: index.php");
		endif;
	}
}

?>
