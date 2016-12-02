<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Acompanhar |@<?php echo $_SESSION['login']; ?></title>

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
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Use o butão de busca</strong> para encontrar o(s) aluno(s) desejado(s).
            </div>
            <button type="button" class="btn bg-green waves-effect"><i class="material-icons">search</i> BUSCAR ORIENTADO</button>
            <div class="card">
                <div class="header">
                    <h3>Lista de Alunos Cadastrados</h3>
                    <small>Todos os Alunos Cadastrados no Sistema</small>
                </div>
                <div class="body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>USERNAME</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>Jellybean</td>
                            <td>@lajelly</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>Kikat</td>
                            <td>@lakitkat</td>
                        </tr>
                        </tbody>
                    </table>
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
