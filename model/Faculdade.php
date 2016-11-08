<?php

/**
 * Description of Faculdade
 *
 * @author sandio
 */
class Faculdade {
    
    var $idFaculdade;
    var $nome_faculdade;
    var $campus;
    
    //Métodos getts e setts
    
    //id de faculdade 
    function getIdFaculdade(){
        return $this->idFaculdade;
    }
    function setIdFaculdade($valor){
        $this->idFaculdade = $valor;
    }
    
    //Nome da faculdade 
    function getNome_faculdade(){
        return $this->nome_faculdade;
    }
    function setNomeFaculdade($valor){
        $this->nome_faculdade = $valor;
    }
    
    //campus da faculdade
    function getCampus(){
        return $this->campus;
    }
    function seCampus($valor){
        $this->campus = $valor;
    }
}
