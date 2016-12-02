<?php

  class UsuarioDAO {
    private $conexao;

    public function __construct() {
      $this->conexao = new Conexao();
    }

    // efetua login
    public function login($login, $senha) {

      $sql = "SELECT * FROM usuario WHERE subNomeUser = '$login' AND senhaUser = '$senha'";

      $executa = mysqli_query($this->conexao->getCon(), $sql);

      if(mysqli_num_rows($executa) > 0) {
        return true;
      } else {
        return false;
      }
    }


    // Verifica se já existe login com o nome escolhido
    public function unico($mat) {

      $unic = "SELECT * FROM aluno WHERE matAluno = '$mat'";

      $exec = mysqli_query($this->conexao->getCon(), $unic);

      if(mysqli_num_rows($exec) > 0) {
        return false;
      } else {
        return true;
      }
    }

    // cadastra o usuário
    public function cadastra($nome, $cpf, $email, $mat)
    {

      $sql = "INSERT INTO aluno (nomeAluno,cpfAluno,emailAluno,matAluno) VALUES ('$nome', '$cpf', '$email', '$mat')";

      $executa = mysqli_query($this->conexao->getCon(), $sql);

      if (mysqli_affected_rows($this->conexao->getCon()) > 0) {
        return true;
      } else {
        return false;
      }
    }

    // efetua logout
    public function logout() {

      session_start();

      session_destroy();

      //setcookie("login" , "" , time()-60*5);
      header("Location:index.php?success=logout");
      exit();
    }

  }
