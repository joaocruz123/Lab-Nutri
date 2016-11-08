<?php

/**
 * Description of Conn
 *
 * @author Sandio
 */
class Conn {
    
    var $servidor;
    var $usuario;
    var $senha_server;
    var $banco;
    
    
    //Método construtor 
    function __construct() {
        $this->servidor =  "localhost";
        $this->usuario = "root";
        $this->senha_server = "";
        $this->banco = "labnutri";
    }

    //Metodos Getts e setts
    
    //servidor do Execução
    function  getServidor(){
        return $this ->servidor;
    } 
    function setServidor($valor){
        $this->servidor = $valor;
    }
    
    //Usuario d Banco
    function  getUsuario(){
        return $this ->usuario;
    } 
    function setUsuario($valor){
        $this->usuario = $valor;
    }
    
    //Senha do Banco
    function  getSenha_Server(){
        return $this ->senha_server;
    } 
    function setSenha_Server($valor){
    $this->senha_server = $valor;
    }
    
    //Banco do dados
    function  getBanco(){
        return $this ->banco;
    } 
    function setBanco($valor){
    $this->banco = $valor;
    }
}
