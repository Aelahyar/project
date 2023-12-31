<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Sistem Informasi Manajemen Administrasi">
        <meta name="author" content="Kecamatan Jogoroto Kabupaten Jombang">
        <title>Login | PROJECT</title>
        <link rel="apple-touch-icon" href="<?= base_url('assets/images/apple-touch-icon.png'); ?>">
        <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/css/bootstrap-extend.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/site.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/vendor/animsition/animsition.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/vendor/asscrollable/asScrollable.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/vendor/switchery/switchery.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/vendor/intro-js/introjs.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/vendor/slidepanel/slidePanel.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/vendor/flag-icon-css/flag-icon.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/examples/css/pages/login-v3.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/fonts/web-icons/web-icons.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('global/fonts/brand-icons/brand-icons.min.css'); ?>">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        <script src="<?= base_url('global/vendor/breakpoints/breakpoints.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/jquery/jquery-3.4.1.min.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/sweetalert.min.js'); ?>"></script>
        <script>Breakpoints();</script>
    </head>
    <body class="animsition page-login-v3 layout-full">
        <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
            <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
                <div class="panel">
                    <div class="panel-body">
                        <div class="brand">
                            <!-- <img class="brand-img" src="assets/images/icon.jpg" alt="..." style="width: 35%"> -->
                            <h2 class="brand-text font-size-18">Sistem Informasi Karyawan Perusahaan</h2>
                        </div>
                        <form method="post" action="<?php base_url('Login/login'); ?>">
                            <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control" id="txtu" name='username' autocomplete="off">
                                <label class="floating-label">ID / Username</label>
                            </div>
                            <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="password" class="form-control" id="txtp" name='password' autocomplete="off">
                                <label class="floating-label">Password</label>
                            </div>
                            <div class="form-group clearfix">
                                <a class="float-right" href="javascript:void(0)"></a>
                            </div>
                            <input type="submit" name='submit' class="btn btn-primary btn-block btn-lg mt-40" id="btnlogin"></input>
                        </form>
                    </div>
                </div>
                <footer class="page-copyright page-copyright-inverse">
                    <p> Collaboration with <a href="https://instagram.com/ael_ahyar"> <b><strong> Ael Ahyar</strong></b></a></p>
                    <p>©  <?php $tgl=date('Y'); echo $tgl; ?>. All RIGHT RESERVED.</p>
                    <div class="social">
                        <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                            <i class="icon bd-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                            <i class="icon bd-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                            <i class="icon bd-google-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Core  -->
        <script src="<?= base_url('global/vendor/babel-external-helpers/babel-external-helpers.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/popper-js/umd/popper.min.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/bootstrap/bootstrap.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/animsition/animsition.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/mousewheel/jquery.mousewheel.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/asscrollbar/jquery-asScrollbar.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/asscrollable/jquery-asScrollable.js'); ?>"></script>
        <script src="<?= base_url('global/vendor/screenfull/screenfull.js'); ?>"></script>
        <script src="<?= base_url('global/js/Component.js'); ?>"></script>
        <script src="<?= base_url('global/js/Base.js'); ?>"></script>
        <script src="<?= base_url('assets/js/Site.js'); ?>"></script>

        <script>
            (function(document, window, $){
                'use strict';
                var Site = window.Site;
                $(document).ready(function(){Site.run();});
            })(document, window, jQuery);
        </script>
    </body>
</html>