<?php
session_start();

require_once "classes/Conexao.class.php";
require_once "classes/Usuario.class.php";

if (isset($_POST['ok'])):

    $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

    $l = new Login;
    $l->setLogin($login);
    $l->setSenha($senha);

    if($l->logar()):
        header("Location: dashboard.php");
    else:
        header("Location: erro.html");
    endif;
endif;


if(isset($_SESSION['logado'])):
    header("Location: dashboard.php");
else:
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | LabNutri</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link href="assets/css.css" rel="stylesheet" type="text/css">
    <link href="assets/icon.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="#"><img src="img/logo_final.png"></a>
    </div>
    <div class="card">
        <div class="body">
            <form action="" method="POST">
                <div class="msg">Faça login para iniciar uma sessão</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="login" placeholder="Usuario" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <input class="btn btn-block bg-blue waves-effect" name="ok" value="Logar" type="submit">
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6 align-right">
                        <a href="#">Esqueceu sua Senha?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    endif;
?>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="assets/plugins/node-waves/waves.js"></script>
<script src="assets/plugins/jquery-validation/jquery.validate.js"></script>
<script src="assets/js/admin.js"></script>
<script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>