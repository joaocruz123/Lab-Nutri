<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastro de Aluno |@<?php echo $_SESSION['login']; ?></title>

    <link href="../assets/css.css" rel="stylesheet" type="text/css">
    <link href="../assets/icon.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../assets/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
    <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="../assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">

<?php include("../includes/adm/topo.php") ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="header">
                    <h3>Cadastro de Aluno</h3>
                    <small>Coloque os dados do aluno para cadastra-lo</small>
                </div>
                <div class="body">
                            <form class="form-horizontal" action="#" method="post">
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
                                        <button type="submit" name="cadastrar" class="btn btn-primary m-t-15 waves-effect">CADASTRAR</button>
                                        <button type="reset" class="btn btn-danger m-t-15 waves-effect" >LIMPAR</button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/plugins/node-waves/waves.js"></script>
<script src="../assets/js/admin.js"></script>
<script src="../assets/js/demo.js"></script>
</body>

</html>