<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reagente
 *
 * @author sandio
 */
class Reagente {
    
    private $nomeReag;
    private $formalaReag;
    private $qtdReag;
    private $validadeReag;
    private $proprietarioReag;
    
    //Metodos Getts e setts
    
    //metodos do nome
    function getNomeReag(){
        return $this->nomeVid;
    }
    function setNomeReag($valor){
        $this->nomeVid = $valor;
    }
    
    //metodos do Formula
    function getFormalaReag(){
        return $this->formalaReag;
    }
    function setFormalaReag($valor){
        $this->formalaReag = $valor;
    }
    
    //metodos do Quantidade
    function getQtdReag(){
        return $this->qtdReag;
    }
    function setQtdReag($valor){
        $this->qtdReag = $valor;
    }
    
    //metodos do Validade
    function getValidadeReag(){
        return $this->validadeReag;
    }
    function setValidadeReag($valor){
        $this->validadeReag = $valor;
    }
    
    //metodos do proprietario
    function getProprietarioReag(){
        return $this->proprietarioReag;
    }
    function setProprietarioReag($valor){
        $this->proprietarioReag = $valor;
    }
}
