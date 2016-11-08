<?php

require_once("../model/Aluno.php");
require_once("../dao/AlunoDao.php");

class AlunoBean {

    function execucao($acao){

        $aluno = new Aluno();
        $alunoDao = new AlunoDao();

        $aluno->setNome($_REQUEST["nome"]);
        $aluno->setCpf($_REQUEST["cpf"]);
        $aluno->setEmail($_REQUEST["email"]);
        $aluno->setMat($_REQUEST["matricula"]);
        $aluno->setCurso($_REQUEST["curso"]);
        $aluno->setFacul($_REQUEST["facul"]);

        switch ($acao) {
            case 'save':{
                $alunoDao->salvar_aluno($aluno);
            }break;
            case 'atualizar':{
                $alunoDao->atualizar_aluno($aluno);
            }break;
            case 'remover':{
                $alunoDao->romover_aluno($aluno);
            }break;
            default:
                break;
        }
    }
}
