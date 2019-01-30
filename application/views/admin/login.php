<!DOCTYPE html>
<html>
<head>
    <?= $config['config_ga'] ?>
    <title><?= $config['config_site_nome'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?= $config['config_autor'] ?>">
    <meta name="description" content="<?= $config['config_site_descricao'] ?>" />
    <meta name="keywords" content="<?= $config['config_keywords'] ?>" />
    <meta property="og:image" content="<?= base_url($config['config_og_image'])?>" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url($config['config_icon'])?>">
    <!-- C3 charts css -->
    <link href="<?= base_url('/vendor/admin/plugins/c3/c3.min.css')?>" rel="stylesheet" type="text/css"  />
    <!-- App css -->
    <link href="<?= base_url('/vendor/admin/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet')?>" />
    <link href="<?= base_url('/vendor/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css')?>" />
    <link href="<?= base_url('/vendor/admin/assets/css/core.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/components.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/pages.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/menu.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/admin/assets/css/responsive.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/vendor/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('/vendor/admin/assets/js/modernizr.min.js')?>"></script>
    <script src="<?= base_url('/vendor/admin/assets/js/jquery.min.js')?>"></script>
</head>
<body>
<!-- END wrapper -->
<!-- HOME -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class=" account-pages"><div class="text-center account-logo-box">
                            <h2 class="text-uppercase">
                                login
                            </h2>
                        </div>
                        <div class="account-content">
                            <form class="form-horizontal" action="<?= base_url('AdminLogin/auth')?>" method="post">

                                <div class="form-group m-b-25">
                                    <div class="col-xs-12">
                                        <label for="emailaddress">Email</label>
                                        <input class="form-control input-lg" type="email" id="usuario_email" name="usuario_email" placeholder="seuemail@email.com.br" required>
                                    </div>
                                </div>

                                <div class="form-group m-b-25">
                                    <div class="col-xs-12">
                                        <!--                                            <a href="page-recoverpw.html" class="text-muted pull-right font-14">Forgot your password?</a>-->
                                        <label for="password">Senha</label>
                                        <input name="usuario_senha" class="form-control input-lg" type="password" required="" id="password" placeholder="Sua senha">
                                    </div>
                                </div>
                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-xs-12">
                                        <button class="btn w-lg btn-rounded btn-lg waves-effect waves-light" type="submit" style="color: white;background-color: #32CE84">Entrar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end wrapper -->
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->
<?php require_once('footer.php')?>
<script>
    <?php if($this->session->flashdata('erro') == true):?>
    $.notify("Login ou Senha Incorretos!", "error");
    <?php endif;?>
    $('.type-it').typeIt({
        strings:[
            'orlando almeida,', 'desenvolvedor web'
        ],
        speed: 150,
    })
        .tiPause(1000)
        .tiDelete(3)
        .tiType('<strong>php</strong>')
</script>
</body>
</html>