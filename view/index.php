<?php

if($_POST) {
    include('../classes/Conexao.class.php');
    include('../classes/UsuarioDAO.class.php');

    $usuario = new UsuarioDAO();

    $login = addslashes($_POST['login']);
    $senha = addslashes($_POST['senha']);

    $user = $usuario->login($login, $senha);

    if($user == true) {
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location: dashboard.php');
    } else {
        header('location:index.php?erro=senha');
    }

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | LabNutri</title>
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    <link href="../assets/css.css" rel="stylesheet" type="text/css">
    <link href="../assets/icon.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="#"><img src="../img/logo_final.png"></a>
    </div>
    <?php

    if(isset($_GET['erro'])) {
        echo '<div class="alert alert-danger">Dados de login incorretos</div>';
    }

    if(isset($_GET['success'])) {
        echo '<div class="alert alert-success">Logout efetuado com sucesso</div>';
    }

    ?>
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
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="../assets/plugins/node-waves/waves.js"></script>
<script src="../assets/plugins/jquery-validation/jquery.validate.js"></script>
<script src="../assets/js/admin.js"></script>
<script src="../assets/js/pages/examples/sign-in.js"></script>
<script>
    setTimeout(function() {
        $('.alert').fadeOut();
    }, 3000);

</script>
</body>

</html>