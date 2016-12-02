<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Meus Experimentos | Aluno</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../assets/css.css" rel="stylesheet" type="text/css">
    <link href="../assets/icon.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="../assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
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
            <a class="navbar-brand" href="experimentos.php">LABNUTRI - Laboratório de Nutrição</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">add_shopping_cart</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>4 sales made</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 22 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> deleted account</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">mode_edit</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> changed name</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 2 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> commented your post</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">cached</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> updated status</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>Settings updated</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> Yesterday
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
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
                <li>
                    <a href="painel.php">
                        <i class="material-icons">home</i>
                        <span>Principal</span>
                    </a>
                </li>
                <li class="active">
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
                        <li class="active">
                            <a href="experimentos.php" >
                                <span>Meus Experimentos</span>
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
                        <h3>Seus Experimentos</h3>
                        <small>Acompanhe os seus experimentos!</small>
                    </div>
                    <div class="body">
                        <div class="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="headingOne_2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2" href="#collapseOne_2" aria-expanded="true" aria-controls="collapseOne_2">
                                            Experimento <strong>9820121203</strong>
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
    </div>            
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