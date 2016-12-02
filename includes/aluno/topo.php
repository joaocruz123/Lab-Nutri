<script>
    $(document).ready(function(){

        //active state
        $(function() {
            $('li a').click(function(e) {
                e.preventDefault();
                var $this = $(this);
                $this.closest('li').children('a').removeClass('active');
                $this.parent().addClass('active');

            });
        });
    });
</script>
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
                <li><a href="#"><i class="material-icons">account_circle</i></a></li>
                <li><a href="logout.php"><i class="material-icons">input</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Fim# Barra do Topo -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="img/user.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Professor @<?php echo($_SESSION['login']) ;?></div>
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
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU DE NAVEGAÇÃO</li>
                <li class="menuItem">
                    <a href="dashboard.php">
                        <i class="material-icons">home</i>
                        <span>Principal</span>
                    </a>
                </li>
                <li class="menuItem">
                    <a href="cad_aluno.php">
                        <i class="material-icons">mode_edit</i>
                        <span>Cadastrar Aluno</span>
                    </a>
                </li>
                <li class="menuItem">
                    <a href="#">
                        <i class="material-icons">remove_red_eye</i>
                        <span>Acompanhar Orientando</span>
                    </a>
                </li>
                <li class="menuItem">
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
                <li class="menuItem">
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

