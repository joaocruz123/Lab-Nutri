<?php

/**
 * Description of mensagens
 *
 * @author sandio
 */
class mensagens {
    
    static function ms_salvar($resposta){
        if($resposta){
	   echo " <script type='text/javascript'>alert('Dados inseridos com sucesso!');
	          top.location.href='../cad_aluno.php';</script>";
		}
	   else{
		  echo " <script type='text/javascript'>alert('Erro ao inserir dados');
                  top.location.href='../cad_aluno.php';</script>";
		}
	}
        
    static function ms_atualizar($resposta){
        if($resposta){
	   echo " <script type='text/javascript'>alert('Dados atualizados com sucesso!');
	          top.location.href='../index.php';</script>";
		}
	   else{
		  echo " <script type='text/javascript'>alert('Erro ao inserir dados');
                  top.location.href='../index.php';</script>";
		}
    }
    
    static function ms_remover($resposta){
        if($resposta){
	   echo " <script type='text/javascript'>alert('Dados removidos com sucesso!');
	          top.location.href='../index.php';</script>";
		}
	   else{
		  echo " <script type='text/javascript'>alert('Erro ao inserir dados');
                  top.location.href='../index.php';</script>";
		}
    }
}
