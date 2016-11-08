<?php

/**
 * Description of Curso
 *
 * @author sandio
 */
class Curso {
    
    var $id_curso;
    var $nome_curso;
    
    //Métodos getts e setts
    
    //id de curso
    function getId_Curso(){
        return $this->id_curso;
    }
    function setId_Curso($valor){
        $this->id_curso = $valor;
    }
    
    //nome do curso
    function getNome_Curso(){
        return $this->nome_curso;
    }
    function  setNome_Curso($valor){
        $this->nome_curso = $valor;
    }
}
