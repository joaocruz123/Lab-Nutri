<?php

class Aluno {

    private $nome;
    private $cpf;
    private $email;
    private $matricula;
    private $curso;
    private $faculdade;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setMat($mat){
        $this->matricula = $mat;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
    public function setFacul($facul){
        $this->faculdade = $facul;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getMat(){
        return $this->matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function getFacul(){
        return $this->faculdade;
    }

}
