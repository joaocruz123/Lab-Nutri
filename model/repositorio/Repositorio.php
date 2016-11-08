<?php

/**
 *
 * @author Sandio
 */
interface Repositorio{
    
    function inserir($entidade);
    
    function remover($entidade);
    
    function alterar($entidade);
    
    function selecao($entidade);
            
    function listar($entidade);
}
