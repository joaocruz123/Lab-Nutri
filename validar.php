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
    <title>Validar | Professor <?php echo utf8_encode($_SESSION['administrador']) ;?></title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link href="assets/css.css" rel="stylesheet" type="text/css">
    <link href="assets/icon.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">
<div class="overlay"></div>
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="Faça sua busca..">
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
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU DE NAVEGAÇÃO</li>
                <li class="active">
                    <a href="dashboard.php">
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
                            <a href="#" >
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
                        <h3>Validar Experimentos</h3>
                        <small>Experimentos que precisão de sua validação!</small>
                    </div>
                    <div class="body">
                        <div class="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="headingOne_2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2" href="#collapseOne_2" aria-expanded="true" aria-controls="collapseOne_2">
                                            Experimento <strong>9820121203</strong> <button type="button" class="btn btn-primary waves-effect">Validar</button>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne_2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_2">
                                    <div class="panel-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="bg-green">Número do Experimento</th>
                                                <th>9820121203</th>
                                                <th class="bg-green">Data de Inicio</th>
                                                <td>20/02/2016</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th class="bg-green">Nome do Experimento</th>
                                                <td>ASHDOASHDOASHDOIU</td>
                                                <td class="bg-green">Data do Termino</td>
                                                <td>12/11/2016</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-green">Numero do SIAPE do Orientador</th>
                                                <td>1712701</td>
                                                <td class="bg-green">Nome do Orientador</td>
                                                <td>Professor User</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-blue-grey">Tipos de Animais</th>
                                                <td>Bovinos</td>
                                                <td class="bg-blue-grey">Quantidade de animais</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-blue-grey">Quantidades de Tratamentos</th>
                                                <td>2</td>
                                                <td class="bg-blue-grey">Formas de Diponibilização</td>
                                                <td>Segregada</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-green">Aluno Participante nº 1</th>
                                                <td>201604677432</td>
                                                <td class="bg-blue-grey">Aluno Participante nº 2</td>
                                                <td>Não informado</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-green">Aluno Participante nº 3</th>
                                                <td>Não Informado</td>
                                                <td class="bg-blue-grey">Aluno Participante nº 4</td>
                                                <td>Não informado</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="button-demo js-modal-buttons">
                                            <button type="button" data-color="teal" class="btn bg-teal waves-effect">Descrição</button>
                                        </div>
                                        <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                                                        vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                                                        Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                                                        nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                                                        Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-demo js-modal-buttons">
                                            <button type="button" data-color="red" class="btn bg-red waves-effect">Observações</button>
                                        </div>
                                        <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                                                        vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                                                        Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                                                        nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                                                        Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="headingTwo_2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_2" href="#collapseTwo_2" aria-expanded="false"
                                           aria-controls="collapseTwo_2">
                                            Experimento <strong>9820124127</strong>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_2">
                                    <div class="panel-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="bg-green">Número do Experimento</th>
                                                <th>9820121203</th>
                                                <th class="bg-green">Data de Inicio</th>
                                                <td>20/02/2016</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th class="bg-green">Nome do Experimento</th>
                                                <td>ASHDOASHDOASHDOIU</td>
                                                <td class="bg-green">Data do Termino</td>
                                                <td>12/11/2016</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-green">Numero do SIAPE do Orientador</th>
                                                <td>1712701</td>
                                                <td class="bg-green">Nome do Orientador</td>
                                                <td>Professor User</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-blue-grey">Tipos de Animais</th>
                                                <td>Bovinos</td>
                                                <td class="bg-blue-grey">Quantidade de animais</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-blue-grey">Quantidades de Tratamentos</th>
                                                <td>2</td>
                                                <td class="bg-blue-grey">Formas de Diponibilização</td>
                                                <td>Segregada</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-green">Aluno Participante nº 1</th>
                                                <td>201604677432</td>
                                                <td class="bg-blue-grey">Aluno Participante nº 2</td>
                                                <td>Não informado</td>
                                            </tr>
                                            <tr>
                                                <th class="bg-green">Aluno Participante nº 3</th>
                                                <td>Não Informado</td>
                                                <td class="bg-blue-grey">Aluno Participante nº 4</td>
                                                <td>Não informado</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="button-demo js-modal-buttons">
                                            <button type="button" data-color="teal" class="btn bg-teal waves-effect">Descrição</button>
                                        </div>
                                        <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                                                        vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                                                        Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                                                        nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                                                        Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-demo js-modal-buttons">
                                            <button type="button" data-color="red" class="btn bg-red waves-effect">Observações</button>
                                        </div>
                                        <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                                                        vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                                                        Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                                                        nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                                                        Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<script src="assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>
<script src="assets/plugins/node-waves/waves.js"></script>
<script src="assets/js/admin.js"></script>
<script src="assets/js/pages/ui/modals.js"></script>
<script src="assets/js/demo.js"></script>
</body>

</html>