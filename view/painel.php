<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Aluno | LabNutri</title>
    <link href="../assets/css.css" rel="stylesheet" type="text/css">
    <link href="../assets/icon.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-light-green">

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="Faça sua Busca..">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="painel.php">LABNUTRI - Laboratório de Nutrição</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <li><a href="#"><i class="material-icons">account_circle</i> Minha Conta</a></li>
                <li><a href="#"><i class="material-icons">input</i> Sair</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="../img/user.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aluno User</div>
                <div class="email">aluno.sis@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">settings</i>Configurações</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="index.php"><i class="material-icons">info</i>Ajuda</a></li>
                        <li><a href="index.php"><i class="material-icons">input</i>Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU DE NAVEGAÇÃO</li>
                <li class="active">
                    <a href="#">
                        <i class="material-icons">home</i>
                        <span>Principal</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">colorize</i>
                        <span>Experimentos</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="cad_experimento.php" >
                                <span>Cadastrar Experimento</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" >
                                <span>Consutar Experimento</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_up</i>
                        <span>Análises</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="#">Cadastrar Análise</a>
                        </li>
                        <li>
                            <a href="#">Acompanhar Análise</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">folder</i>
                        <span>Visualizar Manuais</span>
                    </a>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 <a href="javascript:void(0);">UFPA</a>.Todos os direitos Reservados.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->

    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h3 class="box-title"><i class="material-icons">dashboard</i> Painel</h3>
                        </div>
                        <div class="body">
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="material-icons">info</i> Bem-Vindo Aluno</h4>
                                Você acaba de Logar no LabNutri.
                            </div>
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="material-icons">info</i> Consulte os manuais</h4>
                                Para entender melhor o sistema consulte os manuais.<br/>
                                <a href="#"><strong>Click Aqui</strong></a>
                            </div>
                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="content">
                                    <div class="text">
                                        <h4>20</h4>
                                        <h5>EXPERIMENTOS CADASTRADOS</h5>
                                    </div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    </div>
                    <!-- /.box -->

                <!-- /.col -->

                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h3 class="box-title"><i class="material-icons">notifications_active</i> Notificação</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="body">
                            <div class="alert alert-danger">
                                O Experimento <strong><a href="#">9820121203</a></strong> precisa ser validaro pelo seu professor!
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
</section>

<!-- Jquery Core Js -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../assets/plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="../assets/js/admin.js"></script>

<!-- Demo Js -->
<script src="../assets/js/demo.js"></script>
</body>

</html>