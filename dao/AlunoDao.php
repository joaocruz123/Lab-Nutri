<?php

/**
 * Description of AlunoDao
 *
 * @author sandio
 */
require_once ("../repositorio/RepositorioImpl.php");
require_once ("../model/Aluno.php");
require_once("../util/Mensagen.php");
class AlunoDao {
    
    private $status;

    function salvar_aluno($aluno){

        $sql = "INSERT INTO `aluno` ='".$aluno->setNome()."','".$aluno->setCpf()."','".$aluno->setEmail()."','".$aluno->setMat()."','".$aluno->setCurso()."','".$aluno->setFacul()."'";
        $repositorio = new RepositorioImpl();
        $this->status = $repositorio->inserir($sql);
        mensagens::ms_salvar($this->status);
    }
}
