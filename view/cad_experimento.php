<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastro de Experimentos | Aluno</title>
    <link href="../assets/css.css" rel="stylesheet" type="text/css">
    <link href="../assets/icon.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
    <link href="../assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">
    <link href="../assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
    <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="../assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
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
                        <li class="active">
                            <a href="cad_experimento.php" >
                                <span>Cadastrar Experimento</span>
                            </a>
                        </li>
                        <li>
                            <a href="experimentos.php" >
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
                    <h3>Cadastro Experimento <i class="material-icons">create</i> </h3>
                    <small>Realize o cadastro do seu experimento preenchendo as informções abaixo</small>
                </div>
                <div class="body">
                    <form class="form-horizontal">
                        <div class="card">
                            <div class="header">
                                <label class="font-bold">PERIODO DE ATIVIDADE</label>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Em anos:</label>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Em meses:</label>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Em dias:</label>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="demo-masked-input">
                                        <div class="col-lg-1 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Data de Inicio:</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <label class="font-bold">DADOS DO EXPERIMENTO</label>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Numero de Projetos:</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="number">2</div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nome do Projeto:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control number" placeholder="Ex: Nome do meu Projeto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Descrição do Projeto:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control no-resize" maxlength="140" placeholder="Coloque uma descrição do seu projeto"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Qtd de Animais Usado:</label>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tipos de Animeis:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <select class="form-control show-tick">
                                            <option>Aves</option>
                                            <option>Mamiferos</option>
                                            <option>Peixes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Quantidade de Tratamentos:</label>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Forma do Tratamento:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <select class="form-control show-tick">
                                            <option>Misturada</option>
                                            <option>Unica</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <label class="font-bold">DADOS DOS ALUNOS</label>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Numero de Participantes:</label>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Matricula do(s) Participante(s):</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="number font-bold">212343456665</div>
                                        <div class="number font-bold">212343426759</div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nome do(s) Participante(s):</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="number font-bold">Lucas Lima Souza</div>
                                        <div class="number font-bold">Ranilson Silva</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Observações:</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" maxlength="140" placeholder="Coloque suas observações"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-5 col-xs-offset-3">
                                <button type="button" class="btn btn-primary m-t-20 waves-effect">CADASTRAR</button>
                                <button type="button" class="btn btn-danger m-t-20 waves-effect">CANCELAR</button>
                            </div>
                        </div>
                        <div class="row clearfix">

                        </div>
                    </form>

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

<!-- Bootstrap Colorpicker Js -->
<script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

<!-- Dropzone Plugin Js -->
<script src="../assets/plugins/dropzone/dropzone.js"></script>

<!-- Input Mask Plugin Js -->
<script src="../assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

<!-- Multi Select Plugin Js -->
<script src="../assets/plugins/multi-select/js/jquery.multi-select.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="../assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- noUISlider Plugin Js -->
<script src="../assets/plugins/nouislider/nouislider.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../assets/plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="../assets/js/admin.js"></script>
<script src="../assets/js/pages/forms/advanced-form-elements.js"></script>


<!-- Demo Js -->
<script src="../assets/js/demo.js"></script>
</body>

</html>