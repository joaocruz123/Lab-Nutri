<?php

/**
 * Description of AdministradorBean
 *
 * @author Sandio
 */

require_once("../model/Administrador.php");
require_once("../dao/AdministradorDao.php");

$adminstrador = new Administrador();
$adminstradorDao = new AdministradorDao();

$adminstrador->setNome("sandio");

echo "<br/>Nome adminstrador : ".$adminstrador->getNome();

$adminstradorDao->salvar($adminstrador);

