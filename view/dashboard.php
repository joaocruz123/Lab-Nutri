<?php

session_start();
if(isset($_SESSION['login'])):
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@<?php echo $_SESSION['login']; ?> | LabNutri</title>
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    <link href="../assets/css.css" rel="stylesheet" type="text/css">
    <link href="../assets/icon.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">
<?php include("../includes/adm/topo.php") ?>
<section class="content">
<div class="container-fluid">
            <div class="row">
                <?php include("../includes/adm/widgets.php") ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h3 class="box-title"><i class="material-icons">dashboard</i> Painel</h3>
                        </div>
                        <div class="body">
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="material-icons">done</i> Bem-Vindo Professor <?php echo $_SESSION['login']; ?></h4>
                                Você acaba de Logar no LabNutri.
                            </div>
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4>Acesse a ajuda clicando no icone <i class="material-icons">help</i></h4>
                                Se você está logando pela 1º vez acesse a ajuda para enter como o sistema funciona
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h3 class="box-title"><i class="material-icons">notifications_active</i> Notificação</h3>
                        </div>
                        <div class="body">
                            <div class="alert alert-danger">
                                O Experimento <strong><a href="validar.php">9820121203</a></strong> precisa de sua validação!
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php
    else:
        echo " <script type='text/javascript'>top.location.href='../erro.html';</script>";
    endif;
?>
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/plugins/node-waves/waves.js"></script>
<script src="../assets/js/admin.js"></script>
<script src="../assets/js/demo.js"></script>
</body>

</html>