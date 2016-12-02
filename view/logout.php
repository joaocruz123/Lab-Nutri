<?php
//Entrando na sessão atual
    session_start();
//Destruindo os dados da sessão
    session_destroy();
//Direcionando para o index
    header("location:index.php");
 ?>
