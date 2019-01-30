<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="<?= base_url()?>admin/" class="logo"><span><span><?= $config['config_site_nome']?></span></span> <i class="fa fa-user-circle-o"></i></a>
            <!-- Image logo -->
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Navbar-left -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button type="button" class="button-menu-mobile open-left waves-effect"><i class="dripicons-menu"></i>
                        </button>
                    </li>
                </ul>
                <!-- Right(Notification) -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-user-circle-o"></i>
                            <span><?= $_SESSION['__USUARIO_LOGADO__']['usuario_nome']?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li>
                                <a href="<?= site_url()?>"><i class="fa fa-globe"></i> Voltar ao site</a>
                            </li>
                            <li><a href="<?= base_url('AdminLogin/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul> <!-- end navbar-right -->
            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->
    <?php require_once('side-menu.php') ?>
</div>
