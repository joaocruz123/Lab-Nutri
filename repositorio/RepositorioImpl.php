<?php

/**
 * Description of RepositorioImpl
 *
 * @author Sandio
 */

require_once ("Repositorio.php");
require_once("Conexao.php");

class RepositorioImpl implements Repositorio{
    //método para alterar usuario ou entidade  
    public function alterar($entidade) {
        $conn = Conexao::conectar();
        
        $query = mysql_query($entidade)or die ("Falha no Atualização!");;
        Conexao::desconectar($conn);
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
    //método para inserir usuario ou entidade
    public function inserir($entidade) {
        $conn = Conexao::conectar();
        
        $query = mysql_query($entidade) or die ("Falha no cadastro!");
        
        Conexao::desconectar($conn);
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    //método para listar  usuario ou entidade
    public function listar($entidade) {
        $conn = Conexao::conectar();
        
        $query = mysql_query($sql) or die ("Falha na lista!");
        
        Conexao::desconectar($conn);
        
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
    
    //método para remover usuario ou entidade
    public function remover($entidade) {
        $conn = Conexao::conectar();
        
        $query = mysql_query($entidade) or die ("Falha na Lista!");
        Conexao::desconectar($conn);
        
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
    
    //seleção de itens especificos no banco
    public function selecao($entidade) {
        $conn = Conexao::conectar();
        
        $query = mysql_query($entidade) or die ("Falha na Seleção!");
        Conexao::desconectar($conn);
        
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
    
}
