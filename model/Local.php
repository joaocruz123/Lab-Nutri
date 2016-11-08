<?php
class Local {
    
    var $nome_local;
    var $descricao_local;
    var $data_criacao_local;
    
    //Métodos getts e setts
    
    //Nome do local
    function getNome_local(){
        return $this->nome_local;
    }
    function setNome_local($valor){
        $this->nome_local = $valor;
    }
    
    //descrição do local
    function getDescricao_local(){
        return $this->descricao_local;
    }
    function setDescricao_local($valor){
        $this->descricao_local = $valor;
    }
    
    //data de crição do local
    function getData_criacao_local(){
        return $this->data_criacao_local;
    }
    function setData_criacao_local($valor){
        $this->data_criacao_local = $valor;
    }
}
