<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Experimento
 *
 * @author sandio
 */
class Experimento {
    
    private $nomeExp;
    private $dataInicioExp;
    private $datafinalExp;
    private $qtdAnimalExp;
    private $qtdTratExp;
    private $dispTratExp;
    
    //Metodos Getts e setts
    
    //metodos do nome
    function getNomeExp(){
        return $this->nomeVid;
    }
    function setNomeExp($valor){
        $this->nomeVid = $valor;
    }
    
     //metodos do data inicio
    function getDataInicioExp(){
        return $this->dataInicioExp;
    }
    function setDataInicioExp($valor){
        $this->dataInicioExp = $valor;
    }
    
     //metodos do data final
    function getDatafinalExp(){
        return $this->datafinalExp;
    }
    function setDatafinalExp($valor){
        $this->datafinalExp = $valor;
    }
    
     //metodos do quantidade de animais 
    function getQtdAnimalExp(){
        return $this->qtdAnimalExp;
    }
    function setQtdAnimalExp($valor){
        $this->qtdAnimalExp = $valor;
    }
    
    //metodos do quantidade de Tratamento
    function getQtdTratExp(){
        return $this->qtdTratExp;
    }
    function setQtdTratExp($valor){
        $this->qtdTratExp = $valor;
    }
    
    //metodos do disponibilidade de Tratamento
    function getDispTratExp(){
        return $this->dispTratExp;
    }
    function setDispTratExp($valor){
        $this->dispTratExp = $valor;
    }
    
}
