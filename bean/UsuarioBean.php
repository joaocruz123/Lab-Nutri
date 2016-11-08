<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuariobean
 *
 * @author sandio
 */

require_once('../model/Usuario.php');
require_once ('../controller/UsuarioController.php');

class UsuarioBean {
    //put your code here
    function loga($acao){
        
        switch ($acao) {
            case 'aut':
                
                $usuario = new Usuario();
                $usuarioContr = new UsuarioController();

                $usuario->setEmail($_REQUEST['email']);
                $usuario->setSenha($_REQUEST['senha']);
                
                $usuarioContr->validarSenha($_REQUEST['senha'],$_REQUEST['email']);
                
            break;
        
            default:
                break;
        }
    } 
}

$f = new UsuarioBean();
$f->loga($_REQUEST['acao']);