<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Equipamento
 *
 * @author sandio
 */
class Equipamento {
    
    private $nomeEquip;
    private $descEquip;
    private $qtdEquip;
    private $statusEquip;
    
    
    //Metodos Getts e setts
    
    //metodos do nome
    function getNomeEquip(){
        return $this->nomeEquip;
    }
    function setNomeEquip($valor){
        $this->nomeEquip = $valor;
    }
    
    //metodos da descrição
    function getDescEquip(){
        return $this->descEquip;
    }
    function setDescEquip($valor){
        $this->descEquip = $valor;
    }
    
    //metodos da Quantidade
    function getQtdEquip(){
        return $this->qtdEquip;
    }
    function setQtdEquip($valor){
        $this->qtdEquip = $valor;
    }
    
    //metodos do equipamento
    function getStatusEquip(){
        return $this->statusEquip;
    }
    function setStatusEquip($valor){
        $this->statusEquip = $valor;
    }
    
}
