<?php
session_start();

require_once "classes/Conexao.class.php";
require_once "classes/Usuario.class.php";

if(isset($_GET['logout'])):
    if($_GET['logout'] == 'confirmar'):
        Login::deslogar();
    endif;
endif;

if(isset($_SESSION['logado'])):

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@<?php echo $_SESSION['administrador']; ?> | LabNutri</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link href="assets/css.css" rel="stylesheet" type="text/css">
    <link href="assets/icon.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">

<div class="overlay"></div>
<!-- Barra de Busca -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="Faça sua busca..">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #FIM# Barra de Busca-->
<!-- Barra do Topo -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="dashboard.php">LABNUTRI - Laboratório de Nutrição</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Icone de Busca /Ativa a Barra de Busca -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                
                <!--Botões de Minha conta e Sair-->
                <li><a href="#"><i class="material-icons">account_circle</i> Minha Conta</a></li>
                <li><a href="dashboard.php?logout=confirmar"><i class="material-icons">input</i> Sair</a></li>
                
            </ul>
        </div>
    </div>
</nav>
<!-- #Fim# Barra do Topo -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Informações do Usuario -->
        <div class="user-info">
            <div class="image">
                <img src="img/user7-128x128.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Professor @<?php echo $_SESSION['administrador']; ?></div>
                <div class="email"></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">settings</i>Configurações</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="#"><i class="material-icons">info</i>Ajuda</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #Informações do Usuario -->
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
                    <a href="cad_aluno.php">
                        <i class="material-icons">mode_edit</i>
                        <span>Cadastrar Aluno</span>
                    </a>
                </li>
                <li >
                    <a href="#">
                        <i class="material-icons">remove_red_eye</i>
                        <span>Acompanhar Orientando</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">colorize</i>
                        <span>Experimentos</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="#" >
                                <span>Cadastrar Experimento</span>
                            </a>
                        </li>
                        <li>
                            <a href="validar.php" >
                                <span>Validar Experimento</span>
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
</section>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->

    <!-- #END# Right Sidebar -->
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
                                <h4><i class="icon fa fa-info"></i> Bem-Vindo Professor <?php echo $_SESSION['administrador']; ?></h4>
                                Você acaba de Logar no LabNutri.
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
    echo "Voce nao tem permissao de acesso. <a href=\"index.php\">Clique aqui para voltar</a>";
endif;
?>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="assets/plugins/node-waves/waves.js"></script>
<script src="assets/js/admin.js"></script>
<script src="assets/js/demo.js"></script>
</body>

</html>