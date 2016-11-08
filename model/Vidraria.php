<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vidraria
 *
 * @author sandio
 */
class Vidraria {
    
    private $nomeVid;
    private $qtdVid;
    
    //Metodos Getts e setts
    
    //metodos do nome
    function getNomeVid(){
        return $this->nomeVid;
    }
    function setNomeVid($valor){
        $this->nomeVid = $valor;
    }
    
    //metodos do Quantidade
    function getQtdVid(){
        return $this->qtdVid;
    }
    function setQtdVid($valor){
        $this->qtdVid = $valor;
    }
    
}
