<?php

require_once("../model/Local.php");
require_once("../dao/LocalDao.php");

    class LocalBean{
        
        function execucao($acao){
            
            $local = new Local();
            $localDao = new LocalDao();
            
            $local->setNome_Local($_REQUEST["nome_local"]);
            $local->setDescricao_local($_REQUEST["descricao_local"]);

            switch ($acao) {
                case 'save':{
                    $localDao->salvar_local($local);       
                }break;
                case 'atualizar':{
                    $localDao->atualizar_local($local);       
                }break;
                case 'remover':{
                    $localDao->romover_local($local);       
                }break;
                default:
                    break;
            }
        }
    }
    
    $localBean = new LocalBean();
    $localBean->execucao($_REQUEST["acao"]);
    