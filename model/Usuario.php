<?php
/**
 * Description of Usuario
 *
 * @author Sandio
 */
class Usuario {
    
    var $matrSiap;
    var $nome;
    var $nomeFinal;
    var $dataNasc;
    var $email;
    var $senha;
    var $tipoUusario;
    
    
    //Metodos Getts e setts
    
    //Siap ou matricular
    function getMatrSiap(){
        return $this->matrSiap;
    }
    function setMatrSiap($valor){
        $this->matrSiap = $valor;
    }
    
    //Nome
    function getNome(){
        return $this->nome;
    }
    function setNome($valor){
        $this->nome = $valor;
    }
    
    //nomeFinal
    function getNomeFinal(){
        return $this->nomeFinal;
    }
    function setNomeFinal($valor){
        $this->nomeFinal = $valor;
    }
    
    //Data de nascimento
    function getDataNasc(){
        return $this->dataNasc;
    }
    function setDataNasc($valor){
        $this->dataNasc = $valor;
    }
    
    //senha
    function getSenha(){
        return $this->senha;
    }
    function setSenha($valor){
        if ($this->senha != '') {
            $this->senha = $valor;
        }else{
            return false;
        }
    }
    
    //email
    function getEmail(){
        return $this->email;
    }
    function setEmail($valor){
        $this->email = $valor;
    }
    
    //Tipo de uusario
    function getTipoUusario(){
        return $this->tipoUusario;
    }
    function setTipoUusario($valor){
        $this->tipoUusario = $valor;
    }
}
