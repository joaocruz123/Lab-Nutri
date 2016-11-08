<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Analise
 *
 * @author sandio
 */
class Analise {
    
    private $tipoAnali;
    private $descAnali;
    private $dataRealAnali;
    
    //Metodos Getts e setts
    
    //metodos do tipo de analise
    function getTipoAnali(){
        return $this->tipoAnali;
    }
    function setTipoAnali($valor){
        $this->tipoAnali = $valor;
    }
    
    //metodos do data da analise
    function getDataRealAnali(){
        return $this->dataRealAnali;
    }
    function setDataRealAnalii($valor){
        $this->dataRealAnali= $valor;
    }
    
    //metodos do tipo de analise
    function getDescAnali(){
        return $this->descAnali;
    }
    function setDescAnali($valor){
        $this->descAnali= $valor;
    }
}
