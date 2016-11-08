<?php

/**
 * Description of LocalDao
 *
 * @author sandio
 */

require_once("../repositorio/RepositorioImpl.php");
require_once("../model/Local.php");
require_once("../util/Mensagen.php");

class LocalDao {
    
    private $status;
    
    function salvar_aluno($aluno){
        
          $sql = "INSERT INTO `aluno` ='".$aluno->setNome()."','".$aluno->setCpf()."','".$aluno->setEmail()."','".$aluno->setMat()."','".$aluno->setCurso()."','".$aluno->setFacul()."'";
          $repositorio = new RepositorioImpl();
          $this->status = $repositorio->inserir($sql);
          mensagens::ms_salvar($this->status);
    }
    
    function atualizar_aluno($aluno){
        
          $sql = "UPDATE `local` SET `idAluno`= 1 WHERE`idlocal` = '".$aluno->getId_local()."'";
          $repositorio = new RepositorioImpl();
          $this->status = $repositorio->alterar($sql);
          mensagens::ms_atualizar($this->status);
    }
    
    function romover_local($local){
        
          $sql = "DELETE FROM `local` WHERE `idlocal` = '".$local->getId_local()."'";
          $repositorio = new RepositorioImpl();
          $this->status = $repositorio->alterar($sql);
          mensagens::ms_remover($this->status);
    }
    
    function listar_local (){
          $sql = "SELECT FROM `local` WHERE `idlocal` <> 1";
          $repositorio = new RepositorioImpl();
          $this->status = $repositorio->listar($sql);
    }
}
