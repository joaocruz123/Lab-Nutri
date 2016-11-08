<?php

/**
 * Description of Conexao
 *
 * @author Sandio
 */

require_once("Conn.php");

class Conexao{
    // método para conexão no banco de dados
    static function conectar(){
        $conectar = new Conn();  
        // Tenta se conectar ao servidor MySQL caso a versão seja anterio funcionara normalmente
        error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
        $conexao  = mysql_connect($conectar->getServidor(),$conectar->getUsuario(),$conectar->getSenha_Server()) 
        or trigger_error(mysql_error());
        // Tenta conexão com o banco de dados
        mysql_select_db($conectar->getBanco(), $conexao) or die("Falha na conexão!");
        
        return $conexao;
    }
    
    //método para desconecta-se do banco dados
    static function desconectar($conn){
        mysql_close($conn);
    }
}
