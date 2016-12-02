<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Validar | @<?php echo $_SESSION['login']; ?></title>
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
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>
<script src="../assets/plugins/node-waves/waves.js"></script>
<script src="../assets/js/admin.js"></script>
<script src="../assets/js/pages/ui/modals.js"></script>
<script src="../assets/js/demo.js"></script>
</body>

</html>