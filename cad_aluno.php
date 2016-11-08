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
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastro de Aluno |@<?php echo $_SESSION['administrador']; ?></title>

    <link href="assets/css.css" rel="stylesheet" type="text/css">
    <link href="assets/icon.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
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
            <a class="navbar-brand" href="cad_aluno.php">LABNUTRI - Laboratório de Nutrição</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <li><a href="#"><i class="material-icons">account_circle</i> Minha Conta</a></li>
                <li><a href="dashboard.php?logout=confirmar"><i class="material-icons">input</i> Sair</a></li>
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
                <img src="img/user7-128x128.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Professor @<?php echo($_SESSION['administrador']) ;?></div>
                <div class="email"></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">settings</i>Configurações</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="index.php"><i class="material-icons">info</i>Ajuda</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU DE NAVEGAÇÃO</li>
                <li >
                    <a href="dashboard.php">
                        <i class="material-icons">home</i>
                        <span>Principal</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
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
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->

    <!-- #END# Right Sidebar -->
</section>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="header">
                    <h3>Cadastro de Aluno</h3>
                    <small>Coloque os dados do aluno para cadastra-lo</small>
                </div>
                <div class="body">
                            <form class="form-horizontal" action="bean/AlunoBean.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nome do Aluno:</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nome" class="form-control" placeholder="Nome Completo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">CPF:</label>
                                    </div>
                                    <div class="col-lg-2 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="cpf" class="form-control number" maxlength="11" placeholder="Ex: 0186789452">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">E-mail:</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="email" class="form-control" placeholder="exemplo@exemplo.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Numero de Matricula:</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="matricula" class="form-control number" maxlength="12" placeholder="Ex: 123459876011">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Curso do Aluno:</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <select  name="curso" class="form-control show-tick">
                                            <option>Bacharel em Medicina Veterinária</option>
                                            <option>Bacharel em Zootecnia</option>
                                            <option>Pós-Graduação</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Faculdade do Aluno:</label>
                                    </div>
                                    <div class="col-lg-5 col-md-10 col-sm-8 col-xs-7">
                                        <select name="facul" class="form-control show-tick">
                                            <option>Universidade Federal do Pará - UFPA</option>
                                            <option>Instituto Federal do Pará - IFPA</option>
                                            <option>Faculdade de Castanhal - FCAT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" name="save" class="btn btn-primary m-t-15 waves-effect" value="CADASTRAR">
                                        <input type="reset" class="btn btn-danger m-t-15 waves-effect" value="LIMPAR">
                                        <input type="hidden" name="acao" value="save" />
                                    </div>
                                </div>
                            </form>
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